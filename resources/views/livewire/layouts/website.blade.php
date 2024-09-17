<!DOCTYPE html>
<html lang="en">


    <head>



        {{-- meta --}}
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Be Healty DXB</title>




        {{-- fontFamily --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">






        <link rel="apple-touch-icon" sizes="180x180" href="{{url('apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{url('favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{url('favicon-16x16.png')}}">
        <link rel="manifest" href="{{url('site.webmanifest')}}">
        <link rel="mask-icon" href="{{url('safari-pinned-tab.svg')}}" color="#222222">
        <meta name="msapplication-TileColor" content="#222222">
        <meta name="theme-color" content="#222222">






        {{-- styles --}}
        <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url('assets/css/all.css') }}">
        <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ url('assets/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ url('assets/css/select2.min.css') }}" />
        <link rel="stylesheet" href="{{ url('assets/css/bootstrap-date-picker.min.css') }}" />
        <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ url('assets/css/responsive.css') }}">
        <link rel="stylesheet" href="{{ url('assets/css/new.css') }}">



        {{-- icons --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">




        @yield('style')




    </head>
    {{-- endHead --}}









    {{-- ------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------- --}}







    {{-- body --}}
    <body>





        {{-- 1: header --}}
        <livewire:website.components.navbar />







        {{-- ------------------------------------------ --}}
        {{-- ------------------------------------------- --}}




        {{ $slot }}






        {{-- ------------------------------------------- --}}
        {{-- ------------------------------------------- --}}






        <livewire:website.components.footer />














        {{-- ------------------------------------------ --}}
        {{-- ------------------------------------------ --}}










        {{-- essentials --}}
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"
            integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>







        {{-- initiate instances --}}
        <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
        <script src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ url('assets/js/init.js') }}"></script>
        <script src="{{ url('assets/js/script.js') }}"></script>
        <script src="{{ url('assets/js/select2.min.js') }}"></script>
        <script src="{{ url('assets/js/jquery.smartWizard.min.js') }}"></script>
        <script src="{{ url('assets/js/jquery.validate.js') }}"></script>
        <script src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ url('assets/js/bootstrap-date-picker.min.js') }}"></script>
        <script src="https://rawgit.com/RobinHerbots/Inputmask/5.x/dist/jquery.inputmask.min.js"></script>







        @yield('scripts')





    </body>
</html>
{{-- end html --}}