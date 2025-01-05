<?php

namespace App\Livewire\Website;

use Livewire\Component;
use App\Models\Meal;
use App\Models\MealMenu;
use App\Models\MealTag;
use App\Models\Tag;
use App\Models\Menu as MenuModel;

class Menu extends Component
{





    public function render()
    {



        // 1: mealsByMenu
        $menu = MenuModel::where('nameURL', 'dining')?->first();
        $mealsByMenu = MealMenu::where('menuId', $menu->id)?->pluck('mealId')?->toArray() ?? [];





        // ----------------------------------------------------
        // ----------------------------------------------------




        // 2: getMeals
        $menuMeals = Meal::whereIn('id', $mealsByMenu)->get();





        return view('livewire.website.menu', compact('menuMeals'));


    } // end function





} // end class
