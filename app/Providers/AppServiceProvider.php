<?php

namespace App\Providers;

use App\Traits\HelperTrait;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{


    use HelperTrait;



    public function register() : void
    {


    } // end function






    // -------------------------------------------------------------------




    public function boot() : void
    {



        // 1: storagePath
        View::share('storagePath', env('APP_STORAGE'));





        // 1.2: todayDate - tmwDate
        View::share('globalTodayDate', $this->getCurrentDate());
        View::share('globalTmwDate', $this->getTmwDate());





        // 1.3: globalCounter
        View::share('globalSNCounter', 1);






    } // end function



} // end provider



