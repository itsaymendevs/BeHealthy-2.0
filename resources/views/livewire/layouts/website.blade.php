<!DOCTYPE html>
<html lang="en">

    {{-- head --}}
    <head>



        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-CNV3GXQT9F"></script>
        <script>
            window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-CNV3GXQT9F');
        </script>


        <!-- Google Tag Manager -->
        <script>
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-WSQT63PD');
        </script>
        <!-- End Google Tag Manager -->



        {{-- siteVerification --}}
        <meta name="google-site-verification" content="te9mj_RC4u0N_yLsegAflmaP4T4PSQbDNH9o3ppC1GM" />

        {{-- facebook - meta --}}
        <meta name="facebook-domain-verification" content="l3asbc4bhzkgnd54qt2558td8vmntm" />











        {{-- --------------------------------------- --}}
        {{-- --------------------------------------- --}}











        {{-- meta --}}
        <meta charset="utf-8">
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0, shrink-to-fit=no, maximum-scale=1, user-scalable=no">
        <meta name="description" content="Aleens">
        <meta name="keywords" content="Aleens">
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
        <link href="{{ url('assets/fonts/poppins/stylesheet.css') }}" rel="stylesheet">








        {{-- styles --}}
        <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('assets/css/all.css') }}" rel="stylesheet">
        <link href="{{ url('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ url('assets/css/owl.theme.default.min.css') }}" rel="stylesheet">
        <link href="{{ url('assets/css/smart_wizard_all.min.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/air-datepicker@3.4.0/air-datepicker.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ url('assets/css/select2.css') }}" rel="stylesheet">
        <link href="{{ url('assets/css/select2-custom.css') }}" rel="stylesheet">
        <link href="{{ url('assets/css/responsive.css') }}" rel="stylesheet">
        <link href="{{ url('assets/css/paymennt.css') }}" rel="stylesheet">
        <link href="{{ url('assets/css/animation.css') }}" rel="stylesheet">





        @yield('styles')










        {{-- --------------------------------------- --}}
        {{-- --------------------------------------- --}}








        {{-- extraHeaders --}}
        @yield('head')








        {{-- JQUERY --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" data-navigate-once></script>






        <!-- Meta Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '2505810666269624');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                src="https://www.facebook.com/tr?id=2505810666269624&ev=PageView&noscript=1" /></noscript>
        <!-- End Meta Pixel Code -->





    </head>
    {{-- end head --}}









    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}












    {{-- body --}}
    <body class="scrollbar" id='style-1'>





        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WSQT63PD" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->







        <div class="body-wrapper" data-aos="fade" data-aos-duration='1000'>






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

        <script src="{{url('assets/js/bootstrap.bundle.min.js')}}" data-navigate-once></script>
        <script src="{{url('assets/js/jquery.validate.js')}}" data-navigate-once></script>
        <script src="{{url('assets/js/jquery.smartWizard.min.js')}}"></script>
        <script src="{{url('assets/js/owl.carousel.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>






        {{-- 1.2 scripts --}}
        <script src="{{ url('assets/js/script.js') }}"></script>
        <script src="{{ url('assets/js/jquery.nice-select.js') }}"></script>
        <script src="{{ url('assets/js/select2.min.js') }}"></script>
        <script src="{{ url('assets/js/bs-init.js') }}"></script>
        <script src="{{ url('assets/js/re-init-general.js') }}"></script>
        <script src="{{ url('assets/js/re-init-select.js') }}"></script>






        {{-- 1.3: sweetAlert2 --}}
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <x-livewire-alert::scripts />






        {{-- 1.4: includeScripts --}}
        @yield('scripts')





    </body>

</html>
{{-- end html --}}