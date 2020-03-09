@extends('layouts.app')
@section("breadcrumb")
<li class="breadcrumb-item"><a href="{{ route("vendors.index")}}"> @lang('fleet.vendors') </a></li>
<li class="breadcrumb-item active">@lang('fleet.add_vendor')</li>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">@lang('fleet.create_vendor')</h3>
      </div>

      <div class="card-body">
        @if (count($errors) > 0)
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        {!! Form::open(['route' => 'vendors.store','files'=>true,'method'=>'post']) !!}
        {!! Form::hidden('user_id',Auth::user()->id)!!}
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              {!! Form::label('first_name', __('fleet.firstname'), ['class' => 'form-label']) !!}
              {!! Form::text('first_name', null,['class' => 'form-control','required']) !!}
            </div>

            <div class="form-group">
              {!! Form::label('last_name', __('fleet.lastname'), ['class' => 'form-label']) !!}
              {!! Form::text('last_name', null,['class' => 'form-control','required']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('profile_image', __('fleet.profile_photo'), ['class' => 'form-label']) !!}
              {!! Form::file('profile_image',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('group_id',__('fleet.selectGroup'), ['class' => 'form-label']) !!}
              <select id="group_id" name="group_id" class="form-control">
                <option value="">@lang('fleet.vehicleGroup')</option>
                @foreach($groups as $group)
                @if($group->id == 1)
                <option value="{{$group->id}}" selected>{{$group->name}}</option>
                @else
                <option value="{{$group->id}}" >{{$group->name}}</option>
                @endif
                @endforeach
              </select>
            </div>
            <div class="form-group">
              {!! Form::label('city_id',__('fleet.selectCity'), ['class' => 'form-label']) !!}
              <select id="city_id" name="city_id" class="form-control">
                <option value="">@lang('fleet.selectCity')</option>
                @foreach($cities as $city)
                <option value="{{$city->id}}">{{$city->city}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              {!! Form::label('email', __('fleet.email'), ['class' => 'form-label']) !!}
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-envelope"></i></span> </div>
                {!! Form::email('email', null,['class' => 'form-control','required']) !!}
              </div>
            </div>
            <div class="form-group">
              {!! Form::label('password', __('fleet.password'), ['class' => 'form-label']) !!}
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-lock"></i></span></div>
                {!! Form::password('password', ['class' => 'form-control','required']) !!}
              </div>
            </div>            

            <div class="form-group">
              {!! Form::label('module',__('fleet.select_modules'), ['class' => 'form-label']) !!} <br>
              <div class="row">
                <div class="col-md-4" style="padding: 0px;">
                  <input type="checkbox" name="module[]" value="0" class="flat-red form-control">&nbsp; @lang('menu.users')<br>
                  <input type="checkbox" name="module[]" value="1" class="flat-red form-control">&nbsp;  @lang('fleet.vehicles')<br>
                  <input type="checkbox" name="module[]" value="2" class="flat-red form-control"> &nbsp;@lang('menu.transactions') <br>
                  
                  {{-- <input type="checkbox" name="module[]" value="13" class="flat-red form-control">&nbsp;  @lang('fleet.helpus')<br> --}}
                  
                </div>
                <div class="col-md-4" style="padding: 0px;">
                  <input type="checkbox" name="module[]" value="3" class="flat-red form-control">&nbsp; @lang('fleet.bookings')<br>
                  {{-- <input type="checkbox" name="module[]" value="16" class="flat-red form-control">&nbsp;  @lang('fleet.faqs')<br> --}}
                  <input type="checkbox" name="module[]" value="4" class="flat-red form-control">&nbsp; @lang('menu.reports')<br>
                  {{-- <input type="checkbox" name="module[]" value="5" class="flat-red form-control">&nbsp; @lang('fleet.fuel')<br> --}}

                  {{-- <input type="checkbox" name="module[]" value="6" class="flat-red form-control">&nbsp; @lang('fleet.vendors')<br> --}}
                  {{-- <input type="checkbox" name="module[]" value="7" class="flat-red form-control">&nbsp; @lang('fleet.work_orders')<br>
                  <input type="checkbox" name="module[]" value="14" class="flat-red form-control">&nbsp; @lang('fleet.parts') --}}
                </div>
                <div class="col-md-4" style="padding: 0px;">
                  {{-- <input type="checkbox" name="module[]" value="8" class="flat-red form-control">&nbsp; @lang('fleet.notes')<br>
                  <input type="checkbox" name="module[]" value="9" class="flat-red form-control">&nbsp;  @lang('fleet.serviceReminders')<br> --}}
                  <input type="checkbox" name="module[]" value="10" class="flat-red form-control">&nbsp;  @lang('fleet.reviews')<br>
                  <input type="checkbox" name="module[]" value="12" class="flat-red form-control">&nbsp;  @lang('fleet.maps')<br>
                  <input type="checkbox" name="module[]" value="15" class="flat-red form-control">&nbsp;  @lang('fleet.testimonials')
                </div>
              </div>
            </div>
          </div>
        </div>
        
        {{-- <div class="row">
          <div class="form-group col-md-6">
            {!! Form::label('udf1',__('fleet.add_udf'), ['class' => 'col-xs-5 control-label']) !!}
            <div class="row">
              <div class="col-md-8">
                {!! Form::text('udf1', null,['class' => 'form-control']) !!}
              </div>
              <div class="col-md-4">
                <button type="button" class="btn btn-info add_udf"> @lang('fleet.add')</button>
              </div>
            </div>
          </div>
        </div> --}}
        <div class="blank"></div>
        <div class="row">
          <div class="col-md-12">
            {!! Form::submit(__('fleet.add_vendor'), ['class' => 'btn btn-success']) !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section("script")
<script>
  function select_type(val){
    var type=$("#type option:selected").text();
    if(type=="Add New"){
      $("#nothing").empty();
      $("#nothing").html('{!! Form::text('type',null,['class' => 'form-control','required']) !!}');
    }
  }

  $('#group_id').select2({placeholder: "@lang('fleet.selectGroup')"});
    //Flat green color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    });
</script>
<script type="text/javascript">
  $(".add_udf").click(function () {
    // alert($('#udf').val());
    var field = $('#udf1').val();
    if(field == "" || field == null){
      alert('Enter field name');
    }
    else{
      $(".blank").append('<div class="row"><div class="col-md-8">  <div class="form-group"> <label class="form-label">'+ field.toUpperCase() +'</label> <input type="text" name="udf['+ field +']" class="form-control" placeholder="Enter '+ field +'" required></div></div><div class="col-md-4"> <div class="form-group" style="margin-top: 30px"><button class="btn btn-danger" type="button" onclick="this.parentElement.parentElement.parentElement.remove();">Remove</button> </div></div></div>');
      $('#udf1').val("");
    }
  });
</script>
@endsection