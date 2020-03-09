@extends('layouts.app')
@section('extra_css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.min.css" rel="stylesheet">
@endsection
@section("breadcrumb")
<li class="breadcrumb-item">{{ link_to_route('vehicle-color.index', __('fleet.vehicle_colors'))}}</li>
<li class="breadcrumb-item active">@lang('fleet.add_vehicle_color')</li>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">@lang('fleet.add_vehicle_color')</h3>
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

        {!! Form::open(['route' => 'vehicle-color.store','method'=>'post']) !!}
        <div class="row">
          <div class="form-group col-md-6">
            {!! Form::label('color', __('fleet.color'), ['class' => 'form-label']) !!}
            {!! Form::text('color', null,['class' => 'form-control','required','id'=>'color1']) !!}
          </div>
          {{-- <div class="form-group col-md-6">
            {!! Form::label('color', __('fleet.color'), ['class' => 'form-label']) !!}
            {!! Form::text('color', null,['class' => 'form-control colorpicker','required','id'=>'color2']) !!}
          </div> --}}
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.min.js"></script>
  <script>
    // $('#color1').on('keyup',function(){
      // alert($('#color1').val());
      // $('#color2').val($('#color1').val());
      // $('.colorpicker').colorpicker();
      // console.log($('.colorpicker').colorpicker());
    // });
  </script>
@endsection