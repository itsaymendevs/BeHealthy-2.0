<main>




    {{-- head --}}
    @section('head')




    {{-- title - description - keywords meta --}}
    <title>Be Healthy - Nutritious Meal Plans for a Healthier You</title>

    <meta name="description"
        content="Be Healthy offers nutritious and delicious meal plans for those who want to eat healthy, lose weight, or maintain a balanced diet. Explore our customizable meals, designed by experts to fuel your body.">

    <meta name="keywords"
        content="healthy meal plans, diet meal delivery, weight loss meals, balanced diet, healthy eating, meal delivery service, nutrition, Be Healthy restaurant">





    {{-- forSocialMedia --}}
    <meta property="og:title" content="Be Healthy - Nutritious Meal Plans for a Healthier You">
    <meta property="og:description"
        content="Join Be Healthy for delicious, expert-designed meal plans that promote a healthy lifestyle. Get started on your wellness journey with our fresh, balanced meals.">
    <meta property="og:image" content="{{url('apple-touch-icon.png')}}">
    <meta property="og:url" content="https://www.behealthy.ae">
    <meta property="og:type" content="website">


    @endsection
    {{-- endHead --}}








    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}






    {{-- styles --}}
    @section('styles')



    {{-- plugins --}}
    <link rel="stylesheet" href="{{url('assets/css/plugins/navbar.css')}}" />


    @endsection
    {{-- endSection --}}








    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}





    {{-- section --}}
    @section('sidebars')



    {{-- 1: sidebars --}}
    <livewire:website.components.sidebars key='sidebar--section' />


    @endsection
    {{-- endSection --}}








    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}








    {{-- hero --}}
    <livewire:website.home.components.home-hero key='home-hero--section' />





    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}





    {{-- about --}}
    <livewire:website.home.components.home-about key='home-about--section' />







    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}





    {{-- plans --}}
    <livewire:website.home.components.home-plans key='home-plans--section' />






    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}





    {{-- socials --}}
    <livewire:website.home.components.home-socials key='home-socials--section' />






    {{-- -------------------------------------------------- --}}
    {{-- -------------------------------------------------- --}}





    {{-- menu --}}
    <livewire:website.home.components.home-menu key='home-menu--section' />




</main>
{{-- endWrapper --}}