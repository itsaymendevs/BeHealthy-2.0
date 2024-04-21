<?php

namespace App\Livewire\Website\Plans;

use App\Livewire\Forms\CustomerSubscriptionForm;
use App\Models\Plan;
use App\Traits\HelperTrait;
use Livewire\Component;

class PlansStepThree extends Component
{




    use HelperTrait;



    // :: variables
    public CustomerSubscriptionForm $instance;

    public $plan;








    public function mount()
    {



        // :: checkSession
        session('customer') && session('customer')->{'totalCheckoutPrice'} ?
            $this->instance = session('customer') :
            $this->redirect(route('website.plans'), navigate: true);






        // :: removeEmailForValidation
        $this->instance->email = null;
        session('customer', $this->instance);










        // ---------------------------------------------
        // ---------------------------------------------






        // 1: getPlan
        $this->plan = Plan::find($this->instance->planId);













    } // end function









    // --------------------------------------------------------------









    public function render()
    {

        return view('livewire.website.plans.plans-step-three');


    } // end function


} // end class
