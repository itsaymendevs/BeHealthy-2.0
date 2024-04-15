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
                                <p>Most Popular</p>
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
                        <div class="col-lg-7 col-md-12 col-12">
                            <div class="content-box">
                                <h2>{{ $plan->name }}</h2>
                                <p class="desc">{{ $plan->longDesc }}</p>
                            </div>
                        </div>


                        {{-- image --}}
                        <div class="col-lg-5 col-md-12 col-12">
                            <div class="img-box">
                                <img src="{{ $storagePath . '/menu/plans/' . $plan->imageFile }}" alt=""
                                    class='of-cover'>
                            </div>
                        </div>
                    </div>
                    {{-- endRow --}}













                    {{-- today's scheduleMeals For This Plan --}}
                    <div class="row d-none mt-4">
                        <div class="col-12">
                            <div class="">
                                <div class="owl-carousel owl-theme" id="include-meal-carsoule">
                                    <div class="included-meal-item">


                                        {{-- image --}}
                                        <div class="img-box">
                                            <p class="tag">Iftar</p>
                                            <img src="assets/images/meal-1.JPG" alt="">
                                        </div>


                                        {{-- subTitle --}}
                                        <div class="content-box">
                                            <p class="title">Food Thali</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- endDiv --}}


                </div>
            </div>
        </div>
    </div>
</div>
{{-- endModal --}}