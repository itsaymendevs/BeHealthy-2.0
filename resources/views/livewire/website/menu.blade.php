<main>




    {{-- head --}}
    @section('head')




    {{-- title - description - keywords meta --}}
    <title>Be Healthy - Our Menu</title>

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


    <link rel="stylesheet" href="{{url('assets/css/dining-menu.css')}}" />


    {{-- plugins --}}
    <link rel="stylesheet" href="{{url('assets/css/plugins/navbar.css')}}" />


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


    @endsection
    {{-- endSection --}}









    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}








    {{-- section --}}
    <section data-aos="fade" data-aos-duration="600" data-aos-delay="300" id="dining--section"
        class="menu--section for-menu position-relative">
        <div class="container-fluid">



            {{-- row --}}
            <div class="row">
                <div class="col-12 mb-2">


                    {{-- title --}}
                    <h1 class="text-center insta--title fw-800 fs-xxl-32 fs-xl-32 fs-lg-30 fs-md-28 fs-sm-24"
                        data-aos="fade" data-aos-duration="600" data-aos-delay="500">
                        Explore Our Delicious Menu
                    </h1>


                    {{-- subtitle --}}
                    <p class="text-center insta--subtitle fs-lg-16 fs-md-15 fs-sm-16" data-aos="fade"
                        data-aos-duration="600" data-aos-delay="700">
                        Don't Wait – Add Your Favorites to the Cart and Enjoy a Feast!
                    </p>
                </div>
            </div>
            {{-- endRow --}}





            {{-- -------------------------------------------- --}}
            {{-- -------------------------------------------- --}}
            {{-- -------------------------------------------- --}}





            {{-- row --}}
            <div class="row justify-content-center" data-aos="fade" data-aos-duration="600" data-aos-delay="800">




                {{-- loop - menu --}}
                @foreach ($menuMeals ?? [] as $menuMeal)

                <div class="col-12 col-sm-9 col-md-6 col-lg-4 col-xl-4 col-xxl-3">
                    <div class="menu--card for-dining" key='single-menu-{{ $menuMeal->id }}'>


                        {{-- imageFile --}}
                        <img src="{{ url("{$storagePath}/menu/meals/{$menuMeal->imageFile}") }}" />


                        {{-- sizesTab --}}
                        <div class="menu--card-sizes">
                            <div class="menu--card-sizes-tab">


                                {{-- tabLinks --}}
                                <ul class="nav nav-tabs menu--card-sizes-tab-links" role="tablist">



                                    {{-- loop - sizes --}}
                                    @foreach ($menuMeal?->sizes ?? [] as $outerKey => $mealSize)

                                    <li class="nav-item" role="presentation"
                                        key='dining-meal-size-{{ $mealSize?->mealId }}-{{ $mealSize?->sizeId }}'>


                                        {{-- link --}}
                                        <a class="nav-link @if ($outerKey == 0) active @endif" role="tab"
                                            data-bs-toggle="tab"
                                            href="#macros--tab-{{ $mealSize?->mealId }}-{{ $mealSize?->sizeId }}">
                                            {{ $mealSize?->size?->shortName }}
                                        </a>
                                    </li>


                                    @endforeach
                                    {{-- end loop --}}


                                </ul>
                                {{-- endList --}}


                                {{-- empty --}}
                                <div class="tab-content"></div>
                            </div>
                        </div>
                        {{-- endSizes --}}




                        {{-- -------------------------- --}}
                        {{-- -------------------------- --}}





                        {{-- content --}}
                        <div class="menu--card-content">


                            {{-- sizesContent --}}
                            <div class="menu--card-sizes-tab">


                                {{-- emptyLinks --}}
                                <ul class="nav nav-tabs menu--card-sizes-tab-links" role="tablist" style="border: none">
                                </ul>



                                {{-- tabContent --}}
                                <div class="tab-content menu--card-sizes-tab-content">




                                    {{-- loop - sizes --}}
                                    @foreach ($menuMeal?->sizes ?? [] as $outerKey => $mealSize)


                                    {{-- tab: 1 --}}
                                    <div class="tab-pane show @if ($outerKey == 0) show active @endif" role="tabpanel"
                                        id="macros--tab-{{ $mealSize?->mealId }}-{{ $mealSize?->sizeId }}">


                                        {{-- price --}}
                                        <h6 class="menu--card-price">
                                            <span>{{ number_format($mealSize?->price ?? 0, 2)
                                                }}</span><small>AED</small>
                                        </h6>




                                        {{-- name --}}
                                        <h5 class="menu--card-title text-truncate">{{ $menuMeal->name }}</h5>


                                        {{-- desc --}}
                                        <p class="menu--card-subtitle fs-md-14
                                        truncate-text-2l">{{ $menuMeal->desc }}</p>



                                        {{-- --------------------------------- --}}
                                        {{-- --------------------------------- --}}
                                        {{-- --------------------------------- --}}





                                        {{-- macros --}}
                                        <div class="menu--card-macros-wrapper">

                                            {{-- cal --}}
                                            <div class="menu--card-macros-box">
                                                <span>Cal</span>
                                                <hr />
                                                <strong>{{number_format($mealSize?->afterCookCalories ??
                                                    0, 1)}}</strong>
                                            </div>



                                            {{-- proteins --}}
                                            <div class="menu--card-macros-box">
                                                <span>Pro</span>
                                                <hr />
                                                <strong>{{number_format($mealSize?->afterCookProteins ??
                                                    0, 1)}}</strong>
                                            </div>



                                            {{-- carbs --}}
                                            <div class="menu--card-macros-box">
                                                <span>Carb</span>
                                                <hr />
                                                <strong>{{number_format($mealSize?->afterCookCarbs ??
                                                    0, 1)}}</strong>
                                            </div>



                                            {{-- fats --}}
                                            <div class="menu--card-macros-box">
                                                <span>Fat</span>
                                                <hr />
                                                <strong>{{number_format($mealSize?->afterCookFats ??
                                                    0, 1)}}</strong>
                                            </div>

                                        </div>
                                        {{-- endMacros --}}




                                    </div>
                                    {{-- endContent --}}

                                    @endforeach
                                    {{-- end loop --}}




                                </div>
                                {{-- end tabContent --}}
                            </div>
                            {{-- endSizes --}}






                            {{-- ------------------------------- --}}
                            {{-- ------------------------------- --}}




                            {{-- actionButton --}}
                            <div class="btn-group menu--card-button-group" role="group">
                                <button class="btn" type="button" disabled>Order</button>
                                <button class="btn" type="button" disabled>Details</button>
                            </div>


                        </div>
                    </div>
                </div>

                @endforeach
                {{-- end loop --}}


            </div>
            {{-- endRow --}}

        </div>
    </section>
    {{-- endSection --}}





    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}







    {{-- floaters --}}
    @section('floaters')


    <div class="dining--floaters">
        <button class="btn dining--floaters-cart" type="button">
            <img src="{{ url('assets/img/helpers/purchase.png') }}" />
        </button>
    </div>

    @endsection
    {{-- endSection --}}



    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}











</main>
{{-- endWrapper --}}