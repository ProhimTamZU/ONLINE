@extends('mainsite.layouts.starting')
@section('content')
    @if (App::getLocale() == 'en')
    <div id="preloader">
            <div class="loder-box">
                <div class="battery"></div>
            </div>
        </div>
        <main class="site-content" role="main">
		
        <!--
        Home Slider
        ==================================== -->
	<!-- <div class='container'>	 -->
		<section id="home">
            <!-- <div class="container"> -->
              <!-- <h2>Carousel Example</h2>   -->
              <div id="myCarousel3" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel3" data-slide-to="1"></li>
                  <li data-target="#myCarousel3" data-slide-to="2"></li>
                  <li data-target="#myCarousel3" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="img/slider/home_slide01.jpg" alt="slide slide" style="width:100%;">
                  </div>

                  <div class="item">
                    <img src="img/slider/home_slide02.jpg" alt="slide" style="width:100%;">
                  </div>
                
                  <div class="item">
                    <img src="img/slider/home_slide03.jpg" alt="New slide" style="width:100%;">
                  </div>
                <div class="item">
                    <img src="img/slider/home_slide04.jpg" alt="New slide" style="width:100%;">
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel3" data-slide="prev">
                  <!-- <i class="fa fa-chevron-left"></i> -->
                  <!-- <span class="fa fa-chevron-circle-left" aria-hidden="true"></span> -->
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel3" data-slide="next">
                  <!-- <i class="fa fa-chevron-right"></i> -->
                  <!-- <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> -->

                  <span class="sr-only">Next</span>
                </a>
              </div>
            <!-- </div> -->

		</section>
        
        <!-- 
        Our Service start here -  3rd Year ZAMAN  -->
        <section id="service">
          <section id="offer_area">
          <div class="container">
            <div class="row">

                        <form class="form-group">
                          <div class="text-xs-center search-customer-service-text col-xs-6 col-sm-3">
                            <label class='offer_label' for="findoffersinmyarea">Find offers in my area</label></div>
                          <div class="text-xs-center search-customer-service col-xs-6 col-sm-3">
                            <input class="input_offer" type="text" name="street" id="street" placeholder='Street*' required=''></div>

                          <div class="text-xs-center search-customer-service col-xs-6">
                            <select class='round'>
                              <option selected="selected">Sangkat</option>
                              <option value="Sangkat A">Sangkat A</option>
                              <option value="Sangkat B">Sangkat B</option>
                              <option value="Sangkat C">Sangkat C</option>
                            </select>
                            <select class='round'>
                              <option selected="selected">Khan</option>
                              <option value="Khan...">Khan...</option>
                              <option value="Khan...">Khan...</option>
                              <option value="Khan...">Khan...</option>
                            </select>

                          <!-- <div class="text-xs-center search-customer-service col-xs-6 col-sm-3"> -->
                            <select class='round'>
                              <option selected="selected">City</option>
                              <option value="City...">City...</option>
                              <option value="City...">City...</option>
                              <option value="City...">City...</option>
                            </select>
                            <input class="input_offer_submit" type="submit" name="submit" value='submit'></div>  
                        
                    </form>
                <!-- </div> -->
                </div>
                </div>
              </section>
            <!-- end -->
                <div class="container">
                    <div class="row mt-30">
                        <div class="sec-title text-center">
                            <h2 class="wow animated bounceInLeft" style='margin-top:0px !important;'>Our Services</h2>
                            <p class="wow animated bounceInRight">
                            ONLINE offers you the best available packages to fulfil your needs, from special <br> designed packages for
                            you our resident to international dedicated connections. 
                            <p class="i-section-subtitle"><i>Click on icon below for more infomation >></i></p>
                            </p>    
                            </p>
                        </div>
                        <div class="our-service-cat col-md-3 col-sm-6 col-xs-12 pb-3 pr-3 pl-3 pt-3 text-center wow animated zoomIn" >
                            <div class="service-item">
                                <div class="service-icon">
                                    <img src="img/icon_HOME/ONLINE_Web_icon_home_service_internet.png" height="105">
                                </div>
                                <h3 class='color-formal'> INTERNET</h3>
                                <img src="img/icon_HOME/44.png" height="10">
                                <p>We have many packages of internet service suitable to the actual needs of the public and private sectors
                            such as Ministries, Organizations,<a href="/ourservices/internet"><img class='see_more_btn' src="img/icon_Our_Service/see_more.png" height="30"></a></p>
                            </div>
                        </div>
                    
                        <div class="our-service-cat col-md-3 col-sm-6 col-xs-12 text-center pb-3 pr-3 pl-3 pt-3 wow animated zoomIn" data-wow-delay="0.3s">
                            <div class="service-item">
                                <div class="service-icon">
                                    <img src="img/icon_HOME/ONLINE_Web_icon_home_service_solution.png" height="105">
                                </div>
                                <h3 class='color-formal'>BUSINESS SOLUTION</h3>
                                <img src="img/icon_HOME/44.png" height="10">

                                <p>Business Solutions offer hotels and serviced apartments to be equipped with well-organized 
                        infrastructure and high speed <br><br><a href="/ourservices/businesssolution"><img class='see_more_btn' src="img/icon_Our_Service/see_more.png" height="30"></a></p>
                            </div>
                        </div>
                    
                        <div class="our-service-cat col-md-3 col-sm-6 col-xs-12 text-center pb-3 pr-3 pl-3 pt-3 wow animated zoomIn" data-wow-delay="0.6s">
                            <div class="service-item">
                                <div class="service-icon">
                                    <img src="img/icon_HOME/ONLINE_Web_icon_home_service_link.png" height="105">
                                </div>
                                <h3 class='color-formal'>CONNECTION</h3>
                                <img src="img/icon_HOME/44.png" height="10">

                                <p>We have many packages of internet service suitable to the actual needs of the public and private sectors
                            such as Ministries, Organizations, <a href="/ourservices/connection"><img class='see_more_btn' src="img/icon_Our_Service/see_more.png" height="30"></a></p>
                            </div>
                        </div>
                    
                        <div class="our-service-cat col-md-3 col-sm-6 col-xs-12 text-center pb-3 pr-3 pl-3 pt-3 wow animated zoomIn" data-wow-delay="0.9s" >
                            <div class="service-item">
                                <div class="service-icon">
                                    <img src="img/icon_HOME/ONLINE_Web_icon_home_service_solution.png" height="105">
                                </div>
                                
                                <h3 class='color-formal'>SERVER CENTER</h3>
                                <img src="img/icon_HOME/44.png" height="10">

                                <p>We have many packages of internet service suitable to the actual needs of the public and private sectors
                            such as Ministries, Organizations,<a href="/ourservices/servercenter"><img class='see_more_btn' src="img/icon_Our_Service/see_more.png" height="30"></a></p>                          
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
        <!-- </div> -->
            <!-- end Service section -->
            <!-- end pop -->
@else
    <!-- khmer -->
@endif
<!-- end content -->
@stop

<!-- internal script -->
@section('script')
@stop