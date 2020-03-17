@extends('frontend.layouts.app')
@section('between_css')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/cube-portfolio.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/theme.css?v=2.3.1') }}" />
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/custom.css') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    
    <style>
    .gallery-type-1.with-texts .cbp-item .cbp-item-wrapper:before {
        border: 0;
    }
    </style>
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
                <h2 class="normal-subtitle">Service Availabilities</h2>
                <!-- <h5 class="gray4">Modifiable examples with default styles.</h5> -->
            </div>
            <div
                class="t-right t-center-xs col-sm-6 col-xs-12"
                style="height: 63.3333px;"
            >
                <ol class="breadcrumb gray transparent no-pm v-center font-13">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">
                    <a href="#">Service Availabilities</a>
                </li>
                </ol>
            </div>
            </div>
        </div>
        <!-- End Container -->
    </section>
        <!-- END HOME SECTION -->

        <!-- GALLERY -->
    <section
        class="pb pt bt-1 container border-gray t-center gallery-type-1 with-texts"
        >
        <!-- Works -->
        <div
            id="gallery"
            class="cbp lightbox_selected cbp-l-grid-masonry-projects boxes-with-image"
        >
        @foreach($cities as $city)
        @php($src='assets/frontend/images/mpcabs-city-2.jpg')
        @if($city->image)
        @php($src='uploads/'.$city->image)
        @endif
            <div class="cbp-item">
            <a
                href="#top"
                class="box service-box qdr-hover-1-bottom click-effect m-0 "
            >
                <!-- Overlay - Parent element should have .relative class -->
                <div
                class="overlay zi--4 bg-soft bg-soft-dark8"
                data-background="{{ asset($src) }}"
                ></div>
                <!-- Texts -->
                <div
                class=" texts w-100 h-100 d-flex flex-column justify-content-center align-items-center"
                >
                <h2 class="white bold-title">
                    {{ $city->city }}
                    <br />
                    <span class="playfair italic h4"
                    >Starts @ {{ $city->cost }}/ per day</span
                    >
                </h2>
                <p></p>

                <div
                    class="secret-button gray5 underline-hover normal font-16 mt-3"
                >
                    See details
                    <span class="fa fa-long-arrow-right"></span>
                </div>
                </div>
            </a>
            </div>
        @endforeach    
        </div>
        <!-- End container for works -->
    </section>
        <!-- END GALLERY -->
@endsection    

@section('javascript')
    <script>
        // init cubeportfolio
        $("#gallery").cubeportfolio({
        filters: "#gallery-filter1, #gallery-filter2",
        loadMoreAction: "auto",
        layoutMode: "grid",
        defaultFilter: "*",
        animationType: "quicksand",
        gapHorizontal: 10,
        gapVertical: 10,
        gridAdjustment: "responsive",
        mediaQueries: [
            {
            width: 1500,
            cols: 5
            },
            {
            width: 1100,
            cols: 4
            },
            {
            width: 800,
            cols: 3
            },
            {
            width: 480,
            cols: 1,
            options: {
                caption: "",
                gapHorizontal: 10,
                gapVertical: 10
            }
            }
        ],
        caption: "zoom",
        displayType: "fadeIn",
        displayTypeSpeed: 300
        });
    </script>
@endsection