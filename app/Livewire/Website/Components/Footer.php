<?php

namespace App\Livewire\Website\Components;

use Livewire\Component;

class Footer extends Component
{


    // :: variables
    public $faqs = [];



    public function mount()
    {



        // 1: init
        $this->faqs = [
            "How do I get started with Be Healthy meal plan?" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, asperiores",

            "Can I customize my meal plan?" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, asperiores",

            "How can I manage the delivery days?" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, asperiores",

            "Can I freeze my account if I want to travel or something?" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, asperiores",

        ];

    } // end function






    // ---------------------------------------------------------------------






    public function render()
    {

        return view('livewire.website.components.footer');

    } // end function

} // end class
