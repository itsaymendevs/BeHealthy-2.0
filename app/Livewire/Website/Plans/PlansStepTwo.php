<?php

namespace App\Livewire\Website\Plans;

use App\Livewire\Forms\CustomerSubscriptionForm;
use App\Livewire\Forms\PaymenntForm;
use App\Models\City;
use App\Models\CustomerSubscriptionSetting;
use App\Models\Plan;
use App\Models\PromoCode;
use App\Models\PromoCodePlan;
use App\Traits\HelperTrait;
use App\Traits\PaymenntTrait;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Component;
use stdClass;

#[Layout('livewire.layouts.website-subscription')]
class PlansStepTwo extends Component
{

    use HelperTrait;
    use PaymenntTrait;



    // :: variables
    public CustomerSubscriptionForm $instance;
    public PaymenntForm $payment;

    public $plan, $paymentMethod, $promoCodes;
    public $isCouponApplied = false, $isProcessing = false;








    public function mount($id)
    {



        // :: checkSession
        if (session('customer') && session('customer')->{'email'}) {

            $this->instance = session('customer');


        } else {

            return $this->redirect(route('website.plans.stepOne', [$id]), navigate: true);

        } // end if







        // :: extra - fixStartDate
        $this->instance->startDate = date('Y-m-d', strtotime(str_replace('/', '-', $this->instance->startDate)));







        // ---------------------------------------------
        // ---------------------------------------------







        // 1: getPlan
        $this->plan = Plan::find($id);








        // 2: getPromoCodes
        $planPromoCodes = PromoCodePlan::where('planId', $this->plan->id)
            ->get()?->pluck('promoCodeId')->toArray() ?? [];



        $this->promoCodes = PromoCode::where('isActive', true)
            ->whereIn('id', $planPromoCodes)
            ->whereColumn('currentUsage', '<', 'limit')
            ->get()
            ->pluck('code')
            ->toArray() ?? [];






        // 2.1: updatePaymentMethod
        $this->paymentMethod = CustomerSubscriptionSetting::all()->first()?->paymentMethod ?? null;


        $this->instance->paymentMethodId = $this->paymentMethod->id ?? null;










    } // end function
















    // --------------------------------------------------------------









    public function checkPromoCode()
    {



        // 1: checkPromoCode
        if (in_array($this->instance->promoCode, $this->promoCodes)) {




            // 1: getPromoCode
            $promoCode = PromoCode::where('code', $this->instance->promoCode)->first();




            // 1.2: byPercentage
            if ($promoCode->percentage) {


                $this->instance->promoCodeDiscountPrice = $this->instance->totalBundleRangePrice * ($promoCode->percentage / 100);


                // 1.2: byAmount
            } else {

                $this->instance->promoCodeDiscountPrice = $promoCode->cashAmount;

            } // end if









            // ---------------------------------------------
            // ---------------------------------------------









            // :: calculateTotalPrice
            $this->instance->totalCheckoutPrice = round(($this->instance->totalBundleRangePrice - $this->instance->promoCodeDiscountPrice) + $this->instance->bagPrice, 2);


            // :: validCoupon
            $this->isCouponApplied = true;




            // :: alert
            $this->makeAlert('success', 'Coupon Applied Successfully');






            // 1.2: invalidCoupon
        } else {




            // :: resetDiscount - totalCheckoutPrice
            $this->instance->promoCodeDiscountPrice = null;
            $this->instance->totalCheckoutPrice = $this->instance->totalPrice;



            // :: invalidCoupon
            $this->isCouponApplied = false;


        } // end if





    } // end function















    // --------------------------------------------------------------------










    public function initPayment()
    {



        // :: checkProcessing [ValidationForSubmit]
        if ($this->isProcessing == false) {






            $this->isProcessing = true;





            // 1: PAYMENNT

            if ($this->paymentMethod->name == 'Paymennt') {



                // 2: storeLead
                $this->continue('lead');



                // 3: makeCheckoutPaymennt
                $this->makeCheckoutPaymennt($this->instance, $this->payment, $this->paymentMethod);


            } // end if - PAYMENNT








        } // end if - processing







    } // end function





















    // --------------------------------------------------------------------






    public function continue($type = 'customer')
    {




        // 1: re-format instance ..
        // :: leave blank to continue





        // 1.2: deliveryDays
        $fixedDeliveryDays = [];


        foreach ($this->instance?->deliveryDays ?? [] as $deliveryDay) {

            $fixedDeliveryDays[$deliveryDay] = true;

        } // end loop




        $this->instance->deliveryDays = $fixedDeliveryDays ?? [];












        // ----------------------------------------
        // ----------------------------------------




        // :: continue






        // 2: makeSession
        Session::put('customer', $this->instance);





        // A: regular
        if ($type == 'customer') {





            // 2.1: makeRequest
            if ($this->instance->isExistingCustomer) {



                // :: existing
                $response = $this->makeRequest('subscription/customer/existing/store', $this->instance);




            } else {


                // :: regular
                $response = $this->makeRequest('subscription/customer/store', $this->instance);

            } // end if







            // :: redirectToCheckout
            return $this->redirect(route('website.plans.stepThree'), navigate: true);







            // ------------------------------------------------
            // ------------------------------------------------
            // ------------------------------------------------
            // ------------------------------------------------







            // B: lead
        } elseif ($type == 'lead') {



            // :: makeRequest - getLead
            $response = $this->makeRequest('subscription/lead/store', $this->instance);



        } // end if









    } // end function









    // --------------------------------------------------------------------








    public function render()
    {


        // 1: dependencies
        $cities = City::all();




        return view('livewire.website.plans.plans-step-two', compact('cities'));


    } // end function



} // end class
