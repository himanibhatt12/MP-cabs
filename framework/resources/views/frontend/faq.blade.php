@extends('frontend.layouts.app')
@section('between_css')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/theme.css?v=2.3.1') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick-slider.css') }}" />
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/custom.css') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
@endsection
@section('content')
    <!-- HOME SECTION -->
    <section id="home" class="sm-py bg-dark white fullwidth">
        <!-- Container -->
        <div class="container">
            <div class="row calculate-height">
            <div class="t-left t-center-xs col-sm-6 col-xs-12">
                <h2 class="normal-subtitle">FAQs</h2>
                <!-- <h5 class="gray4">Modifiable examples with default styles.</h5> -->
            </div>
            <div class="t-right t-center-xs col-sm-6 col-xs-12">
                <ol class="breadcrumb gray transparent no-pm v-center font-13">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">
                    <a href="#">FAQ</a>
                </li>
                </ol>
            </div>
            </div>
        </div>
        <!-- End Container -->
    </section>
        <!-- END HOME SECTION -->

    <section class="py">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
            <div class="col-sm-10">
                <!-- Title -->
                <h2 class="bold-title ">Some of your Questions:</h2>
                <h5 class="gray7">Frequently asked questions.</h5>
                <div class="title-strips-over dark"></div>
                <ul class="nav-list font-18 underline-hover-container xs-mt">
                @foreach($faqs as $faq)    
                <li>
                    <a href="#faq-{{ $faq->id }}">{{ $faq->question }}</a>
                </li>
                @endforeach
                </ul>
                @foreach($faqs as $faq)
                <div id="faq-{{ $faq->id }}" class="xs-py bb-1 border-gray">
                <h3 class="xxs-mb">{{ $faq->question }}</h3>
                <p class="gray7">
                    {!! $faq->answer !!}
                </p>
                </div>
                @endforeach
            </div>
            <!-- End Col -->
            </div>
        </div>
    </section>
@endsection    

@section('between_scripts')
    <script src="{{ asset('assets/frontend/content/nyks/js/plugins.js') }}"></script>
@endsection