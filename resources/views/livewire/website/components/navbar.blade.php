<header>
    <div class="main-nav">
        <nav class="navbar navbar-expand-lg">
            <div class="container">



                {{-- logo --}}
                <a class="navbar-brand" href="{{ route('website.home') }}">
                    <img src="{{ url('assets/images/logo.png') }}" alt="">
                </a>



                {{-- toggler --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>




                {{-- navLinks --}}
                <div class="collapse navbar-collapse mobile--navbar" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">


                        {{-- 1: home --}}
                        <li class="nav-item">
                            <a class="nav-link @if (Request::is('/', '/home')) active @endif" aria-current="page"
                                href="{{ route('website.home') }}">Home</a>
                        </li>






                        {{-- 2: howItWorks --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('website.home') }}#howItWorks">How it Works</a>
                        </li>







                        {{-- 3: mealPlans --}}
                        <li class="nav-item">
                            <a class="nav-link @if (Request::is('plans', 'plans/*')) active @endif"
                                href="{{ route('website.plans') }}">Meal Plans</a>
                        </li>






                        {{-- 4: dietitation --}}
                        <li class="nav-item">
                            <a class="nav-link" href="#!">Dietitian</a>
                        </li>







                        {{-- 5: blogs --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('website.home') }}#blogs">Blogs</a>
                        </li>







                        {{-- 6: contactUs --}}
                        <li class="nav-item">
                            <a class="nav-link" href="#!">Contact Us</a>
                        </li>






                        {{-- 7: login --}}
                        <li class="nav-item">
                            <a class="green-outline-btn fw-semibold" href="#!">LOGIN</a>
                        </li>




                    </ul>
                </div>
                {{-- end navLinks --}}


            </div>
        </nav>
        {{-- endNav --}}




    </div>
</header>
{{-- endHeader --}}