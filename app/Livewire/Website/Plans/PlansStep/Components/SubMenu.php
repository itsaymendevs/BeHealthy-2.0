<?php

namespace App\Livewire\Website\Plans\PlansStep\Components;

use Livewire\Component;

class SubMenu extends Component
{



    // :: variables
    public $id;




    public function mount($id)
    {


        // :: params
        $this->id = $id;


    } // end function





    // --------------------------------------------------------------------








    public function render()
    {
        return view('livewire.website.plans.plans-step.components.sub-menu');


    } // end function


} // end class
