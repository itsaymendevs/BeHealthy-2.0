<section data-aos="fade-up" data-aos-duration="600" data-aos-delay="300" id="menu--section" class="menu--section">
    <div class="container-fluid">


        {{-- row --}}
        <div class="row">
            <div class="col-12 mb-2">


                {{-- title --}}
                <h1 class="text-center insta--title fw-800 fs-xxl-32 fs-xl-32 fs-lg-30 fs-md-28 fs-sm-24">
                    Explore Our Menu
                </h1>


                {{-- description --}}
                <p class="text-center insta--subtitle fs-lg-16 fs-md-15 fs-sm-16">
                    A menu designed to satisfy every palate and preference
                </p>
            </div>
        </div>
        {{-- endRow --}}





        {{-- ------------------------------------------ --}}
        {{-- ------------------------------------------ --}}




        {{-- swiper --}}
        <div class="d-flex align-items-start justify-content-center" wire:ignore>
            <div class="swiper menu--swiper-1 with--pagination">
                <div class="swiper-wrapper">


                    @foreach ($menuMeals ?? [] as $menuMeal)

                    <div class="menu--card swiper-slide" key='single-menu-{{ $menuMeal->id }}'>


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

                    @endforeach
                    {{-- end loop --}}




                </div>
                {{-- endWrapper --}}


            </div>
        </div>
        {{-- endSwiper --}}



    </div>
</section>
{{-- endSection --}}