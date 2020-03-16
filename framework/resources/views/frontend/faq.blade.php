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
                <li>
                    <a href="#faq-1">Where can I find my Purchase Code?</a>
                </li>
                <li>
                    <a href="#faq-2"
                    >Forum Comments by Envato Staff &amp; Moderators</a
                    >
                </li>
                <li>
                    <a href="#faq-3"
                    >How Do I Get Support For An Item I've Purchased?</a
                    >
                </li>
                <li>
                    <a href="#faq-4"
                    >Which Author Payment Option Do I Choose?</a
                    >
                </li>
                <li>
                    <a href="#faq-5"
                    >Can I use trademarked names in my items?</a
                    >
                </li>
                <li><a href="#faq-6">Historical Payment Rates</a></li>
                <li><a href="#faq-7">How Do I Change My Username?</a></li>
                <li><a href="#faq-8">Author Collaboration</a></li>
                <li><a href="#faq-9">Maecenas auctor velit ipsum.</a></li>
                <li>
                    <a href="#faq-10"
                    >Quisque viverra est vitae justo maximus facilisis.</a
                    >
                </li>
                </ul>

                <div id="faq-1" class="xs-py bb-1 border-gray">
                <h3 class="xxs-mb">Where can I find my Purchase Code?</h3>
                <p class="gray7">
                    But I must explain to you how all this mistaken idea of
                    denouncing it is pain, but because occasionally
                    circumstances occur in which toil and pain can procure him
                    some great pleasure. To take a trivial example, which of us
                    ever undertakes laborious physical exercise, except to
                    obtain some advantage from it? But who has any right to find
                    fault with a man who chooses to enjoy a pleasure that has no
                    annoying consequences, or one who avoids a pain that
                    produces no resultant pleasure?
                </p>
                </div>
                <div id="faq-2" class="xs-py bb-1 border-gray">
                <h3 class="xxs-mb">
                    Forum Comments by Envato Staff &amp; Moderators
                </h3>
                <p class="gray7">
                    But I must explain to you how all this mistaken idea of
                    denouncing it is paino take a trivial example, advantage
                    from it? But who has any right to find fault with a man who
                    chooses to enjoy a pleasure that has no annoying
                    consequences, or one who avoids a pain that produces no
                    resultant pleasure?
                </p>
                </div>
                <div id="faq-3" class="xs-py bb-1 border-gray">
                <h3 class="xs-mb">
                    How Do I Get Support For An Item I've Purchased?
                </h3>
                <p>
                    But I must explain to you how all this mistaken idea of
                    denouncing it is pain, but because occasionally
                    circumstances occur in which toil and pain can procure
                </p>
                </div>
                <div id="faq-4" class="xs-py bb-1 border-gray">
                <h3 class="xxs-mb">
                    Which Author Payment Option Do I Choose?
                </h3>
                <p class="gray7">
                    But I must explain to you how all this mistaken idea of
                    denouncing it is pain, circumstances occur in which toil and
                    pain can procure him some great pleasure. To take a trivial
                    example, which of us ever undertakes laborious physical
                    exercise, except to obtain some advantage from it? But who
                    has any right to find fault with a man who chooses to enjoy
                    a pleasure that has no annoying consequences, or one who
                    avoids a pain that produces no resultant pleasure?
                </p>
                <p>
                    But I must explain to you how all this mistaken ever
                    undertakes laborious physical exercise, except to obtain
                    some advantage from it? But who has any right to find fault
                    with a man who chooses to enjoy a pleasure that has no
                    annoying consequences, or one who avoids a pain that
                    produces no resultant pleasure?
                </p>
                </div>
                <div id="faq-5" class="xs-py bb-1 border-gray">
                <h3 class="xxs-mb">
                    Can I use trademarked names in my items?
                </h3>
                <p class="gray7">
                    But I must explain to you how all has any right to find
                    fault with a man who chooses to enjoy a pleasure that has no
                    annoying consequences, or one who avoids a pain that
                    produces no resultant pleasure?
                </p>
                </div>
                <div id="faq-6" class="xs-py bb-1 border-gray">
                <h3 class="xxs-mb">Historical Payment Rates</h3>
                <p class="gray7">
                    But I must explain to you how all this mistaken idea of
                    denouncing itTo take a trivial example, which of us ever
                    undertakes laborious physical exercise, except to obtain
                    some advantage from it? But who has any right to find fault
                    with a man who chooses to enjoy a pleasure that has no
                    annoying consequences, or one who avoids a pain that
                    produces no resultant pleasure?
                </p>
                </div>
                <div id="faq-7" class="xs-py bb-1 border-gray">
                <h3 class="xxs-mb">How Do I Change My Username?</h3>
                <p class="gray7">
                    But I must explain to you how occur in which toil and pain
                    can procure him some great pleasure. To take a trivial
                    example, which of us ever undertakes laborious physical
                    exercise, except to obtain some advantage from it? But who
                    has any right to find fault with a man who chooses to enjoy
                    a pleasure that has no annoying consequences, or one who
                    avoids a pain that produces no resultant pleasure?
                </p>
                <p class="gray7 xxs-mt">
                    But I must explain to you how occur laborious physical
                    exercise, except to obtain some advantage from it? But who
                    has any right to find fault with a man who chooses to enjoy
                    a pleasure that has no annoying consequences, or one who
                    avoids a pain that produces no resultant pleasure?
                </p>
                </div>
                <div id="faq-8" class="xs-py bb-1 border-gray">
                <h3 class="xxs-mb">Author Collaboration</h3>
                <p class="gray7">
                    But I must explain to you how all this mistaken idea of
                    denouncing it is pain, but because occasionally
                    circumstances occur in which toil and pain can procure him
                    some great pleasure. To take a trivial example, which of us
                    ever undertakes laborious pleasure?
                </p>
                </div>
                <div id="faq-9" class="xs-py bb-1 border-gray">
                <h3 class="xxs-mb">Maecenas auctor velit ipsum</h3>
                <p class="gray7">
                    Maecenas auctor velit ipsum. Nullam tristique, mauris non
                    pretium scelerisque, diam massa commodo purus, eu ultricies
                    sem nunc a sem. Donec et arcu at est sollicitudin cursus.
                    Duis non lacus eget libero eleifend consectetur. Curabitur
                    vel augue ex. Aenean non justo id nisi sodales pulvinar ac
                    euismod massa. Nam non nisi vitae sem euismod posuere vel
                    sit amet nulla. Etiam pellentesque, elit ac pulvinar tempus,
                    orci turpis fermentum diam, sed vulputate nibh lacus id
                    tortor. Maecenas faucibus lectus ac ligula malesuada ornare.
                    Aliquam quis lectus euismod, venenatis est vitae, dictum
                    lacus. Praesent fermentum tortor vel viverra hendrerit.
                    Vestibulum mattis porta volutpat. Sed justo leo, viverra non
                    scelerisque ac, maximus eu nisi. Quisque convallis enim
                    tellus, vitae hendrerit quam facilisis quis.
                </p>
                </div>
                <div id="faq-10" class="xs-py bb-1 border-gray">
                <h3 class="xxs-mb">
                    Quisque viverra est vitae justo maximus facilisis
                </h3>
                <p class="gray7">
                    Sed eu sollicitudin turpis, non feugiat eros. Phasellus
                    pulvinar, justo eget vehicula pulvinar, lorem leo venenatis
                    libero, non posuere dui turpis eget massa. Phasellus
                    efficitur interdum est sed condimentum. Aliquam tempor est
                    urna, et congue lorem lobortis eu. Donec eget pharetra
                    dolor. Mauris rutrum sapien metus, at luctus odio finibus
                    ac. Donec ligula sapien, consectetur a neque id, lacinia
                    porttitor orci. Proin hendrerit semper varius. Phasellus
                    vulputate, nisl eget laoreet lobortis, lorem augue ultrices
                    orci, tempor dapibus ex nulla id augue.
                </p>
                </div>
            </div>
            <!-- End Col -->
            </div>
        </div>
    </section>
@endsection    

@section('between_scripts')
    <script src="{{ asset('assets/frontend/content/nyks/js/plugins.js') }}"></script>
@endsection