<?php

namespace App\Livewire\Website\Plans;

use App\Livewire\Forms\CustomerSubscriptionForm;
use App\Livewire\Website\Plans;
use App\Models\Allergy;
use App\Models\CustomerSubscriptionSetting;
use App\Models\Exclude;
use App\Models\MealType;
use App\Models\MenuCalendarScheduleMeal;
use App\Models\Plan;
use App\Models\PlanBundle;
use App\Models\PlanBundleDay;
use App\Models\Type;
use App\Traits\HelperTrait;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use stdClass;

class PlansStepOne extends Component
{



    use HelperTrait;




    // :: variables
    public CustomerSubscriptionForm $instance;
    public $plan, $planBundles, $bundleRanges, $bundleDays;
    public $requiredTypes = [];



    // :: dependencies
    public $allergyLists, $excludeLists, $sampleMeals, $minimumDeliveryDays;












    public function mount($id)
    {


        // :: getParams
        $this->instance->planId = $id;




        // 1: dependencies
        $this->plan = Plan::find($id);
        $this->planBundles = PlanBundle::where('planId', $this->plan->id)->get();
        $this->allergyLists = Allergy::all();
        $this->excludeLists = Exclude::all();
        $this->minimumDeliveryDays = CustomerSubscriptionSetting::first()->minimumDeliveryDays;










        // ------------------------------------
        // ------------------------------------








        // 2: sampleMeals




        // 2.1: mealTypes
        $types = Type::whereIn('name', ['Recipe'])->get()?->pluck('id')?->toArray();
        $mealTypes = MealType::whereIn('typeId', $types)->get()?->pluck('id')?->toArray();





        // 2.2: sampleMeals
        $sampleMeals = MenuCalendarScheduleMeal::with('meal')
            ->whereNotNull('mealId')
            ->whereIn('mealTypeId', $mealTypes)
            ->where('scheduleDate', $this->getCurrentDate())
            ->take(12)->get();






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



        // 1.2: get requiredTypes
        $planBundle = PlanBundle::find($this->instance->planBundleId);



        foreach ($planBundle->types->groupBy('typeId') as $commonType => $bundleTypes)
            $this->requiredTypes[$commonType] = $bundleTypes->sum('quantity');





        // 1.3: invoice bundleTypesInArray
        $this->instance->bundleTypesInArray = implode(' • ', $planBundle->typesInArray());









        // --------------------------------------
        // --------------------------------------





        // 2: reset - getRanges - refreshSelect
        $this->instance->bundleRangeId = null;
        $this->instance->planDays = null;

        $this->bundleRanges = $planBundle?->ranges;





        $this->refreshSelect('#planDays-select', 'bundle', 'days', $planBundle->id, true);






    } // end function


















    // --------------------------------------------------------------------









    public function changeBundleRange()
    {




        // 1: getPlanBundle - bundleRangePricePerDay
        $planBundle = $this->plan->bundles->where('id', $this->instance->planBundleId)->first();
        $this->instance->bundleRangePricePerDay = $planBundle->rangesByPrice->where('planRangeId', $this->instance->bundleRangeId)->first()->pricePerDay;







        // 1.2: get totalPrice - totalCalories
        $this->instance->totalBundleRangeCalories = $this->plan->ranges->where('id', $this->instance->bundleRangeId)->first()->caloriesRange;








        // -------------------------
        // -------------------------








        // 1.3: getDiscountRaw
        $discount = PlanBundleDay::where('planBundleId', $this->instance->planBundleId)
            ->where('days', $this->instance?->planDays ?? 0)?->first()?->discount ?? 0;






        // 1.4: calculateDiscount
        $discountPrice = ((intval($this->instance->planDays) ?? 0) * $this->instance->bundleRangePricePerDay) * ($discount / 100);





        // 1.5: totalPrice (-Discount)
        $this->instance->totalBundleRangePrice = ((intval($this->instance->planDays) ?? 0) * $this->instance->bundleRangePricePerDay) - $discountPrice;










        // ---------------------------
        // ---------------------------








        // 2: getBundleTypes
        foreach ($planBundle->types as $bundleType) {

            $this->instance->bundleTypes[$bundleType->mealType->id] = $bundleType->quantity;

        } // end loop







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
        $plans = Plan::all();
        $weekDays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];





        return view('livewire.website.plans.plans-step-one', compact('weekDays', 'plans'));


    } // end function



} // end class
