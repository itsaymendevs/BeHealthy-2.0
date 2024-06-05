<?php

namespace App\Livewire\Website\Plans\PlansStepOne\Components;

use App\Livewire\Forms\CustomerSubscriptionForm;
use App\Models\Bag;
use App\Models\Customer;
use App\Traits\HelperTrait;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\On;
use Livewire\Component;

class PlansStepOneExistingPersonalInformation extends Component
{


    use HelperTrait;



    // :: variables
    public CustomerSubscriptionForm $instance;
    public $plan;





    public function mount($plan)
    {

        // :: params
        $this->plan = $plan;


    } // end function








    // --------------------------------------------------------------------










    #[On('personalInformationStep')]
    public function remount()
    {




        // :: checkSession
        if (session('customer') && session('customer')->{'planDays'}) {

            $this->instance = session('customer');


        } else {

            return $this->redirect(route('website.plans.stepOne', [$this->plan->id]), navigate: true);

        } // end if




    } // end function










    // --------------------------------------------------------------------












    public function continue()
    {



        // 1: checkCustomer
        $customer = Customer::where('email', $this->instance->email)->first();





        // 1.2: continue
        if ($customer && Hash::check($this->instance->password, $customer->password)) {




            // :: check hasUpcomingSubscription
            if ($customer->hasUpcomingSubscription()) {


                // :: halt
                $this->makeAlert('info', 'Account already have an upcoming subscription');
                return false;


            } // end if









            // ----------------------------------------------
            // ----------------------------------------------







            // 1.3: flag - getBasicInformation
            $this->instance->isExistingCustomer = true;


            $this->instance->firstName = $customer->firstName;
            $this->instance->lastName = $customer->lastName;
            $this->instance->email = $customer->email;
            $this->instance->phone = $customer->phone;
            $this->instance->whatsapp = $customer->whatsapp;



            // 1.4: getCityId - forPaymentOnly
            $this->instance->cityId = $customer?->latestAddress()?->cityId ?? null;
            $this->instance->locationAddress = $customer?->latestAddress()?->locationAddress ?? null;





            // 1.4: update startDate
            $this->instance->startDate = $customer?->latestSubscription()?->untilDate ?
                date('Y-m-d', strtotime($customer?->latestSubscription()?->untilDate . ' +1 day')) : null;




            // 1.2: incorrect
        } else {





            // :: makeAlert
            $this->makeAlert('info', 'Invalid Email or Password');
            return false;



        } // end if










        // ----------------------------------
        // ----------------------------------












        // 2: appendMissingInformation




        // 2.2: bag
        $bag = Bag::whereIn('name', ['Cool Bag', 'Cooler Bag'])->first();


        $this->instance->bag = $bag->name;
        $this->instance->bagImageFile = $bag->imageFile;
        $this->instance->bagPrice = $bag->price;










        // 2.3: calculateTotalPrice
        $this->instance->totalPrice = $this->instance->totalBundleRangePrice + $this->instance->bagPrice;
        $this->instance->totalCheckoutPrice = $this->instance->totalBundleRangePrice + $this->instance->bagPrice;











        // ----------------------------------
        // ----------------------------------







        // :: continue




        // 3: makeSession
        Session::put('customer', $this->instance);







        // :: redirectStepTwo
        return $this->redirect(route('website.plans.stepTwo', [$this->instance->planId]), navigate: false);





    } // end function

















    // --------------------------------------------------------------------








    public function render()
    {



        return view('livewire.website.plans.plans-step-one.components.plans-step-one-existing-personal-information');


    } // end function



} // end class
