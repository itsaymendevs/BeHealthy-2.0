<?php

namespace App\Livewire\Website\Home\Components;

use Livewire\Component;

use App\Models\Meal;
use App\Models\MealMenu;
use App\Models\MealTag;
use App\Models\Tag;
use App\Models\Menu as MenuModel;


class HomeMenu extends Component
{



    public function render()
    {



        // 1: mealsByMenu
        $menu = MenuModel::where('nameURL', 'dining')?->first();
        $mealsByMenu = MealMenu::where('menuId', $menu->id)?->pluck('mealId')?->toArray() ?? [];





        // ----------------------------------------------------
        // ----------------------------------------------------




        // 2: getMeals
        $menuMeals = Meal::whereIn('id', $mealsByMenu)->take(8)?->get();





        return view('livewire.website.home.components.home-menu', compact('menuMeals'));


    } // end function





} // end class
