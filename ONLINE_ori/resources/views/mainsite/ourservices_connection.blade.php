@extends('mainsite.layouts.starting')

@section('content')
<section id='service_connection'>
  <div class="row">
  <ul class="nav nav-tabs">
    <li class='item-title long'>CONNECTION</li>
    <li class="active tab-each"><a href="#bridge" data-toggle="tab"><img src="{{ URL::asset('img/icon_Our_Service/connection_bridge.png') }}" height="65" alt='search-png'></a></li>
    <li class="tab-each"><a href="#mpls" data-toggle="tab"><img src="{{ URL::asset('img/icon_Our_Service/connection_mpls.png') }}" height="65" alt='search-png'></a></li>
    <li class="tab-each"><a href="#iepl" data-toggle="tab"><img src="{{ URL::asset('img/icon_Our_Service/connection_iepl.png') }}" height="65" alt='search-png'></a></li>
    <li class="tab-each"><a href="#direct" data-toggle="tab"><img src="{{ URL::asset('img/icon_Our_Service/connection_direct.png') }}" height="65" alt='search-png'></a></li>
    <li class="tab-each"><a href="#azure" data-toggle="tab"><img src="{{ URL::asset('img/icon_Our_Service/connection_azure.png') }}" height="65" alt='search-png'></a></li>
  </ul>

<!-- tab coperate -->
  <div class="tab-content">
    <div id="bridge" class="tab-pane fade in active">
    <div class='text-center header-service'><h2 class='header-service-text'>Bridge Connection</h2></div>      
      <section id="bridges">
        <div class='row'>
        <div class='col-xs-6 h-100-5 pt-100 pl-100'>
          <p>Bridge Connection (VPLS) is a network-based IP private that enables users to connect their head office to remote branches.</p><br>
          
          <p class='sub-main-blue'>Core benefits:</p>
          <ul>
            <li>Private and secured communication</li>
            <li>Monitoring on network performance</li>
            <li>Effectiveness to rollout and quick setup time</li>
            <li>Compatible with intermediate devices and Ethernet standards</li>
            <li>Fully applicable with IP VPN (IPSec) and Over Bridge Connection</li>
            <li>Stable and reliable connection</li>
            <li>24/7 support and troubleshooting</li>
          </ul>
          </div>
          </div>
    </section>
    </div>

    <!-- tab sme -->
    <div id="mpls" class="tab-pane fade">
      <div class='text-center header-service'><h2 class='header-service-text'>MPLS VPN</h2></div>   
      <section id="mplss">
        <div class='row'>
        <div class='col-xs-6 must-float-right h-100-5 pt-100'>
          <p>MPLS VPN offers Network Engineers a flexibility to transport and route several types of network traffic using the technologies of a MPLS backbone.
            Network Engineers are moreover able to build a network-based MPLS virtual private network and efficiently transmit applications such as voice, data, and video over a single connection.</p><br>
          <p class='sub-main-blue'>Core benefits:</p>
          <ul>
            <li>Private and secured communication</li>
            <li>Fully applicable with multiple dynamic routing and virtual routing</li>
            <li>MPLS working on label switching advantage over traditional IP network</li>
            <li>User to be able to use own IP addresses</li>
            <li>24/7 support and troubleshooting</li>
          </ul>
          <!-- </div> -->
          </div>
          </div>
      </section>
    </div>

    <!-- tab premium -->
    <div id="iepl" class="tab-pane fade">
      <div class='text-center header-service'><h2 class='header-service-text'>IEPL/IPLC</h2></div>
      <section id="iepls">
        <div class='row'>
        <div class='col-xs-6 h-100-5 pt-100 pl-100-5'>
          <p>International Ethernet Private Line (IEPL) or International Private Leased Circuit (IPLC) is a dedicated, secure, high-capacity Ethernet connectionthat enables 
            transparent connections between worldwide locations.</p><br>
          <p class='sub-main-blue'>Core benefits:</p>
          <ul>
            <li>Secure, reliable, flexible and scalable network architecture</li>
            <li>Dedicated high-speed bandwidth</li>
            <li>Private and secured communication</li>
            <li>Applicable with Ethernet interface</li>
            <li>Backbone transmission network operating on submarine cable and/or landline</li>
            <li>Service Level Availability (SLA) guarantee</li>
            <li>24/7 support and troubleshooting</li>
          </ul>
          </div>
          </div>
        </section>
    </div>

    <div id="direct" class="tab-pane fade">
      <div class='text-center header-service'><h2 class='header-service-text'>AWS Direct Connect</h2></div>   
      <section id="directs">
        <div class='row'>
        <div class='col-xs-6 must-float-right h-101 pt-100'>
          <p>AWS Direct Connection makes it easy to establish a dedicated network connection from your premises to AWS. Using ONLINE's CloudConnect managed direct Connect links, 
            you can establish private connectivity between AWS and datacenter, office and colocation environment, which is many cases can reduce your network costs, increase bandwidth throughput,
           and provide a more consistent network experience than Internet-based connections. In some cases, using direct connect to transfer data between on-permises systems and AWS can also yield significant cost benefits.</p><br>

           <p>By working with ONLINE, you will be working with one of the pioneer AWS Direct Connect partners in Singapor with years of experiences behind the team. With our board range of customers in many different sectors like FSI, 
            government, and e-Commerce, our team can deliver a connectivity solution that will meet your Cloud Connectivity needs and budget.</p><br>
          <p class='sub-main-blue'>Core benefits:</p>
          <ul>
            <li>A fully managed Direct Connect service, connecting your organization to AWS VPC-based resources and public services. This can result in significants improvements for your AWS workloads and access to service like S3.</li>
            <li>A selection of bandwidths ranging from 50Mbps to 1Gbps that enables you to right size your CloudConnect according to your business requirements.</li>
            <li>Customized security services according to your requirements, including IPSec implementations and managed firewall services.</li>
          </ul>
          <!-- </div> -->
          </div>
          </div>
      </section>
    </div>

    <!-- Azure -->
    <div id="azure" class="tab-pane fade">
      <div class='text-center header-service'><h2 class='header-service-text'>Azure ExpressRoute</h2></div>
      <section id="azures">
        <div class='row'>
        <div class='col-xs-6 h-100-5 pt-100 pl-100-5'>
          <p>Azure ExpressRoute lets you create private connections between your on-premise infrastructure and Azure datacenters ExpressRoute connections are private connectons that offer higher reliability,
           faster speeds, lower latencies, and higher security than typical Internet connections. In some cases, using ExpressRoute connectons to transfer data between on-premises systems and Azure can also yield significant cost benefits.</p><br>
          <p class='sub-main-blue'>Core benefits:</p>
          <ul>
            <li>A fully managed ExpressRoute service, connecting your organization to Azure re sources and/or Office 365. This can result in significant improvements for your Azure orkloads and Office 365 services like Shareaoint and Skype for Business</li>
            <li>A selection of bandwidths ranging from 50Mbps to 1Gbos that enables you to right size your CloudConnect according to your business requirements</li>
            <li>Customized security services according to your requirements, including IPSec implementations and managed firewall services. </li>
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