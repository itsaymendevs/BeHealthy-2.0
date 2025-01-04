{{-- footer --}}
<footer id="footer">








    {{-- ---------------------------------------------- --}}
    {{-- ---------------------------------------------- --}}







    {{-- bottomFooter --}}
    <div class="footer-bottom-inner">
        <div class="container">
            <div class="row">




                <div class="col-lg-2 col-md-4 col-12">
                </div>

                {{-- 1: shortLinks --}}
                <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                    <div class="footer-links-div first-top-footer-links">
                        <p class="footer-heading">Services</p> <!-- Add the heading here -->
                        <a href="{{ route('website.menu') }}" class="footer-link"> Menu </a>
                        <a href="{{ route('website.home') }}#meal-plan-section" class="footer-link"> Plans </a>
                        <a href="{{ route('website.home') }}#how-it-works" class="footer-link"> About Us </a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                    <div class="footer-links-div first-top-footer-links">
                        <p class="footer-heading">Legal</p>
                        <a href="{{ route('website.menu') }}" class="footer-link"> Privacy policy</a>
                        <a href="{{ route('website.home') }}#meal-plan-section" class="footer-link"> Terms & conditions </a>
                        <a href="{{ route('website.home') }}#how-it-works" class="footer-link"> FAQs </a>
                    </div>
                </div>






                {{-- 2: contact --}}
                <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                    <div class="footer-links-div medium-footer-links">
                        <p class="footer-heading">Customer support</p>


                        {{-- 2.1: email --}}
                        <a href="mailto:behealthydxb@gmail.com" class="footer-link">
                            behealthydxb@gmail.com
                        </a>


                        {{-- 2.2: phone --}}
                        <a href="tel:+971549958227" class="footer-link">
                            +971549958227
                        </a>


                        {{-- 2.3: extraPhones --}}
                        <a href="tel:042870799" class="footer-link"> 04-2870799 / 0555531152 </a>

                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                    <div>





                        {{-- 1: subheading --}}
                        <div class="stay-connected-div">
                            <p class="footer-heading">STAY CONNECTED</p>




                       
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



                        
                            <!-- <div class="subscribe">
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
                            </div> -->
                       

                        </div>
                    </div>

                </div>

                <div class="col-lg-3 col-md-4 col-12">
                </div>
            </div>


            
        </div>
    </div>

    
    <div class="footer-end">
    <div class="d-flex container">
        <!-- Second div to appear on the left -->
        
        
        <!-- First div to appear on the right -->
        <div class="col-lg-4 col-md-4 col-sm-4 col-4  text-center">
         <span class="me-2">© Copyright 2024. All rights reserved.</span>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-4" style="text-align:center;">
            <div class="">
                
                <span class="me-2">Powered By</span>
                <img src="{{ url('assets/images/doer.png') }}" alt="Powered By">
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-4  text-center">
            <img src="{{ url('assets/images/card-enhanced.png') }}" alt="Enhanced Card Image">
        </div>
    </div>
</div>

                
    
</footer>

{{-- endFooter --}}