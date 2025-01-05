<?php

namespace App\Livewire\Website\Home\Components;

use App\Models\Plan;
use Livewire\Component;

class HomePlans extends Component
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



        return view('livewire.website.home.components.home-plans');


    } // end function



} // end class


