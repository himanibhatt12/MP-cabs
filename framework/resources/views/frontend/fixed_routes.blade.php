@extends('frontend.layouts.app')
@section('between_css')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/cube-portfolio.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/theme.css?v=2.3.1') }}" />
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/custom.css') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

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
                <h2 class="normal-subtitle">Fixed routes</h2>
                <!-- <h5 class="gray4">Modifiable examples with default styles.</h5> -->
            </div>
            <div
                class="t-right t-center-xs col-sm-6 col-xs-12"
                style="height: 63.3333px;"
            >
                <ol class="breadcrumb gray transparent no-pm v-center font-13">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">
                    <a href="#">Fixed routes</a>
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
        <div
            id="gallery"
            class="cbp lightbox_selected cbp-l-grid-masonry-projects"
        >
        @foreach($routes as $row)
        @php($src="assets/frontend/images/route.jpg")
        @if($row->image)
        @php($src="uploads/".$row->image)
        @endif
            <!-- Item -->
            <div class="cbp-item">
            <!-- Box Border -->
            <div
                class="gray8 border-1 border-gray no-border-bottom radius o-hidden slow bs-light relative"
                style="border-width: 1px;"
            >
                <div class="xxs-py">
                <h4 class="extrabold no-pm">{{ $row->source." - ".$row->destination }}</h4>
                </div>
                <!-- Box Top -->
                <div
                class="xs-py bg-gray1 white bg-soft-dark3 bg-soft cover loaded"
                data-background="{{ asset($src) }}"
                style='background-image: url("{{ $src }}");'
                >
                <!-- Price -->
                <h3>{{ Hyvikk::get('currency') }}<span class="text-lg2 extrabold">{{ $row->cost }}</span></h3>
                <p class="uppercase">Per day</p>
                </div>
                <!-- Button -->
                <div>
                <!-- Button -->
                <a
                    href="#"
                    class="xxs-py block font-11 uppercase white bold bg-dark1 bg-colored-hover slow"
                    >View details</a
                >
                </div>
            </div>
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