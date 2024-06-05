<?php

namespace App\Livewire\Website\Plans;

use App\Livewire\Forms\CustomerSubscriptionForm;
use App\Models\CustomerSubscription;
use App\Models\Lead;
use App\Traits\HelperTrait;
use App\Traits\PaymenntTrait;
use Illuminate\Http\Request;
use Livewire\Attributes\Layout;
use Livewire\Component;
use stdClass;


#[Layout('livewire.layouts.website-subscription')]
class PlansStepThree extends Component
{




    use HelperTrait;
    use PaymenntTrait;





    // :: variables
    public CustomerSubscriptionForm $instance;

    public $customer, $subscription;








    public function mount(Request $request)
    {






        // :: checkPaymentStatus
        $isPaymentDone = $this->checkCheckoutPaymennt($request?->checkout);




        // :: notPaid
        if (! $isPaymentDone) {


            return $this->redirect(route('website.plans'));


        } // end if











        // ------------------------------------------------
        // ------------------------------------------------









        // 1: getLead
        $lead = Lead::where('paymentReference', $request?->checkout)?->latest()?->first() ?? null;





        // :: found
        if ($lead) {





            // 1.2: checkIfPaymentDone
            if (! $lead->isPaymentDone) {



                // :: create instance
                $instance = new stdClass();
                $instance->id = $lead->id;



                // 1.2: updatePayment / restructure
                $response = $this->makeRequest('subscription/lead/convert', $instance);
                $lead = $response->lead;






                // :: invalid - error
                if (empty($lead))
                    return $this->redirect(route('website.plans'));







                // ------------------------------------------
                // ------------------------------------------






                // 3.1: regular - existing
                if (! $lead->isExistingCustomer)
                    $response = $this->makeRequest('subscription/customer/store', $lead);
                else
                    $response = $this->makeRequest('subscription/customer/existing/store', $lead);








                // ------------------------------------------
                // ------------------------------------------






                // 4: dependencies
                $this->subscription = CustomerSubscription::where('paymentReference', $lead->paymentReference)->latest()->first();
                $this->customer = $this->subscription->customer;








                // 1.2: isAlreadyConfirmed
            } else {


                return $this->redirect(route('website.plans'));


            } // end if









            // :: notFound
        } else {



            return $this->redirect(route('website.plans'));



        } // end if








    } // end function









    // --------------------------------------------------------------









    public function render()
    {

        return view('livewire.website.plans.plans-step-three');


    } // end function


} // end class
