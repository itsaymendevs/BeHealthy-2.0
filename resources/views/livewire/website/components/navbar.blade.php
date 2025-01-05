{{-- section --}}
<section id="navbar--section" class="navbar--section">
    <div class="container-fluid navbar--section-wrapper" data-aos="fade-down" data-aos-duration="600">
        <div class="row align-items-center">




            {{-- navbar --}}
            <div class="col-6 col-sm-7 col-md-8 col-xl-5 order-last order-xl-first">



                {{-- mobileMenu --}}
                <livewire:website.components.navbar-mobile />



                {{-- ----------------------------------------- --}}
                {{-- ----------------------------------------- --}}
                {{-- ----------------------------------------- --}}




                {{-- desktopMenu --}}
                <nav class="navbar navbar-light navbar-expand-md py-0 mt-2 d-none d-lg-block">
                    <div class="container-fluid">

                        {{-- toggler --}}
                        <button data-bs-toggle="collapse" class="navbar-toggler mx-auto me-0"
                            data-bs-target="#navcol-1">
                            <span class="visually-hidden">Toggle navigation</span><span
                                class="navbar-toggler-icon"></span>
                        </button>


                        {{-- navLinks --}}
                        <div class="collapse navbar-collapse justify-content-end justify-content-xl-start navbar--collapse"
                            id="navcol-1">
                            <ul class="navbar-nav navbar--menu">


                                {{-- home --}}
                                <li class="nav-item" data-aos="fade" data-aos-duration="600" data-aos-delay="300">
                                    <a class="nav-link @if (Request::is('', '/')) active @endif"
                                        href="{{ route('website.home') }}">Home</a>
                                </li>


                                {{-- plans --}}
                                <li class="nav-item" data-aos="fade" data-aos-duration="600" data-aos-delay="350">
                                    <a class="nav-link @if (Request::is('plans')) active @endif"
                                        href="{{ route('website.plans') }}">Plans</a>
                                </li>


                                {{-- menu --}}
                                <li class="nav-item" data-aos="fade" data-aos-duration="600" data-aos-delay="400">
                                    <a class="nav-link @if (Request::is('menu')) active @endif"
                                        href="{{ route('website.menu') }}">Menu</a>
                                </li>



                                {{-- contact --}}
                                <li class="nav-item" data-aos="fade" data-aos-duration="600" data-aos-delay="450">
                                    <a class="nav-link @if (Request::is('contact')) active @endif" href="#">Contact</a>
                                </li>



                                {{-- about --}}
                                <li class="nav-item" data-aos="fade" data-aos-duration="600" data-aos-delay="500">
                                    <a class="nav-link @if (Request::is('#about')) active @endif" href="#">About Us</a>
                                </li>
                            </ul>
                        </div>
                        {{-- end navLinks --}}

                    </div>
                </nav>
            </div>
            {{-- endCol --}}






            {{-- -------------------------------------------------- --}}
            {{-- -------------------------------------------------- --}}
            {{-- -------------------------------------------------- --}}







            {{-- logo --}}
            <div class="col-6 col-sm-5 col-md-4 col-xl-2">
                <img data-aos="fade" data-aos-duration="600" data-aos-delay="800" class="navbar--logo"
                    src="{{ url('assets/img/logo/logo.png') }}" />
            </div>







            {{-- -------------------------------------------------- --}}
            {{-- -------------------------------------------------- --}}
            {{-- -------------------------------------------------- --}}







            {{-- featButtons --}}
            <div class="col-5 col-xl-5 d-none d-xl-block">
                <nav class="navbar navbar-light navbar-expand-md py-0">
                    <div class="container-fluid">

                        {{-- toggler - notShown --}}
                        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2">
                            <span class="visually-hidden">Toggle navigation</span><span
                                class="navbar-toggler-icon"></span>
                        </button>


                        {{-- navLinks --}}
                        <div class="collapse navbar-collapse" id="navcol-2">
                            <ul class="navbar-nav ms-auto navbar--menu">


                                {{-- help --}}
                                <li class="nav-item">
                                    <a class="nav-link btn--scheme-outline-theme me-0 border-bottom-0" href="#">Help</a>
                                </li>


                                {{-- sign --}}
                                <li class="nav-item">
                                    <a class="nav-link btn--scheme-theme me-0 border-bottom-0"
                                        href="{{ $globalProfile->applicationURL }}">SIGN IN</a>
                                </li>
                            </ul>
                        </div>
                        {{-- end navLinks --}}




                    </div>
                </nav>
            </div>
            {{-- endFeatButtons --}}




        </div>
    </div>
</section>
{{-- endSection --}}