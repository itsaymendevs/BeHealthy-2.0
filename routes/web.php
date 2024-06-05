<?php

use App\Livewire\Website\Blogs;
use App\Livewire\Website\Blogs\SingleBlog;
use App\Livewire\Website\Contact;
use App\Livewire\Website\Home;
use App\Livewire\Website\Menu;
use App\Livewire\Website\Plans;
use App\Livewire\Website\Plans\PlansStepOne;
use App\Livewire\Website\Plans\PlansStepThree;
use App\Livewire\Website\Plans\PlansStepTwo;
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






// ---------------------------------------------------------------------
// ---------------------------------------------------------------------






// 2: Menu
Route::get('/menu', Menu::class)->name('website.menu');







// ---------------------------------------------------------------------
// ---------------------------------------------------------------------






// 3: Blogs
Route::get('/blogs', Blogs::class)->name('website.blogs');



// 3.2: singleBlog
Route::get('/blogs/{id}', SingleBlog::class)->name('website.singleBlog');






// ---------------------------------------------------------------------
// ---------------------------------------------------------------------






// 4: contact
Route::get('/contact', Contact::class)->name('website.contact');









// ---------------------------------------------------------------------
// ---------------------------------------------------------------------







// 5: privacy
Route::get('/privacy-policy', Privacy::class)->name('website.privacy');








// ---------------------------------------------------------------------
// ---------------------------------------------------------------------






// 6: plans
Route::get('/plans', Plans::class)->name('website.plans');






// 6.1: plans - personalize
Route::get('/plans/{id}/personalize', PlansStepOne::class)->name('website.plans.stepOne');




// 6.2: plans - checkout
Route::get('/plans/{id}/checkout', PlansStepTwo::class)->name('website.plans.stepTwo');





// 6.3: plans - invoice
Route::get('/plans/invoice', PlansStepThree::class)->name('website.plans.stepThree');


