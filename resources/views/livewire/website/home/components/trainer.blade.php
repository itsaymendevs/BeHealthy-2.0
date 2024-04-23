<div class="modal modal-lg fade custom--modal" id="trainer" tabindex="-1" aria-labelledby="plan-detail-modalLabel"
    aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered">



        {{-- modalContent --}}
        <div class="modal-content">
            <div class="modal-body">
                <div class="plan-detail-modal-box">



                    {{-- closeButton --}}
                    <div class="row align-items-start mb-4">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="label-box">
                                <p>Book Your Personal Trainer</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="d-flex align-items-center justify-content-end">
                                <button type="button" class="btn-close btn--close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    </div>






                    {{-- ----------------------------- --}}
                    {{-- ----------------------------- --}}






                    {{-- form --}}
                    <form class='row'>



                        {{-- firstName --}}
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="input-group margin">
                                <input required="" type="text" autocomplete="off" class="input"
                                    wire:model='instance.firstName'>
                                <label class="user-label">First Name</label>
                            </div>
                        </div>





                        {{-- lastName --}}
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="input-group margin">
                                <input required="" type="text" autocomplete="off" class="input"
                                    wire:model='instance.lastName'>
                                <label class="user-label">Last Name</label>
                            </div>
                        </div>



                        {{-- email --}}
                        <div class="col-lg-12 col-12">
                            <div class="input-group margin">
                                <input required="" type="text" autocomplete="off" class="input"
                                    wire:model='instance.email'>
                                <label class="user-label">Email Address</label>
                            </div>
                        </div>





                        {{-- ----------------------------- --}}
                        {{-- ----------------------------- --}}







                        {{-- gender --}}
                        <div class="col-12 text-center mt-2">
                            <a class="green-btn py-1 px-4 mx-2" href='https://www.strongafmethod.com/aleens'>
                                <i class="fal fa-venus me-2"></i>Female
                            </a>

                            <a class="green-btn py-1 px-4  mx-2" href='https://www.strongafmethod.com/tacoaching'>
                                <i class="fal fa-mars me-2"></i> Male
                            </a>

                        </div>



                        <div class="col-6 text-center">

                        </div>



                    </form>
                    {{-- endForm --}}



                </div>
            </div>
        </div>
    </div>
</div>
{{-- endModal --}}