<!DOCTYPE html>
<html lang="en">

    {{-- head --}}
    <head>





        {{-- meta --}}
        <meta charset="utf-8">
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0, shrink-to-fit=no, maximum-scale=1, user-scalable=no">
        <meta name="description" content="BeHealthy">
        <meta name="keywords" content="BeHealthy">
        <meta name="author" content="TRUTH. SOLUTIONS">





        {{-- icons --}}
        <link rel="apple-touch-icon" sizes="180x180" href="{{url('apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{url('favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{url('favicon-16x16.png')}}">
        <link rel="manifest" href="{{url('site.webmanifest')}}">
        <link rel="mask-icon" href="{{url('safari-pinned-tab.svg')}}" color="#00a155">
        <meta name="msapplication-TileColor" content="#00aba9">
        <meta name="theme-color" content="#ffffff">






        {{-- fonts --}}
        <link href="{{ url('assets/subscirption/fonts/montserrat/stylesheet.css') }}" rel="stylesheet">
        <link href="{{ url('assets/subscirption/fonts/open-sans/stylesheet.css') }}" rel="stylesheet">








        {{-- styles --}}
        <link href="{{ url('assets/subscirption/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('assets/subscirption/css/all.css') }}" rel="stylesheet">
        <link href="{{ url('assets/subscirption/css/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ url('assets/subscirption/css/owl.theme.default.min.css') }}" rel="stylesheet">
        <link href="{{ url('assets/subscirption/css/smart_wizard_all.min.css') }}" rel="stylesheet">
        <link href="{{ url('assets/subscirption/css/smart_wizard_all.min.css') }}" rel="stylesheet">
        <link href="{{ url('assets/subscirption/css/air-datepicker.css') }}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="{{ url('assets/subscirption/css/style.css') }}" rel="stylesheet">
        <link href="{{ url('assets/subscirption/css/select2.css') }}" rel="stylesheet">
        <link href="{{ url('assets/subscirption/css/select2-custom.css') }}" rel="stylesheet">
        <link href="{{ url('assets/subscirption/css/responsive.css') }}" rel="stylesheet">
        <link href="{{ url('assets/subscirption/css/paymennt.css') }}" rel="stylesheet">
        <link href="{{ url('assets/subscirption/css/animation.css') }}" rel="stylesheet">





        @yield('styles')










        {{-- --------------------------------------- --}}
        {{-- --------------------------------------- --}}








        {{-- extraHeaders --}}
        @yield('head')








        {{-- JQUERY --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" data-navigate-once></script>




    </head>
    {{-- end head --}}









    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}












    {{-- body --}}
    <body class="scrollbar" id='style-1'>
        <div class="body-wrapper" data-aos="fade" data-aos-duration='1000' wire:ignore.self>






            {{-- navbar --}}
            <livewire:website.components.navbar />





            {{-- content --}}
            {{ $slot }}






        </div>
        {{-- endBodyWrapper --}}







        {{-- modals --}}
        @yield('modals')







        {{-- -------------------------------------------- --}}
        {{-- -------------------------------------------- --}}














        <!-- generalScripts -->
        <script src="{{url('assets/subscirption/js/bootstrap.bundle.min.js')}}" data-navigate-once></script>
        <script src="{{url('assets/subscirption/js/jquery.validate.js')}}" data-navigate-once></script>
        <script src="{{url('assets/subscirption/js/jquery.smartWizard.min.js')}}"></script>
        <script src="{{url('assets/subscirption/js/owl.carousel.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>






        {{-- 1.2 scripts --}}
        <script src="{{ url('assets/subscirption/js/script.js') }}"></script>
        <script src="{{ url('assets/subscirption/js/jquery.nice-select.js') }}"></script>
        <script src="{{ url('assets/subscirption/js/select2.min.js') }}"></script>
        <script src="{{ url('assets/subscirption/js/bs-init.js') }}"></script>
        <script src="{{ url('assets/subscirption/js/re-init-general.js') }}"></script>
        <script src="{{ url('assets/subscirption/js/re-init-select.js') }}"></script>






        {{-- 1.3: sweetAlert2 --}}
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <x-livewire-alert::scripts />






        {{-- 1.4: includeScripts --}}
        @yield('scripts')





    </body>
</html>
{{-- end html --}}