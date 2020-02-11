@extends('layouts.app')
@section("breadcrumb")
<li class="breadcrumb-item">{{ link_to_route('routes.index', __('fleet.routes'))}}</li>
<li class="breadcrumb-item active">@lang('fleet.edit_route')</li>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title">@lang('fleet.edit_route')</h3>
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

        {!! Form::open(['route' => ['routes.update',$data->id],'method'=>'PATCH','files'=>true]) !!}
        {!! Form::hidden('id',$data->id) !!}
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              {!! Form::label('name', __('fleet.name'), ['class' => 'form-label']) !!}
              {!! Form::text('name', $data->name,['class' => 'form-control','required']) !!}
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              {!! Form::label('image', __('fleet.picture'), ['class' => 'form-label']) !!}
            &nbsp; @if($data->image) <a href="{{url('uploads/'.$data->image)}}" target="blank">View</a> @endif
              <br>
              {!! Form::file('image',null,['class' => 'form-control']) !!}
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              {!! Form::label('source', __('fleet.source'), ['class' => 'form-label']) !!}
              {!! Form::text('source', $data->source,['class' => 'form-control','required']) !!}
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              {!! Form::label('destination', __('fleet.destination'), ['class' => 'form-label']) !!}
              {!! Form::text('destination', $data->destination,['class' => 'form-control','required']) !!}
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              {!! Form::label('cost', __('fleet.cost'), ['class' => 'form-label']) !!}
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text">{{Hyvikk::get('currency')}}</span></div>
                {!! Form::number('cost', $data->cost,['class' => 'form-control','required','step'=>'0.01']) !!}
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              {!! Form::label('ratings', __('fleet.service_ratings'), ['class' => 'form-label']) !!}
              {!! Form::text('ratings', $data->ratings,['class' => 'form-control','required']) !!}
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <div class="row">
          <div class="form-group col-md-4">
            {!! Form::submit(__('fleet.update'), ['class' => 'btn btn-warning']) !!}
          </div>
        </div>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
  $(document).ready(function() {
  //Flat green color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    });
  });
</script>
@endsection