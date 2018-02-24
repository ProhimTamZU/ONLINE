@extends('mainsite.layouts.starting')
@section('content')
    @if (App::getLocale() == 'en')
    	<section id='download'>
    		<div class='row'>
          <div class='container'>
              <div class="col-md-6 text-center mt-30 mb-30"><a href="https://play.google.com/store"><img src="{{ URL::asset('img/google_play.png') }}" alt="online-r" width="150"></a></div>
              <div class="col-md-6 text-center mt-30 mb-30"><a href="https://itunes.apple.com/us/genre/ios/id36?mt=8"><img src="{{ URL::asset('img/app_store.png') }}" alt="online-r" width="150"></a></div>
          </div>
    		</div>
    	</section>
	@else
    <!-- khmer -->
@endif
<!-- end content -->
@stop

<!-- internal script -->
@section('script')
  <style type="text/css">
                .downloadbtn{
                     border-bottom:3px solid orange !important;
                }
  </style>
@stop