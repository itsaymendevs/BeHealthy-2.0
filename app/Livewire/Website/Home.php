<?php

namespace App\Livewire\Website;

use App\Models\Meal;
use App\Models\MealMenu;
use App\Models\MealType;
use App\Models\Menu;
use App\Models\MenuCalendarScheduleMeal;
use App\Models\Plan;
use App\Models\Type;
use App\Traits\HelperTrait;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

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



        // 1.2: sampleMeals
        $menu = Menu::where('nameURL', 'dining')?->first();
        $mealsInArray = MealMenu::where('menuId', $menu->id)?->pluck('mealId')?->toArray() ?? [];


        $diningMeals = Meal::whereIn('id', $mealsInArray)?->get();





        return view('livewire.website.home', compact('sampleMeals', 'plans', 'diningMeals'));




    } // end function



} // end class
