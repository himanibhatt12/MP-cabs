<!-- FOOTER -->
<footer id="footer" class="classic_footer bg-white">
    <!-- Container -->
    <div class="footer-body container">
        <div class="row clearfix">
            <!-- Column -->
            <div class="col-md-3 col-sm-6 col-xs-12 sm-mb-mobile">
                <!-- Title -->
                <h6 class="uppercase dark extrabold">MPCAB</h6>
                <h6 class="xs-mt bold gray9">ABOUT US</h6>
                <p class="mini-mt">
                    {{ Hyvikk::frontend('about_us') }}
                </p>
                <h6 class="xs-mt bold gray9">
                <i class="fa fa-map-marker mini-mr"></i>OUR ADDRESS
                </h6>
                <p class="mini-mt">
                {{ Hyvikk::get('badd1') }} <br class="hidden-xs" />
                {{ Hyvikk::get('badd2') }} <br class="hidden-xs" />
                {{ Hyvikk::get('city') }},
                {{ Hyvikk::get('state') }},
                {{ Hyvikk::get('country') }}.
                </p>
                <!-- Google Map -->
                <a
                href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9916256937586!2d2.2922926156743895!3d48.858370079287475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sEyfel+Kulesi!5e0!3m2!1str!2s!4v1491905379246"
                data-iframe="true"
                class="lightbox underline-hover colored-hover"
                >
                Find us on Google Map
                </a>
                <h6 class="xs-mt bold gray9">
                <i class="fa fa-envelope mini-mr"></i>CONTACT US
                </h6>
                <p class="mini-mt">
                Pbx:
                <a href="tel:{{Hyvikk::frontend('contact_phone')}}" class="underline-hover colored-hover">{{ Hyvikk::frontend('contact_phone') }}
                </a>
                </p>
                <a
                href="mailto:{{ Hyvikk::frontend('contact_email') }}"
                class="underline-hover colored-hover"
                >{{ Hyvikk::frontend('contact_email') }}</a
                >
            </div>
            <!-- Column -->
            <div class="col-md-3 col-sm-6 col-xs-12 sm-mb-mobile">
                <h6 class="uppercase dark extrabold xs-mb">Offers</h6>
                <!-- Blog Posts -->
                <div
                class="footer-client-comments c-vertical-resize custom-slider"
                data-slick='{"vertical": true, "verticalSwiping": true, "slidesToShow": 3, "slidesToScroll": 1, "draggable":true, "autoplay": true, "autoplaySpeed": 6000, "adaptiveHeight":true, "arrows":false, "dots": false}'
                >
                <!-- Item -->
                @foreach(Hyvikk::offers() as $offer)
                    <div class="clearfix">
                        <div class="clearfix">
                            <div class="texts">
                                <a href="#" class="h6 underline-hover uppercase extrabold gray8 block">
                                    {{ $offer->source ." - ".$offer->destination." @ ". $offer->total." INR..."    }}
                                </a>
                                <a href="#" class="font-13 gray9 underline-hover block gray7-hover">
                                    <i class="icon-clock mini-mr"></i>
                                    Till {{ date('F d',strtotime($offer->valid_till)) }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
            <!-- End Column -->
            <!-- Column -->
            <div class="col-md-3 col-sm-6 col-xs-12 all-block-links sm-mb-mobile">
                <h6 class="uppercase dark extrabold xs-mb">Useful Links</h6>

                <div>
                    <h6 class="bold gray8">For user</h6>
                    <a
                        href="{{ url('user-login') }}"
                        target="_blank"
                        class="underline-hover gray6-hover mini-mt"
                        >Login</a
                    >
                    <a
                        href="{{ url('user-register') }}"
                        target="_blank"
                        class="underline-hover gray6-hover mini-mt"
                        >Registration</a
                    >
                    <a
                        href="{{ url('faq') }}"
                        target="_blank"
                        class="underline-hover gray6-hover mini-mt"
                        >FAQs</a
                    >
                    <a
                        href="{{ url('brands') }}"
                        target="_blank"
                        class="underline-hover gray6-hover mini-mt"
                        >Brands</a
                    >
                </div>
                <div class="mt-3">
                    <h6 class="bold gray8">For drivers / vendors</h6>
                    <a
                        href="{{ url('driver-register') }}"
                        target="_blank"
                        class="underline-hover gray6-hover mini-mt"
                        >Sign up</a
                    >
                    <a
                        href="{{ url('driver-login') }}"
                        target="_blank"
                        class="underline-hover gray6-hover mini-mt"
                        >Login</a
                    >
                </div>
            </div>
            <!-- End Column -->
            <!-- Column -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <!-- Title -->
                <h5 class="uppercase dark extrabold no-pm">
                SUBSCRIBE US
                </h5>
                <!-- Sub Title -->
                <h6 class="xs-mt bold gray9">GET UPDATED</h6>

                <div
                id="newsletter-form"
                class="footer-newsletter clearfix xs-mt"
                >
                    <form
                        id="newsletter_form"
                        name="newsletter_form"
                        method="post"
                        action="{{ url('subscribe') }}"
                    >
                        {{ csrf_field() }}
                        <input
                        type="email"
                        name="email"
                        id="n-email"
                        required
                        placeholder="Add your E-Mail address"
                        class="font-12 radius-lg form-control bg-gray2 dark"
                        />
                        <button
                        type="submit"
                        id="n-submit"
                        name="submit"
                        class="btn-lg fullwidth radius-lg bg-colored1 white qdr-hover-6 click-effect bold font-12"
                        >
                        SUBSCRIBE
                        </button>
                    </form>
                </div>
                <!-- End Form -->
                <h6 class="xs-mt xxs-mb bold gray9">FOLLOW US</h6>
                <a
                href="{{ Hyvikk::frontend('facebook') }}"
                class="icon-xs radius bg-gray2 dark facebook white-hover slow1"
                ><i class="fa fa-facebook"></i
                ></a>
                <a
                href="{{ Hyvikk::frontend('twitter') }}"
                class="icon-xs radius bg-gray2 dark twitter white-hover slow1"
                ><i class="fa fa-twitter"></i
                ></a>
                <a
                href="{{ Hyvikk::frontend('instagram') }}"
                class="icon-xs radius bg-gray2 dark instagram white-hover slow1"
                ><i class="fa fa-instagram"></i
                ></a>
                <a
                href="{{ Hyvikk::frontend('pinterest') }}"
                class="icon-xs radius bg-gray2 dark pinterest white-hover slow1"
                ><i class="fa fa-pinterest"></i
                ></a>
            </div>
            <!-- End Column -->
        </div>
    </div>
    <!-- End Container -->
    <!-- Footer Bottom -->
    <div class="footer-bottom bg-gray1 bt-1 border-gray1">
        <div class="container">
            <div class="row clearfix calculate-height t-center-xs">
                <div
                class="col-md-6 col-xs-12 table-im t-left height-auto-mobile t-center-xs"
                >
                    <div class="v-middle">
                        <img
                        src="{{ asset('assets/frontend/images/logos/icon_02_b.png') }}"
                        alt="logo icon"
                        class="logo"
                        />
                    </div>
                </div>
                <!-- Bottom Note -->
                <div
                class="col-md-6 col-xs-12 table-im t-right height-auto-mobile t-center-xs xxs-mt-mobile"
                >
                    <p class="v-middle">
                        <a
                        href="#"
                        target="_blank"
                        class="gray6-hover underline-hover"
                        >Terms and Condition</a
                        >
                        |
                        <a
                        href="#"
                        target="_blank"
                        class="gray6-hover underline-hover"
                        >Privacy Policy</a
                        >
                        <br class="hidden-xs" />
                        © {{ date('Y') }} All Right Reserved By MP Cab.
                        <br class="hidden-xs" />
                        Powered By
                        <a
                        href="https://www.hyvikk.com"
                        target="_blank"
                        class="colored-hover underline-hover"
                        >Hyvikk Solutions</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->