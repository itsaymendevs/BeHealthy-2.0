<!DOCTYPE html>
<html lang="en">

    <head>



        {{-- meta --}}
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        @yield('head')




        {{-- fontFamily --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Fira+Sans:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=greek-ext,greek,latin-ext,vietnamese&amp;display=swap" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Passion+One&amp;display=swap" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Patua+One&amp;display=swap" />






        <link rel="apple-touch-icon" sizes="180x180" href="{{url('apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{url('favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{url('favicon-16x16.png')}}">
        <link rel="manifest" href="{{url('site.webmanifest')}}">
        <link rel="mask-icon" href="{{url('safari-pinned-tab.svg')}}" color="#222222">
        <meta name="msapplication-TileColor" content="#222222">
        <meta name="theme-color" content="#222222">





        {{-- swiper --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link rel="stylesheet" href="{{ url('assets/css/swiper.css') }}">



        {{-- styles --}}
        <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{url('assets/css/aos.min.css')}}" />
        <link rel="stylesheet" href="{{url('assets/css/about.css')}}" />

        <link rel="stylesheet" href="{{url('assets/css/faq.css')}}" />
        <link rel="stylesheet" href="{{url('assets/css/footer.css')}}" />
        <link rel="stylesheet" href="{{url('assets/css/general.css')}}" />
        <link rel="stylesheet" href="{{url('assets/css/hero.css')}}" />
        <link rel="stylesheet" href="{{url('assets/css/home.css')}}" />
        <link rel="stylesheet" href="{{url('assets/css/insta.css')}}" />
        <link rel="stylesheet" href="{{url('assets/css/menu.css')}}" />
        <link rel="stylesheet" href="{{url('assets/css/navbar.css')}}" />

        <link rel="stylesheet" href="{{url('assets/css/plans.css')}}" />
        <link rel="stylesheet" href="{{url('assets/css/responsive.css')}}" />
        <link rel="stylesheet" href="{{url('assets/css/scrollbar.css')}}" />
        <link rel="stylesheet" href="{{url('assets/css/styles.css')}}" />
        <link rel="stylesheet" href="{{url('assets/css/transitions.css')}}" />
        <link rel="stylesheet" href="{{url('assets/css/variables.css')}}" />
        <link rel="stylesheet" href="{{url('assets/css/effects.css')}}" />






        {{-- icons --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">






        @yield('styles')




    </head>
    {{-- endHead --}}









    {{-- ------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------- --}}







    {{-- body --}}
    <body style="max-width: 1540px; margin: auto">



        {{-- :: preloader --}}
        <livewire:website.components.loader />



        {{-- ------------------------------------------- --}}
        {{-- ------------------------------------------- --}}







        {{-- :: sidebars --}}
        @yield('sidebars')





        {{-- :: bodyWrapper --}}
        <section class="body--wrapper">






            {{-- 1: header --}}
            <livewire:website.components.navbar />







            {{-- ------------------------------------------ --}}
            {{-- ------------------------------------------- --}}




            {{ $slot }}






        </section>
        {{-- endBodyWrapper --}}







        {{-- :: floaters --}}
        @yield('floaters')






        {{-- ------------------------------------------- --}}
        {{-- ------------------------------------------- --}}





        {{-- 3: footer --}}
        <livewire:website.components.footer />








        {{-- ------------------------------------------ --}}
        {{-- ------------------------------------------ --}}










        {{-- essentials --}}
        <script src="{{url('assets/js/jquery.min.js')}}"></script>
        <script src="{{url('assets/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{url('assets/js/aos.min.js')}}"></script>
        <script src="{{url('assets/js/bs-init.js')}}"></script>
        <script src="{{url('assets/js/hideScroll.js')}}"></script>
        <script src="{{url('assets/js/plugins/navbar.js')}}"></script>




        {{-- swiper --}}
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="{{url('assets/js/init-swiper.js')}}"></script>




        <script>
            $(document).ready(function() {
                setTimeout(() => {
                    $("#preloader").fadeOut();
                }, 1000);
            });
        </script>


        @yield('scripts')



    </body>
</html>
{{-- end html --}}