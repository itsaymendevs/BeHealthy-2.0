<?php

namespace App\Traits;

use App\Models\City;
use App\Models\Customer;
use App\Models\CustomerSubscription;
use App\Models\Plan;
use Illuminate\Support\Facades\Http;
use stdClass;


trait PaymenntTrait
{




    protected function makePaymenntToken()
    {


        // :: makePaymenntToken
        $this->dispatch('makePaymenntToken');

        return true;



    } // end function












    // --------------------------------------------------------------
    // --------------------------------------------------------------
    // --------------------------------------------------------------












    protected function makeDebitPaymennt($instance, $payment, $paymentMethod)
    {



        // :: dependencies
        $city = City::find($instance->cityId);
        $plan = Plan::find($instance->planId);
        $nextRequestId = CustomerSubscription::latest()->first()->id;







        // 1: URL
        $requestURL = "https://api.test.paymennt.com/mer/v2.0/payment/debit";







        // 2: prepareBody
        $requestBody = new stdClass();




        // A: source
        $requestBody->source = new stdClass();
        $requestBody->source->type = "TOKEN";
        $requestBody->source->token = $payment->token;
        $requestBody->source->shopperInteraction = "SUBSCRIPTION";










        // ------------------------------
        // ------------------------------







        // B: checkoutDetails
        // $requestBody->checkoutId = "1";
        $requestBody->checkoutDetails = new stdClass();






        // 2.1: general
        $requestBody->checkoutDetails->requestId = "ORDER-REQ-" . $nextRequestId;
        $requestBody->checkoutDetails->orderId = "ORDER-" . $nextRequestId;
        $requestBody->checkoutDetails->currency = 'AED';
        $requestBody->checkoutDetails->amount = doubleval($instance->totalCheckoutPrice);








        // 2.2: items
        $requestBody->checkoutDetails->items = [];

        $requestBody->checkoutDetails->items[0] = new stdClass();
        $requestBody->checkoutDetails->items[0]->name = $plan->name;
        $requestBody->checkoutDetails->items[0]->quantity = 1;
        $requestBody->checkoutDetails->items[0]->linetotal = doubleval($instance->totalCheckoutPrice);










        // 2.3: customer
        $requestBody->checkoutDetails->customer = new stdClass();


        $requestBody->checkoutDetails->customer->firstName = $instance->firstName;
        $requestBody->checkoutDetails->customer->lastName = $instance->lastName;
        $requestBody->checkoutDetails->customer->email = $instance->email;








        // 2.4: billingAddress
        $requestBody->checkoutDetails->billingAddress = new stdClass();


        $requestBody->checkoutDetails->billingAddress->name = $instance->firstName . ' ' . $instance->lastName;
        $requestBody->checkoutDetails->billingAddress->address1 = $instance->locationAddress;
        $requestBody->checkoutDetails->billingAddress->city = $city->name;
        $requestBody->checkoutDetails->billingAddress->country = "AE";









        // 2.5: returnURL
        $requestBody->checkoutDetails->returnUrl = "https://aleens.ae";




        // ----------------------------------------------
        // ----------------------------------------------








        // 3: sendRequest
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-Paymennt-Api-Key' => env($paymentMethod->envThirdKey),
            'X-Paymennt-Api-Secret' => env($paymentMethod->envSecondKey),
        ])->post($requestURL, [
                    $requestBody
                ], )->json();









        dd($response, $requestBody);


        // 4: convertToObject
        $response = json_decode(json_encode($response));



        return $response;


    } // end function












} // end trait

