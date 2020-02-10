@extends('layouts.app')

@section("breadcrumb")
<li class="breadcrumb-item">{{ link_to_route('faqs.index', __('fleet.faqs'))}}</li>
<li class="breadcrumb-item active">@lang('fleet.add_faq')</li>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">@lang('fleet.add_faq')</h3>
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

        {!! Form::open(['route' => 'faqs.store','method'=>'post']) !!}
        <div class="row">
          <div class="form-group col-md-6">
            {!! Form::label('question', __('fleet.question'), ['class' => 'form-label']) !!}
            {!! Form::textarea('question', null,['class' => 'form-control','size'=>'30x3','required']) !!}
          </div>
          <div class="form-group col-md-6">
            {!! Form::label('answer', __('fleet.answer'), ['class' => 'form-label']) !!}
            {!! Form::textarea('answer', null,['class' => 'form-control','size'=>'30x3','required']) !!}
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