@extends('frontend.layouts.app')
@section('between_css')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/theme.css?v=2.3.1') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick-slider.css') }}" />
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/custom.css') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
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
                <h2 class="normal-subtitle">Brands</h2>
                <!-- <h5 class="gray4">Modifiable examples with default styles.</h5> -->
            </div>
            <div
                class="t-right t-center-xs col-sm-6 col-xs-12"
                style="height: 63.3333px;"
            >
                <ol class="breadcrumb gray transparent no-pm v-center font-13">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">
                    <a href="#">Brands</a>
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
        class="pb pt bt-1 border-gray t-center gallery-type-1 with-texts container"
        >
        <!-- Works -->
        <ul class="client-list qdr-col-4 container border-solid border-gray">
            <li>
            <a href="#"><img src="{{ asset('assets/frontend/images/clients/logo_01.png') }}" alt=""/></a>
            <h4 class="py-2 gray7 capitalize">honda</h4>
            </li>
            <li>
            <a href="#"><img src="{{ asset('assets/frontend/images/clients/logo_02.png') }}" alt=""/></a>
            <h4 class="py-2 gray7 capitalize">honda</h4>
            </li>
            <li>
            <a href="#"><img src="{{ asset('assets/frontend/images/clients/logo_03.png') }}" alt=""/></a>
            <h4 class="py-2 gray7 capitalize">honda</h4>
            </li>
            <li>
            <a href="#"><img src="{{ asset('assets/frontend/images/clients/logo_04.png') }}" alt=""/></a>
            <h4 class="py-2 gray7 capitalize">honda</h4>
            </li>
            <li>
            <a href="#"><img src="{{ asset('assets/frontend/images/clients/logo_05.png') }}" alt=""/></a>
            <h4 class="py-2 gray7 capitalize">honda</h4>
            </li>
            <li>
            <a href="#"><img src="{{ asset('assets/frontend/images/clients/logo_06.png') }}" alt=""/></a>
            <h4 class="py-2 gray7 capitalize">honda</h4>
            </li>
            <li>
            <a href="#"><img src="{{ asset('assets/frontend/images/clients/logo_07.png') }}" alt=""/></a>
            <h4 class="py-2 gray7 capitalize">honda</h4>
            </li>
            <li>
            <a href="#"><img src="{{ asset('assets/frontend/images/clients/logo_08.png') }}" alt=""/></a>
            <h4 class="py-2 gray7 capitalize">honda</h4>
            </li>
        </ul>
        <!-- End container for works -->
    </section>
    <!-- END GALLERY -->
@endsection    

@section('between_scripts')
    <script src="{{ asset('assets/frontend/content/nyks/js/plugins.js') }}"></script>
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
