<?php

namespace App\Traits;

use App\Models\CityDeliveryTime;
use App\Models\CityDistrict;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use stdClass;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Jantinnerezo\LivewireAlert\LivewireAlert;


trait HelperTrait
{

    use LivewireAlert;








    protected function getCurrentDate()
    {


        // 1: getDate
        return $currentDate = date('Y-m-d', strtotime('+4 hours'));


    } // end function









    // --------------------------------------------------------------







    protected function getTmwDate()
    {


        // 1: getDate
        return $tmwDate = date('Y-m-d', strtotime('+1 day +4 hours'));


    } // end function













    // --------------------------------------------------------------
    // --------------------------------------------------------------
    // --------------------------------------------------------------










    protected function makeRequest($requestURL, $instance)
    {




        // 1: URL - token
        $requestURL = env('APP_API') . $requestURL;
        // $token = session('token');



        // 2: sendRequest
        $response = Http::post($requestURL, [
            'instance' => $instance,
        ])->json();





        // 3: convertToObject
        $response = json_decode(json_encode($response));



        return $response;




    } // end function









    // --------------------------------------------------------------
    // --------------------------------------------------------------
    // --------------------------------------------------------------











    protected function makeAlert($type, $message = '', $confirmMethod = '')
    {



        // 1: removeType (custom)
        if ($type == 'remove') {


            $this->alert('question', 'This item and related items will be permanently removed', [
                'position' => 'top',
                'timer' => '',
                'toast' => true,
                'width' => '400',
                'showConfirmButton' => true,
                'showCancelButton' => true,
                'confirmButtonText' => 'Remove',
                'cancelButtonText' => 'Cancel',
                'confirmButtonColor' => '#dc3545',
                'cancelButtonColor' => '#d3d3d3',
                'onConfirmed' => $confirmMethod,
            ]);



            // 2: questionType
        } elseif ($type == 'question') {


            $this->alert('question', $message, [
                'position' => 'top',
                'timer' => '',
                'toast' => true,
                'width' => '400',
                'showConfirmButton' => true,
                'showCancelButton' => true,
                'confirmButtonText' => 'Confirm',
                'cancelButtonText' => 'Cancel',
                'confirmButtonColor' => '#87b2a9',
                'cancelButtonColor' => '#d3d3d3',
                'onConfirmed' => $confirmMethod,
            ]);




            // 3: success - info
        } else {

            $this->alert($type, $message, [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'width' => '400',
                'timerProgressBar' => true,
            ]);

        } // end if





    } // end function
















    // --------------------------------------------------------------
    // --------------------------------------------------------------
    // --------------------------------------------------------------












    public function refreshSelect($childSelectId, $parentModel, $childModel, $options, $isEmpty = false)
    {




        // 1: bundle - days
        if ($parentModel == 'bundle' && $childModel == 'days') {




            // 1.2: prepareOptions
            $bundleDays = [];

            foreach ($options ?? [] as $option) {

                array_push($bundleDays, ['id' => $option->id, 'text' => $option->days]);

            } // end function




            // :: makeEmpty
            $isEmpty ? array_unshift($bundleDays, ['id' => '', 'text' => '']) : null;




            $this->dispatch('refreshSelect', id: $childSelectId, data: $bundleDays);


        } // end if










    } // end function











    // --------------------------------------------------------------
    // --------------------------------------------------------------
    // --------------------------------------------------------------












    function differentInDays($fromDate, $untilDate)
    {



        // 1: convertToMilliseconds
        $fromDate = strtotime($fromDate);
        $untilDate = strtotime($untilDate);




        // 1.2: sub - round
        $difference = $untilDate - $fromDate;

        return round($difference / (60 * 60 * 24));





    } // end function















} // end trait
