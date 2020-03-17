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
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/content/nyks/css/nyks.css') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
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
            <form action="{{ url('driver-register') }}" method="post" class="white" accept-charset="UTF-8" enctype="multipart/form-data">
              {!! csrf_field() !!}
              <div class="row">
                <div class="col-lg-12 t-center mb-5">
                  <h1 class="bold-title">Driver Registration</h1>
                  @if (count($errors) > 0)
                    <div class="alert alert-danger xs-mt">
                      <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                      </ul>
                    </div>
                  @endif
                </div>
                
                <div class="col-lg-6 pb-3">
                  <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Full name"
                    class="classic_form bg-white radius"
                    value="{{ old('name') }}"
                    required
                  />
                </div>
                <div class="col-lg-6 pb-3">
                  <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Email Address"
                    class="classic_form bg-white radius"
                    value="{{ old('email') }}"
                    required
                  />
                </div>
                <div class="col-lg-6 pb-3">
                  <input
                    type="text"
                    name="mobile"
                    id="mobile"
                    placeholder="Mobile number"
                    class="classic_form bg-white radius"
                    value="{{ old('mobile') }}"
                    required
                  />
                </div>
                <div class="col-lg-6 pb-3">
                  <input
                    type="text"
                    name="alt_mobile"
                    id="alt_mobile"
                    placeholder="Whatsapp number"
                    class="classic_form bg-white radius"
                    value="{{ old('alt_mobile') }}"
                    required
                  />
                </div>
                <div class="col-lg-12 d-flex justfy-content-start pb-3">
                  <div class="classic_checkbox radio">
                    <input
                      type="radio"
                      name="gender"
                      id="radioOne"
                      checked=""
                      value=1
                    />
                    <label for="radioOne">Male</label>
                  </div>
                  <div class="classic_checkbox radio">
                    <input
                      type="radio"
                      name="gender"
                      id="radioOne"
                      value=0
                      checked=""
                    />
                    <label for="radioOne">Female</label>
                  </div>
                </div>
                <div class="col-lg-6 d-flex flex-column align-items-start pb-3">
                  <label for="id_proof"> Id Proof * </label>
                  <input
                    type="file"
                    name="id_proof"
                    id="id_proof"
                    class="inputfile"
                    
                  />
                  <label for="id_proof" class="d-flex">
                    <strong class="bg-colored">Choose a file&hellip;</strong
                    ><span></span
                  ></label>
                </div>
                <div class="col-lg-6 d-flex flex-column align-items-start">
                  <label for="driving_license"> Driving license * </label>
                  <input
                    type="file"
                    name="driving_license"
                    id="driving_license"
                    class="inputfile"
                  />
                  <label for="driving_license" class="d-flex">
                    <strong class="bg-colored">Choose a file&hellip;</strong
                    ><span></span
                  ></label>
                </div>
                <div class="col-lg-6 d-flex flex-column align-items-start">
                  <label for="rc_book"> RC Book * </label>
                  <input
                    type="file"
                    name="rc_book"
                    id="rc_book"
                    class="inputfile"
                  />
                  <label for="rc_book" class="d-flex">
                    <strong class="bg-colored">Choose a file&hellip;</strong
                    ><span></span
                  ></label>
                </div>
                <div class="col-lg-6 d-flex flex-column align-items-start">
                  <label for="permit"> Permit</label>
                  <input
                    type="file"
                    name="permit"
                    id="permit"
                    class="inputfile"
                  />
                  <label for="permit" class="d-flex">
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
                  <label for="make_id">Select vehicle company</label>
                  <select
                    name="make_id"
                    required=""
                    class="classic_form radius  bg-white"
                    id="make_id"
                  >
                    <option value="">Select a vehicle company</option>
                    @foreach ($makes as $item)
                    <option value="{{ $item->id }}">{{ $item->make }}</option>  
                    @endforeach
                  </select>
                </div>
                <div class="col-lg-6 t-left pb-3">
                  <label for="model_id">Select vehicle name</label>
                  <select
                    name="model_id"
                    required=""
                    class="classic_form radius bg-white"
                    id="model_id"
                  >
                    <option value="">Select a vehicle name</option>
                    
                  </select>
                </div>

                <div class="col-lg-6 t-left pb-3">
                  <label for="type_id">Select vehicle type</label>
                  <select
                    name="type_id"
                    required=""
                    class="classic_form radius bg-white"
                  >
                    <option value="">Select a vehicle type</option>
                    @foreach ($types as $row)
                    <option value="{{ $row->id }}">{{ $row->displayname }}</option>                        
                    @endforeach
                  </select>
                </div>
                <div class="col-lg-6 t-left pb-3">
                  <label for="color_id">Select vehicle color</label>
                  <select
                    name="color_id"
                    required=""
                    class="classic_form radius bg-white"
                  >
                    <option value="">Select a vehicle color</option>
                    @foreach ($colors as $item)
                    <option value="{{ $item->id }}">{{ $item->color }}</option>  
                    @endforeach
                  </select>
                </div>
                <div class="col-lg-6 pb-3">
                  <label for="vehicle_number"> &nbsp; </label>
                  <input
                    type="text"
                    name="vehicle_number"
                    id="vehicle_number"
                    placeholder="Vehicle number ( e.g. GJ-04-be-8562 ) "
                    class="classic_form bg-white radius"
                    required
                  />
                </div>
                <div class="col-lg-6 t-left pb-3">
                  <label for="insurance"> Vehicle Insurance * </label>
                  <input
                    type="file"
                    name="insurance"
                    id="insurance"
                    class="inputfile"
                  />
                  <label for="insurance" class="d-flex">
                    <strong class="bg-colored">Choose a file&hellip;</strong
                    ><span></span
                  ></label>
                </div>
                <div class="col-lg-6 d-flex flex-column align-items-start pb-3">
                  <label for="vehicle_fitness"> Vehicle Fitness Certificate </label>
                  <input
                    type="file"
                    name="vehicle_fitness"
                    id="vehicle_fitness"
                    class="inputfile"
                   
                  />
                  <label for="vehicle_fitness" class="d-flex">
                    <strong class="bg-colored">Choose a file&hellip;</strong
                    ><span></span
                  ></label>
                </div>
                <div class="col-lg-12 t-left pb-3">
                  <div class="checkbox_switch xs-mt">
                    <input type="checkbox" id="switch" class="switch" name="terms" value=1 /><label
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
    <a id="back-to-top" href="#top"><span class="fa fa-angle-up"></span></a>

    <!-- jQuery -->
    <script src="{{ asset('assets/frontend/js/jquery.min.js?v=2.3') }}"></script>
    <script src="{{ asset('assets/frontend/content/nyks/js/plugins.js') }}"></script>
    <!-- <script src="content/antares/js/plugins.js"></script> -->
    <!-- MAIN SCRIPTS - Classic scripts for all theme -->
    <script src="{{ asset('assets/frontend/js/scripts.js?v=2.3.1') }}"></script>
    <script>
      $('#make_id').on('change',function(){
        // alert($(this).val());
        $.ajax({
          type: "GET",
          url: "{{url('admin/get-models')}}/"+$(this).val(),
          success: function(data){
            var models =  $.parseJSON(data);
              $('#model_id').empty();
              $('#model_id').append('<option value=""></option>');
              $.each( models, function( key, value ) {
                $('#model_id').append('<option value='+value.id+'>'+value.text+'</option>');                
              });    
          },
          dataType: "html"
        });
      });
    </script>
  </body>
  <!-- Body End -->
</html>