<?php

namespace App\Livewire\Website\Home;

use App\Livewire\Forms\TrainerForm;
use App\Traits\HelperTrait;
use Livewire\Component;

class Trainer extends Component
{


    use HelperTrait;

    public TrainerForm $instance;




    public function store()
    {




        // :: alert
        $this->makeAlert('success', 'Thanks, Your booking has been submitted');



    } // end function








    // ----------------------------------------------------------------------





    public function render()
    {

        return view('livewire.website.home.trainer');


    } // end function





} // end class
