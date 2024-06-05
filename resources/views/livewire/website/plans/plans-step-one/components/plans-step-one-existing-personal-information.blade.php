<div class="modal modal-lg fade custom--modal" id="existing-personal-information" tabindex="-1"
    aria-labelledby="plan-detail-modalLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered">



        {{-- modalContent --}}
        <div class="modal-content">
            <div class="modal-body">
                <div class="plan-detail-modal-box">



                    {{-- closeButton --}}
                    <div class="row align-items-start mb-3">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="label-box">
                                <p>Account Information</p>
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
                    <form wire:submit='continue' class="row mt-5 justify-content-center">




                        {{-- email --}}
                        <div class="col-lg-6 col-md-6 col-12 mb-2">
                            <div class="input-group margin">
                                <input required="" type="email" autocomplete="off" class="input"
                                    wire:model='instance.email'>
                                <label class="user-label">Email Address</label>
                            </div>
                        </div>







                        {{-- password --}}
                        <div class="col-lg-6 col-md-6 col-12 mb-2">
                            <div class="input-group margin">
                                <input required="" type="password" autocomplete="off" class="input"
                                    wire:model='instance.password'>
                                <label class="user-label">Password</label>
                            </div>
                        </div>






                        {{-- hasAccount --}}
                        <div class="col-8 col-sm-6 col-lg-4 text-center mb-3 mb-sm-0">
                            <button
                                class="green-btn bg-light  py-2 px-2 w-100 text-dark text-uppercase fw-semibold fs-14"
                                type='button' data-bs-toggle='modal' data-bs-target='#personal-information'>New
                                Customer</button>
                        </div>




                        {{-- actions --}}
                        <div class="col-8 col-sm-6 col-lg-4 text-center">
                            <button class="green-btn py-2 px-2 w-100 text-uppercase fw-semibold fs-14 "
                                wire:loading.attr='disabled'>Continue</button>
                        </div>



                    </form>
                    {{-- endRow --}}


                </div>
            </div>
        </div>
    </div>
</div>
{{-- endModal --}}