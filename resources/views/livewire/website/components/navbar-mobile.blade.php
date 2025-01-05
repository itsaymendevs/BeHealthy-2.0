<div class="d-lg-none navbar--mobile d-flex justify-content-end">



    {{-- toggler --}}
    <a href="#menu" id="toggle"><span></span></a>


    {{-- menu --}}
    <div id="menu">
        <ul>
            <li>
                <a class="@if (Request::is('', '/')) active @endif" href="{{ route('website.home') }}">Home</a>
            </li>

            <li>
                <a class="@if (Request::is('plans')) active @endif" href="{{ route('website.plans') }}">Plans</a>
            </li>

            <li>
                <a class="@if (Request::is('menu')) active @endif" href="{{ route('website.menu') }}">Menu</a>
            </li>

            <li>
                <a class="" href="javascript:void(0);">Contact</a>
            </li>

            <li>
                <a class="" href="javascript:void(0);">About</a>
            </li>
        </ul>
    </div>

</div>