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
            "How do I get started with Be Healthy meal plan?" => "Start your healthy journey by visiting our meal plan website: select your target, choose your calories and meal count, mention any food allergies or dislikes, and pick your start date. Once your order is confirmed, our customer service will contact you to confirm details and guide you through your meal plan",

            "Can I customize my meal plan?" => "Yes! you can customize your meal plan based on the calories and macros you need",

            "On which days do you provide delivery?" => "We provide all deliveries on Sundays and Fridays",

            "Is it possible to reheat my meals?" => "All our meals include microwave heating instructions. If you prefer to use an oven, simply transfer the contents to an oven-safe dish after removing the packaging. Heat until thoroughly piping hot.",

        ];

    } // end function






    // ---------------------------------------------------------------------






    public function render()
    {

        return view('livewire.website.components.footer');

    } // end function

} // end class
