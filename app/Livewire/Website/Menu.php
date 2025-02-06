<?php

namespace App\Livewire\Website;

use App\Models\Cuisine;
use App\Models\Diet;
use App\Models\Type;
use Livewire\Component;
use App\Models\Meal;
use App\Models\MealMenu;
use App\Models\MealTag;
use App\Models\Tag;
use App\Models\Menu as MenuModel;

class Menu extends Component
{


    // :: variables
    public $menuMealsOG = [], $menuMeals = [];
    public $searchCuisine, $searchDiet, $searchType;


    // :: dependencies
    public $cuisines, $diets, $mealTypes;




    public function mount()
    {



        // 1: mealsByMenu
        $menu = MenuModel::where('nameURL', 'dining')?->first();
        $mealsByMenu = MealMenu::where('menuId', $menu->id)?->pluck('mealId')?->toArray() ?? [];



        // 1.2: getMeals
        $this->menuMealsOG = Meal::whereIn('id', $mealsByMenu)->get();




        // ----------------------------------------------------
        // ----------------------------------------------------




        // 2: dependencies
        $this->diets = Diet::all();
        $this->cuisines = Cuisine::all();
        $this->mealTypes = Type::whereIn('name', ['Recipe', 'Snack', 'Side', 'Drink'])?->get();






    } // end function







    // ---------------------------------------------------------------------








    public function render()
    {





        // 1: filters
        $this->menuMeals = $this->menuMealsOG->filter(function ($item) {


            // :: Filters
            $toReturn = true;



            // 1: cuisine
            $this->searchCuisine ? $item?->cuisineId != $this->searchCuisine ? $toReturn = false : null : null;


            // 2: diet
            $this->searchDiet ? $item?->dietId != $this->searchDiet ? $toReturn = false : null : null;


            // 3: mealType
            $this->searchType ? $item?->typeId != $this->searchType ? $toReturn = false : null : null;




            return $toReturn;

        });










        return view('livewire.website.menu');


    } // end function





} // end class
