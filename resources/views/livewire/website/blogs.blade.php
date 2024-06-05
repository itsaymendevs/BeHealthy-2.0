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








    {{-- ---------------------------------------- --}}
    {{-- ---------------------------------------- --}}







    {{-- style --}}
    @section('style')


    <style>
        .shop-filter-item .price-box {
            display: none;
        }
    </style>

    @endsection
    {{-- endSection --}}










    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}









    {{-- 1: blogs --}}
    <section id="blog-page">
        <div class="container">

            {{-- heading --}}
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2 class="title">
                            Latest Blogs
                        </h2>
                    </div>
                </div>
            </div>






            {{-- ------------------------------- --}}
            {{-- ------------------------------- --}}






            {{-- blogsRow --}}
            <div class="row">


                {{-- singleBlog --}}
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="vertical-blog-card">

                        {{-- image --}}
                        <div class="img-box">
                            <img src="{{ url('assets/images/blogs/blog-1.jpeg') }}" alt="">
                        </div>


                        {{-- content --}}
                        <div class="content-box">
                            <div class="">
                                <p class="title">
                                    What is healthy diet:
                                </p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="date">
                                    <i class="fal fa-calendar-alt"></i> <span class="">22/01/24</span>
                                </p>
                                <p class="by">
                                    <i class="fal fa-user"></i> <span>Admin</span>
                                </p>
                            </div>
                            <div class="">
                                <p class="desc">
                                    A healthy eating pattern is one that provides enough of each essential nutrient from
                                    nutrient-dense foods, contains a variety of foods from all of the basic food groups,
                                    and focuses on balancing calories consumed with calories expended to help you
                                    achieve and sustain a healthy weight. This eating pattern limits intake of solid
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




                {{-- singleBlog --}}
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="vertical-blog-card">

                        {{-- image --}}
                        <div class="img-box">
                            <img src="{{ url('assets/images/blogs/blog-2.jpeg') }}" alt="">
                        </div>

                        {{-- content --}}
                        <div class="content-box">
                            <div class="">
                                <p class="title">
                                    How is food digested?
                                </p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="date">
                                    <i class="fal fa-calendar-alt"></i> <span class="">10/12/24</span>
                                </p>
                                <p class="by">
                                    <i class="fal fa-user"></i> <span>Admin</span>
                                </p>
                            </div>
                            <div class="">
                                <p class="desc">
                                    Digestion begins in the mouth, when we chew and swallow, and is completed in the
                                    small intestine. Digestion involves the mixing of food, its movement through the
                                    digestive tract, and the breakdown of food into smaller molecules. The digestive
                                    process varies for different kinds of food.
                                </p>
                            </div>

                            {{-- viewButton --}}
                            <div class="">
                                <a class="btn" href="{{ route('website.singleBlog', [1]) }}">View <i
                                        class="fal fa-long-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>




                {{-- singleBlog --}}
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="vertical-blog-card">

                        {{-- cover --}}
                        <div class="img-box">
                            <img src="{{ url('assets/images/blogs/blog-3.jpeg') }}" alt="">
                        </div>


                        {{-- content --}}
                        <div class="content-box">
                            <div class="">
                                <p class="title">
                                    How much water should I drink daily?
                                </p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="date">
                                    <i class="fal fa-calendar-alt"></i> <span class="">22/01/24</span>
                                </p>
                                <p class="by">
                                    <i class="fal fa-user"></i> <span>Admin</span>
                                </p>
                            </div>
                            <div class="">
                                <p class="desc">
                                    Water is essential for energy and optimal health. There are general guidelines for
                                    daily intake, but your individual
                                    needs may vary based on your overall health, activity level, and where you live.
                                    Most of us don’t get enough water, and the amount needed is often more than what we
                                    think.
                                    <br />
                                    In general, the U.S. National Academies of Science, Engineering, and Medicine
                                    determined that men need an average of
                                    15.5 cups (3.7 liters) and women need an average of 11.5 (2.7 liters) per day.
                                    <br />
                                    This total amount includes water that is in the form of plain water, other
                                    beverages, and food. Foods high in water
                                    content include fruits and vegetables and can account for up to 20% of average daily
                                    water intake.
                                </p>
                            </div>

                            {{-- viewButton --}}
                            <div class="">
                                <a class="btn" href="{{ route('website.singleBlog', [1]) }}">View <i
                                        class="fal fa-long-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>









                {{-- singleCard --}}
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="vertical-blog-card">

                        {{-- image --}}
                        <div class="img-box">
                            <img src="{{ url('assets/images/blogs/blog-4.jpeg') }}" alt="">
                        </div>

                        {{-- content --}}
                        <div class="content-box">
                            <div class="">
                                <p class="title">
                                    Carbohydrates and Health: Should You Avoid Carbs?
                                </p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="date">
                                    <i class="fal fa-calendar-alt"></i> <span class="">22/01/24</span>
                                </p>
                                <p class="by">
                                    <i class="fal fa-user"></i> <span>Admin</span>
                                </p>
                            </div>
                            <div class="">
                                <p class="desc">
                                    Carbohydrates have been unfairly demonized in recent years. The truth is, not all
                                    carbs are created equal. While refined carbs like white bread and sugar can
                                    contribute to weight gain and health problems, whole food sources of carbs are
                                    essential for your health. Whole grains, fruits, potatoes, beans, and legumes are
                                    all excellent sources of carbs. They provide energy, fiber, and various beneficial
                                    compounds. The key is moderation and choosing whole food sources.
                                </p>
                            </div>

                            {{-- viewButton --}}
                            <div class="">
                                <a class="btn" href="{{ route('website.singleBlog', [1]) }}">View <i
                                        class="fal fa-long-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>





                {{-- singleCard --}}
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="vertical-blog-card">

                        {{-- image --}}
                        <div class="img-box">
                            <img src="{{ url('assets/images/meal-plan/weight-loss.png') }}" alt="">
                        </div>

                        {{-- content --}}
                        <div class="content-box">
                            <div class="">
                                <p class="title">
                                    Sleep and Stress: Do They Affect Nutrition?
                                </p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="date">
                                    <i class="fal fa-calendar-alt"></i> <span class="">22/01/24</span>
                                </p>
                                <p class="by">
                                    <i class="fal fa-user"></i> <span>Admin</span>
                                </p>
                            </div>
                            <div class="">
                                <p class="desc">
                                    Sleep and stress play a significant role in your overall health and can impact your
                                    nutritional needs. Poor sleep and chronic stress can lead to overeating and poor
                                    food choices. It's important to develop good sleep habits and find healthy ways to
                                    manage stress. This could include regular exercise, meditation, or simply taking
                                    time for yourself each day.
                                </p>
                            </div>
                            <div class="">
                                <a class="btn" href="{{ route('website.singleBlog', [1]) }}">View <i
                                        class="fal fa-long-arrow-right ms-2"></i></a>
                            </div>
                        </div>
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