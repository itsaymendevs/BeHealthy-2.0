{{-- wrapper --}}
<main>




    {{-- head --}}
    @section('head')



    {{-- title - description - keywords meta --}}
    <title>BeHealthy: Best Healthy Meal Plans Provider in Dubai</title>

    <meta name="description"
        content="BeHealthy delivers delectable, nutritious meal plans for well-being. Achieve your goals with the best healthy meal plans provider in Dubai. Savor goodness!">

    <meta name="keywords"
        content="Healthy Meal Plans Provider in Dubai, Best Healthy Meal Plans Provider in Dubai, Healthy Meal Plans Provider">


    @endsection
    {{-- endHead --}}








    {{-- ---------------------------------------- --}}
    {{-- ---------------------------------------- --}}







    {{-- style --}}
    @section('style')


    <style>
        /* .shop-filter-item .price-box {
            display: none;
        } */
    </style>

    @endsection
    {{-- endSection --}}









    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}









    {{-- 1: menu --}}
    <section id="shop-page">
        <div class="container">





            {{-- filterRow --}}
            <div class="row">
                <div class="col-12">
                    <div class="shop-filter-button-box">
                        <div class="filter-button-group" id="style-2">

                            <button class="is-checked" data-filter="*">All</button>


                            {{-- loop - tags --}}
                            @foreach ($tags ?? [] as $tag)

                            <button data-filter='.{{ str_replace(" ", "-", strtolower($tag->name)) }}'>
                                {{ $tag->name }}
                            </button>

                            @endforeach
                            {{-- end loop --}}

                        </div>
                    </div>
                </div>
            </div>








            {{-- -------------------------------- --}}
            {{-- -------------------------------- --}}








            {{-- row --}}
            <div class="row portfolio">




                {{-- loop - diningMeals --}}
                @foreach ($diningMeals ?? [] as $key => $diningMeal)


                <div class="col-xl-3 col-lg-4 col-md-6 col-12 item shop-filter-item {{ $diningMeal?->tagsInClasses() }}"
                    key='dining-meal-{{ $diningMeal?->id }}'>
                    <div class="menu-card-v1" key='sample-meal-{{ $key }}'>


                        {{-- image / diet --}}
                        <div class="img-box">


                            {{-- diet --}}
                            @if ($diningMeal?->diet)

                            {{-- <span class="tag">{{ $diningMeal?->diet?->name }}</span> --}}

                            @endif
                            {{-- end if --}}


                            <img src='{{ url("{$storagePath}/menu/meals/{$diningMeal->imageFile}") }}'
                                class='of-contain' />
                        </div>





                        {{-- ----------------------------- --}}
                        {{-- ----------------------------- --}}






                        {{-- content --}}
                        <div class="content-box">
                            <div class="box-two">

                                {{-- title - desc --}}
                                <p class="title px-2">{{ $diningMeal?->name }}</p>

                                <p class="desc mb-2">
                                    {{ $diningMeal?->desc }}
                                </p>



                                {{-- ------------------ --}}
                                {{-- ------------------ --}}




                                {{-- navTabs --}}
                                <ul class="nav nav-tabs dining--tabs" id="myTab" role="tablist">


                                    {{-- navLinks --}}
                                    @foreach ($diningMeal?->sizes ?? [] as $outerKey => $mealSize)

                                    <li class="nav-item" role="presentation" wire:ignore
                                        key='dining-meal-size-{{ $mealSize?->mealId }}-{{ $mealSize?->sizeId }}'>
                                        <button class="nav-link @if ($outerKey == 0) active @endif" id="home-tab"
                                            data-bs-toggle="tab"
                                            data-bs-target="#macros--tab-{{ $mealSize?->mealId }}-{{ $mealSize?->sizeId }}"
                                            type="button" role="tab"
                                            aria-controls="macros--tab-{{ $mealSize?->mealId }}-{{ $mealSize?->sizeId }}"
                                            aria-selected="true">{{
                                            $mealSize?->size?->shortName }}</button>
                                    </li>

                                    @endforeach
                                    {{-- end loop --}}


                                </ul>



                                {{-- ------------------------------ --}}
                                {{-- ------------------------------ --}}



                                {{-- tabContent --}}
                                <div class="tab-content" id="myTabContent">



                                    {{-- 1: sizeTab --}}
                                    @foreach ($diningMeal?->sizes ?? [] as $outerKey => $mealSize)

                                    <div class="tab-pane fade @if ($outerKey == 0) show active @endif pt-3"
                                        id="macros--tab-{{ $mealSize?->mealId }}-{{ $mealSize?->sizeId }}"
                                        role="tabpanel"
                                        aria-labelledby="macros--tab-{{ $mealSize?->mealId }}-{{ $mealSize?->sizeId }}"
                                        tabindex="0"
                                        key='macros--tab-{{ $mealSize?->mealId }}-{{ $mealSize?->sizeId }}'>




                                        {{-- price --}}
                                        <div class="price-box">
                                            <p class="price ls--price">
                                                {{ number_format($mealSize?->price ?? 0, 2) }}<span
                                                    class='price--span ms-1'>AED</span></p>
                                        </div>
                                        {{-- endPrice --}}




                                        {{-- -------------------------------------- --}}
                                        {{-- -------------------------------------- --}}




                                        {{-- macros --}}
                                        <div class="ingradient-box">
                                            <div class="row g-0">


                                                {{-- 1: calories --}}
                                                <div class="col-3">
                                                    <div class="border-end">
                                                        <div class="ing-title">
                                                            <p class="">Cal</p>
                                                        </div>
                                                        <div class="ing-desc">
                                                            <p class="">
                                                                {{number_format($mealSize?->afterCookCalories ??
                                                                0, 1)}}</p>
                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="col-3">
                                                    <div class="border-end">
                                                        <div class="ing-title">
                                                            <p class="">P</p>
                                                        </div>
                                                        <div class="ing-desc">
                                                            <p class="">
                                                                {{number_format($mealSize?->afterCookProteins ??
                                                                0, 1)}}g</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="border-end">
                                                        <div class="ing-title">
                                                            <p class="">C</p>
                                                        </div>
                                                        <div class="ing-desc">
                                                            <p class="">
                                                                {{number_format($mealSize?->afterCookCarbs ??
                                                                0, 1)}}g
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="border-end-0">
                                                        <div class="ing-title">
                                                            <p class="">F</p>
                                                        </div>
                                                        <div class="ing-desc">
                                                            <p class="">
                                                                {{number_format($mealSize?->afterCookFats ??
                                                                0, 1)}}g
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- endMacros --}}

                                    </div>


                                    @endforeach
                                    {{-- end loop --}}



                                </div>
                                {{-- endContent --}}



                            </div>
                            {{-- endBackBox --}}


                        </div>
                    </div>
                </div>


                @endforeach
                {{-- end loop --}}


            </div>
            {{-- endRow --}}

        </div>
    </section>










    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}










    {{-- modals --}}
    @section('modals')







    @endsection
    {{-- endSection --}}







    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}






</main>
{{-- endMain --}}