<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>MPCabs | Home</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1"/>
    <!--Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/frontend/images/favicon.png') }}" />
    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" href="{{ asset('assets/frontend/images/apple-touch-icon.png') }}" />

    @include('frontend.includes.styles')
    @yield('css')
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
      @include('frontend.includes.navigation')
      <!-- ALL SECTIONS -->
      <section id="content">
        @yield('content')
        {{-- @include('frontend.home') --}}
        @include('frontend.includes.footer')
      </section>
      <!-- END ALL SECTIONS -->
    </section>
    <!-- END WRAPPER -->
    @include('frontend.includes.contact')

    @include('frontend.includes.javascripts')
    @yield('javascript')

  </body>
  <!-- Body End -->
</html>
