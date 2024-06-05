<?php

use App\Livewire\Website\Home;
use App\Livewire\Website\Plans;
use App\Livewire\Website\Plans\PlansStepOne;
use App\Livewire\Website\Plans\PlansStepThree;
use App\Livewire\Website\Plans\PlansStepTwo;
use App\Livewire\Website\Plans\PlansStepTwoHook;
use App\Livewire\Website\Privacy;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;








// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// ** ----------------------------- GENERAL ---------------------------------








// :: linkStorage
Route::get('/storage-link', function () {

    $return = Artisan::call('storage:link');

});



// :: LivewireServerDeployment in subRoute
if (env('APP_ENV') == 'production') {

    Livewire::setUpdateRoute(function ($handle) {
        return Route::post(env('LIVEWIRE_UPDATE_PATH'), $handle);
    });


    Livewire::setScriptRoute(function ($handle) {
        return Route::get(env('LIVEWIRE_JAVASCRIPT_PATH'), $handle);
    });

} // end if










// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// ** ----------------------------- WEBSITE ---------------------------------








// 1: Home
Route::get('/', Home::class)->name('website.home');




// 2: contact-us
Route::get('/contact-us', Home::class)->name('website.contactUs');




// 3: blogs
Route::get('/blogs', Home::class)->name('website.blogs');






// 4: dietitian
Route::get('/dietitian', Home::class)->name('website.dietitian');










// 5: how-it-works
Route::get('/how-it-works', Home::class)->name('website.howItWorks');








// 6: privacy
Route::get('/privacy-policy', Privacy::class)->name('website.privacy');





// ---------------------------------
// ---------------------------------






// 6: plans
Route::get('/plans', Plans::class)->name('website.plans');






// 6.1: plans - personalize
Route::get('/plans/{id}/personalize', PlansStepOne::class)->name('website.plans.stepOne');




// 6.2: plans - checkout
Route::get('/plans/{id}/checkout', PlansStepTwo::class)->name('website.plans.stepTwo');





// 6.3: plans - invoice
Route::get('/plans/invoice', PlansStepThree::class)->name('website.plans.stepThree');


