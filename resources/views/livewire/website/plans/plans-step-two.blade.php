{{-- wrapper --}}
<main>












    {{-- wizard - subMenu --}}
    <livewire:website.plans.plans-step.components.sub-menu id='{{ $plan->id }}' key='submenu' />





    {{-- -------------------------------------------------------- --}}
    {{-- -------------------------------------------------------- --}}













    {{-- Main - checkoutSection --}}
    <section class="main-checkout-sec">
        <div class="container">


            {{-- mainForm --}}
            <form wire:submit='initPayment' class="row justify-content-center">





                {{-- leftCol --}}
                <div class="col-lg-9 col-md-12 col-12">
                    <div class="checkout-left-side">
                        <div class="row">
                            <div class="col-12">


                                {{-- title --}}
                                <div class="checkout-box pb-3">
                                    <h2 class="heading">Delivery & Payment Information</h2>
                                </div>



                                {{-- wrapper --}}
                                <div class="contact-info mb-4">
                                    <div class="row">


                                        {{-- location --}}
                                        <div class="col-lg-4 col-md-6 col-12">

                                            <div class="input-group mb-4 w-100 margin focus" wire:ignore>

                                                <div class="select--single-wrapper">
                                                    <select class="form--select parent-select" id='city-select'
                                                        data-instance='instance.cityId' data-child='#district-select'
                                                        data-second-child='#deliveryTime-select' required>
                                                        <option value=""></option>

                                                        @foreach ($cities as $city)
                                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>


                                                {{-- label --}}
                                                <label class="user-label">Location</label>

                                            </div>
                                        </div>





                                        {{-- district --}}
                                        <div class="col-lg-4 col-md-6 col-12">

                                            <div class="input-group mb-4 w-100 margin focus" wire:ignore>

                                                <div class="select--single-wrapper">
                                                    <select class="form--select " id='district-select'
                                                        data-instance='instance.cityDistrictId' required>
                                                        <option value=""></option>
                                                    </select>
                                                </div>


                                                {{-- label --}}
                                                <label class="user-label">District</label>

                                            </div>
                                        </div>








                                        {{-- district --}}
                                        <div class="col-lg-4 col-md-6 col-12">

                                            <div class="input-group mb-4 w-100 margin focus" wire:ignore>

                                                <div class="select--single-wrapper">
                                                    <select class="form--select " id='deliveryTime-select'
                                                        data-instance='instance.cityDeliveryTimeId' required>
                                                        <option value=""></option>
                                                    </select>
                                                </div>


                                                {{-- label --}}
                                                <label class="user-label">Delivety Time</label>

                                            </div>
                                        </div>








                                        {{-- locationAddress --}}
                                        <div class="col-lg-12 col-12">
                                            <div class="input-group margin">
                                                <input required="" type="text" autocomplete="off" class="input"
                                                    wire:model='instance.locationAddress'>
                                                <label class="user-label">Your Address</label>
                                            </div>
                                        </div>




                                        {{-- apartment / villa --}}
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="input-group margin">
                                                <input required="" type="text" autocomplete="off" class="input"
                                                    wire:model='instance.apartment'>
                                                <label class="user-label">Apartment / Villa</label>
                                            </div>
                                        </div>



                                        {{-- floor --}}
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="input-group margin">
                                                <input required type="text" autocomplete="off" class="input"
                                                    wire:model='instance.floor'>
                                                <label class="user-label">Floor</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>








                                {{-- --------------------------- --}}
                                {{-- --------------------------- --}}









                                {{-- paymennt --}}
                                @if ($paymentMethod->name == 'Paymennt')


                                {{-- :: card --}}
                                <div id="paymenntWrapper" class="card-frame" wire:ignore></div>



                                @endif
                                {{-- end if - payment --}}






                                {{-- --------------------------- --}}
                                {{-- --------------------------- --}}










                                {{-- submitButton --}}
                                <div class="text-center end-btn-desktop mb-5">
                                    <button wire:loading.attr='disabled' class="green-btn">Checkout your plan</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                {{-- end leftCol --}}













                {{-- ----------------------------------------- --}}
                {{-- ----------------------------------------- --}}
                {{-- ----------------------------------------- --}}
                {{-- ----------------------------------------- --}}
                {{-- ----------------------------------------- --}}














                {{-- 2: summary --}}
                <div class="col-lg-3 col-md-7 col-12">
                    <div class="summary-right light-sec">



                        {{-- heading--}}
                        <p class="heading">
                            Order Summary
                        </p>




                        {{-- 1: coupon --}}
                        <div class="promo-box">
                            <a class="btn" data-bs-toggle="collapse" href="#promoCollapse" role="button"
                                aria-expanded="true" aria-controls="promoCollapse">
                                Do you have Coupon?
                            </a>
                            <div class="collapse show mt-2" id="promoCollapse">
                                <div class="input-group @if ($isCouponApplied) focus @endif">
                                    <input type="text" autocomplete="off" class="input no-valid"
                                        wire:model='instance.promoCode' wire:keyup.debounce.100ms='checkPromoCode'>
                                </div>
                            </div>
                        </div>







                        {{-- 2: totalPrice --}}
                        <div class="recepit-item">


                            {{-- plan - planDays - deliveryDays --}}
                            <div class="">
                                <p class="title">{{ $plan->name }}</p>
                                <p class="desc d-flex justify-content-evenly">
                                    <span>{{ $instance?->planDays ?? '' }} days</span>
                                    <span class='mx-1'>-</span>
                                    <span>{{count($instance?->deliveryDays ?? []) . ' days / week'}}</span>
                                </p>
                            </div>






                            {{-- totalBundleRangePrice => totalPrice - bagPrice --}}
                            <div class="">
                                <p class="price">AED {{ $instance->totalBundleRangePrice ?? 0 }}</p>
                            </div>
                        </div>





                        {{-- --------------------------- --}}
                        {{-- --------------------------- --}}





                        {{-- 3: VAT --}}
                        <div class="recepit-item">

                            <div>
                                <p class="title">
                                    COUPON
                                </p>
                            </div>


                            <div>
                                <p class="price">
                                    AED {{ number_format($instance->promoCodeDiscountPrice ?? 0, 1) }}
                                </p>
                            </div>
                        </div>







                        {{-- 4: bagPrice --}}
                        <div class="recepit-item">

                            <div>
                                <p class="title">{{ $instance->bag }}</p>
                                <p class="desc">(Refundable)</p>
                            </div>


                            <div>
                                <p class="price">AED {{ $instance->bagPrice }}</p>
                            </div>
                        </div>






                        {{-- 5: totalCheckoutPrice --}}
                        <div class="recepit-item total">
                            <div>
                                <p class="title">Total</p>
                            </div>
                            <div>
                                <p class="price">AED {{ $instance->totalCheckoutPrice }}</p>
                            </div>
                        </div>
                    </div>






                    {{-- checkout --}}
                    <div class="text-end end-btn-mobile">
                        <button class="green-btn" wire:loading.attr='disabled'>Checkout your plan</button>
                    </div>
                </div>
                {{-- endSummary --}}






            </form>
            {{-- endForm --}}




        </div>
    </section>
    {{-- endSection --}}














    {{-- -------------------------------------------------------- --}}
    {{-- -------------------------------------------------------- --}}















    <!-- 2: FAQs -->
    <section class="faq-sec light-sec personalize">
        <div class="container">




            {{-- row --}}
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>






            {{-- row --}}
            <livewire:website.home.components.faqs />



        </div>
    </section>
    {{-- endFAQs --}}























    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}







    {{-- :: select --}}
    <script>
        // 1: handleSelect
        $(".form--select").on("change", function(event) {


         // 1.1: getValue - instance
         selectValue = $(this).select2('val');
         instance = $(this).attr('data-instance');

         @this.set(instance, selectValue);








         //  1.2: refreshChild to defaultValue
         if ($(this).hasClass('parent-select')) {

            childSelect = $(this).attr('data-child');
            childSecondSelect = $(this).attr('data-second-child');

            @this.refreshSelect(childSelect, 'city', 'district', selectValue, true);
            @this.refreshSelect(childSecondSelect, 'city', 'deliveryTime', selectValue, true);


            } // end if


        }) // end function
    </script>










    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}










    {{-- :: PaymenntJS --}}
    <script src="https://pay.paymennt.com/static/js/paymennt-frames.js"></script>










    {{-- :: init / makeToken --}}
    <script>
        $(document).ready(function () {





            // 1: initPayment
            PaymenntJS.init({


                // 1.2: mode - publicKey
                publicKey: @json(env($paymentMethod->envKey)),
                selector: "#paymenntWrapper",
                mode: PaymenntJS.modes.TEST,



                // 1.3: handleToken
                onTokenized: function (data) {
                    @this.set('payment.token', data.token);
                    @this.makePayment();
                },
                onTokenizationFailed: function (data) {
                    @this.updatePaymentMessage(data.error);
                    @this.makeAlertJS(data.error);
                },








                // --------------------------------------------------
                // --------------------------------------------------








                // 1.4: validation
                onValidationUpdate: function (data) {


                    // 1: notValid
                    if (!data.valid) {



                        // 1.4.1: loop - errors
                        var message = null;


                        for (var i = 0; i < data.validationErrors.length; ++i) {

                            var fieldValidation = data.validationErrors[i];


                            if (!message || fieldValidation.field === data.lastActiveField)
                                @this.set('payment.validationMessage', fieldValidation.message);


                        } // end loop





                        // 1.4.2: hasErrorMessage
                        if (!message)
                            @this.set('payment.validationMessage', data.error ? data.error : "Invalid card details");









                    // 2: isValid
                    } else {

                        @this.set('payment.validationMessage', '');

                    } // end if




                }, // end validate







            }); // end PaymentJS
        }); // end documentReady











        // --------------------------------------------------
        // --------------------------------------------------








        // :: makePaymenntToken
        window.addEventListener("makePaymenntToken", (event) => {
            $(document).ready(function () {


                PaymenntJS.submitPayment();


            }); // end documentReady
        }); // end makePaymenntToken



    </script>








    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}









</main>
{{-- endMain --}}