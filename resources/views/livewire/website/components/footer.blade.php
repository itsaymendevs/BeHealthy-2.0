<section id="footer--wrapper">






    {{-- 1: faq --}}
    <section data-aos="fade" data-aos-duration="600" data-aos-delay="400" id="faq--section" class="faq--section">
        <div class="container">
            <div class="row justify-content-start">


                {{-- title - subtitle --}}
                <div class="col-12 col-lg-5 col-xl-4 col-xxl-4 text-center text-lg-start faq--left-col">
                    <h1 class="faq--title fw-800 mt-3 fs-xxl-32 fs-xl-32 fs-lg-30 fs-md-32 fs-sm-24">
                        Common Questions<br />Clear Answers
                    </h1>
                    <p class="faq--subtitle fs-xxl-18 fs-xl-18 fs-lg-17 fs-md-16 fs-sm-16">
                        Everything you need to know about our services, all in one place
                    </p>
                </div>



                {{-- ---------------------------------- --}}
                {{-- ---------------------------------- --}}




                {{-- content --}}
                <div class="col-12 col-lg-7 col-xl-7 col-xxl-8">
                    <div>



                        {{-- 1: according --}}
                        <div class="accordion faq--according" role="tablist" id="accordion-1">



                            {{-- question --}}
                            @foreach ($faqs ?? [] as $question => $answer)


                            <div class="accordion-item faq--item ">
                                <h2 class="accordion-header" role="tab">
                                    <button
                                        class="accordion-button collapsed fs-xxl-16 fs-xl-16 fs-lg-16 fs-md-16 fs-sm-14"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-1 .item-{{ $globalSNCounter }}" aria-expanded="true"
                                        aria-controls="accordion-1 .item-{{ $globalSNCounter }}">
                                        {{ $question }}
                                    </button>
                                </h2>


                                {{-- answer --}}
                                <div class="accordion-collapse item-{{ $globalSNCounter++ }} collapse" role="tabpanel"
                                    data-bs-parent="#accordion-1">


                                    {{-- answerContent --}}
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-lg-16 fs-md-15 fs-sm-13">
                                            {{ $answer }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            {{-- endQuestion --}}


                            @endforeach
                            {{-- end loop --}}


                        </div>
                        {{-- endAccording --}}
                    </div>
                </div>
                {{-- endContent --}}



            </div>
        </div>
    </section>
    {{-- endSection --}}









    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}







    {{-- footerSection --}}
    <section id="footer--section" class="footer--section">


        {{-- overlay --}}
        <div class="footer--overlay"></div>


        {{-- content --}}
        <div class="container-fluid footer--section-container">
            <div class="row">



                {{-- logo --}}
                <div class="col-12 col-md-4 col-xl-4 mb-5 mb-md-0">
                    <img class="footer--section-img" src="{{ url('assets/img/logo/logo.png') }}" />
                </div>






                {{-- bulkLinks --}}
                <div class="col-12 col-sm-6 col-md-4 col-xl-3 mb-5 mb-sm-0">
                    <div class="footer--links-wrapper">

                        {{-- title --}}
                        <div class="d-flex align-items-center justify-content-center justify-content-sm-start">
                            <h5 class="fs-xxl-18">About Us</h5>
                            <hr />
                        </div>


                        {{-- links --}}
                        <div class="d-flex flex-column align-items-center align-items-sm-start">
                            <a class="btn fs-xxl-16" role="button" href="{{ route('website.plans') }}">Our Plans</a><a
                                class="btn fs-xxl-16" role="button" href="{{ route('website.menu') }}">Dining Menu</a>
                            <button class="btn mb-0 fs-xxl-16" type="button">Book Consultation</button>
                        </div>
                    </div>
                </div>







                {{-- bulkLinks II --}}
                <div class="col-12 col-sm-6 col-md-4 col-xl-3 mb-4 mb-sm-0">
                    <div class="footer--links-wrapper">


                        {{-- title --}}
                        <div class="d-flex align-items-center justify-content-center justify-content-sm-start">
                            <h5 class="fs-xxl-18">Reach Us</h5>
                            <hr />
                        </div>





                        {{-- links --}}
                        <div class="d-flex flex-column align-items-center align-items-sm-start">


                            {{-- phone --}}
                            <a class="btn fs-xxl-16" role="button" href="tel: +971 54 102 5008">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    viewBox="0 0 16 16" class="bi bi-telephone">
                                    <path
                                        d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z">
                                    </path>
                                </svg>054 102 5008
                            </a>




                            {{-- whatsapp --}}
                            <a class="btn fs-xxl-16" role="button" href="tel: +971 54 102 5008">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    viewBox="0 0 16 16" class="bi bi-whatsapp">
                                    <path
                                        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z">
                                    </path>
                                </svg>054 300 4030
                            </a>





                            {{-- email --}}
                            <a class="btn mb-0 fs-xxl-16" role="button" href="mailto: help@behealthy.ae">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    viewBox="0 0 16 16" class="bi bi-envelope">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z">
                                    </path>
                                </svg>help@behealthy.ae
                            </a>

                        </div>
                    </div>
                </div>
                {{-- endCol --}}




                {{-- ------------------------------------------ --}}
                {{-- ------------------------------------------ --}}
                {{-- ------------------------------------------ --}}






                {{-- gateways --}}
                <div class="col-12 col-sm-6 col-md-4 col-xl-2 offset-md-8 offset-xl-0 align-self-end mt-4 mt-xl-0">
                    <div
                        class="footer--links-wrapper for-payments d-flex justify-content-center justify-content-sm-start justify-content-xl-center">


                        {{-- 1: visa - master --}}
                        <div class="footer--payments">
                            <img src="{{ url('assets/img/helpers/card-enhanced%20(1).png') }}" width="140"
                                height="22" />
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    {{-- endSection --}}






    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}







    {{-- footerEnd --}}
    <section id="footer-end-section" class="footer-end-section">
        <div class="container-fluid">
            <div class="row align-items-center">



                {{-- rights --}}
                <div class="col-12 col-sm-6 col-lg-4 order-3 order-lg-first">
                    <h6 class="text-center text-sm-start footer--end-paragraph fs-xl-13 fs-xl-13 fs-lg-13 fs-md-13">
                        {{ "@Rights Reserved 2025 — BeHealthy" }}
                    </h6>
                </div>



                {{-- poweredBy --}}
                <div class="col-12 col-lg-4 text-center order-first order-lg-2">
                    <a class="btn footer-end--top fs-xl-13 fs-lg-13 fs-md-13
                    powered--by" role="button" href="#">POWERED BY DOER</a>
                </div>





                {{-- links --}}
                <div class="col-12 col-sm-6 col-lg-4 order-2 order-lg-last">
                    <div class="d-flex justify-content-center justify-content-sm-end">

                        {{-- privacy --}}
                        <a class="btn footer-end--links fs-xl-13 fs-lg-13 fs-md-13 powered--by-related" role="button"
                            href="#">Privacy Policy</a>



                        {{-- terms --}}
                        <a class="btn footer-end--links fs-xl-13 fs-lg-13 fs-md-13 powered--by-related" role="button"
                            href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
                {{-- endLinks --}}




            </div>
        </div>
    </section>
    {{-- endSection --}}




</section>
{{-- endWrapper --}}