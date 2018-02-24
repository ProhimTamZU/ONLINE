@extends('mainsite.layouts.starting')
@section('content')
    @if (App::getLocale() == 'en')
<section class='aboutuss'>
<div class="row">
<!-- <div class="container">  -->
<ul class="nav nav-tabs nav-tabs-about-us">
    <li class="active tab-each tab-each-active"><a href="#companyprofile" role="tab" data-toggle="tab"><img src="{{ URL::asset('img/icon_About/1.png') }}" height="65" alt='search-png'></a></li>
    <li class="tab-each"><a href="#onlinerewards" role="tab" data-toggle="tab"><img src="{{ URL::asset('img/icon_About/3.png') }}" height="65" alt='search-png'></a></li>
    <li class="tab-each"><a href="#pressroom" role="tab" data-toggle="tab"><img src="{{ URL::asset('img/icon_About/4.png') }}" height="65" alt='search-png'></a></li>
    <li class="tab-each"><a href="#career" role="tab" data-toggle="tab"><img src="{{ URL::asset('img/icon_About/5.png') }}" height="65" alt='search-png'></a></li>
    <li class="tab-each"><a href="#socialr" role="tab" data-toggle="tab"><img src="{{ URL::asset('img/icon_About/6.png') }}" height="65" alt='search-png'></a></li>
    <li class="tab-each"><a href="#peeringpartner" role="tab" data-toggle="tab"><img src="{{ URL::asset('img/icon_About/7.png') }}" height="65" alt='search-png'></a></li>
    <li class="tab-each"><a  data-toggle="modal" role="tab" data-target="#pdf" ><img src="{{ URL::asset('img/icon_About/8.png') }}" height="65" alt='search-png'></a></li>
 </ul>
</div>
<!-- tab coperate -->
  <div class="tab-content">
  	<!-- start tab 1 -->
    <div id="companyprofile" class="tab-pane fade active in">
      <div class='text-center header-service'><h2 class='header-service-text'>Company Profile</h2></div>
      <section id="companyprofiles">
        <div class='row mb-4'> 

           <div class="col-md-6">
              <img class='img_first_rightcol_' src="{{ URL::asset('img/icon_About/companyprofile.png') }}" height="900" alt='search-png'>
           </div>
          <div class="col-md-6">
                  <p class='text-profiles text-profiles-active'>
                      COGETEL Ltd. (ONLINE) is the leading ISP and broadband provider in the country; established in July 1997 by Telstra Cambodia as Bigpond Cambodia — the first 
                      commercial Internet Service Provider in the country. In 2002, Cogetel limited acquired the business from Telstra marking the beginning of its ADSL service and its new brand name — ONLINE.</p> <br>
                      <p class='text-profiles'>ONLINE subsequently brought in WiMAX, Long-range WiFi, and Fiber Optic to increase its range of last miles technology to meet any need of its customers.</p><br> 
                      <p class='text-profiles'>ONLINE strives to deliver products and services that are tailored to its customers' Internet technology needs, easily understood and used, delivered with warmth,
                       knowledge and experience throughout the years. Supported by its core drive of keeping people in touch with their world; ONLINE always brings innovative products and services to Cambodia, thus keeping Cambodia abreast with latest technologies worldwide. </p><br>
                       <p class='text-profiles'>Our uniquely tailored services continue to meet the needs of diverse customers - whether for domestic, corporate, single or multiple users, academic or leisure purposes. Online improves communications with the rest of the world through ideal, reliable and secure connection coupled with excellent support services. ONLINE is connected to the world directly through mainland China, Hong Kong, Thailand, European countries, through redundant fiber optic cable making us the most vigorous ISP in Cambodia with abundant and diverse routes around the world.</p> <br>
                  </p> 
                  <h3 class='head-pro text-center'>Mission</h3>
                  <p  class='text-profiles'>To be the primary Internet service provider of choice and ideal company that provides fostering work environment. </p>
                  <h3 class='head-pro text-center'>Vision</h3>
                  <p  class='text-profiles'>To deliver technology solutions to achieve superior operational performance that enables us to provide our customers with exceptional service. </p>
          </div>
      </div>
    </section>
    </div>
    <!-- end tab 1 -->

    <!-- tab sme -->
    <div id="onlinerewards" class="tab-pane fade">
      <div class="row"><div class='text-center header-service'><h2 class='header-service-text'>Online Rewards</h2></div></div>
      <section id="onlinerewardss">
        <div class='row'>
          <!-- img slider -->
            <div class="container"> 
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                  <li data-target="#myCarousel" data-slide-to="3"></li>
                  <li data-target="#myCarousel" data-slide-to="4"></li>
                  <li data-target="#myCarousel" data-slide-to="5"></li>
                  <li data-target="#myCarousel" data-slide-to="6"></li>
                  <li data-target="#myCarousel" data-slide-to="7"></li>
                  <li data-target="#myCarousel" data-slide-to="8"></li>
                  <li data-target="#myCarousel" data-slide-to="9"></li>
                  <li data-target="#myCarousel" data-slide-to="10"></li>
                  <li data-target="#myCarousel" data-slide-to="11"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="{{ URL::asset('img/icon_About/r1.jpg') }}" alt="online-r" style="width:100%;">
                  </div>

                  <div class="item">
                    <img src="{{ URL::asset('img/icon_About/r1.jpg') }}" alt="online-r" style="width:100%;">
                  </div>
                
                  <div class="item">
                    <img src="{{ URL::asset('img/icon_About/r1.jpg') }}" alt="online-r" style="width:100%;">
                  </div>
                  <div class="item">
                    <img src="{{ URL::asset('img/icon_About/r1.jpg') }}" alt="online-r" style="width:100%;">
                  </div>
                  <div class="item">
                    <img src="{{ URL::asset('img/icon_About/r1.jpg') }}" alt="online-r" style="width:100%;">
                  </div>
                  <div class="item">
                    <img src="{{ URL::asset('img/icon_About/r1.jpg') }}" alt="online-r" style="width:100%;">
                  </div>
                  <div class="item">
                    <img src="{{ URL::asset('img/icon_About/r1.jpg') }}" alt="online-r" style="width:100%;">
                  </div>
                  <div class="item">
                    <img src="{{ URL::asset('img/icon_About/r1.jpg') }}" alt="online-r" style="width:100%;">
                  </div>
                  <div class="item">
                    <img src="{{ URL::asset('img/icon_About/r1.jpg') }}" alt="online-r" style="width:100%;">
                  </div>
                  <div class="item">
                    <img src="{{ URL::asset('img/icon_About/r1.jpg') }}" alt="online-r" style="width:100%;">
                  </div>
                  <div class="item">
                    <img src="{{ URL::asset('img/icon_About/r1.jpg') }}" alt="online-r" style="width:100%;">
                  </div>
                </div>

                <!-- Left and right controls -->
              </div>
              <!-- outside -->
              <div class='carousel-control-outside'>
                <a class="left control-outside-l carousel-control" href="#myCarousel" data-slide="prev">
                  <img class='direction-pl' src="{{ URL::asset('img/icon_About/left.png') }}" alt="online-r" width='100' height='520'>
                  <!-- <span class="sr-only">Left</span> -->
                </a>
                <a class="right control-outside-r carousel-control" href="#myCarousel" data-slide="next">
                  <img  class='direction-pr' src="{{ URL::asset('img/icon_About/right.png') }}" alt="online-r" width='100' height='520'>
                  <!-- <span class="sr-only">Right</span> -->
                </a>
              </div>
              <!--  -->
            </div>
            <!-- end img slider -->
      </div>
      </section>
    </div>
    <!-- start tab 1 -->
    <div id="pressroom" class="tab-pane fade">
      <div class="row"><div class='text-center header-service'><h2 class='header-service-text'>Press Room</h2></div></div>
      <section id="pressrooms">
        <div class='row'>
          <div class="container"> 
            <div id="myc7" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myc7" data-slide-to="0" class="active"></li>
                <li data-target="#myc7" data-slide-to="1"></li>
                <li data-target="#myc7" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="{{ URL::asset('img/icon_About/press1.jpg') }}" alt="online-r" style="width:100%;">
                </div>
                <div class="item">
                  <img src="{{ URL::asset('img/icon_About/press3.jpg') }}" alt="online-r" style="width:100%;">
                </div>
                <div class="item">
                  <img src="{{ URL::asset('img/icon_About/press4.jpg') }}" alt="online-r" style="width:100%;">
                </div>
              </div>

              <!-- Left and right controls -->
            </div>
            <!-- outside -->
            <div class='carousel-control-outside'>
              <a class="left control-outside-l carousel-control" href="#myc7" data-slide="prev">
                <img class='direction-pl' src="{{ URL::asset('img/icon_About/left.png') }}" alt="online-r" width='100' height='520'>
                <!-- <span class="sr-only">Left</span> -->
              </a>
              <a class="right control-outside-r carousel-control" href="#myc7" data-slide="next">
                <img  class='direction-pr' src="{{ URL::asset('img/icon_About/right.png') }}" alt="online-r" width='100' height='520'>
                <!-- <span class="sr-only">Right</span> -->
              </a>
            </div>
            <!--  -->
          </div>
      </div>
    </section>
    </div>
    <!-- end tab 1 -->
    <!-- start tab 1 -->
    <div id="career" class="tab-pane fade">
      <div class="row"><div class='text-center header-service'><h2 class='header-service-text'>Career</h2></div></div>
      <section id="careers">
        <div class='row'>
            <div class='container'>
            <div class="col-md-6">
                <div class='row bg-blue'><h3>JOB OPPORTUNITY</h3></div>
                <div class='row bg-fff'>
                  <section class='bg-ddd'>
                    <div class='row'>
                        <div class='row job_name color-dblue'><ul><li>Sales Adviser (Sale Corporate)</li></ul></div>
                        <div class='row job_date mr-5'>
                          <p class='small-text t-right d-ib'>Closing date:<br>November 01, 1998</p>
                          <a  data-toggle="modal" data-target="#submit_career" ><img class='f-right d-ib ml-1' src="{{ URL::asset('img/icon_About/career_detail.png') }}" alt="online-r" width='50'></a>
                        </div>
                        <div class='row job_detail ml-4'>
                          <span>
                            <img src="{{ URL::asset('img/icon_About/career_user.png') }}" alt="online-r" width='4%'><span class='small-text'>x 10</span></span>
                          <span class='ml-8'><img src="{{ URL::asset('img/icon_About/career_location.png') }}" alt="online-r" width='4%'><span class='small-text'>Phnom Penh</span></span>
                        </div>
                </div>
                </section>

                  <section class='bg-f'>
                    <div class='row'>
                        <div class='row job_name color-dblue'><ul><li>Support Engineer</li></ul></div>
                        <div class='row job_date mr-5'>
                          <p class=' small-text t-right d-ib'>Closing date:<br>November 01, 1998</p>
                          <a  data-toggle="modal" data-target="#submit_career" ><img class='f-right d-ib ml-1' src="{{ URL::asset('img/icon_About/career_detail.png') }}" alt="online-r" width='50'></a>
                        </div>
                        <div class='row job_detail ml-4'>
                          <span>
                            <img src="{{ URL::asset('img/icon_About/career_user.png') }}" alt="online-r" width='4%'><span class='small-text'>x 5</span></span>
                          <span class='ml-8'><img src="{{ URL::asset('img/icon_About/career_location.png') }}" alt="online-r" width='4%'><span class='small-text'>Phnom Penh</span></span>
                        </div>
                </div>
                </section>

                <section class='bg-ddd'>
                    <div class='row'>
                        <div class='row job_name color-dblue'><ul><li>Installation Engineer</li></ul></div>
                        <div class='row job_date mr-5'>
                          <p class=' small-text t-right d-ib'>Closing date:<br>November 01, 1998</p>
                          <a  data-toggle="modal" data-target="#submit_career" ><img class='f-right d-ib ml-1' src="{{ URL::asset('img/icon_About/career_detail.png') }}" alt="online-r" width='50'></a>
                        </div>
                        <div class='row job_detail ml-4'>
                          <span>
                            <img src="{{ URL::asset('img/icon_About/career_user.png') }}" alt="online-r" width='4%'><span class='small-text'>x 1</span></span>
                          <span class='ml-8'><img src="{{ URL::asset('img/icon_About/career_location.png') }}" alt="online-r" width='4%'><span class='small-text'>Phnom Penh</span></span>
                        </div>
                </div>
                </section>

                 <section class='bg-f'>
                    <div class='row'>
                        <div class='row job_name color-dblue'><ul><li>Sales Adviser (Sale Corporate)</li></ul></div>
                        <div class='row job_date mr-5'>
                          <p class=' small-text t-right d-ib'>Closing date:<br>November 01, 1998</p>
                          <a  data-toggle="modal" data-target="#submit_career" ><img class='f-right d-ib ml-1' src="{{ URL::asset('img/icon_About/career_detail.png') }}" alt="online-r" width='50'></a>
                        </div>
                        <div class='row job_detail ml-4'>
                          <span>
                            <img src="{{ URL::asset('img/icon_About/career_user.png') }}" alt="online-r" width='4%'><span class='small-text'>x 1</span></span>
                          <span class='ml-8'><img src="{{ URL::asset('img/icon_About/career_location.png') }}" alt="online-r" width='4%'><span class='small-text'>Phnom Penh</span></span>
                        </div>
                </div>
                </section>

                 <section class='bg-ddd'>
                    <div class='row'>
                        <div class='row job_name color-dblue'><ul><li>Fiber Optic Technician</li></ul></div>
                        <div class='row job_date mr-5'>
                          <p class=' small-text t-right d-ib'>Closing date:<br>November 01, 1998</p>
                          <a  data-toggle="modal" data-target="#submit_career" ><img class='f-right d-ib ml-1' src="{{ URL::asset('img/icon_About/career_detail.png') }}" alt="online-r" width='50'></a>
                        </div>
                        <div class='row job_detail ml-4'>
                          <span>
                            <img src="{{ URL::asset('img/icon_About/career_user.png') }}" alt="online-r" width='4%'><span class='small-text'>x 1</span></span>
                          <span class='ml-8'><img src="{{ URL::asset('img/icon_About/career_location.png') }}" alt="online-r" width='4%'><span class='small-text'>Phnom Penh</span></span>
                        </div>
                </div>
                </section>
                <section class='bg-f'>
                    <div class='row'>
                        <div class='row job_name color-dblue'><ul><li>Sales Adviser (Sale Corporate)</li></ul></div>
                        <div class='row job_date mr-5'>
                          <p class='small-text  t-right d-ib'>Closing date:<br>November 01, 1998</p>
                          <a  data-toggle="modal" data-target="#submit_career" ><img class='f-right d-ib ml-1' src="{{ URL::asset('img/icon_About/career_detail.png') }}" alt="online-r" width='50'></a>
                        </div>
                        <div class='row job_detail ml-4'>
                          <span>
                            <img src="{{ URL::asset('img/icon_About/career_user.png') }}" alt="online-r" width='4%'><span class='small-text'>x 1</span></span>
                          <span class='ml-8'><img src="{{ URL::asset('img/icon_About/career_location.png') }}" alt="online-r" width='4%'><span class='small-text'>Phnom Penh</span></span>
                        </div>
                </div>
                </section>
            </div>
            </div>
            <div class="col-md-6">
                <div class='row bg-orange' style="margin-left: 1%;"><h3>INTERNSHIP</h3></div>
                    <div class='row bg-fff'>
                      <section class='bg-ddd'>
                        <div class='row'>
                            <div class='row job_name color-orange'><ul><li>Subscriber Control Engineer Trainee</li></ul></div>
                            <div class='row job_date mr-5'>
                              <p class='small-text t-right d-ib'>Closing date:<br>November 01, 1998</p>
                              <a  data-toggle="modal" data-target="#submit_career" ><img class='f-right d-ib ml-1' src="{{ URL::asset('img/icon_About/career_detail.png') }}" alt="online-r" width='50'></a>
                            </div>
                            <div class='row job_detail ml-4'>
                              <span>
                                <img src="{{ URL::asset('img/icon_About/career_user.png') }}" alt="online-r" width='4%'><span class='small-text'>x 1</span></span>
                              <span class='ml-8'><img src="{{ URL::asset('img/icon_About/career_location.png') }}" alt="online-r" width='4%'><span class='small-text'>Phnom Penh</span></span>
                            </div>
                    </div>
                    </section>

                      <section class='bg-f'>
                        <div class='row'>
                            <div class='row job_name color-orange'><ul><li>Technical Support Trainee</li></ul></div>
                            <div class='row job_date mr-5'>
                              <p class=' small-text t-right d-ib'>Closing date:<br>November 01, 1998</p>
                              <a  data-toggle="modal" data-target="#submit_career" ><img class='f-right d-ib ml-1' src="{{ URL::asset('img/icon_About/career_detail.png') }}" alt="online-r" width='50'></a>
                            </div>
                            <div class='row job_detail ml-4'>
                              <span>
                                <img src="{{ URL::asset('img/icon_About/career_user.png') }}" alt="online-r" width='4%'><span class='small-text'>x 1</span></span>
                              <span class='ml-8'><img src="{{ URL::asset('img/icon_About/career_location.png') }}" alt="online-r" width='4%'><span class='small-text'>Siem Reap</span></span>
                            </div>
                    </div>
                    </section>

                    <section class='bg-ddd'>
                        <div class='row'>
                            <div class='row job_name color-orange'><ul><li>Installation Engineer</li></ul></div>
                            <div class='row job_date mr-5'>
                              <p class=' small-text t-right d-ib'>Closing date:<br>November 01, 1998</p>
                              <a  data-toggle="modal" data-target="#submit_career" ><img class='f-right d-ib ml-1' src="{{ URL::asset('img/icon_About/career_detail.png') }}" alt="online-r" width='50'></a>
                            </div>
                            <div class='row job_detail ml-4'>
                              <span>
                                <img src="{{ URL::asset('img/icon_About/career_user.png') }}" alt="online-r" width='4%'><span class='small-text'>x 1</span></span>
                              <span class='ml-8'><img src="{{ URL::asset('img/icon_About/career_location.png') }}" alt="online-r" width='4%'><span class='small-text'>Phnom Penh</span></span>
                            </div>
                    </div>
                    </section>

                     <section class='bg-f'>
                        <div class='row'>
                            <div class='row job_name color-orange'><ul><li>Installation Trainee</li></ul></div>
                            <div class='row job_date mr-5'>
                              <p class=' small-text t-right d-ib'>Closing date:<br>November 01, 1998</p>
                              <a  data-toggle="modal" data-target="#submit_career" ><img class='f-right d-ib ml-1' src="{{ URL::asset('img/icon_About/career_detail.png') }}" alt="online-r" width='50'></a>
                            </div>
                            <div class='row job_detail ml-4'>
                              <span>
                                <img src="{{ URL::asset('img/icon_About/career_user.png') }}" alt="online-r" width='4%'><span class='small-text'>x 1</span></span>
                              <span class='ml-8'><img src="{{ URL::asset('img/icon_About/career_location.png') }}" alt="online-r" width='4%'><span class='small-text'>Phnom Penh</span></span>
                            </div>
                    </div>
                    </section>

                     <section class='bg-ddd'>
                        <div class='row'>
                            <div class='row job_name color-orange'><ul><li>Customer Service Trainee</li></ul></div>
                            <div class='row job_date mr-5'>
                              <p class=' small-text t-right d-ib'>Closing date:<br>November 01, 1998</p>
                              <a  data-toggle="modal" data-target="#submit_career" ><img class='f-right d-ib ml-1' src="{{ URL::asset('img/icon_About/career_detail.png') }}" alt="online-r" width='50'></a>
                            </div>
                            <div class='row job_detail ml-4'>
                              <span>
                                <img src="{{ URL::asset('img/icon_About/career_user.png') }}" alt="online-r" width='4%'><span class='small-text'>x 1</span></span>
                              <span class='ml-8'><img src="{{ URL::asset('img/icon_About/career_location.png') }}" alt="online-r" width='4%'><span class='small-text'>Phnom Penh</span></span>
                            </div>
                    </div>
                    </section>
                    <section class='bg-f'>
                        <div class='row'>
                            <div class='row job_name color-orange'><ul><li>Human Resource Trainee</li></ul></div>
                            <div class='row job_date mr-5'>
                              <p class='small-text  t-right d-ib'>Closing date:<br>November 01, 1998</p>
                              <a  data-toggle="modal" data-target="#submit_career" ><img class='f-right d-ib ml-1' src="{{ URL::asset('img/icon_About/career_detail.png') }}" alt="online-r" width='50'></a>
                            </div>
                            <div class='row job_detail ml-4'>
                              <span>
                                <img src="{{ URL::asset('img/icon_About/career_user.png') }}" alt="online-r" width='4%'><span class='small-text'>x 1</span></span>
                              <span class='ml-8'><img src="{{ URL::asset('img/icon_About/career_location.png') }}" alt="online-r" width='4%'><span class='small-text'>Phnom Penh</span></span>
                            </div>
                    </div>
                    </section>
                </div>
            </div>
        </div>
      </div>
    </section>
    </div>
    <!-- end tab 1 -->
    <!-- start tab 1 -->
    <div id="socialr" class="tab-pane fade">
      <div class="row"><div class='text-center header-service'><h2 class='header-service-text'>Social Responsibility</h2></div></div>
      <section id="socialrs">
          <div class='row'>
              <div class='container'>
              <div class="col-md-6">
                  <div class='row bg-blue'><h3>UPCOMING EVENT</h3></div>
                  <div class='row bg-fff'>
                    <section class='bg-ddd'>
                      <div class='row'>
                          <div class="col-md-4 d-ib"><img class='d-ib mt-10' src="{{ URL::asset('img/icon_About/social.jpg') }}" alt="online-r" width='100%'></div>
                          <div class="col-md-8 d-ib"><h4>National Career and Productivity Fair 2017</h4>
                              <p>diam nonummy dibh Celebrated cony wor use these smart rooms ham. No waiting in on enjoyed placing it inquiry. <a data-toggle="modal" data-target="#social_element">...more>></a></p>
                              <br>
                              <img class='d-ib' src="{{ URL::asset('img/icon_About/calender.png') }}" alt="online-r" width='10%'> <span>November 01, 1998</span>
                          </div>
                          
                  </div>
                  </section>

                    <section class='bg-f'>
                      <div class='row'>
                          <div class="col-md-4 d-ib"><img class='d-ib mt-10' src="{{ URL::asset('img/icon_About/social.jpg') }}" alt="online-r" width='100%'></div>
                          <div class="col-md-8 d-ib"><h4>National Career and Productivity Fair 2017</h4>
                              <p>diam nonummy dibh Celebrated cony wor use these smart rooms ham. No waiting in on enjoyed placing it inquiry. <a data-toggle="modal" data-target="#social_element">...more>></a></p>
                              <br>
                              <img class='d-ib' src="{{ URL::asset('img/icon_About/calender.png') }}" alt="online-r" width='10%'> <span>November 01, 1998</span>
                          </div>
                  </div>
                  </section>

                  <section class='bg-ddd'>
                      <div class='row'>
                          <div class="col-md-4 d-ib"><img class='d-ib mt-10' src="{{ URL::asset('img/icon_About/social.jpg') }}" alt="online-r" width='100%'></div>
                          <div class="col-md-8 d-ib"><h4>National Career and Productivity Fair 2017</h4>
                              <p>diam nonummy dibh Celebrated cony wor use these smart rooms ham. No waiting in on enjoyed placing it inquiry. <a data-toggle="modal" data-target="#social_element">...more>></a></p>
                              <br>
                              <img class='d-ib' src="{{ URL::asset('img/icon_About/calender.png') }}" alt="online-r" width='10%'> <span>November 01, 1998</span>
                          </div>
                  </div>
                  </section>

              </div>
              </div>

              <div class="col-md-6">
                  <div class='row bg-orange' style="margin-left: 1%;"><h3>EVENT WE DONE</h3></div>
                  <div class='row bg-fff'>
                    <section class='bg-ddd'>
                      <div class='row'>
                          <div class="col-md-4 d-ib"><img class='d-ib mt-10' src="{{ URL::asset('img/icon_About/social.jpg') }}" alt="online-r" width='100%'></div>
                          <div class="col-md-8 d-ib"><h4>National Career and Productivity Fair 2017</h4>
                              <p>diam nonummy dibh Celebrated cony wor use these smart rooms ham. No waiting in on enjoyed placing it inquiry. <a data-toggle="modal" data-target="#social_element">...more>></a></p>
                              <br>
                              <img class='d-ib' src="{{ URL::asset('img/icon_About/calender.png') }}" alt="online-r" width='10%'> <span>November 01, 1998</span>
                          </div>
                  </div>
                  </section>

                    <section class='bg-f'>
                      <div class='row'>
                          <div class="col-md-4 d-ib"><img class='d-ib mt-10' src="{{ URL::asset('img/icon_About/social.jpg') }}" alt="online-r" width='100%'></div>
                          <div class="col-md-8 d-ib"><h4 >National Career and Productivity Fair 2017</h4>
                              <p>diam nonummy dibh Celebrated cony wor use these smart rooms ham. No waiting in on enjoyed placing it inquiry. <a data-toggle="modal" data-target="#social_element">...more>></a></p>
                              <br>
                              <img class='d-ib' src="{{ URL::asset('img/icon_About/calender.png') }}" alt="online-r" width='10%'> <span>November 01, 1998</span>
                          </div>
                  </div>
                  </section>

                  <section class='bg-ddd'>
                      <div class='row'>
                          <div class="col-md-4 d-ib"><img class='d-ib mt-10' src="{{ URL::asset('img/icon_About/social.jpg') }}" alt="online-r" width='100%'></div>
                          <div class="col-md-8 d-ib"><h4>National Career and Productivity Fair 2017</h4>
                              <p>diam nonummy dibh Celebrated cony wor use these smart rooms ham. No waiting in on enjoyed placing it inquiry. <a data-toggle="modal" data-target="#social_element">...more>></a></p>
                              <br>
                              <img class='d-ib' src="{{ URL::asset('img/icon_About/calender.png') }}" alt="online-r" width='10%'> <span>November 01, 1998</span>
                          </div>
                  </div>
                  </section>

              </div>
              </div>
          </div>
        </div>
    </section>
    </div>
    <!-- end tab 1 -->
    <!-- start tab 1 -->
    <div id="peeringpartner" class="tab-pane fade">
     <div class="row"> <div class='text-center header-service'><h2 class='header-service-text'>Peering Partner</h2></div></div>
      <section id="peeringpartners">
        <div class='row'>
          <!-- img slider -->
            <div class="container"> 
              <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel1" data-slide-to="1"></li>
                  <li data-target="#myCarousel1" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="{{ URL::asset('img/icon_About/p1.png') }}" alt="online-r" style="width:100%;">
                  </div>
                  <div class="item">
                    <img src="{{ URL::asset('img/icon_About/p1.png') }}" alt="online-r" style="width:100%;">
                  </div>
                  <div class="item">
                    <img src="{{ URL::asset('img/icon_About/p1.png') }}" alt="online-r" style="width:100%;">
                  </div>
                </div>

                <!-- Left and right controls -->
              </div>
              <!-- outside -->
              <div class='carousel-control-outside'>
                <a class="left control-outside-l carousel-control" href="#myCarousel1" data-slide="prev">
                  <img class='direction-pl' src="{{ URL::asset('img/icon_About/left.png') }}" alt="online-r" width='100' height='520'>
                  <!-- <span class="sr-only">Left</span> -->
                </a>
                <a class="right control-outside-r carousel-control" href="#myCarousel1" data-slide="next">
                  <img  class='direction-pr' src="{{ URL::asset('img/icon_About/right.png') }}" alt="online-r" width='100' height='520'>
                  <!-- <span class="sr-only">Right</span> -->
                </a>
              </div>
              <!--  -->
            </div>
            <!-- end img slider -->
      </div>
      </section>
    </div>
    <!-- end tab 1 -->
    <!-- start tab 1 -->
            <!-- <div class='mb-4 text-center'><a href="">File Here</a></div> -->
<!-- popup -->
<div class="modal fade​​ mt-4" id="pdf" role="dialog">
    <div class="modal-dialog" style="margin-top: 10rem;width: 1200px !important;">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title pop-up-title bold-text">Privacy Statement<img src="{{ URL::asset('img/icon_About/close.png') }}" width="70" alt='search-png' class="close" data-dismiss="modal"></h3>
        </div>

        <div class="modal-body">
        <div class="row">
            <h4 class='text-center color-dblue'>ONLINE Internet Access General Terms and Conditions</h4>
            <div class="text-center">
              <iframe src="https://drive.google.com/file/d/1YxT0tkgvtzq9edGJRkoCWoMn7FGBQcZA/preview" width="90%" height="300"></iframe>
              </iframe>
            </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
<!-- pop-up -->
<div class="modal fade​​ mt-4" id="submit_career" role="dialog">
    <div class="modal-dialog" style="margin-top: 10rem;width: 1200px !important;">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title pop-up-title bold-text">JOB OPPORTUNITY<img src="{{ URL::asset('img/icon_About/close.png') }}" width="70" alt='search-png' class="close" data-dismiss="modal"></h3>
        </div>

        <div class="modal-body">
        <div class="row">
            <h4 class='text-center color-dblue'>Sale Advisor (Sale Corporate)</h4>
            <div class="job_box">
                <h5 class='color-dblue ml-1'>Responsibilities</h5>
                <ul>
                    <li>Control and sell prepaid card (iTop and OTL)</li>
                    <li>Commit to meet the sales target and KPI</li>
                     <li>Describe and explain products and services to customer</li>
                     <li>Prepare quotation for customer</li>
                     <li>Provide sales service to customers </li>
                </ul>
                     <h5 class='color-dblue ml-1'>Requirements:</h5>
                <ul>
                     <li>Male or Female, age 22.30 years old and above</li>
                     <li>Bachelor Degree of Business, Sales & Marketing, IT or relevant qualification</li>
                     <li>Strong knowledge of customer behavior and sale and marketing</li>
                    <li>Strong team work and friendly</li>
                </ul> 
            </div>
        </div>
      </div>
      <div class='modal-footer'>
          <div class="col-md-6 t-left">
              <p class='small-text'>Closing date: November 01, 2017</p>
              <h5>Email: <a href="mailto:jobs@cogetel.com.kh" target="_top">jobs@cogetel.com.kh</a> &#x2758; Tel: 081 30 7878 / 093 315 150 (Working hour)</h5>
          </div>
          <div class="col-md-6 float-right">
              <div class="row">
                <div class=''>
                <input type="submit" class='submit-support' data-toggle="modal" data-target="#apply_job"  value="Apply now">
                </div>
                </div>
          </div>
      </div>
      
    </div>
  </div>
</div>
<!-- pop-up -->
<div class="modal fade​​ mt-4" id="social_element" role="dialog">
    <div class="modal-dialog" style="margin-top: 10rem;width: 1200px !important;">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title pop-up-title bold-text">EVENT WE DONE<img src="{{ URL::asset('img/icon_About/close.png') }}" width="70" alt='search-png' class="close" data-dismiss="modal"></h3>
        </div>

        <div class="modal-body">
        <div class="row">
            <h4 class='text-center color-dblue'>National Career and Productivity Fair 2017</h4>
            <div class='text-center'>
            <div id="myc3" class="carousel slide" data-ride="carousel" style='margin-left:33%'>
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myc3" data-slide-to="0" class="active"></li>
                  <li data-target="#myc3" data-slide-to="1"></li>
                  <li data-target="#myc3" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="{{ URL::asset('img/icon_About/slide_Popup_1.jpg') }}" alt="online-r" style="width:50%;">
                  </div>
                  <div class="item">
                    <img src="{{ URL::asset('img/icon_About/slide_Popup_3.jpg') }}" alt="online-r" style="width:50%;">
                  </div>
                  <div class="item">
                    <img src="{{ URL::asset('img/icon_About/slide_Popup_4.jpg') }}" alt="online-r" style="width:50%;">
                  </div>
                </div>

                <!-- Left and right controls -->
              </div>
              <!-- outside -->
              <div class='carousel-control-outside' style='margin-right:'>
                <a class="left control-outside-l carousel-control" href="#myc3" data-slide="prev">
                  <!-- <img class='direction-pl' src="{{ URL::asset('img/icon_About/left.png') }}" alt="online-r" width='100' height='520'> -->
                  <!-- <span class="sr-only">Left</span> -->
                </a>
                <a class="right control-outside-r carousel-control" href="#myc3" data-slide="next">
                  <!-- <img  class='direction-pr' src="{{ URL::asset('img/icon_About/right.png') }}" alt="online-r" width='100' height='520'> -->
                  <!-- <span class="sr-only">Right</span> -->
                </a>
              </div>
              </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
<!-- end here -->
<!-- apply job -->
<div class="modal fade​​ mt-4" id="apply_job" role="dialog">
    <div class="modal-dialog" style="margin-top: 10rem;width: 1200px !important;">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title pop-up-title bold-text">JOB OPPORTUNITY<img src="{{ URL::asset('img/icon_About/close.png') }}" width="70" alt='search-png' class="close" data-dismiss="modal"></h3>
        </div>

        <div class="modal-body">
        <div class="row">
            <h4 class='text-center color-dblue'>Sale Advisor (Sale Corporate)</h4>
              <div class="row">
                  <div class="col-md-2 col-md-offset-3">
                        <form class='form-group'>
                          <div class="row">
                              <label for="fname" class='label-support'>Full Name *</label>
                              <input type="text" class='form-control input-full' id="fname" name="fname" placeholder="">                            
                          </div>


                          <div class="row">
                              <label for="phone" class='label-support'>Phone Number *</label>
                              <input type="text" class='form-control input-full' id="phone" name="phone" placeholder="">                            
                          </div>

                          <div class="row">
                            
                              <label for="emailinput" class='label-support'>Email *</label>
                              <input type="text" class='form-control input-full' id="emailinput" name="emailinput" placeholder="">
                            
                          </div>
                          
                          <div  class="row">
                              <div class="col-md-6"><input type="file" name="fileToUpload" id="fileToUpload"></div>                           
                          </div>
                        </form>
                  </div>
            </div>
        </div>
      </div>
      <div class='modal-footer'>
              <div class="row text-center">
                <div class=''>
                <input type="submit" class='submit-cv' value="Submit">
                </div>
            </div>
          </div>
      </div>
      
    </div>
  </div>

    <!-- end tab 1 -->
      </div>
    <!-- end content tab -->
  </div>
  <!-- </div></div> -->
</section>
	@else
    <!-- khmer -->
    @endif

@stop
<!-- end content -->
<!-- internal script -->
@section('script')
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
                .aboutusbtn{
                     border-bottom:3px solid orange !important;
                }
  </style>
@stop