@extends('layouts.app')
@section("breadcrumb")
<li class="breadcrumb-item">{{ link_to_route('faqs.index', __('fleet.faqs'))}}</li>
<li class="breadcrumb-item active">@lang('fleet.edit_faq')</li>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title">@lang('fleet.edit_faq')</h3>
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

      {!! Form::open(['route' => ['faqs.update',$faq->id],'method'=>'PATCH']) !!}
      {!! Form::hidden('id',$faq->id) !!}

      <div class="row">
        <div class="form-group col-md-6">
          {!! Form::label('question', __('fleet.question'), ['class' => 'form-label']) !!}
          {!! Form::textarea('question', $faq->question,['class' => 'form-control','size'=>'30x3','required']) !!}
        </div>
        <div class="form-group col-md-6">
          {!! Form::label('answer', __('fleet.answer'), ['class' => 'form-label']) !!}
          {!! Form::textarea('answer', $faq->answer,['class' => 'form-control','size'=>'30x3','required']) !!}
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