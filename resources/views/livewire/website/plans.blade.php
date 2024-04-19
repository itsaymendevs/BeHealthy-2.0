<main>




    {{-- head --}}
    @section('head')




    {{-- calendly --}}
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>





    {{-- title - description - keywords meta --}}
    <title>Best Healthy Meal Plans in Dubai | Aleen’s</title>

    <meta name="description"
        content="Discover the best Healthy Meal Plans in Dubai to begin your diet journey. Aleen's experts offer dietary plans, nutritional counseling, and wellness solutions.">

    <meta name="keywords"
        content="Healthy Meal Plans in Dubai, Best Healthy Meal Plans in Dubai, Healthy Meal Plans, Meal Plans For Healthy Diet in Dubai">



    @endsection
    {{-- endHead --}}










    {{-- ------------------------------------------------ --}}
    {{-- ------------------------------------------------ --}}










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



                <div class="col-lg-4 col-md-6 col-6 meal-plan-wrapper mb-4" data-aos='fade-up'
                    data-aos-delay="{{ $key * 200 }}" wire:ignore.self>
                    <div class="meal-plan-card @if ($key >= 3 && $key <= 6 || $key >= 6 && $key <= 9) reverse @endif">
                        <div class="img-box">
                            <img src='{{ "{$storagePath}/menu/plans/{$plan->imageFile}"  }}' alt="">
                        </div>


                        {{-- content --}}
                        <div class="content-box text-center">


                            {{-- information --}}
                            <p class="title">{{ $plan->name }}</p>
                            <div class="price-box">
                                <p class="price">AED {{ $plan->startingPrice }}</p>
                                <p class="price-day">Per Day</p>
                            </div>


                            {{-- select --}}
                            <a class="btn w-100 d-flex justify-content-center"
                                href="{{ route('website.plans.stepOne', [$plan->id]) }}">Select</a>
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











    <!-- 4: helpSection -->
    <section class="not-sure-sec light-sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="not-sure-banner-box gradient-banner">
                        <div class="row">


                            {{-- question --}}
                            <div class="col-lg-8 col-md-6 col-12 order-lg-1 order-md-1 order-2">
                                <div class="content-box">
                                    <h2>Not Sure Which Meal Plan Suits You?</h2>
                                    <a href="#!" id='toggleCalendly'>
                                        <i class="fal fa-play"></i>Get A Free Diet Consultation
                                    </a>
                                </div>
                            </div>


                            {{-- imageFile --}}
                            <div class="col-lg-4 col-md-6 col-12 order-lg-2 order-md-2 order-1 position-relative">
                                <div class="img-box">
                                    <img src="{{ url('assets/images/nutrioniest.png') }}" alt="">
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
            <div class="row" data-aos="slide-up" wire:ignore.self>
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















    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}









    {{-- initiateCalendly --}}
    <script>
        $(document).ready(function() {
            var calendlyButton = document.getElementById('toggleCalendly');
            calendlyButton.addEventListener("click", function() {
                Calendly.initPopupWidget({ url: 'https://calendly.com/cynthiagfarsoun/30min' });
                return false;
            });
        });
    </script>














    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}





</main>
{{-- endMain --}}
