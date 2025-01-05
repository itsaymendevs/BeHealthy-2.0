{{-- section --}}
<section data-aos="fade" data-aos-duration="600" data-aos-delay="300" id="plans--section"
    class="plans--section section--padding">
    <div class="container-fluid">
        <div class="row align-items-end">


            {{-- title --}}
            <div class="col-12 col-md-6 col-lg-7 col-xl-8">
                <h1
                    class="text-center text-sm-start plans--title mb-2 mb-md-0 fw-800 fs-xl-38 fs-lg-30 fs-md-30 fs-sm-23 px-3 px-sm-0">
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
        <div class="d-block mt-2 pt-2 pt-sm-0 mt-sm-4" wire:ignore>
            <div class="swiper plans--swiper-1 with--pagination">
                <div class="swiper-wrapper">




                    {{-- loop - plans --}}
                    @foreach ($plans ?? [] as $key => $plan)


                    <a href="{{ $globalProfile->plansURL }}/{{ $plan->nameURL }}/customization"
                        class="plans--card swiper-slide init--link" key='single-plan-{{ $key }}'>
                        <img src="{{ " {$storagePath}/menu/plans/{$plan->imageFile}" }}" />
                        <div class="plans--card-content">
                            <p class="plans--card-caption fs-xxl-13 fs-xl-13 fs-lg-13 fs-md-13 fs-sm-13">
                                Top Rated
                            </p>
                            <h1 class="plans--card-title fs-xxl-22 fs-xl-22 fs-lg-21 fs-md-21 fs-sm-21">
                                {{ $plan->name }}
                            </h1>
                            <p class="plans--card-subtitle truncate-text-2l fs-xxl-15 fs-xl-15
                        fs-lg-15 fs-md-14 fs-sm-14">{{ $plan->desc }}</p>
                            <div class="plans--card-button-wrap">
                                <hr />
                            </div>
                        </div>
                    </a>


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