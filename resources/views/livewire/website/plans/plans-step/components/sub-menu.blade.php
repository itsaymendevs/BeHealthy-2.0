{{-- stepsOverview --}}
<section class="top-steps-sec light-sec" wire:ignore>
    <div class="container">
        <div class="row">
            <div class="col-12">



                {{-- steps--}}
                <div class="wizard-step-box">



                    {{-- 1: personalize --}}
                    <div class='wizard-steps @if (Request::is("plans/${id}/personalize")) active @endif'>
                        <p class="title">
                            <span class="number">1</span>
                            <span class="text">Personalize</span>
                        </p>
                        <p class="line">
                            <span></span>
                            <i class="fal fa-long-arrow-right"></i>
                        </p>
                    </div>





                    {{-- 2: checkout --}}
                    <div class="wizard-steps">
                        <p class="title">
                            <span class="number">2</span>
                            <span class="text">Checkout</span>
                        </p>
                        <p class="line">
                            <span></span>
                            <i class="fal fa-long-arrow-right"></i>
                        </p>
                    </div>






                    {{-- 3: getStarted --}}
                    <div class="wizard-steps">
                        <p class="title">
                            <span class="number">3</span>
                            <span class="text">Get Started</span>
                        </p>
                    </div>


                </div>


            </div>
        </div>
    </div>
</section>
{{-- endSection --}}