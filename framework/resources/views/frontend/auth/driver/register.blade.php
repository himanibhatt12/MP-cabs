<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>MPCabs | Driver Register</title>
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
          class="cover py-5"
          data-background="{{ asset('assets/frontend/images/mpcabs-driver-registration.jpg') }}"
        >
          <!-- Container -->
          <div class="container">
            <form action="" method="post" class="white">
              <div class="row">
                <div class="col-lg-12 t-center mb-5">
                  <h1 class="bold-title">Driver Registration</h1>
                </div>
                <div class="col-lg-6 pb-3">
                  <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Full name"
                    class="classic_form bg-white radius"
                  />
                </div>
                <div class="col-lg-6 pb-3">
                  <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Email Address"
                    class="classic_form bg-white radius"
                  />
                </div>
                <div class="col-lg-6 pb-3">
                  <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Mobile number"
                    class="classic_form bg-white radius"
                  />
                </div>
                <div class="col-lg-6 pb-3">
                  <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Whatsapp number"
                    class="classic_form bg-white radius"
                  />
                </div>
                <div class="col-lg-12 d-flex justfy-content-start pb-3">
                  <div class="classic_checkbox radio">
                    <input
                      type="radio"
                      name="radio"
                      id="radioOne"
                      value="radioOne"
                      checked=""
                    />
                    <label for="radioOne">Male</label>
                  </div>
                  <div class="classic_checkbox radio">
                    <input
                      type="radio"
                      name="radio"
                      id="radioOne"
                      value="radioOne"
                      checked=""
                    />
                    <label for="radioOne">Female</label>
                  </div>
                </div>
                <div class="col-lg-6 d-flex flex-column align-items-start pb-3">
                  <label for="idproof"> Id Proof * </label>
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
                <div class="col-lg-6 d-flex flex-column align-items-start">
                  <label for="idproof"> Driving license * </label>
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
                <div class="col-lg-6 d-flex flex-column align-items-start">
                  <label for="idproof"> RC Book * </label>
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
                <div class="col-lg-6 d-flex flex-column align-items-start">
                  <label for="idproof"> Permit * </label>
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
                <div
                  class="divider-1 font-11 text-white uppercase container bold my-5"
                >
                  <span> Vehicle information </span>
                </div>
                <div class="col-lg-6 t-left pb-3">
                  <label for="subject">Select vehicle name</label>
                  <select
                    name="subject"
                    form="contact_form"
                    required=""
                    class="classic_form radius bg-white"
                  >
                    <option value="">Select a vehicle</option>
                    <option value="Developer">Option 1</option>
                    <option value="Designer">Option 2</option>
                    <option value="Photographer">Option 3</option>
                  </select>
                </div>
                <div class="col-lg-6 t-left pb-3">
                  <label for="subject">Select vehicle company</label>
                  <select
                    name="subject"
                    form="contact_form"
                    required=""
                    class="classic_form radius  bg-white"
                  >
                    <option value="">Select a vehicle</option>
                    <option value="Developer">Option 1</option>
                    <option value="Designer">Option 2</option>
                    <option value="Photographer">Option 3</option>
                  </select>
                </div>
                <div class="col-lg-6 pb-3">
                  <label for="idproof"> &nbsp; </label>
                  <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Vehicle number ( e.g. GJ-04-be-8562 ) "
                    class="classic_form bg-white radius"
                  />
                </div>
                <div class="col-lg-6 t-left pb-3">
                  <label for="idproof"> Vehicle Insurance * </label>
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
                <div class="col-lg-6 d-flex flex-column align-items-start pb-3">
                  <label for="idproof"> Vehicle Fitness Certificate * </label>
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
                <div class="col-lg-12 t-left pb-3">
                  <div class="checkbox_switch xs-mt">
                    <input type="checkbox" id="switch" class="switch" /><label
                      for="switch"
                    ></label>
                    <span
                      >I have read and accept
                      <a
                        href="#"
                        class="text-primary underline underline-hover"
                      >
                        Terms and Conditions
                      </a></span
                    >
                  </div>
                </div>
              </div>
              <div
                class="row d-flex justify-content-center align-items-center mt-3"
              >
                <div class="col-lg-6">
                  <button
                    type="submit"
                    id="submit"
                    class="bg-colored1 click-effect white bold qdr-hover-6 classic_form uppercase no-border radius"
                  >
                    Register
                  </button>
                </div>
              </div>
            </form>
            <h5 class="w-100 t-center text-white">
              Already have an account ?
              <a href="{{ url('driver-login') }}" class="underline">Login.</a>
            </h5>
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
    <script src="{{ asset('assets/frontend/content/nyks/js/plugins.js') }}"></script>
    <!-- <script src="content/antares/js/plugins.js"></script> -->
    <!-- MAIN SCRIPTS - Classic scripts for all theme -->
    <script src="{{ asset('assets/frontend/js/scripts.js?v=2.3.1') }}"></script>
  </body>
  <!-- Body End -->
</html>