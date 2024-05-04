<div class="modal modal-lg fade custom--modal" id="plan-details" tabindex="-1" aria-labelledby="plan-detail-modalLabel"
    aria-hidden="true" wire:ignore>
    <div class="modal-dialog modal-dialog-centered">



        {{-- modalContent --}}
        <div class="modal-content">
            <div class="modal-body">
                <div class="plan-detail-modal-box">



                    {{-- closeButton --}}
                    <div class="row align-items-start mb-3">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="label-box">
                                <p class='text-uppercase fw-semibold'>Most Popular</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="d-flex align-items-center justify-content-end">
                                <button type="button" class="btn-close btn--close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    </div>








                    {{-- ------------------------------- --}}
                    {{-- ------------------------------- --}}








                    {{-- row --}}
                    <div class="row mb-2">



                        {{-- name - desc --}}
                        <div class="col-lg-7 col-md-12 col-12 order-last order-lg-first">
                            <div class="content-box">
                                <h2 class='fw-bold'>{{ $plan->name }}</h2>
                                <p class="desc">{{ $plan->longDesc }}</p>
                            </div>
                        </div>


                        {{-- image --}}
                        <div class="col-lg-5 col-md-12 col-12 order-first order-lg-last mb-4 mb-lg-0">
                            <div class="img-box plan text-start text-lg-center">
                                <img src="{{ $storagePath . '/menu/plans/' . $plan->imageFile }}" alt=""
                                    class='of-contain'>
                            </div>
                        </div>
                    </div>
                    {{-- endRow --}}













                    {{-- today's scheduleMeals For This Plan --}}
                    <div class="row mt-4" wire:ignore>
                        <div class="col-12">
                            <div class="">
                                <div class="owl-carousel owl-theme" id="include-meal-carsoule">




                                    {{-- loop - sampleMeals --}}
                                    @foreach ($sampleMeals as $sampleMeal)

                                    <div class="included-meal-item">


                                        {{-- image --}}
                                        <div class="img-box">
                                            <p class="tag text-uppercase fw-semibold fs-12">{{
                                                $sampleMeal->mealType->name }}</p>
                                            <img
                                                src="{{ $storagePath . '/menu/meals/' . ($sampleMeal->meal->imageFile ?? $defaultPlate) }}">
                                        </div>


                                        {{-- subTitle --}}
                                        <div class="content-box">
                                            <p class="title">{{ $sampleMeal->name }}</p>
                                        </div>



                                    </div>
                                    @endforeach
                                    {{-- end loop --}}



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- endModal --}}