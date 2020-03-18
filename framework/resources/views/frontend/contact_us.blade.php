@extends('frontend.layouts.app')
@section('between_css')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick-slider.css') }}" />
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
    <section id="home" class="sm-py bg-gradient white fullwidth">
        <div class="container t-center">
            <!-- Texts -->
            <h1 class="xxs-mt uppercase bold">
            Our address
            </h1>
            <p class="light">
                {{ Hyvikk::get('badd1') }} <br class="hidden-xs" />
                {{ Hyvikk::get('badd2') }} <br class="hidden-xs" />
                {{ Hyvikk::get('city') }},
                {{ Hyvikk::get('state') }},
                {{ Hyvikk::get('country') }}.
            </p>
            <h4 class=" xs-mt">CALL US</h4>
            <div
            class="width-2 height-30 bg-white m-auto animated-item-vertical xxs-mt"
            ></div>
            <a
            href="https://themeforest.net/item/quadra-creative-multipurpose-template/21409528"
            target="_blank"
            class="bg-white bold dark lg-btn font-14 xs-mt radius-lg qdr-hover-4 bs-light bs-xl-hover slow"
            >
            {{ Hyvikk::frontend('contact_phone') }}
            </a>
            <h3 class="xs-my">
            <a href="mailto:{{ Hyvikk::frontend('contact_email') }}"> {{ Hyvikk::frontend('contact_email') }} </a>
            </h3>
            <a
            href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58388.31401831771!2d78.73087742738423!3d23.844557573432237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3978d158b840996f%3A0xc478c2b6fa41c8d0!2sMpcab.in%20(Online%20Taxi%20Cab%20Booking%20Services%20in%20Sagar)!5e0!3m2!1sen!2sin!4v1584519229197!5m2!1sen!2sin"
            data-iframe="true"
            class="lightbox inline-block"
            >
            <span class="ml-10 underline-hover  h5 font-16-mobile"
                >Show google map.</span
            >
            </a>
        </div>
    </section>
        <!-- END HOME SECTION -->

    <section id="contact" class="t-center py bg-gray1">
        <div class="container">
            <!-- subtitle -->
            <h4 class="gray7 playfair italic">
            Drop Us a Message
            </h4>
            <!-- Title -->
            <h1 class="page-title">
            Keep in touch.
            </h1>
            <!-- Title Strips -->
            <div class="title-strips-over dark"></div>
            <!-- Description -->
            <p class="light gray7 font-17 capitalize">
            Do you have any queries or suggestions ? submit it here !
            </p>
        </div>
        <!-- Form -->
        <div id="form" class="container">
            @if (session('error'))
                <div class="alert alert-danger xs-mt">
                    {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success xs-mt">
                    {{ session('success') }}
                </div>
            @endif
            <!-- Contact Form -->
            <form
            id="contact_form"
            name="contact_form"
            class="mt-40"
            method="post"
            action="{{ url('message-us') }}"
            style="margin-top: 40px;"
            novalidate="novalidate"
            >
            {{ csrf_field() }}
            <!-- Half Inputs -->
            <div class="half clearfix">
                <!-- Name -->
                <input
                type="text"
                name="name"
                id="name"
                required
                placeholder="Name"
                />
                <!-- Email -->
                <input
                type="email"
                name="email"
                id="email"
                required=""
                placeholder="E-Mail"
                />
            </div>

            <!-- Message -->
            <textarea
                name="message"
                id="message"
                required=""
                placeholder="Message"
            ></textarea>
            <!-- Half Inputs -->
            <div class="half clearfix">
                <!-- Verify -->
                <input
                type="text"
                name="verify"
                id="verify"
                required=""
                placeholder="3+2= ?"
                />

                <!-- Send Button -->
                <button
                type="submit"
                id="submit"
                class="bg-colored click-effect bg-colored2-hover white extrabold slow"
                >
                Send
                </button>
                <!-- End Send Button -->
            </div>
            </form>
            <!-- End Form -->
        </div>
        <!-- End #form div -->
    </section>
@endsection    

@section('between_scripts')
<script src="{{ asset('assets/frontend/content/nyks/js/plugins.js') }}"></script>
@endsection