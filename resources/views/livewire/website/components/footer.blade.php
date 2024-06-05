{{-- footer --}}
<footer id="footer">
    <div class="footer-top-inner">
        <div class="container">
            <div class="row">



                {{-- leftSection --}}
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 order-lg-0 order-md-0 order-sm-0 order-1">
                    <div class="stay-connected-div">
                        <p class="title">STAY CONNECTED</p>




                        {{-- socialLinks --}}
                        <div class="social">




                            {{-- 1: tiktok --}}
                            <a href="https://www.tiktok.com/@behealthydxb?_t=8jI6o7ql8pV&_r=1" class="social-links">
                                <i class="fab fa-tiktok"></i>
                            </a>




                            {{-- 2: instagram --}}
                            <a href="https://www.instagram.com/behealthy_dxb?igsh=OTh5d3R5NndocHdn"
                                class="social-links">
                                <i class="fab fa-instagram"></i>
                            </a>




                            {{-- 3: snapchat --}}
                            <a href="#" class="social-links me-0">
                                <i class="fab fa-snapchat-ghost"></i>
                            </a>




                        </div>
                    </div>
                </div>







                {{-- ---------------------------------------- --}}
                {{-- ---------------------------------------- --}}







                {{-- rightSection --}}
                <div class="col-lg-8 col-md-8 col-sm-8 col-12 order-lg-1 order-md-1 order-sm-1 order-0">
                    <div class="text-center subscribe-div-border">





                        {{-- 1: subheading --}}
                        <p class="title text-center">STAY CONNECTED</p>
                        <p class="subtitle">For spam-free news, inspo + tips on all things healthy living, sign up to
                            our weekly newsletter.</p>





                        {{-- 2: subscriptionForm --}}
                        <div class="subscribe">
                            <form action="">
                                <div class="input-group mb-3">


                                    {{-- input --}}
                                    <input type="text" class="form-control" placeholder="Email Address"
                                        aria-describedby="subscribe" />


                                    {{-- submitButton --}}
                                    <span class="input-group-text" id="subscribe">
                                        <button type="button" class="btn btn-subscribe">GO</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        {{-- endForm --}}


                    </div>
                </div>
            </div>
            {{-- endRow --}}



        </div>
    </div>
    {{-- endTopFooter --}}








    {{-- ---------------------------------------------- --}}
    {{-- ---------------------------------------------- --}}







    {{-- bottomFooter --}}
    <div class="footer-bottom-inner">
        <div class="container">
            <div class="row">






                {{-- 1: shortLinks --}}
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="footer-links-div first-top-footer-links">
                        <a href="{{ route('website.menu') }}" class="footer-link"> Menu </a>
                        <a href="{{ route('website.home') }}#meal-plan-section" class="footer-link"> Plans </a>
                        <a href="{{ route('website.home') }}#how-it-works" class="footer-link"> About Us </a>
                    </div>
                </div>





                {{-- 2: contact --}}
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="footer-links-div medium-footer-links">
                        <p class="title">Customer support</p>


                        {{-- 2.1: email --}}
                        <a href="mailto:behealthydxb@gmail.com" class="footer-link">
                            behealthydxb@gmail.com
                        </a>


                        {{-- 2.2: phone --}}
                        <a href="tel:+971549958227" class="footer-link">
                            +971549958227
                        </a>


                        {{-- 2.3: extraPhones --}}
                        <div class="d-flex align-items-center mt-3 ft-2-num">
                            <a href="tel:042870799" class="footer-link"> 04-2870799 </a>
                            <span class="mx-2">/</span>
                            <a href="tel:0555531152" class="footer-link mt-0">
                                0555531152
                            </a>
                        </div>

                    </div>
                </div>









                {{-- --------------------------- --}}
                {{-- --------------------------- --}}





                {{-- privacy --}}
                <div class="offset-lg-2 offset-md-2 col-lg-2 col-md-2 col-12">
                    <div class="footer-links-div copyright-footer-links-div">
                        <p class="copyright-text">©2024 Be Healthy</p>
                        <a href="#" class="footer-link"> Terms of Use </a>
                        <a href="#" class="footer-link remove-margin-768">
                            Privacy Policy
                        </a>
                    </div>
                </div>




                {{-- poweredBy --}}
                <div class="col-12">
                    <div class="text-center">
                        <a class="trustpilot-link justify-content-center" href="">
                            <span>Powered By</span>
                            <img class="trustpilot-title" src="{{ url('assets/images/doer-tran.png') }}" alt="title" />
                        </a>
                    </div>
                </div>
                {{-- endWrap --}}


            </div>
        </div>
    </div>
</footer>
{{-- endFooter --}}