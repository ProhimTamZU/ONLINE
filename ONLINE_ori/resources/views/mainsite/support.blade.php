@extends('mainsite.layouts.starting')

@section('content')
<section id='support'>
  <div class="row">
  <ul class="nav nav-tabs">
    <li class="active tab-each pl-plus-spp"><a href="#feedback" data-toggle="tab"><img src="{{ URL::asset('img/icon_Support/1.png') }}" height="65" alt='search-png'></a></li>
    <li class="tab-each"><a href="#faq" data-toggle="tab"><img src="{{ URL::asset('img/icon_Support/ii.png') }}" height="65" alt='search-png'></a></li>
    <li class="tab-each"><a href="#none" data-toggle="tab"><img src="{{ URL::asset('img/icon_Support/3.png') }}" height="65" alt='search-png'></a></li>
  </ul>

<!-- tab coperate -->
  <div class="tab-content">
    <div id="feedback" class="tab-pane fade in active">
    <div class='text-center header-service'><h2 class='header-service-text'>Feedback</h2></div>      
      <section id="feedback">
        <div class="row inner-top-xs reset-xs">
            <div class="col-md-6 inner-top-xs">
              <img src="{{ URL::asset('img/icon_Support/support_feedback.png') }}" width="700" alt='search-png'>
            </div>

            <div class="col-md-6 inner-top-xs">
              <div class="container">
                  <form class='form-group'>
                    <div class="row">
                      <div class='spp-input-inline'>
                        <label for="fname" class='label-support'>Full Name *</label>
                        <input type="text" class='form-control input-half' id="fname" name="fname" placeholder="">
                      </div>
                      <div class='spp-input-inline'>
                        <label for="lname" class='label-support'>Phone Number *</label>
                        <input type="text" class='input-half form-control' id="lname" name="lastname" placeholder="">
                      </div>
                    </div>

                    <div class="row">
                      
                        <label for="emailinput" class='label-support'>Email *</label>
                        <input type="text" class='form-control input-full' id="emailinput" name="emailinput" placeholder="">
                      
                    </div>

                    <div class="row">
                      <label for="email" class='label-support'>Any question that you want we help *</label>
                      <textarea id="subject" class='form-control input-full content-slider' name="subject" placeholder="" style="height:150px"></textarea>
                    </div>
                    <div class="row">
                      <div class='input-full'>
                      <input type="submit" class='submit-support' data-toggle="modal" data-target="#success_submit"  value="Submit">
                      </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
      </section>
    </div>

    <div id="faq" class="tab-pane fade">
      <!-- <div class='text-center header-service'><h2 class='header-service-text'>FAQ</h2></div>    -->
      <section id="faqs">
        <div class='row'>
            <img src="{{ URL::asset('img/icon_Support/faq_img.png') }}" width="1400" alt='search-png'>
        </div>
        <div class="row inner-top-xs reset-xs">
            <div class="col-md-6 inner-top-xs">
                    <div class='head-q'>    
                      <img class='q-img' src="{{ URL::asset('img/icon_Support/question.png') }}" width="100" alt='search-png'>
                      <h4 class='q-h4 color-orange' >Questions</h4>
                    </div>
<!-- 
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <div class='question-part content-slider'>
                    <ul class="list-group faq">
                      <li><button class='each-q' id="show1"> &#9900; How does Online guarentee its service?</button></li>
                      <li><button class='each-q' id="show2"> &#9900; What identification documents do I need for signing up?</button></li>
                      <li><button class='each-q' id="show3"> &#9900; Where is the Online office?</button></li>
                      <li><button class='each-q' id="show4"> &#9900; How long does it take to sign-up an account?</button></li>
                      <li><button class='each-q' id="show5"> &#9900; If I am unsure about the quality of my phone line or compability of my computer or modem, can I test the service before I sign-up?</button></li>
                    </ul>
                  </div>
                </div> -->
                <!-- a -->
            </div>

              <div class="col-md-6 inner-top-xs">
                  <div class='head-a'>    
                      <h4 class='a-h4 color-orange' >Answers</h4>
                      <img class='a-img' src="{{ URL::asset('img/icon_Support/reply.png') }}" width="100" alt='search-png'>
                  </div>

<!--                   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class='answer-part' class='content-slider'>
                        <p id="a1" style='margin:10px;'>Once you sign-up with us, you will receive our Terms & Conditions of Internet Use where you will find a detail account of our service guarantee. For big businesses, we provide a Service Level Agreement.</p>
                        <p id="a2" style='display:none;'>For individual/personal account, you need to present a valid ID and / or passport plus proof of residential address. For organization/business, please bring copies of registration documents and VAT certificate</p>
                        <p id="a3" style='display:none;'>Check: Contact Us.</p>
                        <p id="a4" style='display:none;'>Once you have filled out your application form, presented the required identification documents, and paid the first month's subscription and recommended deposit, your account is created on the spot. The whole process only takes a matter of minutes. As for the installation, it generally depends on the type of connection you will use – for WiMAX, at least 3 day upon signing-up; ADSL, takes a 3 days; Fiber Optic takes also at least 3 days but it depends on your location.</p>
                        <p id="a5" style='display:none;'>Certainly. Online offers a test facility which enables you to test your computer configuration, telephone line and modem before you sign-up for the service. Just ask our friendly staff for assistance.</p>
                      <script type="text/javascript"> 
                        $(document).ready(function(){
                          $("#show1").click(function(){
                              $("#a1").show();
                              $("#a2").hide();
                              $("#a3").hide();
                              $("#a4").hide();
                              $("#a5").hide();
                          });
                          $("#show2").click(function(){
                              $("#a1").hide();
                              $("#a2").show();
                              $("#a3").hide();
                              $("#a4").hide();
                              $("#a5").hide();
                          });
                          $("#show3").click(function(){
                              $("#a1").hide();
                              $("#a2").hide();
                              $("#a3").show();
                              $("#a4").hide();
                              $("#a5").hide();
                          });
                          $("#show4").click(function(){
                              $("#a1").hide();
                              $("#a2").hide();
                              $("#a3").hide();
                              $("#a4").show();
                              $("#a5").hide();
                          });
                          $("#show5").click(function(){
                              $("#a1").hide();
                              $("#a2").hide();
                              $("#a3").hide();
                              $("#a4").hide();
                              $("#a5").show();
                          });
                        });
                      </script>
                  
                    </div>
                </div> -->
            </div>
            </div>
            <div class="row inner-top-xs reset-xs">
              <div class='container'>
                <div class="panel-group">
                  <div class="panel panel-default">
                    <!-- one -->
                    <div class="panel-heading">
                      <h4 class="panel-title text-center">
                        <a data-toggle="collapse" href="#collapse1">&#9900; How does Online guarentee its service?</a>
                      </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                      <div class="panel-body">Once you sign-up with us, you will receive our Terms & Conditions of Internet Use where you will find a detail account of our service guarantee. For big businesses, we provide a Service Level Agreement.</div>
                    </div>
                    <!-- tvo -->
                  <div class="panel-heading">
                      <h4 class="panel-title text-center">
                        <a data-toggle="collapse" href="#cl3">&#9900; What identification documents do I need for signing up?</a>
                      </h4>
                    </div>
                    <div id="cl3" class="panel-collapse collapse">
                      <div class="panel-body">For individual/personal account, you need to present a valid ID and / or passport plus proof of residential address. For organization/business, please bring copies of registration documents and VAT certificate</div>
                    </div>
                    <!--  -->
                                      <div class="panel-heading">
                      <h4 class="panel-title text-center">
                        <a data-toggle="collapse" href="#cl4">&#9900; Where is the Online office?</a>
                      </h4>
                    </div>
                    <div id="cl4" class="panel-collapse collapse">
                      <div class="panel-body">Check: <a href="\contactus">Contact Us</a>.</div>
                    </div>
                    <!--  -->
                                      <div class="panel-heading">
                      <h4 class="panel-title text-center">
                        <a data-toggle="collapse" href="#cl5">&#9900; How long does it take to sign-up an account?</a>
                      </h4>
                    </div>
                    <div id="cl5" class="panel-collapse collapse">
                      <div class="panel-body">Once you have filled out your application form, presented the required identification documents, and paid the first month's subscription and recommended deposit, your account is created on the spot. The whole process only takes a matter of minutes. As for the installation, it generally depends on the type of connection you will use – for WiMAX, at least 3 day upon signing-up; ADSL, takes a 3 days; Fiber Optic takes also at least 3 days but it depends on your location.</div>
                    </div>
                    <!--  -->
                                      <div class="panel-heading">
                      <h4 class="panel-title text-center">
                        <a data-toggle="collapse" href="#cl6">&#9900; If I am unsure about the quality of my phone line or compability of my computer or modem, can I test the service before I sign-up?</a>
                      </h4>
                    </div>
                    <div id="cl6" class="panel-collapse collapse">
                      <div class="panel-body">Certainly. Online offers a test facility which enables you to test your computer configuration, telephone line and modem before you sign-up for the service. Just ask our friendly staff for assistance.cl6</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </section>
    </div>
    <!-- end faq -->
</div>
</div>
<div class="modal fade​​ mt-4" id="success_submit" role="dialog">
    <div class="modal-dialog" style="margin-top: 10rem;">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <img src="{{ URL::asset('img/icon_About/close.png') }}" width="70" alt='search-png' class="close" data-dismiss="modal">
        </div>

        <div class="modal-body">
        <div class="row">
         <div class="text-center bodypopup_">
            <img src="{{ URL::asset('img/icon_Support/success.png') }}" width="70" alt='search-png'>
            <h3>Thank You</h3>
            <p>The form was submitted successfully.</p>
            <p>We will feedback to your email soon.</p>
        </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
</section>
@stop
@section('script')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
                .supportbtn{
                     border-bottom:3px solid orange !important;
                }
  </style>
@stop