{{-- wrapper --}}
<main>




    {{-- head --}}
    @section('head')



    {{-- title - description - keywords meta --}}
    <title>BeHealthy: Best Healthy Meal Plans Provider in Dubai</title>

    <meta name="description"
        content="BeHealthy delivers delectable, nutritious meal plans for well-being. Achieve your goals with the best healthy meal plans provider in Dubai. Savor goodness!">

    <meta name="keywords"
        content="Healthy Meal Plans Provider in Dubai, Best Healthy Meal Plans Provider in Dubai, Healthy Meal Plans Provider">


    @endsection
    {{-- endHead --}}










    {{-- ------------------------------------------------ --}}
    {{-- ------------------------------------------------ --}}








    {{-- 1: instagram --}}
    <section id="insta-section">
        <div class="container-fluid">



            {{-- row --}}
            <div class="row">
                <div class="col-12" style="background-color: #282828">
                    <div class="">



                        {{-- carousel --}}
                        <div class="owl-carousel owl-theme insta-slider" id="insta-slider"
                            style="background-color: #282828">


                            {{-- singleBox --}}
                            <div class="img-box" style="background-color: #282828">
                                <img src="{{ url('assets/images/insta/1.jpeg') }}" alt="" />
                                <div class="insta-box">
                                    <a href="https://www.instagram.com/behealthy_dxb?igsh=OTh5d3R5NndocHdn">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>


                            {{-- singleBox --}}
                            <div class="img-box">
                                <img src="{{ url('assets/images/insta/2.jpeg') }}" alt="" />
                                <div class="insta-box">
                                    <a href="https://www.instagram.com/behealthy_dxb?igsh=OTh5d3R5NndocHdn">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>

                            {{-- singleBox --}}
                            <div class="img-box">
                                <img src="{{ url('assets/images/insta/3.jpeg.jpg') }}" alt="" />
                                <div class="insta-box">
                                    <a href="https://www.instagram.com/behealthy_dxb?igsh=OTh5d3R5NndocHdn">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>


                            {{-- singleBox --}}
                            <div class="img-box">
                                <img src="{{ url('assets/images/insta/4.png') }}" alt="" />
                                <div class="insta-box">
                                    <a href="https://www.instagram.com/behealthy_dxb?igsh=OTh5d3R5NndocHdn">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>


                            {{-- singleBox --}}
                            <div class="img-box">
                                <img src="{{ url('assets/images/insta/5.jpeg') }}" alt="" />
                                <div class="insta-box">
                                    <a href="https://www.instagram.com/behealthy_dxb?igsh=OTh5d3R5NndocHdn">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>


                            {{-- singleBox --}}
                            <div class="img-box">
                                <img src="{{ url('assets/images/insta/6.jpeg') }}" alt="" />
                                <div class="insta-box">
                                    <a href="https://www.instagram.com/behealthy_dxb?igsh=OTh5d3R5NndocHdn">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>


                            {{-- singleBox --}}
                            <div class="img-box">
                                <img src="{{ url('assets/images/insta/7.jpeg') }}" alt="" />
                                <div class="insta-box">
                                    <a href="https://www.instagram.com/behealthy_dxb?igsh=OTh5d3R5NndocHdn">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>


                            {{-- singleBox --}}
                            <div class="img-box">
                                <img src="{{ url('assets/images/insta/8.jpeg') }}" alt="" />
                                <div class="insta-box">
                                    <a href="https://www.instagram.com/behealthy_dxb?igsh=OTh5d3R5NndocHdn">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- endCarousel --}}




                    </div>
                </div>
            </div>
            {{-- endRow --}}




        </div>
    </section>
    {{-- endSection --}}












    {{-- ---------------------------------------------------- --}}
    {{-- ---------------------------------------------------- --}}










    {{-- 2: mealPans --}}
    <section id="meal-plan-section">
        <div class="container">




            {{-- title --}}
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2 class="title">PICK YOUR MEAL PLAN</h2>
                    </div>
                </div>
            </div>






            {{-- ---------------------------- --}}
            {{-- ---------------------------- --}}







            {{-- row --}}
            <div class="row">
                <div class="col-12">
                    <div class="">




                        {{-- carousel --}}
                        <div class="owl-carousel owl-theme meal-plan-slider" id="meal-plan-slider">



                            {{-- 2.1: loop - plans --}}
                            @foreach ($plans as $plan)


                            <div class="meal-plan-card">
                                <div class="card">


                                    {{-- 2.2: imageFile --}}
                                    <img src='{{ "{$storagePath}/menu/plans/{$plan->imageFile}"  }}'
                                        class="card-img-top" alt="{{ $plan->name }}" />




                                    {{-- 2.3: name - description --}}
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $plan->name }}</h5>
                                        <p class="card-text">{{ $plan->desc }}</p>
                                    </div>



                                    {{-- :: viewPlan --}}
                                    <div class="card-btn-div">
                                        <a href="{{ route('website.plans.stepOne', [$plan->id]) }}"
                                            class="btn btn-black">View Plan</a>
                                    </div>


                                </div>
                            </div>

                            @endforeach
                            {{-- end loop --}}



                        </div>
                    </div>
                </div>
                {{-- endRow --}}


            </div>
        </div>
    </section>
    {{-- endSection --}}











    {{-- ---------------------------------------------------- --}}
    {{-- ---------------------------------------------------- --}}











    {{-- 3: --}}
    <section id="insta-section" class="bg-white meal-insta-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="">


                        {{-- carousel --}}
                        <div class="owl-carousel owl-theme insta-slider" id="insta-slider">


                            {{-- singlePost --}}
                            <div class="img-box">
                                <img src="{{ url('assets/images/seafood/custed-salmon.jpeg') }}" alt="" />
                                <div class="insta-box">
                                    <a href="https://www.instagram.com/behealthy_dxb?igsh=OTh5d3R5NndocHdn">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>



                            {{-- singlePost --}}
                            <div class="img-box">
                                <img src="{{ url('assets/images/chicken/dragon-chicken.jpeg') }}" alt="" />
                                <div class="insta-box">
                                    <a href="https://www.instagram.com/behealthy_dxb?igsh=OTh5d3R5NndocHdn">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>


                            {{-- singlePost --}}
                            <div class="img-box">
                                <img src="{{ url('assets/images/salads/kale-salad.jpeg') }}" alt="" />
                                <div class="insta-box">
                                    <a href="https://www.instagram.com/behealthy_dxb?igsh=OTh5d3R5NndocHdn">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>


                            {{-- singlePost --}}
                            <div class="img-box">
                                <img src="{{ url('assets/images/snacks/peanut-steak.jpeg') }}" alt="" />
                                <div class="insta-box">
                                    <a href="https://www.instagram.com/behealthy_dxb?igsh=OTh5d3R5NndocHdn">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>


                            {{-- singlePost --}}
                            <div class="img-box">
                                <img src="{{ url('assets/images/breakfast/chicken-sandwich.jpg') }}" alt="" />
                                <div class="insta-box">
                                    <a href="https://www.instagram.com/behealthy_dxb?igsh=OTh5d3R5NndocHdn">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>


                            {{-- singlePost --}}
                            <div class="img-box">
                                <img src="{{ url('assets/images/pasta/chicken-penne-pasta.jpeg') }}" alt="" />
                                <div class="insta-box">
                                    <a href="https://www.instagram.com/behealthy_dxb?igsh=OTh5d3R5NndocHdn">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>


                            {{-- singlePost --}}
                            <div class="img-box">
                                <img src="{{ url('assets/images/special-item/chicken-biryani.jpeg') }}" alt="" />
                                <div class="insta-box">
                                    <a href="https://www.instagram.com/behealthy_dxb?igsh=OTh5d3R5NndocHdn">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>


                            {{-- singlePost --}}
                            <div class="img-box">
                                <img src="{{ url('assets/images/green-beens/immunity.jpeg') }}" alt="" />
                                <div class="insta-box">
                                    <a href="https://www.instagram.com/behealthy_dxb?igsh=OTh5d3R5NndocHdn">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- endCarousel --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- endSection --}}




    {{-- Sample Menu Section --}}
    <section class="sample-menu-sec">
        <div class="container">
            {{-- heading --}}
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2 class="title">Sample Meals</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="sample-menu-item">
                        <div class="content-box">
                            <p class="title">
                                Lunch Box
                            </p>
                            <div class="item">
                                <p class="title">
                                    KCAL
                                </p>
                                <p class="number">
                                    299
                                </p>
                            </div>
                            <div class="item">
                                <p class="title">
                                    Protien
                                </p>
                                <p class="number">
                                    299
                                </p>
                            </div>
                            <div class="item">
                                <p class="title">
                                    Carbs
                                </p>
                                <p class="number">
                                    299
                                </p>
                            </div>
                            <div class="item">
                                <p class="title">
                                    Fat
                                </p>
                                <p class="number">
                                    299
                                </p>
                            </div>
                            <div class="svg-box">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60" x="0" y="0"
                                    viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                    class="">
                                    <g>
                                        <path
                                            d="M54.921 20.297a1 1 0 0 0-.92-.611H10a1 1 0 0 0-.718 1.698l22 22.627a1 1 0 0 0 1.434 0l22-22.628a1 1 0 0 0 .204-1.086z"
                                            fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="{{url('assets/images/sample-menu/dummy.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="sample-menu-item">
                        <div class="content-box">
                            <p class="title">
                                Lunch Box
                            </p>
                            <div class="item">
                                <p class="title">
                                    KCAL
                                </p>
                                <p class="number">
                                    299
                                </p>
                            </div>
                            <div class="item">
                                <p class="title">
                                    Protien
                                </p>
                                <p class="number">
                                    299
                                </p>
                            </div>
                            <div class="item">
                                <p class="title">
                                    Carbs
                                </p>
                                <p class="number">
                                    299
                                </p>
                            </div>
                            <div class="item">
                                <p class="title">
                                    Fat
                                </p>
                                <p class="number">
                                    299
                                </p>
                            </div>
                            <div class="svg-box">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60" x="0" y="0"
                                    viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                    class="">
                                    <g>
                                        <path
                                            d="M54.921 20.297a1 1 0 0 0-.92-.611H10a1 1 0 0 0-.718 1.698l22 22.627a1 1 0 0 0 1.434 0l22-22.628a1 1 0 0 0 .204-1.086z"
                                            fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="{{url('assets/images/sample-menu/dummy.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="sample-menu-item">
                        <div class="content-box">
                            <p class="title">
                                Lunch Box
                            </p>
                            <div class="item">
                                <p class="title">
                                    KCAL
                                </p>
                                <p class="number">
                                    299
                                </p>
                            </div>
                            <div class="item">
                                <p class="title">
                                    Protien
                                </p>
                                <p class="number">
                                    299
                                </p>
                            </div>
                            <div class="item">
                                <p class="title">
                                    Carbs
                                </p>
                                <p class="number">
                                    299
                                </p>
                            </div>
                            <div class="item">
                                <p class="title">
                                    Fat
                                </p>
                                <p class="number">
                                    299
                                </p>
                            </div>
                            <div class="svg-box">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60" x="0" y="0"
                                    viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                    class="">
                                    <g>
                                        <path
                                            d="M54.921 20.297a1 1 0 0 0-.92-.611H10a1 1 0 0 0-.718 1.698l22 22.627a1 1 0 0 0 1.434 0l22-22.628a1 1 0 0 0 .204-1.086z"
                                            fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="{{url('assets/images/sample-menu/dummy.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="sample-menu-item">
                        <div class="content-box">
                            <p class="title">
                                Lunch Box
                            </p>
                            <div class="item">
                                <p class="title">
                                    KCAL
                                </p>
                                <p class="number">
                                    299
                                </p>
                            </div>
                            <div class="item">
                                <p class="title">
                                    Protien
                                </p>
                                <p class="number">
                                    299
                                </p>
                            </div>
                            <div class="item">
                                <p class="title">
                                    Carbs
                                </p>
                                <p class="number">
                                    299
                                </p>
                            </div>
                            <div class="item">
                                <p class="title">
                                    Fat
                                </p>
                                <p class="number">
                                    299
                                </p>
                            </div>
                            <div class="svg-box">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60" x="0" y="0"
                                    viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                    class="">
                                    <g>
                                        <path
                                            d="M54.921 20.297a1 1 0 0 0-.92-.611H10a1 1 0 0 0-.718 1.698l22 22.627a1 1 0 0 0 1.434 0l22-22.628a1 1 0 0 0 .204-1.086z"
                                            fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="{{url('assets/images/sample-menu/dummy.png')}}" alt="">
                        </div>
                    </div>
                </div>
                {{-- <div class="col-12">
                    <div class="">
                        <div class="owl-carousel owl-theme" id="sample-menu-slider">
                            <div class="sample-menu-item">
                                <div class="content-box">
                                    <p class="title">
                                        Lunch Box
                                    </p>
                                    <div class="item">
                                        <p class="title">
                                            KCAL
                                        </p>
                                        <p class="number">
                                            299
                                        </p>
                                    </div>
                                    <div class="item">
                                        <p class="title">
                                            Protien
                                        </p>
                                        <p class="number">
                                            299
                                        </p>
                                    </div>
                                    <div class="item">
                                        <p class="title">
                                            Carbs
                                        </p>
                                        <p class="number">
                                            299
                                        </p>
                                    </div>
                                    <div class="item">
                                        <p class="title">
                                            Fat
                                        </p>
                                        <p class="number">
                                            299
                                        </p>
                                    </div>
                                    <div class="svg-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60" x="0"
                                            y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve" class="">
                                            <g>
                                                <path
                                                    d="M54.921 20.297a1 1 0 0 0-.92-.611H10a1 1 0 0 0-.718 1.698l22 22.627a1 1 0 0 0 1.434 0l22-22.628a1 1 0 0 0 .204-1.086z"
                                                    fill="#ffffff" opacity="1" data-original="#000000" class="">
                                                </path>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="img-box">
                                    <img src="{{url('assets/images/sample-menu/dummy.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    {{-- endSection --}}



    {{-- ---------------------------------------------------- --}}
    {{-- ---------------------------------------------------- --}}


    {{-- aboutUs --}}
    <section id="how-it-works">
        <div class="container">


            {{-- heading --}}
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2 class="title">About Us</h2>
                    </div>
                </div>
            </div>


            {{-- row --}}
            <div class="row align-items-center">


                {{-- cover --}}
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="">
                        <img src="{{ url('assets/images/banner/banner.jpg') }}" alt="" />
                    </div>
                </div>



                {{-- aboutText --}}
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-us-content">
                        <p class="title">Be Healthy</p>
                        <p class="desc bold">
                            Be Healthy offers freshly prepared, healthy, and nutritious
                            meals that are ideal for achieving various goals, such as
                            gaining muscle, losing weight, or simply maintaining a healthy
                            diet.
                        </p>
                        <p class="desc">
                            Planning your meals in advance is an effective way to stay on
                            track, achieve your goals, and enhance your health and
                            well-being. <br />
                            Our fully certified nutritionist, chefs, ensures that every
                            meal is packed with delicious and healthy ingredients. In
                            addition to ordering from our menu, we can also create a
                            personalized meal prep plan to help you achieve your specific
                            goals.
                        </p>
                        <!-- <a href="tel:+97142870799" class="contact">
                              +971 42 87 0799
                          </a> -->
                    </div>
                </div>
                {{-- end aboutText --}}


            </div>
            {{-- endRow --}}


            {{-- contactButton --}}
            <div class="row">
                <div class="col-12">
                    <div class="text-center btn-box mb-5">
                        <button type="button" class="btn btn-black">Contact Us</button>
                    </div>
                </div>
            </div>


        </div>
    </section>
    {{-- endSection --}}





    {{-- ---------------------------------------------------- --}}
    {{-- ---------------------------------------------------- --}}





    {{-- statistics-section --}}
    <section id="meal-option-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2 class="title">Be Healthy Statistics</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 row-cols-xl-4">
                    <div class="col">
                        <div class="text-center mb-5">
                            <p class="numner" id="count1">15</p>
                            <span class="mid-bdr"></span>
                            <p class="text-white mt-3">YEARS OF EXPERIENCED</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-center mb-5">
                            <p class="numner" id="count2">300</p>
                            <span class="mid-bdr"></span>
                            <p class="text-white mt-3">MENUS/DISH</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-center mb-5">
                            <p class="numner" id="count3">200</p>
                            <span class="mid-bdr"></span>
                            <p class="text-white mt-3">STAFFS</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-center mb-5">
                            <p class="numner" id="count4">20,000</p>
                            <span class="mid-bdr"></span>
                            <p class="text-white mt-3">HAPPY CUSTOMERS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- endSection --}}







    {{-- -------------------------------------------- --}}
    {{-- -------------------------------------------- --}}







    {{-- pickYourPlan --}}
    <section id="meal-plan-section" class="d-none">
        <div class="container">

            {{-- title --}}
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2 class="title">PICK YOUR MEAL PLAN</h2>
                    </div>
                </div>
            </div>




            {{-- row --}}
            <div class="row">
                <div class="col-12">
                    <div class="">


                        {{-- carousel --}}
                        <div class="owl-carousel owl-theme meal-plan-slider" id="meal-plan-slider">


                            {{-- singlePlan --}}
                            <div class="meal-plan-card">
                                <div class="card">
                                    <img src="{{ url('assets/images/meal-plan/loss.png') }}" class="card-img-top"
                                        alt="EveryDay" />
                                    <div class="card-body">
                                        <h5 class="card-title">Weight Loss</h5>
                                        <p class="card-text">
                                            Low-calorie meals to fast-track and maintain results
                                        </p>
                                    </div>
                                    <div class="card-btn-div">
                                        <a href="#" class="btn btn-black"> View
                                            Plan </a>
                                    </div>
                                </div>
                            </div>



                            {{-- singlePlan --}}
                            <div class="meal-plan-card">
                                <div class="card">
                                    <img src="{{ url('assets/images/meal-plan/balance.png') }}" class="card-img-top"
                                        alt="EveryDay" />
                                    <div class="card-body">
                                        <h5 class="card-title">Everyday</h5>
                                        <p class="card-text">
                                            Balanced meals for solos and families, with a
                                            Plant-Based plan available
                                        </p>
                                    </div>
                                    <div class="card-btn-div">
                                        <a href="#" class="btn btn-black"> View
                                            Plan </a>
                                    </div>
                                </div>
                            </div>




                            {{-- singlePlan --}}
                            <div class="meal-plan-card">
                                <div class="card">
                                    <img src="{{ url('assets/images/meal-plan/loss.png') }}" class="card-img-top"
                                        alt="EveryDay" />
                                    <div class="card-body">
                                        <h5 class="card-title">Fitness</h5>
                                        <p class="card-text">
                                            Macro-optimised meals for toning, performance, or
                                            gains
                                        </p>
                                    </div>
                                    <div class="card-btn-div">
                                        <a href="#" class="btn btn-black"> View
                                            Plan </a>
                                    </div>
                                </div>
                            </div>





                            {{-- singlePlan --}}
                            <div class="meal-plan-card">
                                <div class="card">
                                    <img src="{{ url('assets/images/meal-plan/loss.png') }}" class="card-img-top"
                                        alt="EveryDay" />
                                    <div class="card-body">
                                        <h5 class="card-title">Custom Plan</h5>
                                        <p class="card-text">
                                            Low-calorie meals to fast-track and maintain results
                                        </p>
                                    </div>
                                    <div class="card-btn-div">
                                        <a href="#" class="btn btn-black"> View
                                            Plan </a>
                                    </div>
                                </div>
                            </div>


                            {{-- singlePlan --}}
                            <div class="meal-plan-card">
                                <div class="card">
                                    <img src="{{ url('assets/images/meal-plan/loss.png') }}" class="card-img-top"
                                        alt="EveryDay" />
                                    <div class="card-body">
                                        <h5 class="card-title">Weight Loss</h5>
                                        <p class="card-text">
                                            Low-calorie meals to fast-track and maintain results
                                        </p>
                                    </div>
                                    <div class="card-btn-div">
                                        <a href="#" class="btn btn-black"> View
                                            Plan </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        {{-- endCarousel --}}
                    </div>
                </div>
            </div>
            {{-- endRow --}}
        </div>
    </section>
    {{-- endSection --}}







    {{-- -------------------------------------------------------- --}}
    {{-- -------------------------------------------------------- --}}




    {{-- favoriteDishes --}}
    <section id="fav-meal">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2>Our Favorite Dishes</h2>
                    </div>
                </div>
            </div>


            {{-- singleDish --}}
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="">
                        <div class="img-box">
                            <img src="{{ url('assets/images/fav-2.png') }}" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="">
                        <div class="content-box">
                            <p class="title">Atlantic Salmon with Yellow Rice</p>
                            <p class="desc">
                                ATLANTIC SALMON IS DISH CONTAIN OF ATLANTIC SIDE VEGETABLE
                                WITH GRILLED SALMON AND YELLOW RICE, ITS A GREAT SOURCE OF
                                OMEGA-3 FATTY ACIDS, ALSO TYPE OF HEART HEALTHY FAT THAT CAN
                                DECRESE INFLAMMATION AND SUPPORT BRAIN HEALTHY, ALSO ITS
                                RICH IN VITAMIN A, MULTIPLE B AND SEVERAL MINERALS LIKE
                                (magnesium, potassium, phosphorus, zinc, and selenium)
                            </p>
                        </div>
                    </div>
                </div>
            </div>




            {{-- singleDish --}}
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12 order-lg-1 order-md-1 order-2">
                    <div class="">
                        <div class="content-box">
                            <p class="title">Market Salad with Grilled Chicken</p>
                            <p class="desc">
                                Our delicious salad is made with vegetable, fruits and mixed
                                nuts with side of tasty grilled chicken with be healthy
                                spices covered with market salad sauce variety of salad with
                                nuts loaded with fibers and antioxidants that Reduced risk
                                of cancer and diseases, give you healthier skin and
                                Protection of eye health.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 order-lg-2 order-md-2 order-1">
                    <div class="">
                        <div class="img-box">
                            <img src="{{ url('assets/images/fav-1.png') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    {{-- endSection --}}








    {{-- -------------------------------------------------------- --}}
    {{-- -------------------------------------------------------- --}}





    {{-- ourMenu --}}
    <section id="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2 class="title">Our Menu</h2>
                    </div>
                </div>
            </div>




            {{-- row --}}
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-12">
                    <div class="row">



                        {{-- singleItem --}}
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="menu-card-v1">


                                {{-- image / tag --}}
                                <div class="img-box">
                                    <span class="tag"> 20% Off </span>
                                    <img src="{{ url('assets/images/menu/chicken/behealthy-Chicken-Chicken-Fajita.jpeg') }}"
                                        alt="" />
                                </div>


                                {{-- content --}}
                                <div class="content-box">


                                    {{-- frontBox --}}
                                    <div class="box-one">
                                        <p class="title">Chicken Fajita</p>
                                        <p class="desc">
                                            Grilled chicken with Fajita marination
                                        </p>
                                    </div>

                                    {{-- backBox --}}
                                    <div class="box-two">
                                        <div class="price-box">
                                            <p class="price">45.00 AED</p>
                                            <p class="weight">
                                                <!-- 3.50 G -->
                                            </p>
                                        </div>
                                        <div class="ingradient-box">
                                            <div class="row g-0">
                                                <div class="col-3">
                                                    <div class="border-end">
                                                        <div class="ing-title">
                                                            <p class="">Cal</p>
                                                        </div>
                                                        <div class="ing-desc">
                                                            <p class="">164.4</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="border-end">
                                                        <div class="ing-title">
                                                            <p class="">P</p>
                                                        </div>
                                                        <div class="ing-desc">
                                                            <p class="">31g</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="border-end">
                                                        <div class="ing-title">
                                                            <p class="">C</p>
                                                        </div>
                                                        <div class="ing-desc">
                                                            <p class="">2g</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="border-end-0">
                                                        <div class="ing-title">
                                                            <p class="">F</p>
                                                        </div>
                                                        <div class="ing-desc">
                                                            <p class="">3.6g</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- endBackBox --}}
                                </div>
                            </div>
                        </div>
                        {{-- end singleItem --}}





                        {{-- singleItem (repeat)--}}
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="menu-card-v1">
                                <div class="img-box">
                                    <img src="{{ url('assets/images/menu/beef/behealthy-Beef-Beef-Broccoli.jpg') }}"
                                        alt="" />
                                </div>
                                <div class="content-box">
                                    <div class="box-one">
                                        <p class="title">Beef Broccoli</p>
                                        <p class="desc">
                                            Beef and broccoli stir fry sauteed with fresh broccoli
                                            florets and coated in a savory sauce.
                                        </p>
                                    </div>
                                    <div class="box-two">
                                        <div class="price-box">
                                            <p class="price">50.00 AED</p>
                                            <p class="weight">
                                                <!-- 3.50 G -->
                                            </p>
                                        </div>
                                        <div class="ingradient-box">
                                            <div class="row g-0">
                                                <div class="col-3">
                                                    <div class="border-end">
                                                        <div class="ing-title">
                                                            <p class="">Cal</p>
                                                        </div>
                                                        <div class="ing-desc">
                                                            <p class="">197</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="border-end">
                                                        <div class="ing-title">
                                                            <p class="">P</p>
                                                        </div>
                                                        <div class="ing-desc">
                                                            <p class="">24g</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="border-end">
                                                        <div class="ing-title">
                                                            <p class="">C</p>
                                                        </div>
                                                        <div class="ing-desc">
                                                            <p class="">4g</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="border-end-0">
                                                        <div class="ing-title">
                                                            <p class="">F</p>
                                                        </div>
                                                        <div class="ing-desc">
                                                            <p class="">6g</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        {{-- singleItem (repeat) --}}
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="menu-card-v1">
                                <div class="img-box">
                                    <img src="{{ url('assets/images/menu/salad/behealthy-Salads-Halloumi-Salad.jpg') }}"
                                        alt="" />
                                </div>
                                <div class="content-box">
                                    <div class="box-one">
                                        <p class="title">Halloumi Salad</p>
                                        <p class="desc">
                                            Low fat Halloumi,Rocca Leaves,cherry Tomato,olive oil
                                        </p>
                                    </div>
                                    <div class="box-two">
                                        <div class="price-box">
                                            <p class="price">29.50 AED</p>
                                            <p class="weight">
                                                <!-- 3.50 G -->
                                            </p>
                                        </div>
                                        <div class="ingradient-box">
                                            <div class="row g-0">
                                                <div class="col-3">
                                                    <div class="border-end">
                                                        <div class="ing-title">
                                                            <p class="">Cal</p>
                                                        </div>
                                                        <div class="ing-desc">
                                                            <p class="">250.2</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="border-end">
                                                        <div class="ing-title">
                                                            <p class="">P</p>
                                                        </div>
                                                        <div class="ing-desc">
                                                            <p class="">42.4g</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="border-end">
                                                        <div class="ing-title">
                                                            <p class="">C</p>
                                                        </div>
                                                        <div class="ing-desc">
                                                            <p class="">6.2g</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="border-end-0">
                                                        <div class="ing-title">
                                                            <p class="">F</p>
                                                        </div>
                                                        <div class="ing-desc">
                                                            <p class="">6.2g</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        {{-- viewAll --}}
                        <div class="col-12">
                            <div class="text-center btn-box mb-5">
                                <a href="#" class="btn btn-black"> View All </a>
                            </div>
                        </div>
                    </div>
                    {{-- endRow --}}
                </div>
            </div>
            {{-- endRow --}}
        </div>
    </section>
    {{-- endSection --}}










    {{-- ---------------------------------------------- --}}
    {{-- ---------------------------------------------- --}}






    {{-- letsPrep Section --}}
    <section id="get-started-banner-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="get-started-inner-div">
                        <div class="get-started-main-div">
                            <h2>Less preps, more reps!</h2>
                            <p>
                                Hit your goals faster with home-delivered,
                                dietician-designed meals calibrated to suit your fitness
                                needs. Pause or cancel anytime.
                            </p>
                            <button type="button" class="btn btn-primary get-start-btn">
                                Get started
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    {{-- instagramSection --}}
    <section id="insta-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="">


                        {{-- carousel --}}
                        <div class="owl-carousel owl-theme insta-slider" id="insta-slider">


                            {{-- instaPost --}}
                            <div class="img-box">
                                <img src="{{ url('assets/images/insta/1.jpeg') }}" alt="" />
                                <div class="insta-box">
                                    <a href="https://www.instagram.com/behealthy_dxb?igsh=OTh5d3R5NndocHdn">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>







                            {{-- instaPost --}}
                            <div class="img-box">
                                <img src="{{ url('assets/images/insta/2.jpeg') }}" alt="" />
                                <div class="insta-box">
                                    <a href="https://www.instagram.com/behealthy_dxb?igsh=OTh5d3R5NndocHdn">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>


                            {{-- instaPost --}}
                            <div class="img-box">
                                <img src="{{ url('assets/images/insta/3.jpeg.jpg') }}" alt="" />
                                <div class="insta-box">
                                    <a href="https://www.instagram.com/behealthy_dxb?igsh=OTh5d3R5NndocHdn">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>


                            {{-- instaPost --}}
                            <div class="img-box">
                                <img src="{{ url('assets/images/insta/4.png') }}" alt="" />
                                <div class="insta-box">
                                    <a href="https://www.instagram.com/behealthy_dxb?igsh=OTh5d3R5NndocHdn">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>


                            {{-- instaPost --}}
                            <div class="img-box">
                                <img src="{{ url('assets/images/insta/5.jpeg') }}" alt="" />
                                <div class="insta-box">
                                    <a href="https://www.instagram.com/behealthy_dxb?igsh=OTh5d3R5NndocHdn">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>

                            {{-- instaPost --}}
                            <div class="img-box">
                                <img src="{{ url('assets/images/insta/6.jpeg') }}" alt="" />
                                <div class="insta-box">
                                    <a href="https://www.instagram.com/behealthy_dxb?igsh=OTh5d3R5NndocHdn">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>

                            {{-- instaPost --}}
                            <div class="img-box">
                                <img src="{{ url('assets/images/insta/7.jpeg') }}" alt="" />
                                <div class="insta-box">
                                    <a href="https://www.instagram.com/behealthy_dxb?igsh=OTh5d3R5NndocHdn">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>


                            {{-- instaPost --}}
                            <div class="img-box">
                                <img src="{{ url('assets/images/insta/8.jpeg') }}" alt="" />
                                <div class="insta-box">
                                    <a href="https://www.instagram.com/behealthy_dxb?igsh=OTh5d3R5NndocHdn">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- endRow --}}
                    </div>
                </div>
            </div>
            {{-- endRow --}}
        </div>
    </section>
    {{-- endSection --}}








    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}







    {{-- FAQs --}}
    <section id="faq-section">
        <div class="container">


            {{-- heading --}}
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2 class="title">FAQs</h2>
                    </div>
                </div>
            </div>



            {{-- row --}}
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <div class="faq-accordian">
                        <div class="accordion" id="accordionExample">

                            {{-- singleAcc. --}}
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How do I get started with Be Healthy meal plan?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        To start your healthy journey, visit our meal plan
                                        website and <br />
                                        - Select your target. <br />
                                        - Choose your calories and number of meals u want.
                                        <br />
                                        - Mention any food allergies and specific dislikes.
                                        <br />
                                        - Select your starting date. <br />
                                        - Once your order is confirmed, our customer service
                                        will get in touch with you to affirm the details and
                                        clue you through your meal plan.
                                    </div>
                                </div>
                            </div>




                            {{-- singleAcc. --}}
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        can i customize my meal plan?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        yes! you can customize your meal plan based on the
                                        calories and macros u need
                                    </div>
                                </div>
                            </div>





                            {{-- singleAcc. --}}
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        can I freeze my account if I want to travel or
                                        something?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        yes, u can freeze and resume it back from where u
                                        stopped
                                    </div>
                                </div>
                            </div>





                            {{-- singleAcc. --}}
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        Why u choose be healthy?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        because we offer u variety of meals with delicious taste
                                        and accurate calories counting and we deliver it freshly
                                        cooked early morning to your door step
                                    </div>
                                </div>
                            </div>



                            {{-- singleAcc. --}}
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        Which days do you deliver?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        All deliveries are made on Sundays and Friday.
                                    </div>
                                </div>
                            </div>



                            {{-- singleAcc. --}}
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Can I reheat my meal?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        All of our meals come with heating instruction for
                                        microwaves. <br />
                                        You may prefer to use an oven in which-case, remove the
                                        contents from its packaging and into an oven safe dish.
                                        Heat until piping hot throughout.
                                    </div>
                                </div>
                            </div>
                            {{-- endAccording --}}
                        </div>
                    </div>
                </div>
            </div>
            {{-- endRow --}}
        </div>
    </section>
    {{-- endSection --}}








    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}







    <section id="blog-section">
        <div class="container">
            <div class="row">

                {{-- heading --}}
                <div class="col-12">
                    <div class="heading">
                        <h2 class="title">News & Blogs</h2>
                    </div>
                </div>




                {{-- singleBlog --}}
                <div class="col-lg-6 col-12">
                    <div class="blog-card">

                        {{-- cover --}}
                        <div class="img-box">
                            <img src="{{ url('assets/images/blogs/blog-1.jpeg') }}" alt="" />
                        </div>


                        {{-- content --}}
                        <div class="content-box">
                            <div class="">
                                <p class="title">What is healthy diet:</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="date">
                                    <i class="fal fa-calendar-alt"></i>
                                    <span class="">22/01/24</span>
                                </p>
                                <p class="by">
                                    <i class="fal fa-user"></i> <span>Admin</span>
                                </p>
                            </div>
                            <div class="">
                                <p class="desc">
                                    A healthy eating pattern is one that provides enough of
                                    each essential nutrient from nutrient-dense foods,
                                    contains a variety of foods from all of the basic food
                                    groups, and focuses on balancing calories consumed with
                                    calories expended to help you achieve and sustain a
                                    healthy weight. This eating pattern limits intake of solid
                                    fats, sugar, salt (sodium)
                                </p>
                            </div>
                            <div class="">
                                <a class="btn" href="{{ route('website.singleBlog', [1]) }}">View <i
                                        class="fal fa-long-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>





                {{-- singleBlog (repeat) --}}
                <div class="col-lg-6 col-12">
                    <div class="blog-card">

                        {{-- cover --}}
                        <div class="img-box">
                            <img src="{{ url('assets/images/blogs/blog-2.jpeg') }}" alt="" />
                        </div>


                        {{-- content --}}
                        <div class="content-box">
                            <div class="">
                                <p class="title">How is food digested?</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="date">
                                    <i class="fal fa-calendar-alt"></i>
                                    <span class="">22/01/24</span>
                                </p>
                                <p class="by">
                                    <i class="fal fa-user"></i> <span>Admin</span>
                                </p>
                            </div>
                            <div class="">
                                <p class="desc">
                                    Digestion begins in the mouth, when we chew and swallow,
                                    and is completed in the small intestine. Digestion
                                    involves the mixing of food, its movement through the
                                    digestive tract, and the breakdown of food into smaller
                                    molecules. The digestive process varies for different
                                    kinds of food.
                                </p>
                            </div>
                            <div class="">
                                <a class="btn" href="{{ route('website.singleBlog', [1]) }}">View <i
                                        class="fal fa-long-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- viewAll --}}
                <div class="col-12">
                    <div class="text-center btn-box mb-5">
                        <a href="{{ route('website.blogs') }}" class="btn btn-black">View All</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- endSection --}}

















    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}









    {{-- modals --}}
    @section('modals')







    @endsection
    {{-- endSection --}}







    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}






</main>
{{-- endMain --}}