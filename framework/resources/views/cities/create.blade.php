@extends('layouts.app')
@section("breadcrumb")
<li class="breadcrumb-item">{{ link_to_route('cities.index', __('fleet.cities'))}}</li>
<li class="breadcrumb-item active">@lang('fleet.add_city')</li>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">@lang('fleet.add_city')</h3>
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

        {!! Form::open(['route' => 'cities.store','method'=>'post','files'=>true]) !!}
        <div class="row">
          <div class="form-group col-md-6">
            {!! Form::label('city', __('fleet.city'), ['class' => 'form-label']) !!}
            {!! Form::text('city', null,['class' => 'form-control','required']) !!}
          </div>
          <div class="form-group col-md-6">
            {!! Form::label('cost', __('fleet.cost_per_day'), ['class' => 'form-label']) !!}              
            <div class="input-group mb-3">
              <div class="input-group-prepend">
              <span class="input-group-text">{{Hyvikk::get('currency')}}</span></div>
              {!! Form::number('cost', null,['class' => 'form-control','required','step'=>'0.01']) !!}
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              {!! Form::label('image', __('fleet.picture'), ['class' => 'form-label']) !!}
              <br>
              {!! Form::file('image',null,['class' => 'form-control']) !!}
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              {!! Form::label('other',__('fleet.other_info'), ['class' => 'form-label']) !!}
              {!! Form::textarea('other',null,['class'=>'form-control','size'=>'30x2','required']) !!}
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