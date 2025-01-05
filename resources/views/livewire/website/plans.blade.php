<main>




    {{-- head --}}
    @section('head')



    {{-- title - description - keywords meta --}}
    <title>Be Healthy - Our Plans</title>

    <meta name="description"
        content="Be Healthy offers nutritious and delicious meal plans for those who want to eat healthy, lose weight, or maintain a balanced diet. Explore our customizable meals, designed by experts to fuel your body.">

    <meta name="keywords"
        content="healthy meal plans, diet meal delivery, weight loss meals, balanced diet, healthy eating, meal delivery service, nutrition, Be Healthy restaurant">





    {{-- forSocialMedia --}}
    <meta property="og:title" content="Be Healthy - Nutritious Meal Plans for a Healthier You">
    <meta property="og:description"
        content="Join Be Healthy for delicious, expert-designed meal plans that promote a healthy lifestyle. Get started on your wellness journey with our fresh, balanced meals.">
    <meta property="og:image" content="{{url('apple-touch-icon.png')}}">
    <meta property="og:url" content="https://www.behealthy.ae">
    <meta property="og:type" content="website">


    @endsection
    {{-- endHead --}}






    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}






    {{-- styles --}}
    @section('styles')

    <link rel="stylesheet" href="{{url('assets/css/plans-page.css')}}" />

    @endsection
    {{-- endSection --}}








    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}





    {{-- section --}}
    @section('sidebars')



    {{-- 1: sidebars --}}
    <livewire:website.components.sidebars key='sidebar--section' />


    {{-- plugins --}}
    <link rel="stylesheet" href="{{url('assets/css/plugins/navbar.css')}}" />



    @endsection
    {{-- endSection --}}








    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}














    {{-- section --}}
    <section data-aos="fade" data-aos-duration="600" data-aos-delay="300" id="plans--section"
        class="plans--section for-plans section--padding">
        <div class="container-fluid">
            <div class="row align-items-end">


                {{-- title --}}
                <div class="col-12 col-md-6 col-lg-7 col-xl-8">
                    <h1
                        class="text-center text-sm-start plans--title for-plans mb-2 mb-md-0 fw-800 fs-xl-38 fs-lg-30 fs-md-30 fs-sm-23 px-3 px-sm-0">
                        Choose Your Perfect Meal Plan
                    </h1>
                </div>



                {{-- description --}}
                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <p class="text-center text-sm-start plans--subtitle mb-0 mb-lg-2 fs-xxl-16 fs-xl-16 fs-lg-15 fs-md-15 fs-sm-15"
                        data-aos="fade" data-aos-duration="600" data-aos-delay="600">
                        Enjoy the convenience of healthy eating with plans designed for
                        your unique needs. Let us help you achieve your wellness goals,
                        one delicious meal at a time!
                    </p>
                </div>

            </div>
            {{-- endRow --}}





            {{-- ---------------------------------------------- --}}
            {{-- ---------------------------------------------- --}}





            {{-- swiper --}}
            <div class="row mt-4 pt-3 pt-sm-0 mt-sm-4 pt-sm-4" wire:ignore>



                {{-- loop - plans --}}
                @foreach ($plans ?? [] as $key => $plan)

                <a href="{{ $globalProfile->plansURL }}/{{ $plan->nameURL }}/customization"
                    class="d-block init--link col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-4 mb-xl-5"
                    key='single-plan-{{ $plan->id }}'>

                    <div class="plans--card for-plans w-100" key='single-plan-{{ $key }}'>
                        <img src="{{ " {$storagePath}/menu/plans/{$plan->imageFile}" }}" />
                        <div class="plans--card-content">
                            <p class="plans--card-caption fs-xxl-13 fs-xl-13 fs-lg-13 fs-md-13 fs-sm-13">
                                Top Rated
                            </p>


                            {{-- name --}}
                            <h1 class="plans--card-title fs-xxl-22 fs-xl-22 fs-lg-21 fs-md-19 fs-sm-21">
                                {{ $plan->name }}
                            </h1>


                            {{-- desc --}}
                            <p class="plans--card-subtitle truncate-text-2l fs-xxl-15 fs-xl-15
                                fs-lg-15 fs-md-14 fs-sm-14">{{ $plan->desc }}</p>


                            {{-- hr --}}
                            <div class="plans--card-button-wrap">
                                <hr />
                            </div>
                        </div>
                    </div>
                </a>


                @endforeach
                {{-- end loop --}}


            </div>
            {{-- endRow --}}

        </div>
    </section>
    {{-- endSection --}}







</main>
{{-- endWrapper --}}