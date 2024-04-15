<?php

namespace App\Livewire\Website;

use App\Traits\HelperTrait;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use stdClass;

class Home extends Component
{


    use HelperTrait;




    // :: variables
    public $plans, $sampleMeals;






    public function getData()
    {


        // 1: makeRequest
        $response = $this->makeRequest('website/plans', []);
        $secondResponse = $this->makeRequest('website/sample-meals', []);








        // ----------------------------
        // ----------------------------






        // 2: handleParams



        // 2.1: plans - sampleMeals
        $this->plans = $response?->plans ?? [];
        $this->sampleMeals = $secondResponse?->sampleMeals ?? [];






    } // end function








    // --------------------------------------------------------------------








    public function mount()
    {


        // :: forgetSession
        // Session::forget('customer');



        // 1: getData
        $this->getData();



    } // end function








    // --------------------------------------------------------------------








    public function render()
    {


        return view('livewire.website.home');

    } // end function



} // end class
