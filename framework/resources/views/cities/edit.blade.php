@extends('layouts.app')
@section("breadcrumb")
<li class="breadcrumb-item">{{ link_to_route('cities.index', __('fleet.cities'))}}</li>
<li class="breadcrumb-item active">@lang('fleet.edit_city')</li>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title">@lang('fleet.edit_city')</h3>
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

      {!! Form::open(['route' => ['cities.update',$city->id],'method'=>'PATCH','files'=>true]) !!}
      {!! Form::hidden('id',$city->id) !!}

      <div class="row">
        <div class="form-group col-md-6">
          {!! Form::label('city', __('fleet.city'), ['class' => 'form-label']) !!}
          {!! Form::text('city', $city->city,['class' => 'form-control','required']) !!}
        </div>
        <div class="form-group col-md-6">
          {!! Form::label('cost', __('fleet.cost_per_day'), ['class' => 'form-label']) !!}              
          <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text">{{Hyvikk::get('currency')}}</span></div>
            {!! Form::number('cost', $city->cost,['class' => 'form-control','required','step'=>'0.01']) !!}
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            {!! Form::label('image', __('fleet.picture'), ['class' => 'form-label']) !!}
          @if($city->image) <a href="{{url('uploads/'.$city->image)}}" target="blank">View</a> @endif
            <br>
            {!! Form::file('image',null,['class' => 'form-control']) !!}
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            {!! Form::label('other',__('fleet.other_info'), ['class' => 'form-label']) !!}
            {!! Form::textarea('other',$city->other,['class'=>'form-control','size'=>'30x2','required']) !!}
          </div>
        </div>
     </div>
      <div class="form-group">
        {!! Form::submit(__('fleet.update'), ['class' => 'btn btn-warning']) !!}
      </div>
      {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
@endsection