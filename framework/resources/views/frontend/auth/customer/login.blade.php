<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>MPCabs | User login</title>
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

  <body>
    <!-- LOADER -->
    <div class="page-loader bg-white">
      <div class="v-center t-center">
        <div class="spinner">
          <div class="spinner__item1 bg-gray9"></div>
          <div class="spinner__item2 bg-gray9"></div>
          <div class="spinner__item3 bg-gray9"></div>
          <div class="spinner__item4 bg-gray9"></div>
        </div>
      </div>
    </div>

    <!-- Wrapper -->
    <section id="wrapper">
      <!-- Side Menu Navigation - You can change left and right classes, white and dark classes and t-center t-left t-right classes for elements position -->

      <!-- END NAVIGATION -->
      <!-- End Side Menu Navigation -->

      <!-- ALL SECTIONS -->
      <section id="content">
        <!-- CONTENT -->
        <section
          id="home"
          class="fullscreen t-center fullwidth cover"
          data-background="{{ asset('assets/frontend/images/mpcabs-driver-login.jpg') }}"
        >
          <!-- Container -->
          <div class="container-xs mxw-350 v-center">
            <div class="t-center white">
              <h1 class="bold-title">User login</h1>
              @if (session('success'))
                <div class="alert alert-success xs-mt">
                  {{ session('success') }}
                </div>
              @endif
              <div class="form dark xs-mt normal-title">
                <form action="" method="post">
                  <!-- Email -->
                  <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Email id"
                    class="classic_form bg-white radius"
                  />
                  <!-- Email -->
                  <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="Password"
                    class="classic_form bg-white radius"
                  />
                  <!-- Send Button -->
                  <button
                    type="submit"
                    id="submit"
                    class="bg-colored1 click-effect white bold qdr-hover-6 classic_form uppercase no-border radius"
                  >
                    SIGN IN
                  </button>
                  <!-- End Send Button -->
                </form>
              </div>
              <div
                class="p-2 radius-sm gray8"
                style="background-color:rgba(255,255,255,.5)"
              >
                <h5 class="bold">
                  Did you lost your password?
                  <a href="{{ url('forget-password') }}" class="underline"
                    >Click Here.</a
                  >
                </h5>
                <h5 class="mt-1 bold">
                  Don't have an account ?
                  <a href="{{ url('user-register') }}" class="underline">Register.</a>
                </h5>
              </div>
            </div>
          </div>
          <!-- End Container -->
        </section>
        <!-- END CONTENT -->
      </section>
      <!-- END ALL SECTIONS -->
    </section>
    <!-- END WRAPPER -->

    <!-- Back To Top -->
    <a id="back-to-top" href="#top"><i class="fa fa-angle-up"></i></a>

    <!-- jQuery -->
    <script src="{{ asset('assets/frontend/js/jquery.min.js?v=2.3') }}"></script>
    <!-- PAGE OPTIONS - You can find special scripts for this version -->
    <script src="{{ asset('assets/frontend/content/nyks/js/plugins.js') }}"></script>
    <!-- <script src="content/antares/js/plugins.js"></script> -->
    <!-- MAIN SCRIPTS - Classic scripts for all theme -->
    <script src="{{ asset('assets/frontend/js/scripts.js?v=2.3.1') }}"></script>
  </body>
  <!-- Body End -->
</html>