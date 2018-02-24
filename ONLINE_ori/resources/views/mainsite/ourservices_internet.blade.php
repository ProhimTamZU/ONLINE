@extends('mainsite.layouts.starting')

@section('content')
<section id='service_internet'>
  <div class="row">
  <ul class="nav nav-tabs">
    <li class='item-title'>INTERNET</li>
    <li class="active tab-each"><a href="#corperate" data-toggle="tab"><img src="{{ URL::asset('img/icon_Our_Service/corperate.png') }}" height="65" alt='search-png'></a></li>
    <li class="tab-each"><a href="#sme" data-toggle="tab"><img src="{{ URL::asset('img/icon_Our_Service/sme.png') }}" height="65" alt='search-png'></a></li>
    <li class="tab-each"><a href="#premiumresidence" data-toggle="tab"><img src="{{ URL::asset('img/icon_Our_Service/premium.png') }}" height="65" alt='search-png'></a></li>
  </ul>

<!-- tab coperate -->
  <div class="tab-content">
    <div id="corperate" class="tab-pane fade in active">
      
      <section id="corperates">
        <div class='row'>
        <div class='col-xs-6 must-float-right'>
          <!-- <div class='content-service'> -->
          <h4 class='color-dblue'>1. Elite</h4>
          <ul>
            <li>Super high speed for YouTube, local contents and local games</li>
            <li>Key Account Manager</li>
            <li>Service Level Agreement (SLA)</li>
            <li>Technical support priority</li>
            <li>30 free mailboxes</li>
            <li>5Mb webpage</li>

          </ul>
          <h4 class='color-dblue'>2. Platinum</h4>
          <ul>
            <li>Super high speed for YouTube, local contents and local games</li>
            <li>Key Account Manager</li>
            <li>Service Level Agreement (SLA)</li>
            <li>Technical support priority</li>
            <li>30 free mailboxes</li>
            <li>5Mb webpage</li>

          </ul>
          <!-- </div> -->
          </div>
          </div>

          <div class='row'>
          <div class="highlight">
              <span class='cap-top-s'>Internet</span><br><br><span class='cap-bottom-b'>Corporate</span>
          </div>
      </div>
    </section>
    </div>

    <!-- tab sme -->
    <div id="sme" class="tab-pane fade">
      <section id="smes">
        <div class='row'>
          <div class="b-auto must-float-right">
          <h4 class='color-orange'>3. Ruby:</h4>
          <ul>
            <li>High speed internet service</li>
            <li>Package designed to fit with medium and small business that need internet speed rather than contents and cost saving</li>
            <li>Super high speed for youtube, local contents and local games</li>
            <li>15 free mailboxes</li>
            <li>100Mb/mailbox</li>
          </ul>
          </div>
          <div class="b-auto must-float-right">
          <h4 class='color-orange'>1. Silver:</h4>
          <ul>
            <li>Super high speed for youtube, local contents and local games</li>
            <li>Package designed to fit with medium business</li>
            <li>Service Level</li>
            <li>20 free mailboxes</li>
            <li>100Mb storage/mailbox</li>
          </ul>
          </div>
        </div>

        <div class='row'>
          <div class="b-auto must-float-right">
          <h4 class='color-orange'>4. Value biz:</h4>
          <ul>
            <li>Fiber Optic</li>
            <li>Unlimited broadbrand internet access</li>
            <li>Enjoy triple speed at night from 6:30pm - 6:30am, weekends and public holidays</li>
            <li>Super high speed for youtube, local contents and local games</li>
            <li>One FTP account</li>
            <li>15 mailboxes and 500MB per mailbox</li>
          </ul>
          </div>

        <div class="b-auto must-float-right">
          <h4 class='color-orange'>2. Diamond:</h4>
          <ul>
            <li>Double speed increment at night, weekends and public holidays</li>
            <li>Complete package designed for hospitality-service business</li>
            <li>Super high speed for youtube, local contents and local games</li>
            <li>15 free mailboxes</li>
            <li>100Mb/mailbox</li>
          </ul>
          </div>

        </div>
        <div class='row'>
          <div class="highlight">
              <span class='cap-top-s color-orange'>Internet</span><br><br><span class='cap-bottom-b color-orange'>SME</span>
          </div>
      </div>
      </section>
    </div>

    <!-- tab premium -->
    <div id="premiumresidence" class="tab-pane fade">
      <section id="premiums">
        <div class='row'>
        <div class='col-xs-6 must-float-right h-100'>
          <!-- <div class='content-service'> -->
           <h4 class='color-dred'>1. Crystal:</h4>
          <ul>
            <li>Double speed increment at night, weekends and public holidays</li>
            <li>Package designed to fit home users</li>
            <li>Super high speed for YouTube</li>
            <li>15 free mailboxes</li>
            <li>100Mb/mailbox</li>
          </ul>
          <!-- </div> -->
          </div>
          </div>

          <div class='row'>
          <div class="highlight">
              <span class='cap-top-s color-dred'>Internet</span><br><br><span class='cap-bottom-b color-dred'>Premium Residence</span>
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