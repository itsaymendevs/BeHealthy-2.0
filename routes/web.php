<?php

use App\Http\Controllers\MailController;
use App\Livewire\Portals\Customer\CustomerLogin;
use App\Livewire\Portals\Customer\CustomerProfile;
use App\Livewire\Website\Blogs;
use App\Livewire\Website\Home;
use App\Livewire\Website\Menu;
use App\Livewire\Website\Plans;
use App\Livewire\Website\Plans\PlansCart;
use App\Livewire\Website\Plans\PlansCheckout;
use App\Livewire\Website\Plans\PlansCustomization;
use App\Livewire\Website\Plans\PlansInvoice;
use App\Livewire\Website\Plans\SinglePlan;
use App\Livewire\Website\PrivacyPolicy;
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
// Route::get('/', Home::class)->name('website.home');






// ---------------------------------------------------------------------





// 2: Menu
// Route::get('/menu', Menu::class)->name('website.menu');









// ---------------------------------------------------------------------




// 5: privacy
// Route::get('/privacy-policy', Privacy::class)->name('website.privacy');



































// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// ** ------------------------------ PLANS ----------------------------------






// 1: plans
// Route::get('/plans', Plans::class)->name('website.plans');











// ---------------------------------------------------------------------------








// 2: renew - invoice
// Route::get('/plans/invoice', PlansInvoice::class)->name('website.plans.invoice');
// Route::get('/plans/{token}', Plans::class)->name('website.plansWithToken');







// ---------------------------------------------------------------------------







// 3: singlePlan
// Route::get('/plans/{name}/details', SinglePlan::class)->name('website.plans.details');







// ---------------------------------------------------------------------------









// 4.5: plans - checkout
// Route::get('/plans/{name}/checkout', PlansCheckout::class)->name('website.plans.checkout');
































// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// ** ---------------------------- POLICY -------------------------------- **





// 1: blogs
// Route::get('/privacy-policy', PrivacyPolicy::class)->name('website.privacy');








