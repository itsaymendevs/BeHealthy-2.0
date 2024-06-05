{{-- wrapper --}}
<main>




    {{-- head --}}
    @section('head')




    {{-- title - description - keywords meta --}}
    <title>Best Healthy Meal Plans in Dubai | Aleen’s</title>



    @endsection
    {{-- endHead --}}










    {{-- ------------------------------------------------ --}}
    {{-- ------------------------------------------------ --}}













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



                                {{-- 1: isExistingCustomer --}}
                                @if ($this->instance->isExistingCustomer)


                                <div class="checkout-box pb-3">
                                    <h2 class="heading">Payment Information</h2>
                                </div>



                                {{-- 2: regular --}}
                                @else

                                <div class="checkout-box pb-3">
                                    <h2 class="heading">Checkout Information</h2>
                                </div>

                                @endif
                                {{-- end if --}}








                                {{-- ----------------------------- --}}
                                {{-- ----------------------------- --}}









                                {{-- deliveryInformations --}}


                                {{-- 1: isExistingCustomer --}}
                                @if (!$this->instance->isExistingCustomer)


                                <div class="contact-info mb-4">
                                    <div class="row">


                                        {{-- location --}}
                                        <div class="col-lg-4 col-md-6 col-12" data-aos='fade' data-aos-delay='50'
                                            wire:ignore.self>

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
                                        <div class="col-lg-4 col-md-6 col-12" data-aos='fade' data-aos-delay='100'
                                            wire:ignore.self>

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
                                        <div class="col-lg-4 col-md-6 col-12" data-aos='fade' data-aos-delay='150'
                                            wire:ignore.self>

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
                                        <div class="col-lg-12 col-12" data-aos='fade' data-aos-delay='200'
                                            wire:ignore.self>
                                            <div class="input-group margin">
                                                <input required="" type="text" autocomplete="off" class="input"
                                                    wire:model='instance.locationAddress'>
                                                <label class="user-label">Your Address</label>
                                            </div>
                                        </div>




                                        {{-- apartment / villa --}}
                                        <div class="col-lg-4 col-md-6 col-12" data-aos='fade' data-aos-delay='250'
                                            wire:ignore.self>
                                            <div class="input-group margin">
                                                <input required="" type="text" autocomplete="off" class="input"
                                                    wire:model='instance.apartment'>
                                                <label class="user-label">Apartment / Villa</label>
                                            </div>
                                        </div>



                                        {{-- floor --}}
                                        <div class="col-lg-4 col-md-6 col-12" data-aos='fade' data-aos-delay='300'
                                            wire:ignore.self>
                                            <div class="input-group margin">
                                                <input required type="text" autocomplete="off" class="input"
                                                    wire:model='instance.floor'>
                                                <label class="user-label">Floor</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                @endif
                                {{-- end if --}}









                                {{-- --------------------------- --}}
                                {{-- --------------------------- --}}










                                {{-- submitButton --}}
                                <div class="text-center end-btn-desktop mb-5">
                                    <button id='submitButton' wire:loading.attr='disabled'
                                        wire:target='initPayment, continue'
                                        class="green-btn fw-semibold fs-14 text-uppercase">Proceed to payment</button>
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
                        <p class="heading fs-5 mb-3">
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


                            {{-- wrapper --}}
                            <div>


                                {{-- plan --}}
                                <p class="title">{{ $plan->name }}</p>



                                {{-- planDays - deliveryDays --}}
                                <p class="desc d-flex justify-content-start my-1">
                                    <span>{{ $instance?->planDays ?? 0 }} days
                                        {{ $instance?->startDate ? ' - ' . date('d/m/Y',
                                        strtotime($instance?->startDate)) : ''}}</span>
                                </p>




                                {{-- bundle - range --}}
                                <p class="desc d-flex justify-content-start">
                                    <span class='me-1'>{{ $instance?->planBundleName ?? '' }}</span>
                                    <span>{{ $instance?->bundleRangeName ? '- ' . $instance?->bundleRangeName : ''
                                        }}</span>
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
                                    Coupon
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
                        <div class="recepit-item total mb-0">
                            <div>
                                <p class="title">Total</p>
                            </div>
                            <div>
                                <p class="price">AED {{ $instance->totalCheckoutPrice }}</p>
                            </div>
                        </div>
                    </div>






                    {{-- checkout --}}
                    @if (!$isProcessing)


                    <div class="text-end end-btn-mobile">
                        <button class="green-btn" wire:loading.attr='disabled'
                            wire:target='initPayment, continue'>Checkout
                            your plan</button>
                    </div>



                    @endif
                    {{-- end if - processing --}}





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
            <div class="row" data-aos='slide-up' wire:ignore.self>
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









</main>
{{-- endMain --}}