<?php

namespace App\Livewire\Website;

use App\Traits\HelperTrait;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use stdClass;

class Plans extends Component
{

    use HelperTrait;




    // :: variables
    public $plans;






    public function getData()
    {


        // 1: makeRequest
        $response = $this->makeRequest('website/plans', []);





        // :: combine
        $combine = new stdClass();
        $combine->plans = $response?->plans;


        return $combine;




    } // end function








    // --------------------------------------------------------------------








    public function mount()
    {


        // :: forgetSession
        // Session::forget('customer');



        // 1: getData [plans]
        $response = $this->getData();


        $this->plans = $response?->plans ?? [];




    } // end function








    // --------------------------------------------------------------------








    public function render()
    {


        return view('livewire.website.plans');

    } // end function



} // end class
