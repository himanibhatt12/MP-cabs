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

      {!! Form::open(['route' => ['cities.update',$city->id],'method'=>'PATCH']) !!}
      {!! Form::hidden('id',$city->id) !!}

      <div class="row">
        <div class="form-group col-md-6">
          {!! Form::label('city', __('fleet.city'), ['class' => 'form-label']) !!}
          {!! Form::text('city', $city->city,['class' => 'form-control','required']) !!}
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