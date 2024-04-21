{{-- stepsOverview --}}
<section class="top-steps-sec light-sec" wire:ignore>
    <div class="container">
        <div class="row">
            <div class="col-12">



                {{-- steps--}}
                <div class="wizard-step-box">



                    {{-- 1: personalize --}}
                    <div class='wizard-steps @if (Request::is("plans/${id}/personalize")) active @endif'
                        data-aos='fade-down' wire:ignore.self>
                        <p class="title">
                            <span class="number">1</span>
                            <span class="text">Personalize</span>
                        </p>
                        <p class="line me-3">
                            <span></span>
                        </p>
                    </div>





                    {{-- 2: checkout --}}
                    <div class='wizard-steps @if (Request::is("plans/${id}/checkout")) active @endif'
                        data-aos='fade-down' data-aos-delay='200' wire:ignore.self>
                        <p class="title">
                            <span class="number">2</span>
                            <span class="text">Checkout</span>
                        </p>
                        <p class="line me-3">
                            <span></span>
                        </p>
                    </div>






                    {{-- 3: getStarted --}}
                    <div class='wizard-steps @if (Request::is("plans/invoice")) active @endif' data-aos='fade-down'
                        data-aos-delay='400' wire:ignore.self>
                        <p class="title">
                            <span class="number">3</span>
                            <span class="text">Invoice</span>
                        </p>
                    </div>


                </div>


            </div>
        </div>
    </div>
</section>
{{-- endSection --}}