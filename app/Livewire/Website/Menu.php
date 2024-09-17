<?php

namespace App\Livewire\Website;

use App\Models\Meal;
use App\Models\MealMenu;
use App\Models\MealTag;
use App\Models\Tag;
use App\Models\Menu as MenuModel;
use Livewire\Component;

class Menu extends Component
{

    // :: variables
    public $tags, $searchTag;



    public function mount()
    {


        // 1: getTags
        $this->tags = Tag::has('meals')?->get();


    } // end function






    // -------------------------------------------------------------------------





    public function render()
    {



        // 1: mealsByTag
        $mealsByTag = MealTag::where('tagId', $this->searchTag)?->pluck('mealId')?->toArray() ?? [];



        // 1.2: mealsByMenu
        $menu = MenuModel::where('nameURL', 'dining')?->first();
        $mealsByMenu = MealMenu::where('menuId', $menu->id)?->pluck('mealId')?->toArray() ?? [];





        // ----------------------------------------------------
        // ----------------------------------------------------




        // 2: getMeals
        if ($this->searchTag) {

            $diningMeals = Meal::whereIn('id', $mealsByTag)?->whereIn('id', $mealsByMenu)->get();

        } else {

            $diningMeals = Meal::whereIn('id', $mealsByMenu)->get();

        } // end if




        return view('livewire.website.menu', compact('diningMeals'));


    } // end function





} // end class
