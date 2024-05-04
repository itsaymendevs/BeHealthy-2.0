<?php

namespace App\Livewire\Website\Plans;

use App\Livewire\Forms\CustomerSubscriptionForm;
use App\Models\Customer;
use App\Models\Plan;
use App\Traits\HelperTrait;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class PlansStepThree extends Component
{




    use HelperTrait;



    // :: variables
    public CustomerSubscriptionForm $instance;

    public $plan, $customer;








    public function mount()
    {



        // :: checkSession
        if (session('customer') && session('customer')->{'totalCheckoutPrice'}) {

            $this->instance = session('customer');


        } else {

            return $this->redirect(route('website.plans'), navigate: true);

        } // end if









        // :: migrateSession
        Session::forget('customer');
        Session::put('customerInvoice', $this->instance);










        // ---------------------------------------------
        // ---------------------------------------------





        // 1: getPlan / customer
        $this->plan = Plan::find(session('customerInvoice')->{'planId'});
        $this->customer = Customer::where('email', session('customerInvoice')->{'email'})->first();













    } // end function









    // --------------------------------------------------------------









    public function render()
    {

        return view('livewire.website.plans.plans-step-three');


    } // end function


} // end class
