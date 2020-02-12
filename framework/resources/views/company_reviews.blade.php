@extends("layouts.app")
@section("breadcrumb")
<li class="breadcrumb-item active">@lang('fleet.company_reviews')</li>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">
          @lang('fleet.company_reviews')
        </h3>
      </div>

      <div class="card-body table-responsive">
        <table class="table" id="data_table">
          <thead class="thead-inverse">
            <tr>
              <th>@lang('fleet.picture')</th>
              <th>@lang('fleet.name')</th>
              <th>@lang('fleet.email')</th>
              <th>@lang('fleet.review')</th>
            </tr>
          </thead>
          <tbody>
          @foreach($reviews as $review)
            <tr>
              <td>
                @if($review->photo)
                <img src="{{asset('uploads/'.$review->photo)}}" height="70px" width="70px">
                @else
                <img src="{{ asset("assets/images/no-user.jpg")}}" height="70px" width="70px">
                @endif
              </td>
              <td>{{$review->name}}</td>
              <td>{{$review->email}}</td>
              <td>{{$review->review}}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection