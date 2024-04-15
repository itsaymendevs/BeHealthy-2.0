<?php

namespace App\Livewire\Website\Plans\PlansStepOne\Components;

use App\Livewire\Forms\CustomerSubscriptionForm;
use App\Traits\HelperTrait;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\On;
use Livewire\Component;

class PlansStepOnePersonalInformation extends Component
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
        session('customer') && session('customer')->{'planDays'} ?
            $this->instance = session('customer') :
            $this->redirect(route('website.plans.stepOne', [$this->plan->id]), navigate: true);





    } // end function









    public function continue()
    {



        // :: continue


        // 3: makeSession
        Session::put('customer', $this->instance);




        dd(session('customer'));


        // :: redirectStepTwo
        return $this->redirect(route('website.plans.stepTwo', [$this->instance->planId]), navigate: true);





    } // end function

















    // --------------------------------------------------------------------








    public function render()
    {



        return view('livewire.website.plans.plans-step-one.components.plans-step-one-personal-information');


    } // end function



} // end class
