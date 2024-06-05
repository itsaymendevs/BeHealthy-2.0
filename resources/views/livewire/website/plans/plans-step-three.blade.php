{{-- wrapper --}}
<main>






    {{-- head --}}
    @section('head')




    {{-- title - description - keywords meta --}}
    <title>Best Healthy Meal Plans in Dubai | BeHealthy</title>



    @endsection
    {{-- endHead --}}










    {{-- ------------------------------------------------ --}}
    {{-- ------------------------------------------------ --}}









    {{-- wizard - subMenu --}}
    <livewire:website.plans.plans-step.components.sub-menu id='{{ $subscription->plan->id }}' key='submenu' />







    {{-- -------------------------------------------------------- --}}
    {{-- -------------------------------------------------------- --}}













    {{-- Main - checkoutSection --}}
    <section class="main-checkout-sec" id='invoice'>
        <div class="container">



            {{-- mainRow --}}
            <div class="row align-items-end">


                {{-- 1: logo --}}
                <div class="col-12 text-center mb-4">

                    <img src="{{ url('assets/subscirption/images/logo.png') }}" alt="BeHealthy"
                        class='w-100 of-contain px-3' style="height: 30px; object-position:right;">

                </div>
                {{-- end logo --}}





                {{-- ---------------------------------- --}}
                {{-- ---------------------------------- --}}





                {{-- topInvoice --}}


                {{-- leftCol --}}
                <div class="col-12 col-md-6">

                    <h4 class='fw-bold '>BILL TO</h4>


                    <h6 class='mb-4 mb-md-0'>




                        {{-- name - phone - email --}}
                        <span class='fw-bold d-block text-capitalize mb-2 header' style="letter-spacing: 0.3px">{{
                            $customer->fullName() }}</span>

                        <span class='d-block'>
                            <span class='fw-bold me-1'>Tel.</span>{{ $customer->phone }}</span>

                        <span class='d-block mb-3'>
                            <span class='fw-bold me-1'>Email.</span>{{ $customer->email }}</span>






                        {{-- city - district --}}


                        <span class='d-block'>Apartment. {{ $customer?->latestAddress()?->apartment }} -
                            Floor. {{ $customer?->latestAddress()?->floor }}<br>{{
                            $customer?->latestAddress()?->locationAddress }}</span>


                        <span class='d-block'>{{ $customer?->latestAddress()?->city?->name }}, {{
                            $customer?->latestAddress()?->district?->name }}</span>
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
                        <h6 class='mb-3 fw-bold fs-14'>{{ date('d / m / Y',
                            strtotime($globalCurrentDate)) }}
                        </h6>
                    </div>



                    {{-- invoiceNumber --}}
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class='fw-semibold mb-0'>Invoice Number</h6>
                        <h6 class='mb-0 fw-bold  fs-14'># {{ substr($subscription->paymentReference, 0, 7) }}</h6>
                    </div>



                </div>
                {{-- endCol --}}






                {{-- ---------------------------------- --}}
                {{-- ---------------------------------- --}}












                {{-- tableOfContent --}}
                <div class='col-12 mt-4' data-aos='slide-up' data-aos-delay='50'>

                    <table class="table table-striped table-hover checkout--table" style="--bs-table-bg:#f9f9f9;">



                        {{-- header --}}
                        <thead>
                            <tr>
                                <th scope="col" class='fw-semibold fs-14'>#</th>
                                <th scope="col" class='fw-semibold fs-14'>Description</th>
                                <th scope="col" class='fw-semibold fs-14'>QTY</th>
                                <th scope="col" class='fw-semibold fs-14'>Price</th>
                            </tr>
                        </thead>



                        {{-- body --}}
                        <tbody>


                            {{-- 1: plan --}}
                            <tr class='py-2'>


                                {{-- counter - name - price --}}
                                <th scope="row">{{ $globalSNCounter++ }}</th>
                                <td class='fw-bold'>{{ $subscription->plan->name }}</td>
                                <td>x<span class='fs-6 fw-bold ms-1'>1</span></td>
                                <td class='fw-bold'>{{ $subscription->planPrice }}
                                    <span class='fs-11 text-green ms-1 fw-semibold'>(AED)</span>
                                </td>
                            </tr>







                            {{-- ---------------------------- --}}
                            {{-- ---------------------------- --}}








                            {{-- 2: bag --}}
                            <tr class='py-2'>


                                {{-- bagName - quantity - price --}}
                                <th scope="row">{{ $globalSNCounter++ }}</th>
                                <td class='fw-bold'>{{ $subscription->bag->name }}</td>
                                <td>x<span class='fs-6 fw-bold ms-1'>1</span></td>
                                <td class='fw-bold'>{{ $subscription->bagPrice ?? 0 }}
                                    <span class='fs-11 text-green ms-1 fw-semibold'>(Refundable)</span>
                                </td>

                            </tr>
                            {{-- endRow --}}










                            {{-- ---------------------------- --}}
                            {{-- ---------------------------- --}}






                            {{-- 3: total --}}
                            <tr class='py-2'>


                                {{-- empty --}}
                                <th scope="row"></th>
                                <td></td>
                                <td></td>



                                {{-- totalPrice --}}
                                <td class='fs-4 fw-bold'>{{ $subscription->totalCheckoutPrice }}<span
                                        class='fs-11 text-green ms-1 fw-semibold'>(AED)</span></td>

                            </tr>
                            {{-- endRow --}}




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
    <section class="faq-sec light-sec personalize py-1">

    </section>
    {{-- endFAQs --}}










</main>
{{-- endMain --}}