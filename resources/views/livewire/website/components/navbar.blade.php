{{-- header --}}
<header>




    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container-fluid">



            {{-- 1: logo --}}
            <a class="navbar-brand" href="{{ route('website.home') }}">
                <img src="{{ url('assets/images/logo.png') }}" width="160px" style="filter: brightness(0.5);" alt="">
            </a>





            {{-- ---------------------------------- --}}
            {{-- ---------------------------------- --}}





            {{-- 1.2: navbarToggle --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>




            {{-- 1.3: navbar --}}
            <div class="collapse navbar-collapse" id="navbarSupportedContent">



                {{-- navLinks --}}
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('website.home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('website.menu') }}">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('website.plans') }}">Plans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('website.home') }}#how-it-works">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('website.blogs') }}">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('website.contact') }}">Contact Us</a>
                    </li>
                </ul>





                {{-- ------------------------- --}}
                {{-- ------------------------- --}}






                {{-- navActions --}}
                <div class="d-none d-lg-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                        {{-- 1: help --}}
                        <li class="nav-item">
                            <a class="nav-link" href="#">Help</a>
                        </li>


                        {{-- 2: login --}}
                        <li class="nav-item">
                            <a class="btn btn-primary nav-button text-white" href="#">Login</a>
                        </li>
                    </ul>
                </div>



            </div>
        </div>
    </nav>
    {{-- end navbar --}}











    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}











    {{-- promocodeToast --}}
    <div class="toast-main-div" id="openToast">
        <div class="notification--reminder">
            <p class="m-0">
                Up to 45 AED off your first order? Just use code <b>YOUR20</b> at checkout
            </p>
        </div>
        <div class="cross-btn-div">
            <a class="exit--toast" href="javascript:void(0);">
                <i class="fal fa-times"></i>
            </a>
        </div>
    </div>








    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}







    {{-- 1: Home Banner --}}
    @if (Request::is('/'))

    <div class="main-banner-div">
        <div class="banner-inner">
            <div class="banner-wrapper">
                <div class="">
                    <div class="">
                        <h1 class="title desktop">
                            PREMIUM MEAL PREP TO FUEL YOUR GOALS
                        </h1>
                        <p>
                            CHEF-CRAFTED HEALTHY MEAL DELIVERY, FRESH AND READY TO EAT.
                        </p>
                    </div>
                    <button type="button" class="btn btn-black btn-banner">
                        Get Started
                    </button>
                </div>
            </div>
        </div>
    </div>




    {{-- 2: sidePages Banner --}}
    @else


    <div class="sub-banner-div">
        <div class="banner-inner">
            <div class="banner-wrapper">
                <div class="">
                    <div class="">
                        <h1 class="title desktop">Shop Now</h1>
                    </div>
                    <div class="breadcrumbs">
                        <a href="{{ route('website.home') }}">
                            <i class="fal fa-home"></i>
                        </a>
                        <i class="fal fa-long-arrow-right"></i>
                        <p>Our shop</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endif
    {{-- end if --}}







</header>
{{-- endHeader --}}