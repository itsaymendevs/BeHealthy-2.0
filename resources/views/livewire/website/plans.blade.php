<main>





    <!-- 1: plans -->
    <section class="meal-plan-section">
        <div class="container">



            {{-- heading --}}
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Pick your meal plan</h2>
                    </div>
                </div>
            </div>










            {{-- plansRow --}}
            <div class="row">




                {{-- loop - plans --}}
                @foreach ($plans ?? [] as $key => $plan)



                <div class="col-lg-4 col-md-6 col-6 meal-plan-wrapper">
                    <div class="meal-plan-card @if ($key >= 3 && $key <= 6 || $key >= 6 && $key <= 9) reverse @endif">
                        <div class="img-box">
                            <img src='{{ "{$storagePath}/menu/plans/{$plan->imageFile}"  }}' alt="">
                        </div>


                        {{-- content --}}
                        <div class="content-box">


                            {{-- information --}}
                            <p class="title">{{ $plan->name }}</p>
                            <div class="price-box">
                                <p class="price">AED {{ $plan->startingPrice }}</p>
                                <p class="price-day">Per Day</p>
                            </div>


                            {{-- select --}}
                            <a wire:navigate class="btn" href="{{ route('website.plans.stepOne', [$plan->id]) }}">
                                <i class="fal fa-play"></i>Select</a>
                        </div>
                    </div>
                </div>



                @endforeach
                {{-- end loop - plans --}}



            </div>
            {{-- end plansRow --}}










        </div>
    </section>
    {{-- endSection --}}














    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}










    <!-- 2: help Section -->
    <section class="not-sure-sec light-sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="not-sure-banner-box">
                        <div class="row">



                            {{-- information --}}
                            <div class="col-lg-8 col-md-6 col-12">
                                <div class="content-box">
                                    <h2>Need help choosing a plan?</h2>
                                    <a href="javascript:void(0);">
                                        <i class="fal fa-play"></i>Get A Free Diet Consultation
                                    </a>
                                </div>
                            </div>


                            {{-- cover --}}
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/thinking.png') }}" alt="">
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- endSection --}}












    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}










    <!-- 3: FAQs -->
    <section class="faq-sec light-sec">
        <div class="container">

            {{-- heading --}}
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>




            {{-- FAQs --}}
            <livewire:website.home.components.faqs />


        </div>
    </section>













</main>
{{-- endMain --}}