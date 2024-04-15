<?php

namespace App\Livewire\Website\Plans;

use App\Livewire\Forms\CustomerSubscriptionForm;
use App\Traits\HelperTrait;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use stdClass;

class PlansStepOne extends Component
{



    use HelperTrait;




    // :: variables
    public CustomerSubscriptionForm $instance;
    public $plan, $plans, $planBundles, $bundleRanges, $bundleDays;
    public $allergyLists = [], $excludeLists = [];
    public $requiredTypes = [];
    public $minimumDeliveryDays;









    public function getData($id)
    {


        // :: create instance
        $instance = new stdClass();
        $instance->id = $id;





        // 1: makeRequest
        $response = $this->makeRequest('website/plans', $instance);
        $secondResponse = $this->makeRequest('website/plans/single', $instance);







        // ----------------------------
        // ----------------------------






        // 2: handleParams




        // 2: plans
        $this->plans = $response?->plans ?? [];




        // 2.1: plan - bundles - excludes - minimumDeliveryDays
        $this->plan = $secondResponse?->plan ?? [];
        $this->planBundles = $secondResponse?->plan?->bundles ?? [];
        $this->allergyLists = $secondResponse?->allergyLists ?? [];
        $this->excludeLists = $secondResponse?->excludeLists ?? [];
        $this->minimumDeliveryDays = $secondResponse?->minimumDeliveryDays ?? 1;







        // ----------------------------
        // ----------------------------







        // 3: update instance



        // 3.1: plan
        $this->instance->planId = $this->plan->id;




    } // end function








    // --------------------------------------------------------------------








    public function mount($id)
    {



        // 1: getData
        $this->getData($id);



    } // end function













    // --------------------------------------------------------------------








    public function changePlan($id)
    {


        // :: 1: reset - updateParams
        $this->redirect(route('website.plans.stepOne', [$id]), navigate: true);



    } // end function











    // --------------------------------------------------------------------









    public function changeBundle()
    {



        // 1: getBundle
        $planBundle = collect($this->planBundles)->where('id', $this->instance->planBundleId)?->first();




        // 1.2: get requiredTypes
        foreach (collect($planBundle->types)->groupBy('typeId') ?? [] as $commonType => $bundleTypes)
            $this->requiredTypes[$commonType] = $bundleTypes->sum('quantity');






        // ---------------------------
        // ---------------------------





        // 2: reset - getRanges - refreshSelect
        $this->instance->bundleRangeId = null;
        $this->instance->planDays = null;

        $this->bundleRanges = $planBundle?->ranges;
        $this->bundleDays = $planBundle?->days ?? [];






        $this->refreshSelect('#planDays-select', 'bundle', 'days', $this->bundleDays, true);






    } // end function


















    // --------------------------------------------------------------------









    public function changeBundleRange()
    {


        $this->render();

    } // end function










    // --------------------------------------------------------------








    public function continue()
    {




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





        // 3.1: toggleCustomerInformation
        $this->dispatch('openModal', modal: '#personal-information');
        $this->dispatch('personalInformationStep');







    } // end function

















    // --------------------------------------------------------------------








    public function render()
    {


        // 1: dependencies
        $weekDays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];







        return view('livewire.website.plans.plans-step-one', compact('weekDays'));


    } // end function



} // end class
