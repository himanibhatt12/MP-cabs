@extends('layouts.app')
@section("breadcrumb")
<li class="breadcrumb-item"><a href="{{ route("vendors.index")}}"> @lang('fleet.vendors') </a></li>
<li class="breadcrumb-item active"> @lang('fleet.edit_vendor')</li>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title">
          @lang('fleet.edit_vendor')
        </h3>
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
        @php($names = explode(" ", $user->name))
        {!! Form::open(['route' => ['vendors.update',$user->id],'files'=>true,'method'=>'PATCH']) !!}
        {!! Form::hidden('user_id',Auth::user()->id)!!}
        {!! Form::hidden('id',$user->id) !!}
        {!! Form::hidden('edit',1) !!}
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              {!! Form::label('first_name', __('fleet.firstname'), ['class' => 'form-label']) !!}
              {!! Form::text('first_name', $names[0],['class' => 'form-control','required']) !!}
            </div>

            <div class="form-group">
              {!! Form::label('last_name', __('fleet.lastname'), ['class' => 'form-label']) !!}
              {!! Form::text('last_name', $names[1],['class' => 'form-control','required']) !!}
            </div>

            <div class="form-group">
              {!! Form::label('group_id',__('fleet.selectGroup'), ['class' => 'form-label']) !!}
              <select id="group_id" name="group_id" class="form-control">
                <option value="">@lang('fleet.vehicleGroup')</option>
                @foreach($groups as $group)
                <option value="{{$group->id}}" @if($group->id == $user->group_id) selected @endif>{{$group->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              {!! Form::label('city_id',__('fleet.selectCity'), ['class' => 'form-label']) !!}
              <select id="city_id" name="city_id" class="form-control">
                <option value="">@lang('fleet.selectCity')</option>
                @foreach($cities as $city)
                <option value="{{$city->id}}" @if($city->id == $user->city_id) selected @endif>{{$city->city}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              {!! Form::label('email', __('fleet.email'), ['class' => 'form-label']) !!}
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-envelope"></i></span></div>
                {!! Form::email('email', $user->email,['class' => 'form-control','required']) !!}
              </div>
            </div>
            <div class="form-group">
              {!! Form::label('profile_image', __('fleet.profile_photo'), ['class' => 'form-label']) !!}
               @if($user->getMeta('profile_image') != null)
              <a href="{{ asset('uploads/'.$user->getMeta('profile_image')) }}" target="_blank">@lang('fleet.view')</a>
              @endif
              <br>
              {!! Form::file('profile_image',null,['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
              {!! Form::label('module',__('fleet.select_modules'), ['class' => 'form-label']) !!} <br>
              @php($modules=unserialize($user->getMeta('module')))
              <div class="row">
                <div class="col-md-4" style="padding: 0px;">
                  <input type="checkbox" name="module[]" value="0" class="flat-red form-control" @if(in_array(0,$modules)) checked @endif>&nbsp; @lang('menu.users')<br>
                  <input type="checkbox" name="module[]" value="1" class="flat-red form-control" @if(in_array(1,$modules)) checked @endif>&nbsp; @lang('fleet.vehicles')<br>
                  <input type="checkbox" name="module[]" value="2" class="flat-red form-control" @if(in_array(2,$modules)) checked @endif>&nbsp; @lang('menu.transactions')<br>
                  <input type="checkbox" name="module[]" value="3" class="flat-red form-control" @if(in_array(3,$modules)) checked @endif>&nbsp; @lang('fleet.bookings')<br>
                  <input type="checkbox" name="module[]" value="13" class="flat-red form-control" @if(in_array(13,$modules)) checked @endif>&nbsp;  @lang('fleet.helpus')
                </div>
                <div class="col-md-4" style="padding: 0px;">
                  <input type="checkbox" name="module[]" value="4" class="flat-red form-control" @if(in_array(4,$modules)) checked @endif>&nbsp; @lang('menu.reports')<br>
                  <input type="checkbox" name="module[]" value="5" class="flat-red form-control" @if(in_array(5,$modules)) checked @endif>&nbsp; @lang('fleet.fuel')<br>
                  <input type="checkbox" name="module[]" value="6" class="flat-red form-control" @if(in_array(6,$modules)) checked @endif>&nbsp; @lang('fleet.vendors')<br>
                  <input type="checkbox" name="module[]" value="7" class="flat-red form-control" @if(in_array(7,$modules)) checked @endif>&nbsp; @lang('fleet.work_orders')<br>
                  <input type="checkbox" name="module[]" value="14" class="flat-red form-control" @if(in_array(14,$modules)) checked @endif>&nbsp; @lang('fleet.parts')
                </div>
                <div class="col-md-4" style="padding: 0px;">
                  <input type="checkbox" name="module[]" value="8" class="flat-red form-control" @if(in_array(8,$modules)) checked @endif>&nbsp; @lang('fleet.notes')<br>
                  <input type="checkbox" name="module[]" value="9" class="flat-red form-control" @if(in_array(9,$modules)) checked @endif>&nbsp; @lang('fleet.serviceReminders')<br>
                  <input type="checkbox" name="module[]" value="10" class="flat-red form-control" @if(in_array(10,$modules)) checked @endif>&nbsp;  @lang('fleet.reviews')<br>
                  <input type="checkbox" name="module[]" value="12" class="flat-red form-control" @if(in_array(12,$modules)) checked @endif>&nbsp;  @lang('fleet.maps')<br>
                  <input type="checkbox" name="module[]" value="15" class="flat-red form-control" @if(in_array(15,$modules)) checked @endif>&nbsp;  @lang('fleet.testimonials')
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
        {{-- @if($udfs != null)
        @foreach($udfs as $key => $value)
          <div class="row"><div class="col-md-8">  <div class="form-group"> <label class="form-label text-uppercase">{{$key}}</label> <input type="text" name="udf[{{$key}}]" class="form-control" required value="{{$value}}"></div></div><div class="col-md-4"> <div class="form-group" style="margin-top: 30px"><button class="btn btn-danger" type="button" onclick="this.parentElement.parentElement.parentElement.remove();">Remove</button> </div></div></div>
        @endforeach
        @endif --}}
        <div class="blank"></div>
        <div class="row">
          <div class="col-md-12">
            {!! Form::submit(__('fleet.update'), ['class' => 'btn btn-warning']) !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section("script")
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

  $('#group_id').select2({placeholder: "@lang('fleet.selectGroup')"});
  $('#city_id').select2({placeholder: "@lang('fleet.selectCity')"});
  //Flat green color scheme for iCheck
  $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
    checkboxClass: 'icheckbox_flat-green',
    radioClass   : 'iradio_flat-green'
  });
</script>
@endsection