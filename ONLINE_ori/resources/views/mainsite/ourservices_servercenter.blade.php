@extends('mainsite.layouts.starting')

@section('content')
<section id='service_servercenter'>
  <div class="row">
  <ul class="nav nav-tabs">
    <li class='item-title long'>SERVER CENTER</li>
    <li class="active tab-each"><a href="#vps" data-toggle="tab"><img src="{{ URL::asset('img/icon_Our_Service/sc_vps.png') }}" height="65" alt='search-png'></a></li>
    <li class="tab-each"><a href="#dc" data-toggle="tab"><img src="{{ URL::asset('img/icon_Our_Service/sc_dc.png') }}" height="65" alt='search-png'></a></li>
    <li class="tab-each"><a href="#ip" data-toggle="tab"><img src="{{ URL::asset('img/icon_Our_Service/sc_ip.png') }}" height="65" alt='search-png'></a></li>
    <li class="tab-each"><a href="#email" data-toggle="tab"><img src="{{ URL::asset('img/icon_Our_Service/sc_email.png') }}" height="65" alt='search-png'></a></li>
    <li class="tab-each"><a href="#hos" data-toggle="tab"><img src="{{ URL::asset('img/icon_Our_Service/sc_hos.png') }}" height="65" alt='search-png'></a></li>
  </ul>

<!-- tab coperate -->
  <div class="tab-content">
    <div id="vps" class="tab-pane fade in active">
    <div class='text-center header-service'><h2 class='header-service-text'>VPS</h2></div>      
      <section id="vpss">
        <div class='row'>
        <div class='col-xs-6 h-100-5 pt-100 pl-100'>
          <p>Virtual Private Server (VPS) is a virtualized server allowing users to access instantly. he users could install plenty of applicatons on their copy of operating system to suit their needs. </p><br>
          
          <p class='sub-main-blue'>Core benefits:</p>
          <ul>
            <li>VMWare-based set up</li>
            <li>Dedicated processing power, RAM and storage </li>
            <li>Full privilege to control VPS</li>
            <li>Server monitoring on physical facilities</li>
            <li>Hardware and software stability and resistance</li>
            <li>Scalability of disk capacity, CPU, RAM an bandwicth</li>
            <li>Flexibility of OS and software selection</li>
            <li>No maintenance fee</li>
            <li>24/7 support and troubleshooting</li>
          </ul>
          </div>
          </div>
    </section>
    </div>

    <!-- tab sme -->
    <div id="dc" class="tab-pane fade">
      <div class='text-center header-service'><h2 class='header-service-text'>Data Center</h2></div>   
      <section id="dcs">
        <div class='row'>
        <div class='col-xs-6 must-float-right h-100-5 pt-99'>
          <p class='sub-main-blue'>Data-Colocation</p>
          <p>With the latest technology, ONLINE Data Center serves services of Data-Collocation, which users can host their crucial data with high security. The users are allowed to upgrade space and connectivity as required. </p>
          <p class='sub-main-blue'>Data-Recovery</p>
          <p>Users can use ONLINE Data Center to secure their data by accepting Data-Recovery services. With latest technology and well-maintained infrastructure, ONLINE is confident to service with the highest security to users' data. </p><br>
          <p class='sub-main-blue'>Core benefits:</p>
          <ul>
            <li>The best solutions for Disaster Recovery site</li>
            <li>Free local bandwidth</li>
            <li>Flexibility and scalability</li>
            <li>Security System</li>
            <li>Environmental control (fire suppressors, air conditioning, etc.)</li>
            <li>Backup power supplies</li>
            <li>Power Monitoring System</li>
            <li>less maintenance cost</li>
          </ul>
          <!-- </div> -->
          </div>
          </div>
      </section>
    </div>

    <!-- tab premium -->
    <div id="ip" class="tab-pane fade">
      <div class='text-center header-service'><h2 class='header-service-text'>Virtual IP PABX</h2></div>
      <section id="ipss">
        <div class='row'>
        <div class='col-xs-6 h-100-5 pt-100 pl-100'>
          <p>Virtual IP PABX is an advanced technology in preparing internal phone extension within or between branches of companies with long distance across the country. Witn Virtual IP PABX, users are able to internally communicate without any cost for on-site PBX and the hassles of managing it. </p><br>
          <p class='sub-main-blue'>Core benefits:</p>
          <ul>
            <li>No service-charge for local call</li>
            <li>More convenient rate for oversea call</li>
            <li>Extension call management</li>
            <li>No maintenance required</li>
            <li>Scalability and expandability</li>
            <li>Highly recommended solutions for growing number of workforce</li>
            <li>24/7 support and troubleshooting</li>
          </ul>
          </div>
          </div>
        </section>
    </div>

    <div id="email" class="tab-pane fade">
      <div class='text-center header-service'><h2 class='header-service-text'>Email, DNS, and Web Hosting</h2></div>   
      <section id="emails">
        <div class='row'>
        <div class='col-xs-6 must-float-right h-100 pt-99'>
          <p>ONLINE offers users an Email and Web hosting service with ability to host their own domain by using cPancl, easy to manage Email and Web hosting. </p>

          <p class='sub-main-blue'>Core benefits:</p>
          <ul>
            <li> Scalability and trusted service</li>
            <li>Provide cPanel for management</li>
            <li>Provide webmail with may choice</li>
            <li>Provide sett database creating</li>
            <li>24/7 support and troubleshooting </li>
            <li>Scalability and trusted service</li>
            <li>Provide cPanel for management</li>
            <li>Provide webmail with may choice</li>
            <li>Provide sett database creating</li>
            <li>24/7 support and troubleshooting </li>
          </ul>
          <!-- </div> -->
          </div>
          </div>
      </section>
    </div>

    <!-- Azure -->
    <div id="hos" class="tab-pane fade">
      <div class='text-center header-service'><h2 class='header-service-text'>Hospitality Solution</h2></div>
      <section id="hoss">
        <div class='row'>
        <div class='col-xs-6 h-100 pt-100 pl-100-5'>
          <p>Hospital Solutions offers hotels and serviced apartments to be equipped with well-organized infrastructure and high speed Internet access services that are fully reliable and stay connected to the Internet simply instantaneous. </p>
          <p>The package is tailored to properties of any size, with any budget, the cost-effectively deliver broadband services, higher margins, greater flexibility and control. </p>
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