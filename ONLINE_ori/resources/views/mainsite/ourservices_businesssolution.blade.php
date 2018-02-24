@extends('mainsite.layouts.starting')

@section('content')
<section id='service_business'>
  <div class="row">
  <ul class="nav nav-tabs">
    <li class='item-title long'>BUSINESS SOLUTION</li>
    <li class="active tab-each"><a href="#net" data-toggle="tab"><img src="{{ URL::asset('img/icon_Our_Service/bs_net.png') }}" height="65" alt='search-png'></a></li>
    <li class="tab-each"><a href="#hot" data-toggle="tab"><img src="{{ URL::asset('img/icon_Our_Service/bs_hot.png') }}" height="65" alt='search-png'></a></li>
    <li class="tab-each"><a href="#sec" data-toggle="tab"><img src="{{ URL::asset('img/icon_Our_Service/bs_sec.png') }}" height="65" alt='search-png'></a></li>
  </ul>

<!-- tab coperate -->
  <div class="tab-content">
    <div id="net" class="tab-pane fade in active">
    <div class='text-center header-service'><h2 class='header-service-text'>Network Solution</h2></div>      
      <section id="nets">
        <div class='row'>
        <div class='col-xs-6 h-100 pt-100 pl-100'>
          <ul>
            <li>Network cabling (fiber optic and UTP cable)</li>
            <li>Network design and implementation</li>
            <li>Network management</li>
            <li>Network monitoring</li>
          </ul>
          </div>
          </div>
    </section>
    </div>

    <!-- tab sme -->
    <div id="hot" class="tab-pane fade">
      <div class='text-center header-service'><h2 class='header-service-text'>WiFi & HotSpot Solution</h2></div>   
      <section id="hots">
        <div class='row'>
        <div class='col-xs-6 must-float-right h-100 pt-100'>
          <ul>
            <li>User Management</li>
            <li>Bandwidth management</li>
            <li>User access control</li>
            <li>High security</li>
            <li>Low cost</li>
            <li>Easy and fast to to deploy</li>
            <li>Suitable for restaurants, hotels, apartments...etc.</li>
          </ul>
          <!-- </div> -->
          </div>
          </div>
      </section>
    </div>

    <!-- tab premium -->
    <div id="sec" class="tab-pane fade">
      <div class='text-center header-service'><h2 class='header-service-text'>Security Camera Solution</h2></div>
      <section id="secs">
        <div class='row'>
        <div class='col-xs-6 h-100 pt-100 pl-100'>
          <ul>
            <li>Analog camera and DVR</li>
            <li>IP camera and NVR</li>
            <li>Low cost</li>
            <li>High security</li>
            <li>Remote view</li>
            <li>Remote suitable for shops, stores, restaurants, residents, schools...etc.</li>
          </ul>
          </div>
          </div>
        </section>
    </div>

  </div>
</div>
</section>
@stop
@section('script')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
                .ourservicesbtn{
                     border-bottom:3px solid orange !important;
                }
  </style>
@stop