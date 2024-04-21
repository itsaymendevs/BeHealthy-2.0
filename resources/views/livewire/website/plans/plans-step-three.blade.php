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
    <section class="main-checkout-sec" id='invoice'>
        <div class="container">



            {{-- mainRow --}}
            <div class="row align-items-end">


                {{-- 1: logo --}}
                <div class="col-12 text-center mb-4">

                    <img src="{{ asset('assets/images/logo.png') }}" alt="Aleens" class='w-100 of-contain px-3'
                        style="height: 30px; object-position:right;">

                </div>
                {{-- end logo --}}





                {{-- ---------------------------------- --}}
                {{-- ---------------------------------- --}}





                {{-- topInvoice --}}


                {{-- leftCol --}}
                <div class="col-12 col-md-6">

                    <h4 class='fw-semibold'>BILL TO</h4>

                    <h6 class='mb-4 mb-md-0'>Chris Scarface<br>Dubai, Business Bay<br>Churchill Tower - Apartment 13B -
                        Floor 3
                    </h6>


                </div>
                {{-- endCol --}}







                {{-- midCol (Hidden MD) --}}
                <div class="d-none d-md-block col-md-1 col-lg-2 col-xl-3 text-center"></div>
                {{-- endCol --}}






                {{-- rightCol --}}
                <div class="col-12 col-md-5 col-lg-4 col-xl-3 text-center">



                    {{-- invoiceDate --}}
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class='fw-semibold mb-3'>Invoice Date</h6>
                        <h6 class='mb-3 fw-semibold fs-14'>{{ date('d / m / Y',
                            strtotime($globalTodayDate)) }}
                        </h6>
                    </div>



                    {{-- invoiceNumber --}}
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class='fw-semibold mb-0'>Invoice Number</h6>
                        <h6 class='mb-0 fw-semibold  fs-14'>10285510</h6>
                    </div>



                </div>
                {{-- endCol --}}






                {{-- ---------------------------------- --}}
                {{-- ---------------------------------- --}}









                {{-- tableOfContent --}}
                <div class='col-12 mt-4 d-none'>

                    <table class="table table-hover" style="--bs-table-bg:#f9f9f9;">



                        {{-- header --}}
                        <thead>
                            <tr>
                                <th scope="col" class='fw-semibold fs-13'>#</th>
                                <th scope="col" class='fw-semibold fs-13'>Description</th>
                                <th scope="col" class='fw-semibold fs-13'>Duration</th>
                                <th scope="col" class='fw-semibold fs-13'>Price</th>
                            </tr>
                        </thead>



                        {{-- body --}}
                        <tbody>
                            <tr class='py-2'>
                                <th scope="row" class='fs-14'>{{ $globalSNCounter++ }}</th>
                                <td class='fs-14'>Weight Loss</td>
                                <td class='fs-14'>24 Days</td>
                                <td class='fs-14'>1,250<span class='fs-12 text-green ms-1'>(AED)</span></td>
                            </tr>


                            <tr class='py-2'>
                                <th scope="row" class='fs-14'>{{ $globalSNCounter++ }}</th>
                                <td class='fs-14'>Cool Bag</td>
                                <td class='fs-14'></td>
                                <td class='fs-14'>200<span class='fs-12 text-green ms-1'>(Refundable)</span></td>
                            </tr>



                        </tbody>
                    </table>



                </div>

            </div>
            {{-- endRow --}}




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




        }) // end function
    </script>










    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}















</main>
{{-- endMain --}}