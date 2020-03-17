<!-- Side Menu Navigation - You can change left and right classes, white and dark classes and t-center t-left t-right classes for elements position -->
<!-- NAVIGATION -->
<nav id="navigation"
class="white-nav sticky shrink modern hover4 radius-drop"
data-offset="55">
<!-- Columns -->
<div class="columns clearfix container">
    <!-- Logo -->
    <div class="logo">
    <a href="{{ url('/') }}">
        <img
        src="{{ asset('assets/frontend/images/logos/logo_01.png') }}"
        data-second-logo="{{ asset('assets/frontend/images/logos/logo_01.png') }}"
        alt="Quadra Logo"
        />
        <!-- Retina Logo -->
        <img
        src="{{ asset('assets/frontend/images/logos/logo_01@2x.png') }}"
        data-second-logo="{{ asset('assets/frontend/images/logos/logo_01@2x.png') }}"
        class="retina-logo"
        alt="Quadra Logo"
        />
    </a>
    </div>

    <!-- End Navigation Elements -->

    <!-- Navigation Menu -->
    <div class="nav-menu">
    <ul class="nav clearfix uppercase">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>
        <a href="{{ url('about') }}">About</a>
        </li>
        <li>
        <a href="{{ url('availabilities') }}">Availabilities</a>
        </li>
        <li>
        <a href="{{ url('fixed-routes') }}">Fixed routes</a>
        </li>
        <li>
        <a href="{{ url('contact-us') }}">Contact us</a>
        </li>
        @if(!Auth::guest())
        <li>
        <a href="{{ url('user-logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" > Logout
        </a>
        </li>
        <form id="logout-form" action="{{ url('user-logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
        @else
        <li>
        <a href="{{ url('user-login') }}">Login</a>
        </li>
        @endif
    </ul>
    </div>
    <!-- End Navigation Menu -->
</div>
<!-- End Columns -->
<!-- Extra, Second navigation bottom of the #navigation - You can edit everything without the css codes -->
<div
    id="extranav"
    data-showme="#home"
    data-hideme="#footer"
    class="bg-primary clearfix white uppercase bold font-11"
>
    <div class="container clearfix">
    <!-- Left Text -->
    <div class="f-left">
        For Driver
    </div>
    <!-- Nav menu -->
    <div class="nav-menu f-right w-auto t-right">
        <ul class="nav clearfix">
        <li>
            <a href="{{ url('driver-login') }}" class="click-effect">Login</a>
        </li>
        <li>
            <a
            href="{{ url('review-us') }}"
            target="_blank"
            class="large-btn bg-info white bg-colored2-hover"
            >Review us</a
            >
        </li>
        </ul>
    </div>
    </div>
</div>
<!-- End Extra Navigation -->
</nav>
<!-- END NAVIGATION -->
<!-- End Side Menu Navigation -->