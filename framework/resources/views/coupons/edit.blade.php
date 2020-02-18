@extends('layouts.app')
@section("breadcrumb")
<li class="breadcrumb-item">{{ link_to_route('coupons.index', __('fleet.coupons'))}}</li>
<li class="breadcrumb-item active">@lang('fleet.edit_coupon')</li>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title">@lang('fleet.edit_coupon')</h3>
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

      {!! Form::open(['route' => ['coupons.update',$data->id],'method'=>'PATCH']) !!}
      {!! Form::hidden('id',$data->id) !!}
      <div class="row">
        <div class="form-group col-md-6">
          {!! Form::label('code', __('fleet.coupon_code'), ['class' => 'form-label']) !!}
          {!! Form::text('code', $data->code,['class' => 'form-control','required']) !!}
        </div>
        <div class="col-md-6">
          <div class="form-group">
            {!! Form::label('type', __('fleet.discount_type') , ['class' => 'form-label']) !!}<br>
            <input type="radio" name="type" class="flat-red" value="1" @if($data->type == 1) checked @endif> @lang('fleet.percent')
            &nbsp; &nbsp;
            <input type="radio" name="type" class="flat-red" value="0" @if($data->type == 0) checked @endif> @lang('fleet.amount')
          </div>
        </div>  
        <div class="col-md-6">
          <div class="form-group">
            {!! Form::label('value', __('fleet.discount_value'), ['class' => 'form-label']) !!} 
            {!! Form::number('value', $data->value,['class' => 'form-control','required','step'=>'0.01']) !!}              
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

@section('script')
<script>
  //Flat red color scheme for iCheck
  $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
    checkboxClass: 'icheckbox_flat-green',
    radioClass   : 'iradio_flat-green'
  })
</script>
@endsection