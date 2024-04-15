<?php

namespace App\Livewire\Website\Plans\PlansStepOne\Components;

use Livewire\Component;

class PlansStepOneOverview extends Component
{



    // :: variables
    public $plan;




    public function mount($plan)
    {

        // :: params
        $this->plan = $plan;


    } // end function








    // --------------------------------------------------------------------






    public function render()
    {


        return view('livewire.website.plans.plans-step-one.components.plans-step-one-overview');


    } // end function

} // end class
