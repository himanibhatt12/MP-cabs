@extends('frontend.layouts.app')
@section('between_css')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/cube-portfolio.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/theme.css?v=2.3.1') }}" />
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/components/classic_datepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/custom.css') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <style>
    .gallery-type-1.with-texts .cbp-item .cbp-item-wrapper:before {
        border: 0;
    }
    </style>
@endsection
@section('content')
    <!-- HOME SECTION -->
    <section id="home" class="sm-py bg-dark white fullwidth">
        <!-- Container -->
        <div class="container">
            <div class="row calculate-height">
            <div
                class="t-left t-center-xs col-sm-6 col-xs-12"
                style="height: 63.3333px;"
            >
                <h2 class="normal-subtitle">Package Details</h2>
                <!-- <h5 class="gray4">Modifiable examples with default styles.</h5> -->
            </div>
            <div
                class="t-right t-center-xs col-sm-6 col-xs-12"
                style="height: 63.3333px;"
            >
                <ol class="breadcrumb gray transparent no-pm v-center font-13">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">
                    <a href="#">Package Details</a>
                </li>
                </ol>
            </div>
            </div>
        </div>
        <!-- End Container -->
    </section>
    <!-- END HOME SECTION -->

    <!-- GALLERY -->
    <section
        class="pb pt bt-1 border-gray t-center gallery-type-1 with-texts container"
        >
        <!-- Works -->
        <div
           
        >
        <table class="table table-striped">
            <tr>
                <th>Vehicle Model</th>
                <td>{{ $package->vehicle->vehiclemodel->model }}</td>
            </tr>
            <tr>
                <th>Vehicle Type</th>
                <td>{{ $package->vehicle->types->displayname }}</td>
            </tr>
            <tr>
                <th>Vehicle Color</th>
                <td>{{ $package->vehicle->vehiclecolor->color }}</td>
            </tr>
            <tr>
                <th>Vehicle Number</th>
                <td>{{ $package->vehicle->license_plate }}</td>
            </tr>
            <tr>
                <th>Package Rate</th>
                <td>{{ Hyvikk::get('currency').' '. $package->package_rate }}</td>
            </tr>
            <tr>
                <th>Package Hours</th>
                <td>{{ $package->package_hours }} hours</td>
            </tr>
            <tr>
                <th>Extra km charges</th>
                <td>{{ Hyvikk::get('currency').' '.  $package->km_rate }}</td>
            </tr>
            <tr>
                <th>Extra hour charges</th>
                <td>{{  Hyvikk::get('currency').' '. $package->hourly_rate }}</td>
            </tr>
            <tr>
                <th>Ride Amount</th>
                <td>{{ Hyvikk::get('currency').' '. $package->package_rate }}</td>
            </tr>
            @php($udfs = json_decode(Hyvikk::get('tax_charge')))
            @php($tax = 0)
            @if($udfs != null)
            @foreach($udfs as $key => $value)
            @php($tax = $tax + $value)
                <tr>
                    <th>{{ $key }} ({{ $value }}%)</th>
                    <td>
                        {{Hyvikk::get('currency').' '. (($package->package_rate * $value) / 100) }}
                    </td>
                </tr>
            
            @endforeach
            @endif
            <tr>
                <th>Total</th>
                @php($tax_total = (($package->package_rate * $tax) / 100 + $package->package_rate))
                @php($total_tax_charge_rs = ($package->package_rate * $tax) / 100)
                <td>{{Hyvikk::get('currency').' '. $tax_total }}</td>
            </tr>            
        </table>       
        </div>
        {!! Form::open(['url' => 'book-package','method'=>'post']) !!}
        {!! Form::hidden('package_id',$package->id) !!}
        {!! Form::hidden('vehicle_id',$package->vehicle_id) !!}
        {!! Form::hidden('tax_total',$tax_total) !!}
        {!! Form::hidden('total_tax_percent',$tax) !!}
        {!! Form::hidden('total_tax_charge_rs',$total_tax_charge_rs) !!}
        @if (count($errors) > 0)
        <div class="alert alert-danger xs-mt">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif
        <div class="row">
            <div class="col-sm-4">
            <input
                type="date"
                name="journey_date"
                required="required"
                placeholder="Journey date"
                class="classic_form big border-gray7-hover no-radius datepicker"
                id="jdate"
            />
            </div>
            <div class="col-sm-4">
                <input
                  type="date"
                  name="journey_time"
                  required="required"
                  placeholder="Journey time"
                  class="classic_form big border-gray7-hover no-radius timepicker"
                  id="jtime"
                />
            </div>
            <div class="col-sm-4">
                <button
                  type="submit"
                  class="lg-btn bg-colored white qdr-hover bold submit_btn"
                  ><span class="qdr-details"
                    >Proceed</span
                  ></button
                >
            </div>
        </div>
        {!! Form::close() !!}
        <!-- End container for works -->
    </section>
    <!-- END GALLERY -->
@endsection    
@section('between_scripts')
    <!-- DatePickers -->
    <script src="{{ asset('assets/frontend/js/components/picker.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/components/picker.time.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/components/picker.date.js') }}"></script>
@endsection
@section('javascript')
    <script>
        // init cubeportfolio
    $("#gallery").cubeportfolio({
        filters: "#gallery-filter1, #gallery-filter2",
        loadMoreAction: "auto",
        layoutMode: "grid",
        defaultFilter: "*",
        animationType: "quicksand",
        gapHorizontal: 10,
        gapVertical: 10,
        gridAdjustment: "responsive",
        mediaQueries: [
            {
            width: 1500,
            cols: 5
            },
            {
            width: 1100,
            cols: 4
            },
            {
            width: 800,
            cols: 3
            },
            {
            width: 480,
            cols: 1,
            options: {
                caption: "",
                gapHorizontal: 10,
                gapVertical: 10
            }
            }
        ],
        caption: "zoom",
        displayType: "fadeIn",
        displayTypeSpeed: 300
    });

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
    </script>
@endsection