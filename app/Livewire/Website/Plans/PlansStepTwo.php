<?php

namespace App\Livewire\Website\Plans;

use App\Livewire\Forms\CustomerSubscriptionForm;
use App\Traits\HelperTrait;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use stdClass;

class PlansStepTwo extends Component
{





    use HelperTrait;




    // :: variables
    public CustomerSubscriptionForm $instance;
    public $plan, $plans, $planBundles, $bundleRanges, $bundleDays;
    public $cities, $districts, $timings;








    public function getData($id)
    {


        // :: create instance
        $instance = new stdClass();
        $instance->id = $id;





        // 1: makeRequest
        $response = $this->makeRequest('website/plans', $instance);
        $secondResponse = $this->makeRequest('website/plans/single', $instance);




        // 1.2: helpers
        $helperResponse = $this->makeRequest('website/helpers/location', $instance);







        // ----------------------------
        // ----------------------------






        // 2: handleParams




        // 2: plans
        $this->plans = $response?->plans ?? [];




        // 2.1: plan - bundles - excludes - minimumDeliveryDays
        $this->plan = $secondResponse?->plan ?? [];
        $this->planBundles = $secondResponse?->plan?->bundles ?? [];







        // 2.2: cities - districts - timings
        $this->cities = $helperResponse?->cities ?? [];
        $this->districts = $helperResponse?->districts ?? [];
        $this->timings = $helperResponse?->timings ?? [];







        // ----------------------------
        // ----------------------------







        // 3: update instance



        // 3.1: plan
        $this->instance->planId = $this->plan->id;




    } // end function








    // --------------------------------------------------------------------








    public function mount($id)
    {



        // :: checkSession
        session('customer') && session('customer')->{'email'} ?
            $this->instance = session('customer') :
            $this->redirect(route('website.plans.stepOne', [$id]), navigate: true);





        // 1: getData
        $this->getData($id);



    } // end function








    // --------------------------------------------------------------------











    public function continue()
    {



        dd($this->instance);



        // 1: checkDeliveryDays



        // 1.2: check - deliveryDays
        if (count($this->instance->deliveryDays ?? []) < $this->minimumDeliveryDays) {

            $this->makeAlert('info', "Please select at least {$this->minimumDeliveryDays} delivery days");

            return false;

        } // end if










        // 2: startDate



        // 2.2: check - startDate
        if (empty($this->instance->startDate)) {

            $this->makeAlert('info', "Please select starting date");

            return false;

        } // end if







        // ------------------------------------
        // ------------------------------------








        // :: continue


        // 3: makeSession
        Session::put('customer', $this->instance);












    } // end function

















    // --------------------------------------------------------------------








    public function render()
    {


        // 1: dependencies



        return view('livewire.website.plans.plans-step-two');


    } // end function



} // end class
