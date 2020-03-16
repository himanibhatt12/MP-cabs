@extends('frontend.layouts.app')
@section('between_css')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/theme.css?v=2.3.1') }}" />
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/custom.css') }}" />
    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
@endsection
@section('content')
    <!-- HOME SECTION -->
    <section id="home" class="sm-py bg-dark white fullwidth">
        <!-- Container -->
        <div class="container">
            <div class="row calculate-height">
            <div
                class="t-left t-center-xs col-sm-6 col-xs-12"
                style="height: 63.3333px;"
            >
                <h2 class="normal-subtitle">About us</h2>
                <!-- <h5 class="gray4">Modifiable examples with default styles.</h5> -->
            </div>
            <div
                class="t-right t-center-xs col-sm-6 col-xs-12"
                style="height: 63.3333px;"
            >
                <ol class="breadcrumb gray transparent no-pm v-center font-13">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active"><a href="#">About</a></li>
                </ol>
            </div>
            </div>
        </div>
        <!-- End Container -->
        </section>
        <!-- END HOME SECTION -->
        <!-- ABOUT SECTION -->
        <section id="abouttext" class="py">
        <div class="container">
            <div class="t-center">
            <h3 class="page-subtitle playfair italic gray6">
                About us
            </h3>
            <h1 class="page-title">
                The MPCab Company
            </h1>
            <div class="title-strips-over dark"></div>
            <p class="page-description gray6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Molestias aliquam maxime tempora facere voluptatibus, sed
                deserunt incidunt ut. Voluptatem neque odio veritatis maxime,
                illum autem delectus deserunt eveniet ex voluptatibus laborum
                dignissimos adipisci a quo, aspernatur amet alias repellat
                tenetur.
                <br />
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Et
                distinctio fugiat, doloribus ad fuga tempore accusantium
                incidunt corrupti rerum, autem ratione unde sunt repellendus!
                Beatae cumque rerum at dicta autem?
            </p>
            </div>
        </div>
        </section>
        <!-- END ABOUT SECTION -->

        <!-- Benefits section -->

        <!-- CATEGORIES SECTION -->
        <section
        id="services"
        class="t-left bg-soft-gradient1 bg-soft o-hidden relative z-index-1"
        >
        <!-- Parallax Background -->
        <div
            class="bg-parallax skrollr loaded skrollable skrollable-between"
            data-anchor-target="#services"
            data-bottom-top="transform:translate3d(0, -190px, 0px);"
            data-top-bottom="transform:translate3d(0px, 50px, 0px);"
            data-background="{{ asset('assets/frontend/images/mpcabs-major-service-zones.jpg') }}"
        ></div>

        <div class="container">
            <!-- Top Title -->
            <h3 class="page-subtitle">
            Cities where we are located
            </h3>

            <!-- Title -->
            <h1 class="page-title light-title">
            Major Service Zones
            </h1>

            <!-- Title Strips -->
            <div class="title-strips-over"></div>

            <!-- Description -->
            <p class="page-subtitle playfair italic">
            In a span of 8 years, we have expanded our operations to several
            major cities of madhya pradesh.
            </p>

            <!-- Boxes -->
            <div class="boxes-type-2 sm-mt t-left qdr-col-3 clearfix c-default">
            <!-- item -->
            <div class="item clearfix">
                <!-- Icon -->
                <a href="#" class="icon colored"
                ><i class="fa fa-eercast"></i
                ></a>
                <div class="texts">
                <!-- Title -->
                <h2>Bhopal</h2>
                <!-- Description -->
                </div>
            </div>
            <!-- item -->
            <div class="item clearfix">
                <!-- Icon -->
                <a href="#" class="icon colored"
                ><i class="fa fa-eercast"></i
                ></a>
                <div class="texts">
                <!-- Title -->
                <h2>Indore</h2>
                </div>
            </div>
            <!-- item -->
            <div class="item clearfix">
                <!-- Icon -->
                <a href="#" class="icon colored"
                ><i class="fa fa-eercast"></i
                ></a>
                <div class="texts">
                <!-- Title -->
                <h2>Bina</h2>
                </div>
            </div>
            <!-- item -->
            <div class="item clearfix">
                <!-- Icon -->
                <a href="#" class="icon colored"
                ><i class="fa fa-eercast"></i
                ></a>
                <div class="texts">
                <!-- Title -->
                <h2>Khurai</h2>
                </div>
            </div>
            <!-- item -->
            <div class="item clearfix">
                <!-- Icon -->
                <a href="#" class="icon colored"
                ><i class="fa fa-eercast"></i
                ></a>
                <div class="texts">
                <!-- Title -->
                <h2>Khandwa</h2>
                </div>
            </div>
            <!-- item -->
            <div class="item clearfix">
                <!-- Icon -->
                <a href="#" class="icon colored"
                ><i class="fa fa-eercast"></i
                ></a>
                <div class="texts">
                <!-- Title -->
                <h2>Ratlam</h2>
                <!-- Description -->
                </div>
            </div>
            <!-- item -->
            <div class="item clearfix">
                <!-- Icon -->
                <a href="#" class="icon colored"
                ><i class="fa fa-eercast"></i
                ></a>
                <div class="texts">
                <!-- Title -->
                <h2>Ujjain</h2>
                </div>
            </div>
            <!-- item -->
            <div class="item clearfix">
                <!-- Icon -->
                <a href="#" class="icon colored"
                ><i class="fa fa-eercast"></i
                ></a>
                <div class="texts">
                <!-- Title -->
                <h2>Damoh</h2>
                </div>
            </div>
            <!-- item -->
            </div>
        </div>
        </section>
        <!-- END CATEGORIES SECTION -->

        <!-- MODALS FOR CATEGORIES SECTION -->

        <!-- SERVICES SECTION -->
        <section>
        <!-- Second Twins - You can set the height -->
        <div class="clearfix calculate-height twin-sections antares">
            <!-- Item -->
            <div class="halfwidth f-left bg-dark">
            <!-- Details -->
            <div class="vertical-center t-center white mxw-800 mx-auto">
                <!-- Title -->
                <h1 class="page-title text-white">
                Broad Variety Of Taxis
                </h1>
                <!-- Description -->
                <p class="twin_description">
                There are many variations of passages of Lorem Ipsum
                available, but the majority have in some form, by injected
                humour, or randomised.
                </p>
            </div>
            </div>

            <!-- Item -->
            <div class="halfwidth slider f-left relative">
            <!-- Details -->
            <div
                class="slider-for halfwidth-sl fullheight t-center white qdr-controls-2"
            >
                <!-- Item -->
                <div>
                <!-- Background image -->
                <img src="{{ asset('assets/frontend/images/mpcabs-car-1.jpg') }}" />
                <!-- Slide Texts -->
                <div class="absolute-im vertical-center height-auto fullwidth t-center">
                    <!-- Title -->
                    <h2 class="text-shadow">
                    SEDAN
                    </h2>
                    <!-- Description -->
                    <p class="italic text-shadow">
                    Outlander
                    </p>
                    <!-- Add your video url and video's width and height -->
                </div>
                </div>
                <!-- End Item -->

                <!-- Item -->
                <div>
                <!-- Background image -->
                <img src="{{ asset('assets/frontend/images/mpcabs-car-2.jpg') }}" />
                <!-- Slide Texts -->
                <div class="absolute-im vertical-center height-auto fullwidth t-center">
                    <!-- Title -->
                    <h2 class="text-shadow">
                    Super Detailed Documentation
                    </h2>
                    <!-- Description -->
                    <p class="italic text-shadow">
                    Wonderlander
                    </p>
                    <!-- Add your video url and video's width and height -->
                </div>
                </div>
                <!-- End Item -->

                <!-- Item -->
                <div>
                <!-- Background image -->
                <img src="{{ asset('assets/frontend/images/mpcabs-car-3.jpg') }}" />
                <!-- Slide Texts -->
                <div class="absolute-im vertical-center height-auto fullwidth t-center">
                    <!-- Title -->
                    <h2 class="text-shadow">
                    Super Detailed Documentation
                    </h2>
                    <!-- Description -->
                    <p class="italic text-shadow">
                    Wonderlander
                    </p>
                    <!-- Add your video url and video's width and height -->
                </div>
                </div>
                <!-- End Item -->
            </div>

            <!-- Navigation For Slider -->
            <div class="slider-nav hidden-xs">
                <div>
                <img src="{{ asset('assets/frontend/images/mpcabs-car-1.jpg') }}" />
                </div>
                <div>
                <img src="{{ asset('assets/frontend/images/mpcabs-car-2.jpg') }}" />
                </div>
                <div>
                <img src="{{ asset('assets/frontend/images/mpcabs-car-3.jpg') }}" />
                </div>
            </div>
            </div>
            <!-- End Item -->
        </div>
        <!-- End Item -->
        </section>
        <!-- END SERVICES SECTION -->

        <!-- Analytics -->
        <section class="pt pb-4 t-center">
        <h1 class="page-title">
            + Points of MP CAB
        </h1>
        <div class="title-strips-over dark strips-left"></div>
        <p class="page-description gray6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias
            aliquam maxime tempora <br />
            facere voluptatibus, sed deserunt incidunt
        </p>
        <div class="container mt-3 t-center d-flex justify-content-center">
            <div class="uppercase t-left">
            <p class="mt-4 mb-1">no extra charges of pickup & drop offs</p>
            <div class="progress bg-white" style="height:2px">
                <div class="progress-bar bg-colored" data-value="15"></div>
            </div>
            <p class="mt-4 mb-1">online cab booking service</p>
            <div class="progress bg-white" style="height:2px">
                <div class="progress-bar bg-colored" data-value="15"></div>
            </div>
            <p class="mt-4 mb-1">conventional on call booking service</p>
            <div class="progress bg-white" style="height:2px">
                <div class="progress-bar bg-colored" data-value="15"></div>
            </div>
            <p class="mt-4 mb-1">ride tracking using mobile apps</p>
            <div class="progress bg-white" style="height:2px">
                <div class="progress-bar bg-colored" data-value="15"></div>
            </div>
            <p class="mt-4 mb-1">24*7 customer support</p>
            <div class="progress bg-white" style="height:2px">
                <div class="progress-bar bg-colored" data-value="15"></div>
            </div>
            </div>
        </div>
        </section>

        <section id="facts" class="clearfix second-text-type">
        <!-- Left Texts, buttons and facts -->
        <div class="left-details bg-gradient white">
            <!-- Texts -->
            <h2 class="white no-pm semibold uppercase">
            about our services.
            </h2>
            <h2 class="white no-pm uppercase light">Read more about us.</h2>
            <!-- Buttons -->
            <div class="buttons light">
            <!-- Button -->
            <a class="click-effect dark-effect">
                Trusted Vendors
            </a>
            <!-- Button -->
            <a class="click-effect dark-effect">
                Quality vehicles
            </a>
            <!-- Button -->
            <a class="click-effect dark-effect">
                Free insurance
            </a>
            </div>
            <div class="facts-container light">
            <!-- Item -->
            <div class="fact" data-source="36">
                <!-- Texts -->
                <div class="texts">
                <div>
                    <!-- Fact Tag -->
                    <h1 class="factor">36</h1>
                    <!-- Fact Texts -->
                    <h3>Agents.</h3>
                </div>
                </div>
            </div>
            <!-- End Item -->
            <!-- Item -->
            <div class="fact" data-source="2697">
                <!-- Texts -->
                <div class="texts">
                <div>
                    <!-- Fact Tag -->
                    <h1 class="factor">2697</h1>
                    <!-- Fact Texts -->
                    <h3>Cars</h3>
                </div>
                </div>
            </div>
            <!-- End Item -->
            <!-- Item -->
            <div class="fact" data-source="568900">
                <!-- Texts -->
                <div class="texts">
                <div>
                    <!-- Fact Tag -->
                    <h1 class="factor">5,68,900</h1>
                    <!-- Fact Texts -->
                    <h3>Kms Driven</h3>
                </div>
                </div>
            </div>
            <!-- End Item -->
            </div>
        </div>

        <div
            class="right-image cover qdr-hover-6 loaded"
            data-background="{{ asset('assets/frontend/images/mpcabs-about-our-service.jpg') }}"
        ></div>
    </section>  
        <!-- /Analytics -->
@endsection    

@section('between_scripts')
    <script src="{{ asset('assets/frontend/content/nyks/js/plugins.js') }}"></script>
@endsection
