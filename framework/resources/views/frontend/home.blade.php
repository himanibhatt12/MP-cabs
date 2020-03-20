@extends('frontend.layouts.app')
@section('between_css')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/theme.css') }}" /> 
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick-slider.css') }}" /> 
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/revolutionslider/settings.css') }}" /> 
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/components/classic_datepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/custom.css') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
@endsection
@section('content')
    <!-- HOME SECTION -->
    <!-- CONTENT -->
    <section id="home">
      <div
        id="rev_slider_348_1_wrapper"
        class="rev_slider_wrapper fullscreen-container"
        data-alias="overexposure"
        data-source="gallery"
        style="background:transparent;padding:0px;"
      >
        <!-- START REVOLUTION SLIDER 5.4.3.3 fullscreen mode -->
        <div
          id="rev_slider_348_1"
          class="rev_slider fullscreenbanner"
          style="display:none;"
          data-version="5.4.3.3"
        >
          <ul>
            <!-- SLIDE -->
            <li
              data-index="rs-968"
              data-transition="brightnesscross"
              data-slotamount="default"
              data-hideafterloop="0"
              data-hideslideonmobile="off"
              data-easein="default"
              data-easeout="default"
              data-masterspeed="default"
              
              data-rotate="0"
              data-saveperformance="off"
              data-title="Slide"
              data-param1=""
              data-param2=""
              data-param3=""
              data-param4=""
              data-param5=""
              data-param6=""
              data-param7=""
              data-param8=""
              data-param9=""
              data-param10=""
              data-description=""
            >
              <!-- MAIN IMAGE -->
              <img
                src="{{ asset('assets/frontend/images/mpcabs-home.jpg') }}"
                alt=""
                
                data-bgposition="center center"
                data-bgfit="cover"
                data-bgrepeat="no-repeat"
                data-bgparallax="6"
                class="rev-slidebg"
                data-no-retina
              />
              <!-- LAYERS -->
              <div
                id="rrzm_968"
                class="rev_row_zone rev_row_zone_middle"
                style="z-index: 11;"
              >
                <!-- LAYER NR. 1 -->
                <div
                  class="tp-caption rs-parallaxlevel-4"
                  id="slide-968-layer-7"
                  data-x="['left','left','left','left']"
                  data-hoffset="['100','100','100','100']"
                  data-y="['middle','middle','middle','middle']"
                  data-voffset="['0','0','0','0']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-type="row"
                  data-columnbreak="2"
                  data-responsive_offset="on"
                  data-responsive="off"
                  data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                  data-margintop="[0,0,0,0]"
                  data-marginright="[0,0,0,0]"
                  data-marginbottom="[0,0,0,0]"
                  data-marginleft="[0,0,0,0]"
                  data-textAlign="['inherit','inherit','inherit','inherit']"
                  data-paddingtop="[0,0,0,0]"
                  data-paddingright="[50,50,30,30]"
                  data-paddingbottom="[200,200,200,200]"
                  data-paddingleft="[50,50,30,30]"
                  style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;"
                >
                  <!-- LAYER NR. 2 -->
                  <div
                    class="tp-caption  "
                    id="slide-968-layer-8"
                    data-x="['left','left','left','left']"
                    data-hoffset="['100','100','100','100']"
                    data-y="['top','top','top','top']"
                    data-voffset="['100','100','100','100']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="column"
                    data-responsive_offset="on"
                    data-responsive="off"
                    data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-columnwidth="50%"
                    data-verticalalign="top"
                    data-margintop="[0,0,0,0]"
                    data-marginright="[0,0,0,0]"
                    data-marginbottom="[0,0,0,0]"
                    data-marginleft="[0,0,0,0]"
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[20,20,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    style="z-index: 6; width: 100%;"
                  >
                    <!-- LAYER NR. 3 -->
                    <div
                      class="tp-caption tp-resizeme"
                      id="slide-968-layer-2"
                      data-x="['left','left','left','left']"
                      data-hoffset="['0','53','53','42']"
                      data-y="['top','top','top','top']"
                      data-voffset="['0','123','123','122']"
                      data-letterspacing="['5','5','5','3']"
                      data-width="none"
                      data-height="none"
                      data-whitespace="['normal','nowrap','nowrap','nowrap']"
                      data-type="text"
                      data-responsive_offset="on"
                      data-frames='[{"delay":"+990","speed":2000,"frame":"0","from":"opacity:0;","color":"#e5452b","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                      data-margintop="[0,0,0,0]"
                      data-marginright="[0,0,0,0]"
                      data-marginbottom="[24,28,21,21]"
                      data-marginleft="[0,0,0,0]"
                      data-textAlign="['inherit','inherit','inherit','inherit']"
                      data-paddingtop="[0,0,0,0]"
                      data-paddingright="[0,0,0,0]"
                      data-paddingbottom="[0,0,0,0]"
                      data-paddingleft="[0,0,0,0]"
                      style="z-index: 7; white-space: normal; font-size: 17px; line-height: 24px; font-weight: 400; color: #ffffff; letter-spacing: 5px; display: block;;text-transform:uppercase;text-shadow:0px 0px 3px rgba(0,0,0,0.5)"
                    >
                      Welcome to
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div
                      class="tp-caption   tp-resizeme"
                      id="slide-968-layer-1"
                      data-x="['left','left','left','left']"
                      data-hoffset="['0','50','50','40']"
                      data-y="['top','top','top','top']"
                      data-voffset="['0','170','170','167']"
                      data-fontsize="['60','50','40','40']"
                      data-lineheight="['90','75','60','60']"
                      data-letterspacing="['15','15','10','7']"
                      data-width="['100%','100%','561','401']"
                      data-height="none"
                      data-whitespace="normal"
                      data-type="text"
                      data-responsive_offset="on"
                      data-frames='[{"delay":"+290","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                      data-margintop="[0,0,0,0]"
                      data-marginright="[0,0,0,0]"
                      data-marginbottom="[30,31,26,26]"
                      data-marginleft="[0,0,0,0]"
                      data-textAlign="['inherit','inherit','inherit','inherit']"
                      data-paddingtop="[0,0,0,0]"
                      data-paddingright="[0,0,0,0]"
                      data-paddingbottom="[0,0,0,0]"
                      data-paddingleft="[0,0,0,0]"
                      style="z-index: 8; min-width: 100%px; max-width: 100%px; white-space: normal; font-size: 60px; line-height: 90px; font-weight: 400; color: #ffffff; letter-spacing: 15px; display: block;;text-transform:uppercase;text-shadow:0px 0px 5px rgba(0,0,0,0.5)"
                    >
                      MP CAB
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div
                      class="tp-caption   tp-resizeme"
                      id="slide-968-layer-1"
                      data-x="['left','left','left','left']"
                      data-hoffset="['0','50','50','40']"
                      data-y="['top','top','top','top']"
                      data-voffset="['0','170','170','167']"
                      data-fontsize="['60','50','40','40']"
                      data-lineheight="['90','75','60','60']"
                      data-letterspacing="['15','15','10','7']"
                      data-width="['100%','100%','561','401']"
                      data-height="none"
                      data-whitespace="normal"
                      data-type="text"
                      data-responsive_offset="on"
                      data-frames='[{"delay":"+290","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                      data-margintop="[0,0,0,0]"
                      data-marginright="[0,0,0,0]"
                      data-marginbottom="[30,31,26,26]"
                      data-marginleft="[0,0,0,0]"
                      data-textAlign="['inherit','inherit','inherit','inherit']"
                      data-paddingtop="[0,0,0,0]"
                      data-paddingright="[0,0,0,0]"
                      data-paddingbottom="[0,0,0,0]"
                      data-paddingleft="[0,0,0,0]"
                      style="z-index: 8; min-width: 100%px; max-width: 100%px; white-space: normal; font-size: 60px; line-height: 90px; font-weight: 400; color: #FFC108; letter-spacing: 15px; display: block;;text-transform:uppercase;text-shadow:0px 0px 5px rgba(0,0,0,0.5)"
                    >
                      Your Travel Partner
                    </div>

                    <!-- LAYER NR. 5 -->
                    <div
                      class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                      id="slide-968-layer-3"
                      data-x="['left','left','left','left']"
                      data-hoffset="['0','53','53','42']"
                      data-y="['top','top','top','top']"
                      data-voffset="['0','440','498','373']"
                      data-width="50"
                      data-height="1"
                      data-whitespace="['normal','nowrap','nowrap','nowrap']"
                      data-type="shape"
                      data-responsive_offset="on"
                      data-frames='[{"delay":"+1490","speed":2000,"frame":"0","from":"sX:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                      data-margintop="[0,0,0,0]"
                      data-marginright="[0,0,0,0]"
                      data-marginbottom="[0,0,0,0]"
                      data-marginleft="[0,0,0,0]"
                      data-textAlign="['inherit','inherit','inherit','inherit']"
                      data-paddingtop="[0,0,0,0]"
                      data-paddingright="[0,0,0,0]"
                      data-paddingbottom="[0,0,0,0]"
                      data-paddingleft="[0,0,0,0]"
                      style="z-index: 9; display: block;background-color:rgb(0,0,0);"
                    ></div>
                  </div>

                  <!-- LAYER NR. 6 -->
                  <div
                    class="tp-caption  "
                    id="slide-968-layer-9"
                    data-x="['left','left','left','left']"
                    data-hoffset="['100','100','100','100']"
                    data-y="['top','top','top','top']"
                    data-voffset="['100','100','100','100']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="column"
                    data-responsive_offset="on"
                    data-responsive="off"
                    data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-columnwidth="50%"
                    data-verticalalign="top"
                    data-margintop="[0,0,0,0]"
                    data-marginright="[0,0,0,0]"
                    data-marginbottom="[0,0,0,0]"
                    data-marginleft="[0,0,0,0]"
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    style="z-index: 10; width: 100%;"
                  ></div>
                </div>

                <!-- LAYER NR. 7 -->
                <div
                  class="tp-caption   rs-parallaxlevel-5"
                  id="slide-968-layer-10"
                  data-x="['left','left','left','left']"
                  data-hoffset="['100','100','100','100']"
                  data-y="['middle','middle','middle','middle']"
                  data-voffset="['0','0','0','0']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-type="row"
                  data-columnbreak="2"
                  data-responsive_offset="on"
                  data-responsive="off"
                  data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                  data-margintop="[0,0,0,0]"
                  data-marginright="[0,0,0,0]"
                  data-marginbottom="[0,0,0,0]"
                  data-marginleft="[0,0,0,0]"
                  data-textAlign="['inherit','inherit','inherit','inherit']"
                  data-paddingtop="[0,0,0,0]"
                  data-paddingright="[50,50,30,30]"
                  data-paddingbottom="[0,0,0,0]"
                  data-paddingleft="[50,50,30,30]"
                  style="z-index: 11; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;"
                >
                  <!-- LAYER NR. 8 -->
                  <div
                    class="tp-caption  "
                    id="slide-968-layer-11"
                    data-x="['left','left','left','left']"
                    data-hoffset="['100','100','100','100']"
                    data-y="['top','top','top','top']"
                    data-voffset="['100','100','100','100']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="column"
                    data-responsive_offset="on"
                    data-responsive="off"
                    data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-columnwidth="50%"
                    data-verticalalign="top"
                    data-margintop="[0,0,0,0]"
                    data-marginright="[0,0,0,0]"
                    data-marginbottom="[0,0,0,0]"
                    data-marginleft="[0,0,0,0]"
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    style="z-index: 12; width: 100%;"
                  ></div>

                  <!-- LAYER NR. 9 -->
                  <div
                    class="tp-caption  "
                    id="slide-968-layer-12"
                    data-x="['left','left','left','left']"
                    data-hoffset="['100','100','100','100']"
                    data-y="['top','top','top','top']"
                    data-voffset="['100','100','100','100']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="column"
                    data-responsive_offset="on"
                    data-responsive="off"
                    data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-columnwidth="50%"
                    data-verticalalign="top"
                    data-margintop="[0,0,0,0]"
                    data-marginright="[0,0,0,0]"
                    data-marginbottom="[0,0,0,0]"
                    data-marginleft="[0,0,0,0]"
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[20,20,0,0]"
                    style="z-index: 13; width: 100%;"
                  >
                    <!-- LAYER NR. 10 -->
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <div
            class="tp-bannertimer tp-bottom"
            style="height: 10px; background: rgb(229,69,43);"
          ></div>
        </div>
      </div>
      <!-- END REVOLUTION SLIDER -->
    </section>
    <!-- END CONTENT -->
    <!-- END HOME SECTION -->

    <!-- test -->
    <!-- ABOUT -->
    <section id="about" class="about">
      <!-- Slider -->
      <div class="container slider-for-boxes p-5">
        <div class="row">
          <h1 class="page-title w-100">
            Book a Cab
          </h1>
          @if (session('success'))
            <div class="alert alert-success xs-mt">
              {{ session('success') }}
            </div>
          @endif
          @if (count($errors) > 0)
            <div class="alert alert-danger xs-mt">
              <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
              </ul>
            </div>
          @endif
          <div class="col-sm-12 xxs-mt"></div>
          <!-- Divider -->

          <div class="t-center">
            <!-- Nav tabs -->
            <ul
              class="nav nav-tabs creative-tabs border-1 font-12 bold-title uppercase border-gray solid  clearfix"
              style="border-width: 1px;"
            >
              <li>
                <a
                  href="#tab1m"
                  aria-controls="tab1m"
                  role="tab"
                  data-toggle="tab"
                  class="lg-btn slow click-effect bg-colored nav-link active show no-radius"
                  aria-selected="false"
                >
                  Local
                </a>
              </li>
              <li>
                <a
                  href="#tab2m"
                  aria-controls="tab2m"
                  role="tab"
                  data-toggle="tab"
                  class="lg-btn slow click-effect bg-colored nav-link no-radius"
                  aria-selected="true"
                  ><span
                    class="ink clicked"
                    style="height: 118.524px; width: 118.524px; top: -50.3752px; left: 7.77427px;"
                  ></span>
                  One way
                </a>
              </li>
              <li>
                <a
                  href="#tab3m"
                  aria-controls="tab3m"
                  role="tab"
                  data-toggle="tab"
                  class="lg-btn slow click-effect  bg-colored nav-link no-radius"
                >
                  Round Trip
                </a>
              </li>
              <li>
                <a
                  href="#tab4m"
                  aria-controls="tab4m"
                  role="tab"
                  data-toggle="tab"
                  class="lg-btn slow click-effect bg-colored nav-link no-radius"
                >
                  Rental
                </a>
              </li>
            </ul>
          </div>
          <div class="container no-px">
            <!-- Tab panes -->
            <div class="tab-content slide-effect t-left xxs-mt">
              <!-- Tab -->
              <div id="tab1m" role="tabpanel" class="tab-pane active show">
                {!! Form::open(['url' => 'local-booking','method'=>'post']) !!}
                <div class="tab-container pt-3">
                  <div class="container no-px">
                    <div class="row">
                      <div class="col-sm-4">
                        <input
                          type="text"
                          placeholder="Enter pickup address"
                          class="classic_form big border-gray7-hover"
                          name="pickup_address"
                          required
                        />
                      </div>
                      <div class="col-sm-4">
                        <input
                          type="text"
                          placeholder="Enter drop address"
                          class="classic_form big border-gray7-hover"
                          name="drop_address"
                          required
                        />
                      </div>
                      <div class="col-sm-4">
                        <input
                          type="number"
                          placeholder="Enter no of persons"
                          class="classic_form big border-gray7-hover"
                          name="no_of_person"
                          required
                        />
                      </div>
                      <div class="col-sm-4">
                        <select
                          name="type_id"
                          required
                          class="classic_form big border-gray7-hover no-radius"
                        >
                          <option value="">Select a vehicle</option>
                          @foreach($types as $type)
                          <option value="{{ $type->id }}">{{ $type->displayname }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="col-sm-8">
                        <input
                          placeholder="Other things we should know about. "
                          class="classic_form big border-gray7-hover"
                          name="note"
                        />
                      </div>
                      <div class="col-sm-4">
                        <button
                          type="submit"
                          class="lg-btn bg-colored white qdr-hover bold"
                          ><span class="qdr-details"
                            >Book cab Now !</span
                          ></button
                        >
                      </div>
                    </div>
                  </div>
                </div>
                {!! Form::close() !!}
              </div>
              <!-- Tab -->
              <div id="tab2m" role="tabpanel" class="tab-pane">
                {!! Form::open(['url' => 'one-way-booking','method'=>'post']) !!}
                <div class="tab-container pt-3">
                  <div class="container no-px">
                    <div class="row">
                      <div class="col-sm-4">
                        <input
                          type="text"
                          placeholder="Enter pickup address"
                          class="classic_form big border-gray7-hover"
                          name="pickup_address"
                          required
                        />
                      </div>
                      <div class="col-sm-4">
                        <input
                          type="text"
                          placeholder="Enter drop address"
                          class="classic_form big border-gray7-hover"
                          name="drop_address"
                          required
                        />
                      </div>
                      <div class="col-sm-4">
                        <input
                          type="number"
                          placeholder="Enter no of persons"
                          class="classic_form big border-gray7-hover"
                          name="no_of_person"
                          required
                        />
                      </div>
                      <div class="col-sm-4">
                        <select
                          name="type_id"
                          required
                          class="classic_form big border-gray7-hover no-radius"
                        >
                          <option value="">Select a vehicle</option>
                          @foreach($types as $type)
                          <option value="{{ $type->id }}">{{ $type->displayname }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="col-sm-4">
                        <input
                          type="date"
                          name="journey_date"
                          id="jdate"
                          required
                          placeholder="Journey date"
                          class="classic_form big border-gray7-hover no-radius datepicker"
                        />
                      </div>
                      <div class="col-sm-4">
                        <input
                          type="date"
                          name="journey_time"
                          id="jtime"
                          required
                          placeholder="Journey time"
                          class="classic_form big border-gray7-hover no-radius timepicker"
                        />
                      </div>
                      <div class="col-sm-12">
                        <input
                          placeholder="Other things we should know about. "
                          class="classic_form big border-gray7-hover"
                          name="note"
                        />
                      </div>
                      <div class="col-sm-4">
                        <button
                          type="submit"
                          class="lg-btn bg-colored white qdr-hover bold submit_btn"
                          ><span class="qdr-details"
                            >Book cab Now !</span
                          ></button
                        >
                      </div>
                    </div>
                  </div>
                </div>
                {!! Form::close() !!}
              </div>
              <!-- Tab -->
              <div id="tab3m" role="tabpanel" class="tab-pane">
                {!! Form::open(['url' => 'round-trip','method'=>'post']) !!}
                <div class="tab-container pt-3">
                  <div class="container no-px">
                    <div class="row">
                      <div class="col-sm-4">
                        <input
                          type="text"
                          placeholder="Enter pickup address"
                          class="classic_form big border-gray7-hover"
                          name="pickup_address"
                          required
                        />
                      </div>
                      <div class="col-sm-4">
                        <input
                          type="text"
                          placeholder="Enter drop address"
                          class="classic_form big border-gray7-hover"
                          name="drop_address"
                          required
                        />
                      </div>
                      <div class="col-sm-4">
                        <input
                          type="number"
                          placeholder="Enter no of persons"
                          class="classic_form big border-gray7-hover"
                          name="no_of_person"
                          required
                        />
                      </div>
                      <div class="col-sm-4">
                        <select
                          name="type_id"
                          required=""
                          class="classic_form big border-gray7-hover no-radius"
                        >
                          <option value="">Select a vehicle</option>
                          @foreach($types as $type)
                          <option value="{{ $type->id }}">{{ $type->displayname }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="col-sm-4">
                        <input
                          type="date"
                          name="journey_date"
                          id="jdate1"
                          required
                          placeholder="Journey date"
                          class="classic_form big border-gray7-hover no-radius datepicker"
                        />
                      </div>
                      <div class="col-sm-4">
                        <input
                          type="date"
                          name="journey_time"
                          id="jtime1"
                          required
                          placeholder="Journey time"
                          class="classic_form big border-gray7-hover no-radius timepicker"
                        />
                      </div>
                      <div class="col-sm-4">
                        <input
                          type="date"
                          name="return_date"
                          id="rdate"
                          required
                          placeholder="Return date"
                          class="classic_form big border-gray7-hover no-radius datepicker"
                        />
                      </div>
                      <div class="col-sm-4">
                        <input
                          type="date"
                          name="return_time"
                          id="rtime"
                          required
                          placeholder="Return time"
                          class="classic_form big border-gray7-hover no-radius timepicker"
                        />
                      </div>
                      <div class="col-sm-12">
                        <input
                          placeholder="Other things we should know about. "
                          class="classic_form big border-gray7-hover"
                          name="note"
                        />
                      </div>
                      <div class="col-sm-4">
                        <button
                          type="submit"
                          class="lg-btn bg-colored white qdr-hover bold roundtrip_btn"
                          ><span class="qdr-details"
                            >Book cab Now !</span
                          ></button
                        >
                      </div>
                    </div>
                  </div>
                </div>
                {!! Form::close() !!}
              </div>
              <!-- Tab -->
              <div id="tab4m" role="tabpanel" class="tab-pane">
                <div class="tab-container">
                  <div
                    class="container calculate-height custom-slider qdr-controls c-move"
                    data-slick='{"dots": false, "arrows": false, "fade": false, "draggable":true, "slidesToShow": 3, "slidesToScroll": 1, "responsive":[{"breakpoint": 1200,"settings":{"slidesToShow": 2}}, {"breakpoint": 800,"settings":{"slidesToShow": 1}}] }'
                  >
                  @foreach($packages as $row)
                  @php($src='assets/images/vehicle.jpeg')
                  @if($row->vehicle->vehicle_image)
                  @php($src='uploads/'.$row->vehicle->vehicle_image)
                  @endif
                    <!-- Item -->
                    <div class="box" style="padding:20px;">
                      <div class="t-center">
                        <img
                          src="{{ asset($src) }}"
                          alt=""
                          height="150"
                          width="150"
                          class="mx-auto mb-3 circle"
                        />
                      </div>
                      <h3 class="mb-0">
                        {{ Hyvikk::get('currency') }}
                        <span class="text-lg1 extrabold page-title"
                          >{{ $row->package_rate }}</span
                        >
                      </h3>
                      <span class="merriweather italic light font-17"
                        >{{ $row->package_hours }} Hours</span
                      >
                      <h2 class="box-title no-mb">{{ $row->vehicle->maker->make }}</h2>
                      <span class="merriweather italic light font-17 no-pt"
                        >{{ $row->vehicle->vehiclemodel->model }}</span
                      >
                      <h5 class="extrabold xxs-mt">{{ $row->vehicle->types->displayname }}</h5>
                      <p class="box-description xxs-mt">
                        Extra Drive Charges : {{ $row->km_rate }}INR per Km | {{ $row->hourly_rate }}INR per Hour
                      </p>
                      <p class=" xxs-mt">
                        <a
                          href="{{ url('package-details/'.$row->id) }}"
                          class="lg-btn bg-colored white qdr-hover bold"
                          ><span class="qdr-details"
                            >View Details</span
                          ></a
                      </p>
                    </div>
                  @endforeach  
                  </div>
                  <!-- End Slider -->
                </div>
              </div>
            </div>
            <!-- End Tab panes -->
          </div>
        </div>
      </div>

      <!-- End Slider -->
    </section>
    <!-- END ABOUT -->
    <!-- /test -->

    <!-- ABOUT SECTION -->
    <section id="abouttext" class="pb">
      <div class="t-center">
        <h3 class="page-subtitle playfair italic gray6">
          About us
        </h3>
        <h1 class="page-title">
          The MPCab
        </h1>
        <div class="title-strips-over dark"></div>
        <p class="page-description gray6">
          “ {{ Hyvikk::frontend('about_us') }} ”
        </p>
      </div>
    </section>
    <!-- END ABOUT SECTION -->

    <!-- Benefits section -->

    <!-- CATEGORIES SECTION -->
    <section id="categories" class="categories-parallax-type">
      <!-- Item - You can select height value, it will be 200px minimum. -->
      <div class="item height-220 fullwidth white parallax-container">
        <!-- Parallax Background -->
        <div
          class="bg-parallax align-center skrollr"
          data-anchor-target="#categories"
          data-bottom-top="transform:translate3d(0, -100px, 0px);"
          data-top-bottom="transform:translate3d(0px, 100px, 0px);"
        >
          <img
            src="{{ asset('assets/frontend/images/mpcabs-book-ride-from-anywhere.jpg') }}"
            alt="categories item image"
          />
        </div>
        <!-- Container for elements -->
        <a
          href="#"
          class="container qdr-modern-modal"
          data-toggle="modal"
          data-target="#modal-1"
        >
          <!-- Left button -->
          <div class="ctg-button"></div>
          <!-- Item Texts -->
          <div class="ctg-texts">
            <!-- Big title, this will be visible when hover on item -->
            <h3 class="big-title  capitalize bold">
              Our Drivers will Pick you up from anywhere
            </h3>
            <!-- Item Title -->
            <h2 class="bold capitalize ctg-title ">
              Book ride from anywhere
            </h2>
            <!-- Description -->
          </div>
        </a>
      </div>

      <!-- Item - You can select height value, it will be 200px minimum. -->
      <div class="item height-200 fullwidth white parallax-container">
        <!-- Parallax Background -->
        <div
          class="bg-parallax align-center skrollr"
          data-anchor-target="#categories"
          data-bottom-top="transform:translate3d(0, -350px, 0px);"
          data-top-bottom="transform:translate3d(0px, 100px, 0px);"
        >
          <img
            src="{{ asset('assets/frontend/images/mpcabs-online-payment.jpg') }}"
            alt="categories item image"
          />
        </div>
        <!-- Container for elements -->
        <a
          href="#"
          class="container qdr-modern-modal"
          data-toggle="modal"
          data-target="#modal-2"
        >
          <!-- Left button -->
          <div class="ctg-button"></div>
          <!-- Item Texts -->
          <div class="ctg-texts">
            <!-- Big title, this will be visible when hover on item -->
            <h3 class="big-title  capitalize bold">
              Don't have cash ? Pay through Online Payment Modes
            </h3>
            <!-- Item Title -->
            <h2 class="ctg-title capitalize bold">Online Payment</h2>
            <!-- Description -->
          </div>
        </a>
      </div>

      <!-- Item - You can select height value, it will be 200px minimum. -->
      <div
        class="item height-200 fullwidth white parallax-container relative o-hidden"
      >
        <!-- Parallax Background -->
        <div
          class="bg-parallax align-center skrollr"
          data-anchor-target="#categories"
          data-bottom-top="transform:translate3d(0, -500px, 0px);"
          data-top-bottom="transform:translate3d(0px, 0px, 0px);"
        >
          <img
            src="{{ asset('assets/frontend/images/mpcabs-lots-of-offer.jpg') }}"
            alt="categories item image"
          />
        </div>
        <!-- Container for elements -->
        <a
          href="#"
          class="container qdr-modern-modal"
          data-toggle="modal"
          data-target="#modal-3"
        >
          <!-- Left button -->
          <div class="ctg-button"></div>
          <!-- Item Texts -->
          <div class="ctg-texts">
            <!-- Big title, this will be visible when hover on item -->
            <h3 class="big-title  capitalize bold">
              Get Discounted Rides
            </h3>
            <!-- Item Title -->
            <h2 class="ctg-title capitalize bold">Lots of Offers</h2>
            <!-- Description -->
          </div>
        </a>
      </div>

      <!-- Item - You can select height value, it will be 200px minimum. -->
      <div class="item height-200 fullwidth white parallax-container">
        <!-- Parallax Background -->
        <div
          class="bg-parallax align-center skrollr"
          data-anchor-target="#categories"
          data-bottom-top="transform:translate3d(0, -350px, 0px);"
          data-top-bottom="transform:translate3d(0px, 0px, 0px);"
        >
          <img
            src="{{ asset('assets/frontend/images/mpcabs-book-online-support.jpg') }}"
            alt="categories item image"
          />
        </div>
        <!-- Container for elements -->
        <a
          href="#"
          class="container qdr-modern-modal"
          data-toggle="modal"
          data-target="#modal-2"
        >
          <!-- Left button -->
          <div class="ctg-button"></div>
          <!-- Item Texts -->
          <div class="ctg-texts">
            <!-- Big title, this will be visible when hover on item -->
            <h3 class="big-title  capitalize bold">
              Call us from Anywhere Anytime
            </h3>
            <!-- Item Title -->
            <h2 class="ctg-title capitalize bold">24x7 Online Support</h2>
          </div>
        </a>
      </div>

      <!-- End items -->
    </section>
    <!-- END CATEGORIES SECTION -->

    <!-- MODALS FOR CATEGORIES SECTION -->

    <!-- /Benefits section -->

    <!-- Service availability section  -->
    <!-- TEAM SECTION -->
    <section id="team" class="container t-center py">
      <!-- Top Title -->
      <h3 class="page-subtitle playfair italic gray6">
        Cities on which we provides services
      </h3>

      <!-- Title -->
      <h1 class="page-title">
        Service Availability
      </h1>

      <!-- Title Strips -->
      <div class="title-strips-over dark"></div>

      <!-- Team Container -->
      <!-- Slider - If you copy boxes, container will be slider automatically -->
      <div
        class="custom-slider unset-slider image-boxes t-center container strip-dots dark-dots light pt-5"
        data-slick='{"dots": true, "arrows": false, "fade": false, "slidesToShow": 3, "slidesToScroll": 1, "infinite" : false }'
      >

      @foreach($cities as $city)
      @php($src='assets/frontend/images/mpcabs-city-2.jpg')

      @if($city->image)
      @php($src='uploads/'.$city->image)
      @endif
        <!-- Item - Strip button trigger -->
        <div class="item">
          <!-- Slider -->
          <div class="image-slider qdr-controls-2">
            <div class="qdr-hover-6">
              <img src="{{ asset($src) }}" alt="about quadra" width="300px" height="250px"/>
            </div>
          </div>
          <!-- Title -->
          <h3 class="mt-2">
            {{ $city->city }}
          </h3>
          <!-- Description -->
          <p>
            Starts @ {{ $city->cost }}INR per day
          </p>
        </div>
        <!-- End Item -->
      @endforeach  

      </div>
      <!-- End Slider -->
    </section>
    <!-- END TEAM SECTION -->
    <!-- /Service availability section -->

    <!-- Pricing package section -->
    <section
      class="t-center py bg-soft-gradient1 bg-soft o-hidden relative z-index-1"
      data-background="{{ asset('assets/frontend/images/mpcabs-popular-routes.jpg') }}"
    >
      <h3 class="page-subtitle  ">
        Most Travelled Destinations
      </h3>
      <h1 class="page-title text-white">
        Popular routes
      </h1>
      <div class="title-strips-over "></div>

      <div class="qdr-col-3 container t-center gray8 clearfix mt-5">
      @foreach($routes as $route)  
      @php($src='assets/frontend/images/mpcabs-popular-routes-2.jpg')
      @if($route->image)
      @php($src='uploads/'.$route->image)
      @endif
        <!-- Box -->
        <div>
          <!-- Box Border -->
          <div
            class="border-1 border-gray8 no-border-bottom price-box radius o-hidden slow white bs-light-hover relative"
          >
            <div class="xs-pb">
              <img
                src="{{ asset($src) }}"
                alt=""
                class="w-100"
                width="256px"
                height="256px"
              />
              <h4 class="extrabold no-pm xs-mt">{{ $route->source." - ".$route->destination }}</h4>
              <!-- <h5></h5> -->
              <!-- Price -->
              <h3>
                {{ Hyvikk::get('currency') }}
                <span class="text-lg2 extrabold">{{ $route->cost }}</span
                ><span class="merriweather italic light font-17"
                  >per day</span
                >
              </h3>
            </div>

            <!-- Button -->
            <div>
              <!-- Button -->
              <a
                href="#"
                class="xxs-py block font-11 uppercase white bold bg-dark3 slow bg-colored-hover"
                >View Details</a
              >
            </div>
          </div>
        </div>
        <!-- Box end -->
      @endforeach  
      </div>
    </section>
    <!-- /Pricing package section -->

    <!-- Service availability section  -->
    <!-- TEAM SECTION -->
    <section id="team" class="container t-center py-5">
      <!-- Top Title -->

      <!-- Title -->
      <h1 class="page-title brands-title ">
        Brands of Cars We Have !
      </h1>

      <!-- Title Strips -->

      <!-- Team Container -->
      <!-- Slider - If you copy boxes, container will be slider automatically -->
      <div
        class="custom-slider image-boxes t-center container strip-dots dark-dots light pt-5"
        data-slick='{"dots": true, "autoplay" : true , "arrows": false, "fade": false, "slidesToShow": 4, "slidesToScroll": 2}'
      >
      @foreach($brands as $brand)
        <!-- Item - Strip button trigger -->
        <div class="item">
          <!-- Slider -->
          <!-- Title -->
          <img
            src="{{ asset('uploads/'.$brand->image) }}"
            alt=""
            width="100"
            height="80"
            class="mx-auto"
          />
          <h4 class="mt-3">
            {{ $brand->make }}
          </h4>
          <!-- Description -->
        </div>
        <!-- End Item -->
      @endforeach
      </div>
      <!-- End Slider -->
    </section>
    <!-- END TEAM SECTION -->
    <!-- /Service availability section -->

    <!-- SERVICES SECTION -->
    <section
      id="services"
      class="calculate-height services-section no-padding clearfix"
    >
      <!-- Model Container - Left Positioned -->
      <div
        class="model cover"
        data-background="{{ asset('assets/frontend/images/mpcabs-testimonials.jpg') }}"
      >
        <!-- Your image is here -->
        <!-- <img
          src="images/loader.gif"
          data-original="http://quadra.goldeyestheme.com/content/modern/images/model_01.jpg"
          alt="image"
          style="object-fit:cover;"
        /> -->
        <!-- Hotpoints -->
      </div>
      <!-- End Left Area -->

      <!-- Right, Services -->
      <div class="services scrollbar-styled bt-1 border-1 border-gray1">
        <div class="inner mt-0 mb-5">
          <!-- Title -->
          <h3 class="service-subtitle  antonio">
            What client says
          </h3>

          <!-- Title -->
          <h1 class="service-title antonio bold">
            Testimonials
          </h1>

          <div class="title-strips-over dark strips-left mb-4"></div>

          <div
            class="custom-slider testimonial-slider mt-0 pt-3 image-boxes t-center container strip-dots dark-dots light"
            data-slick='{"dots": true, "arrows": false, "fade": false, "slidesToShow": 2, "slidesToScroll": 2}'
          >
          @foreach ($testimonials as $row)   
          @php($src="assets/images/no-user.jpg")
          @if($row->image)
          @php($src="uploads/".$row->image)
          @endif          
          
            <!-- Item - Strip button trigger -->
            <div class="item">
              <!-- Slider -->
              <div class="image-slider qdr-controls-2">
                <div>
                  <img
                    src="{{ asset($src) }}"
                    alt="about quadra"
                    height="120px"
                    weight="120px"
                  />
                </div>
              </div>
              <!-- Title -->
              <h3 class="mt-3">
                {{ $row->name }}
              </h3>
              <!-- Description -->
              <p>
                {{ $row->details }}
              </p>
            </div>
            <!-- End Item -->
          @endforeach  
          </div>
        </div>
        <!-- End Inner -->
      </div>
      <!-- End Services Area -->
    </section>
    <!-- END SERVICES SECTION -->

    <!-- Analytics -->
    <section class="py t-center bg-gray1 bb-1 border-gray1">
      <h1 class="page-title">
        Achievements so far
      </h1>
      <div class="container mt-5">
        <div class="qdr-col-4 t-center clearfix">
          <!-- Item -->
          <div class="fact" data-source="100000">
            <!-- Texts -->
            <div class="texts">
              <div>
                <!-- Fact Tag -->
                <h1 class="factor text-lg1 colored">1,000,00</h1>
                <!-- Fact Texts -->
                <h5 class="gray7">Happy customers</h5>
              </div>
            </div>
          </div>
          <!-- End Item -->
          <!-- Item -->
          <div class="fact" data-source="2679">
            <!-- Texts -->
            <div class="texts">
              <div>
                <!-- Fact Tag -->
                <h1 class="factor text-lg1 colored">` 2,679</h1>
                <!-- Fact Texts -->
                <h5 class="gray7">Cars in garage</h5>
              </div>
            </div>
          </div>
          <!-- End Item -->
          <!-- Item -->
          <div class="fact" data-source="568980">
            <!-- Texts -->
            <div class="texts">
              <div>
                <!-- Fact Tag -->
                <h1 class="factor text-lg1 colored">` 568,960</h1>
                <!-- Fact Texts -->
                <h5 class="gray7">Kms Driven</h5>
              </div>
            </div>
          </div>
          <!-- End Item -->
          <!-- Item -->
          <div class="fact" data-source="36">
            <!-- Texts -->
            <div class="texts">
              <div>
                <!-- Fact Tag -->
                <h1 class="factor text-lg1 colored">` 36</h1>
                <!-- Fact Texts -->
                <h5 class="gray7">Agents</h5>
              </div>
            </div>
          </div>
          <!-- End Item -->
        </div>
      </div>
    </section>

    <!-- /Analytics -->
@endsection    
@section('scripts')
<script>
  (function($, window, document, undefined) {

'use strict';

//*********************************************
//  REVOLUTION SLIDER FOR HOME
//*********************************************

    var tpj=jQuery;
    var revapi2;
    if(tpj("#home_slider").revolution == undefined){
        revslider_showDoubleJqueryError("#home_slider");
    }else{
        revapi2 = tpj("#home_slider").show().revolution({
            sliderType:"standard",
            jsFileLocation:"js/revolutionslider/",
            sliderLayout:"fullscreen",
            delay:7000,
            navigation: {
                arrows: {
                    style: "uranus",
                    enable: true,
                    hide_onmobile: true,
                    hide_onleave: true,
                    tmp: '',
                    left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 0,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 0,
                        v_offset: 0
                    }
                },
                bullets: {
                    enable: true,
                    hide_onmobile: true,
                    style: "hades",
                    hide_onleave: false,
                    direction: "horizontal",
                    h_align: "right",
                    v_align: "bottom",
                    h_offset: 90,
                    v_offset: 27,
                    space: 8,
                    tmp: '<span class="tp-bullet-image"></span>'
                },
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                }
            },
            responsiveLevels:[1170,860,640,480],
            visibilityLevels:[1170,860,640,480],
            gridwidth:[1170,860,640,480],
            gridheight:1000,
            parallax: {
                type:"scroll",
                origo:"slidercenter",
                speed:2000,
                levels:[2,3,4,5,8,10,12,16,30],
            },
            shadow:0,
            spinner:"off",
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,
            disableProgressBar:"on",
            shuffle:"off",
        });
    }
  });
</script>
@endsection
@section('between_scripts')
    <!-- DatePickers -->
    <script src="{{ asset('assets/frontend/js/components/picker.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/components/picker.time.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/components/picker.date.js') }}"></script>
    <!-- REVOLUTION SLIDER -->
    <script src="{{ asset('assets/frontend/js/revolutionslider/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/revolutionslider/jquery.themepunch.tools.min.js') }}"></script>
    <!-- PAGE OPTIONS - You can find special scripts for this version -->
    <script src="{{ asset('assets/frontend/content/nyks/js/plugins.js') }}"></script>
    <!-- <script src="content/antares/js/plugins.js"></script> -->
@endsection

@section('javascript')
    <script>
        //Classic
        var revapi348,
        tpj = jQuery;
        tpj(document).ready(function() {
        if (tpj("#rev_slider_348_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_348_1");
        } else {
            revapi348 = tpj("#rev_slider_348_1")
            .show()
            .revolution({
                sliderType: "standard",
                jsFileLocation:
                "//server.local/revslider/wp-content/plugins/revslider/public/assets/js/",
                sliderLayout: "fullscreen",
                dottedOverlay: "none",
                delay: 12000,
                particles: {
                startSlide: "first",
                endSlide: "last",
                zIndex: "1",
                particles: {
                    number: { value: 100 },
                    color: { value: "#ffffff" },
                    shape: {
                    type: "circle",
                    stroke: { width: 0, color: "#ffffff", opacity: 1 },
                    image: { src: "" }
                    },
                    opacity: {
                    value: 0.75,
                    random: true,
                    min: 0.25,
                    anim: {
                        enable: false,
                        speed: 3,
                        opacity_min: 0,
                        sync: false
                    }
                    },
                    size: {
                    value: 2,
                    random: true,
                    min: 0.5,
                    anim: { enable: false, speed: 40, size_min: 1, sync: false }
                    },
                    line_linked: {
                    enable: false,
                    distance: 150,
                    color: "#ffffff",
                    opacity: 0.4,
                    width: 1
                    },
                    move: {
                    enable: true,
                    speed: 1,
                    direction: "top",
                    random: true,
                    min_speed: 3,
                    straight: false,
                    out_mode: "out"
                    }
                },
                interactivity: {
                    events: {
                    onhover: { enable: false, mode: "repulse" },
                    onclick: { enable: false, mode: "repulse" }
                    },
                    modes: {
                    grab: { distance: 400, line_linked: { opacity: 0.5 } },
                    bubble: { distance: 400, size: 40, opacity: 0.4 },
                    repulse: { distance: 200 }
                    }
                }
                },
                navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                mouseScrollReverse: "default",
                onHoverStop: "off",
                arrows: {
                    style: "uranus",
                    enable: true,
                    hide_onmobile: false,
                    hide_onleave: false,
                    tmp: "",
                    left: {
                    h_align: "right",
                    v_align: "bottom",
                    h_offset: 60,
                    v_offset: 10
                    },
                    right: {
                    h_align: "right",
                    v_align: "bottom",
                    h_offset: 10,
                    v_offset: 10
                    }
                }
                },
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1024, 778, 480],
                gridheight: [868, 768, 960, 720],
                lazyType: "smart",
                parallax: {
                type: "scroll",
                origo: "slidercenter",
                speed: 400,
                speedbg: 1500,
                speedls: 1000,
                levels: [
                    5,
                    10,
                    15,
                    20,
                    25,
                    30,
                    35,
                    40,
                    60,
                    46,
                    -10,
                    -15,
                    -20,
                    -25,
                    -30,
                    55
                ]
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false
                }
            });
        }

        // RsParticlesAddOn(revapi348);
        // try {
        //     initSocialSharing("348");
        // } catch (e) {}
        }); /*ready*/
        $(".datepicker").pickadate();
        $(".timepicker").pickatime();


      $(".submit_btn").click(function () {    
        var jdate = $('#jdate').val();
        var jtime = $('#jtime').val();
        if(jdate == "" || jdate == null || jtime == "" || jtime == null){
          alert('Journey date and time must be required');
          return false;
        }
      });

      $(".roundtrip_btn").click(function () {    
        var jdate1 = $('#jdate1').val();
        var jtime1 = $('#jtime1').val();
        var rdate = $('#rdate').val();
        var rtime = $('#rtime').val();
        // alert(jdate,jtime,rdate,rtime);
        if(jdate1 == "" || jdate1 == null || jtime1 == "" || jtime1 == null || rdate == "" || rdate == null || rtime == "" || rtime == null){
          alert('Journey date and time, return date and time must be required');
          return false;
        }
       });
    </script>
@endsection