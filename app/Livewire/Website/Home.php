<?php

namespace App\Livewire\Website;

use App\Models\MealType;
use App\Models\MenuCalendarScheduleMeal;
use App\Models\Plan;
use App\Models\Type;
use App\Traits\HelperTrait;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use stdClass;

class Home extends Component
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
        $plans = $plans = Plan::whereHas('ranges')
            ->whereHas('bundles')
            ->whereHas('defaultCalendarRelation')
            ->where('isForWebsite', true)
            ->get();








        // ------------------------------------
        // ------------------------------------






        // 2: sampleMeals




        // 2.1: mealTypes
        $types = Type::whereIn('name', ['Recipe'])->get()?->pluck('id')?->toArray();
        $mealTypes = MealType::whereIn('typeId', $types)->get()?->pluck('id')?->toArray();






        // 2.2: sampleMeals
        $sampleMeals = MenuCalendarScheduleMeal::with('meal')
            ->whereNotNull('mealId')
            ->whereIn('mealTypeId', $mealTypes)
            ->where('scheduleDate', $this->getCurrentDate())
            ->take(12)->get();





        return view('livewire.website.home', compact('sampleMeals', 'plans'));




    } // end function



} // end class
