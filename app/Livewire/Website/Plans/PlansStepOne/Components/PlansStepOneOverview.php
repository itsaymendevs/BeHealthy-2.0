<?php

namespace App\Livewire\Website\Plans\PlansStepOne\Components;

use App\Models\MealType;
use App\Models\MenuCalendar;
use App\Models\MenuCalendarPlan;
use App\Models\MenuCalendarScheduleMeal;
use App\Models\Type;
use App\Traits\HelperTrait;
use Livewire\Component;

class PlansStepOneOverview extends Component
{



    use HelperTrait;




    // :: variables
    public $plan, $sampleMeals;






    public function mount($plan)
    {


        // :: params
        $this->plan = $plan;







        // ------------------------------------
        // ------------------------------------






        // 1: sampleMeals




        // 1.2: mealTypes
        $types = Type::whereIn('name', ['Recipe'])->get()?->pluck('id')?->toArray();
        $mealTypes = MealType::whereIn('typeId', $types)->get()?->pluck('id')?->toArray();





        // 1.3: getPlanCalendar
        $planCalendar = MenuCalendarPlan::where('planId', $this->plan->id)
            ->where('isDefault', true)->first();








        // 1.4: sampleMeals
        $this->sampleMeals = MenuCalendarScheduleMeal::with('meal')
            ->whereNotNull('mealId')
            ->whereIn('mealTypeId', $mealTypes)
            ->where('scheduleDate', '2024-04-15')
            ->whereIn('menuCalendarScheduleId', $planCalendar->calendar?->schedules?->pluck('id')->toArray() ?? [])
            ->take(12)->get();







    } // end function








    // --------------------------------------------------------------------






    public function render()
    {


        return view('livewire.website.plans.plans-step-one.components.plans-step-one-overview');


    } // end function

} // end class
