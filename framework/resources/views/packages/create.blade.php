@extends('layouts.app')
@section("breadcrumb")
<li class="breadcrumb-item">{{ link_to_route('packages.index', __('fleet.packages'))}}</li>
<li class="breadcrumb-item active">@lang('fleet.add_package')</li>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">@lang('fleet.add_package')</h3>
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

        {!! Form::open(['route' => 'packages.store','method'=>'post']) !!}
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              {!! Form::label('vehicle_id',__('fleet.selectVehicle'), ['class' => 'form-label']) !!}
              <select id="vehicle_id" name="vehicle_id" class="form-control" required>
                <option value="">@lang('fleet.selectVehicle')</option>
                @foreach($vehicles as $vehicle)
                <option value="{{$vehicle->id}}">{{$vehicle->maker->make}}-{{$vehicle->vehiclemodel->model}}-{{$vehicle->license_plate}}</option>
                @endforeach
              </select>
            </div>
         
            <div class="form-group">
              {!! Form::label('hourly_rate', __('fleet.rate_per_hour'), ['class' => 'form-label']) !!}              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text">{{Hyvikk::get('currency')}}</span></div>
                {!! Form::number('hourly_rate', null,['class' => 'form-control','required','step'=>'0.01']) !!}
              </div>
            </div>
          
            <div class="form-group">
              {!! Form::label('km_rate', __('fleet.rate_per_km'), ['class' => 'form-label']) !!}              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text">{{Hyvikk::get('currency')}}</span></div>
                {!! Form::number('km_rate', null,['class' => 'form-control','required','step'=>'0.01']) !!}
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <div class="row">
          <div class="form-group col-md-4">
            {!! Form::submit(__('fleet.save'), ['class' => 'btn btn-success']) !!}
          </div>
        </div>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection

@section('script')
<script>
  $('#vehicle_id').select2();
</script>
@endsection