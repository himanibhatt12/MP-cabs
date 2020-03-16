<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>MPCabs | Review us</title>
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1.0,maximum-scale=1"
    />
    <!--Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/frontend/images/favicon.png') }}" />
    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" href="{{ asset('assets/frontend/images/apple-touch-icon.png') }}" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/theme.css?v=2.3.1') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/content/nyks/css/nyks.css') }}" />
    <!-- End Page Styles -->
  </head>

  <!-- BODY START -->
  <body class="no-selection">
    <!-- LOADER -->
    <div class="page-loader bg-white">
      <div class="v-center t-center">
        <div class="spinner">
          <div class="spinner__item1 bg-dark"></div>
          <div class="spinner__item2 bg-dark"></div>
          <div class="spinner__item3 bg-dark"></div>
          <div class="spinner__item4 bg-dark"></div>
        </div>
      </div>
    </div>

    <!-- NAVIGATION -->
    <nav
      id="navigation"
      class="white-nav transparent modern hover4 radius-drop"
      data-offset="55"
    >
      <!-- Columns -->
      <div class="columns clearfix container-xl">
        <!-- Logo -->
        <div class="logo" data-infocard="#infocard">
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

        <!-- Right Elements; Nav Button, Language Button, Search .etc -->
        <div class="nav-elements">
          <ul class="clearfix nav">
            <li>
              <a
                href="{{ url('driver-login') }}"
                target="_blank"
                class="external-btn bg-colored underline-hover white radius-lg font-11 bold bs-hover click-effect"
              >
                Login
              </a>
            </li>
          </ul>
        </div>
        <!-- End Navigation Elements -->
      </div>
      <!-- End Columns -->
    </nav>
    <!-- END NAVIGATION -->

    <!-- HOME SECTION -->
    <section id="home" class="clearfix calculate-height">
      <!-- Row for cols -->
      <div class="row no-mx calculate-height fullwidth">
        <!-- Left Texts -->
        <div class="col-md-7 col-12 table-im mnh-full t-center pt-5 pb-4">
          <!-- Centering div -->
          <div class="v-middle">
            <!-- Title -->
            <h1 class="extrabold-title text-lg2 text-mobile-xl black lh-sm">
              Review us
            </h1>
            <!-- Subtitle -->
            <h5 class="merriweather italic light xxs-mt gray7 capitalize">
              It will give us a change to improve our services.
            </h5>

            <!-- Container for subscribe form -->
            <div class="container-xs">
              <!-- Divider -->
              <div class="divider-1 font-11 uppercase bold gray7 sm-mt xs-mb">
                <span>Let me know when site is ready.</span>
              </div>
              <!-- Form -->
              <form
                id="newsletter_form"
                name="newsletter_form"
                method="post"
                action="php/newsletter.php"
              >
                <input
                  type="text"
                  name="name"
                  id="name"
                  placeholder="Your name"
                  class="classic_form bg-white radius"
                />
                <input
                  type="text"
                  name="name"
                  id="name"
                  placeholder="Email Address"
                  class="classic_form bg-white radius"
                />
                <textarea
                  name="message"
                  id="message"
                  placeholder="Review text"
                  class="classic_form big radius bg-white "
                  spellcheck="false"
                ></textarea>
                <div class="d-flex flex-column align-items-start">
                  <input
                    type="file"
                    name="file"
                    id="file"
                    class="inputfile"
                    data-multiple-caption="{count} files selected"
                    multiple
                  />
                  <label for="file" class="d-flex">
                    <strong class="bg-colored">Choose a file&hellip;</strong
                    ><span></span
                  ></label>
                </div>
                <button
                  type="submit"
                  id="submit"
                  class="bg-colored click-effect white bold qdr-hover-6 classic_form uppercase no-border radius"
                >
                  Submit
                </button>
              </form>
              <!-- Google Map -->
              <a
                href="{{ url('/') }}"
                class="inline-block xs-mt font-17 merriweather light italic c-pointer qdr-hover-5"
              >
                Back to Home
              </a>
            </div>
            <!-- End Container for subscribe form -->
          </div>
          <!-- End Centering div -->
        </div>
        <!-- End Left Texts -->

        <!-- Right Image -->
        <div
          class="col-md-5 col-12 py bg-cover bg-center"
          data-background="{{ asset('assets/frontend/images/mpcabs-review-us.jpg') }}"
        ></div>
      </div>
      <!-- End Row for cols -->
    </section>
    <!-- END HOME -->

    <!-- Back To Top -->
    <a id="back-to-top" href="#top"><i class="fa fa-angle-up"></i></a>

    <!-- jQuery -->
    <script src="{{ asset('assets/frontend/js/jquery.min.js?v=2.3') }}"></script>
    <!-- MAIN SCRIPTS - Classic scripts for all theme -->
    <script src="{{ asset('assets/frontend/js/scripts.js?v=2.3.1') }}"></script>
    <!-- END JS FILES -->
  </body>
  <!-- Body End -->
</html>
