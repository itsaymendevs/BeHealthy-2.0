<?php

namespace App\Livewire\Website;

use App\Models\Plan;
use App\Traits\HelperTrait;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use stdClass;

class Plans extends Component
{

    use HelperTrait;






    public function mount()
    {


        // :: forgetSession
        Session::forget('customer');


    } // end function








    // --------------------------------------------------------------------








    public function render()
    {





        // 1: dependencies
        $plans = Plan::whereHas('ranges')
            ->whereHas('bundles')
            ->whereHas('defaultCalendarRelation')
            ->where('isForWebsite', true)
            ->get();






        return view('livewire.website.plans', compact('plans'));


    } // end function



} // end class
