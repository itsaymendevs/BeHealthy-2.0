<?php

namespace App\Livewire\Website;

use App\Models\Plan;
use Livewire\Component;

class Plans extends Component
{


    public $plans;


    public function render()
    {


        // 1: dependencies
        $this->plans = Plan::whereHas('ranges')
            ->whereHas('bundles')
            ->whereHas('defaultCalendarRelation')
            ->where('isForWebsite', true)
            ->get();



        return view('livewire.website.plans');


    } // end function



} // end class


