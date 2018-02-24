@extends('mainsite.layouts.starting')
@section('content')
    @if (App::getLocale() == 'en')
    <section id='contactuss'>
    	<div class='container'>
    	<div class="row">
				<div class="col-md-8 ">
					<img src="{{ URL::asset('img/icon_Contactus/map_no_anime.png') }}" width="600" alt='search-png' style='margin: 5rem 15rem;'>
				</div>
			<div class="col-md-4">
				<div class='contactus-brand-container'>
				    <h4 class='branch-main'>PHNOM PENH</h4>  
				    <button class='online-each-branch' data-toggle="modal" data-target="#officeHead">
				    	Phnom Penh Head Office
				    </button>
				    <button class='online-each-branch' data-toggle="modal" data-target="#officeInd">
				    	Independance Monument Branch (IM)
				    </button>
				    <button class='online-each-branch' data-toggle="modal" data-target="#officeAtt">
				    	Attwood Branch 
				    </button>
				</div>

				<div class='contactus-brand-container'>
				    <h4 class='branch-main'>PROVINCES</h4>

				    <button class='online-each-branch' data-toggle="modal" data-target="#officeSih">
				    	Sihaknoukville Branch
				    </button>
				    <button class='online-each-branch' data-toggle="modal" data-target="#officeSr">
				    	Siem Reap Branch
				    </button>
				    <button class='online-each-branch' data-toggle="modal" data-target="#officeBtt">
				    	Battambang Branch 
				    </button>
				    <button class='online-each-branch' data-toggle="modal" data-target="#officePop">
				    	Poi Pet Branch 
				    </button>
				    <button class='online-each-branch' data-toggle="modal" data-target="#officeBv">
				    	Bavet Branch
				    </button>
				</div>
			</div>
		</div>
		</div>

	<!-- pop up div -->
<div class="modal fade​​ mt-4" id="officeHead" role="dialog">
    <div class="modal-dialog" style="margin-top: 10rem;width: 1200px !important;">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title pop-up-title">Phnom Penh Head Office<img src="{{ URL::asset('img/icon_About/close.png') }}" width="70" alt='search-png' class="close" data-dismiss="modal"></h3>
        </div>

        <div class="modal-body">
        <div class="row">
        	<div class="col-md-4"><img src="{{ URL::asset('img/icon_Contactus/head_map.jpg') }}" width="400" alt='search-png'></div>
        	<div class="col-md-4">
        		<p class='detail-branch top-d'><img src="{{ URL::asset('img/icon_Contactus/location.png') }}" width="30" alt='search-png'> 
        			#60, Monivong Boulevard, Sangkat Wat Phnom, Khan Doun Penh, Phnom Penh</p>
    			<p class='detail-branch'><img src="{{ URL::asset('img/icon_Contactus/phone.png') }}" width="30" alt='search-png'> 
    				Tel: (+855) 23 72 72 72<br>
					Fax: (855) 23 72 77 77</p>
				<p class='detail-branch'><img src="{{ URL::asset('img/icon_Contactus/mail.png') }}" width="30" alt='search-png'> 
    				sales@online.com.kh</p>
    			<p class='detail-branch'><img src="{{ URL::asset('img/icon_Contactus/site.png') }}" width="30" alt='search-png'> 
    				www.online.com.kh</p>

        	</div>
        	<div class="col-md-4"><img class='branchimg_' src="{{ URL::asset('img/icon_Contactus/head.png') }}" width="200" alt='search-png'></div>
        	
        </div>
      </div>
      
    </div>
  </div>
</div>
	<!-- end -->
<div class="modal fade​​ mt-4" id="officeInd" role="dialog">
    <div class="modal-dialog" style="margin-top: 10rem;width: 1200px !important;">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title pop-up-title">Independance Monument Branch (IM)<img src="{{ URL::asset('img/icon_About/close.png') }}" width="70" alt='search-png' class="close" data-dismiss="modal"></h3>
        </div>

        <div class="modal-body">
        <div class="row">
        	<div class="col-md-4"><img src="{{ URL::asset('img/icon_Contactus/head_map.jpg') }}" width="400" alt='search-png'></div>
        	<div class="col-md-4">
        		<p class='detail-branch top-d'><img src="{{ URL::asset('img/icon_Contactus/location.png') }}" width="30" alt='search-png'> 
        			No. 25, Street Preah Soramret, Khan Daun Penh, Phnom Penh</p>
    			<p class='detail-branch'><img src="{{ URL::asset('img/icon_Contactus/phone.png') }}" width="30" alt='search-png'> 
    				Tel: (+855) 23 72 72 72</p>
				<p class='detail-branch'><img src="{{ URL::asset('img/icon_Contactus/mail.png') }}" width="30" alt='search-png'> 
    				sales@online.com.kh</p>
    			<p class='detail-branch'><img src="{{ URL::asset('img/icon_Contactus/site.png') }}" width="30" alt='search-png'> 
    				www.online.com.kh</p>

        	</div>
        	<div class="col-md-4"><img class='branchimg_' src="{{ URL::asset('img/icon_Contactus/ind.png') }}" width="200" alt='search-png'></div>
        	
        </div>
      </div>
      
    </div>
  </div>
</div>
<!-- end -->
<div class="modal fade​​ mt-4" id="officeAtt" role="dialog">
    <div class="modal-dialog" style="margin-top: 10rem;width: 1200px !important;">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title pop-up-title">Attwood Branch<img src="{{ URL::asset('img/icon_About/close.png') }}" width="70" alt='search-png' class="close" data-dismiss="modal"></h3>
        </div>

        <div class="modal-body">
        <div class="row">
        	<div class="col-md-4"><img src="{{ URL::asset('img/icon_Contactus/head_map.jpg') }}" width="400" alt='search-png'></div>
        	<div class="col-md-4">
        		<p class='detail-branch top-d'><img src="{{ URL::asset('img/icon_Contactus/location.png') }}" width="30" alt='search-png'> 
        			Attwood Building, Russian Blvd, Sangkat Tuek Thla, Khan Sen Sok, Phnom Penh.</p>
    			<p class='detail-branch'><img src="{{ URL::asset('img/icon_Contactus/phone.png') }}" width="30" alt='search-png'> 
    				Tel: (+855) 23 72 72 72<br>
					Fax: (855) 23 72 77 77</p>
				<p class='detail-branch'><img src="{{ URL::asset('img/icon_Contactus/mail.png') }}" width="30" alt='search-png'> 
    				sales@online.com.kh</p>
    			<p class='detail-branch'><img src="{{ URL::asset('img/icon_Contactus/site.png') }}" width="30" alt='search-png'> 
    				www.online.com.kh</p>

        	</div>
        	<div class="col-md-4"><img class='branchimg_' src="{{ URL::asset('img/icon_Contactus/att.png') }}" width="200" alt='search-png'></div>
        	
        </div>
      </div>
      
    </div>
  </div>
</div>
<!-- end -->
<div class="modal fade​​ mt-4" id="officeSih" role="dialog">
    <div class="modal-dialog" style="margin-top: 10rem;width: 1200px !important;">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title pop-up-title">Sihaknoukville Branch<img src="{{ URL::asset('img/icon_About/close.png') }}" width="70" alt='search-png' class="close" data-dismiss="modal"></h3>
        </div>

        <div class="modal-body">
        <div class="row">
        	<div class="col-md-4"><img src="{{ URL::asset('img/icon_Contactus/head_map.jpg') }}" width="400" alt='search-png'></div>
        	<div class="col-md-4">
        		<p class='detail-branch top-d'><img src="{{ URL::asset('img/icon_Contactus/location.png') }}" width="30" alt='search-png'> 
        			No.240AB, Ekareach (St.), Sangkat 2, Sihanouk City, Preah Sihanouk Province, Cambodia</p>
    			<p class='detail-branch'><img src="{{ URL::asset('img/icon_Contactus/phone.png') }}" width="30" alt='search-png'> 
    				Tel: (+855) 34 93 54 44<br>Fax: (+855) 34 93 54 45</p>
				<p class='detail-branch'><img src="{{ URL::asset('img/icon_Contactus/mail.png') }}" width="30" alt='search-png'> 
    				sales@online.com.kh</p>
    			<p class='detail-branch'><img src="{{ URL::asset('img/icon_Contactus/site.png') }}" width="30" alt='search-png'> 
    				www.online.com.kh</p>

        	</div>
        	<div class="col-md-4"><img class='branchimg_' src="{{ URL::asset('img/icon_Contactus/sih.png') }}" width="200" alt='search-png'></div>
        	
        </div>
      </div>
      
    </div>
  </div>
</div>
<!-- end -->
<div class="modal fade​​ mt-4" id="officeSr" role="dialog">
    <div class="modal-dialog" style="margin-top: 10rem;width: 1200px !important;">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title pop-up-title">Siem Reap Branch<img src="{{ URL::asset('img/icon_About/close.png') }}" width="70" alt='search-png' class="close" data-dismiss="modal"></h3>
        </div>

        <div class="modal-body">
        <div class="row">
        	<div class="col-md-4"><img src="{{ URL::asset('img/icon_Contactus/head_map.jpg') }}" width="400" alt='search-png'></div>
        	<div class="col-md-4">
        		<p class='detail-branch top-d'><img src="{{ URL::asset('img/icon_Contactus/location.png') }}" width="30" alt='search-png'> 
        			#8-9, Modul 2 village, Svay Dungkum Commune, Siem Reap, Cambodia</p>
    			<p class='detail-branch'><img src="{{ URL::asset('img/icon_Contactus/phone.png') }}" width="30" alt='search-png'> 
    				Tel: (+855) 63 96 72 72<br>Fax: (+855) 63 96 71 11</p>
				<p class='detail-branch'><img src="{{ URL::asset('img/icon_Contactus/mail.png') }}" width="30" alt='search-png'> 
    				sales@online.com.kh</p>
    			<p class='detail-branch'><img src="{{ URL::asset('img/icon_Contactus/site.png') }}" width="30" alt='search-png'> 
    				www.online.com.kh</p>

        	</div>
        	<div class="col-md-4"><img class='branchimg_' src="{{ URL::asset('img/icon_Contactus/sr.png') }}" width="200" alt='search-png'></div>
        	
        </div>
      </div>
      
    </div>
  </div>
</div>
<!-- end -->
<div class="modal fade​​ mt-4" id="officeBtt" role="dialog">
    <div class="modal-dialog" style="margin-top: 10rem;width: 1200px !important;">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title pop-up-title">Battambang Branch<img src="{{ URL::asset('img/icon_About/close.png') }}" width="70" alt='search-png' class="close" data-dismiss="modal"></h3>
        </div>

        <div class="modal-body">
        <div class="row">
        	<div class="col-md-4"><img src="{{ URL::asset('img/icon_Contactus/head_map.jpg') }}" width="400" alt='search-png'></div>
        	<div class="col-md-4">
        		<p class='detail-branch top-d'><img src="{{ URL::asset('img/icon_Contactus/location.png') }}" width="30" alt='search-png'> 
        			#85, Street 1, Sangkat Svay Poa, Battambang, Cambodia</p>
    			<p class='detail-branch'><img src="{{ URL::asset('img/icon_Contactus/phone.png') }}" width="30" alt='search-png'> 
    				Tel: (+855) 53 73 16 78</p>
				<p class='detail-branch'><img src="{{ URL::asset('img/icon_Contactus/mail.png') }}" width="30" alt='search-png'> 
    				sales@online.com.kh</p>
    			<p class='detail-branch'><img src="{{ URL::asset('img/icon_Contactus/site.png') }}" width="30" alt='search-png'> 
    				www.online.com.kh</p>

        	</div>
        	<div class="col-md-4"><img class='branchimg_' src="{{ URL::asset('img/icon_Contactus/btt.png') }}" width="200" alt='search-png'></div>
        	
        </div>
      </div>
      
    </div>
  </div>
</div>
<!-- end -->
<div class="modal fade​​ mt-4" id="officePop" role="dialog">
    <div class="modal-dialog" style="margin-top: 10rem;width: 1200px !important;">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title pop-up-title">Poipet Branch<img src="{{ URL::asset('img/icon_About/close.png') }}" width="70" alt='search-png' class="close" data-dismiss="modal"></h3>
        </div>

        <div class="modal-body">
        <div class="row">
        	<div class="col-md-4"><img src="{{ URL::asset('img/icon_Contactus/head_map.jpg') }}" width="400" alt='search-png'></div>
        	<div class="col-md-4">
        		<p class='detail-branch top-d'><img src="{{ URL::asset('img/icon_Contactus/location.png') }}" width="30" alt='search-png'> 
        			National road 5, Ou Chrov Village, Sangkat Poi Pet, Poi Pet City, Banteay Meanchey Province</p>
    			<p class='detail-branch'><img src="{{ URL::asset('img/icon_Contactus/phone.png') }}" width="30" alt='search-png'> 
    				Tel: (+855) 23 72 72 72</p>
				<p class='detail-branch'><img src="{{ URL::asset('img/icon_Contactus/mail.png') }}" width="30" alt='search-png'> 
    				sales@online.com.kh</p>
    			<p class='detail-branch'><img src="{{ URL::asset('img/icon_Contactus/site.png') }}" width="30" alt='search-png'> 
    				www.online.com.kh</p>

        	</div>
        	<div class="col-md-4"><img class='branchimg_' src="{{ URL::asset('img/icon_Contactus/pop.png') }}" width="200" alt='search-png'></div>
        	
        </div>
      </div>
      
    </div>
  </div>
</div>
<!-- end -->
<div class="modal fade​​ mt-4" id="officeBv" role="dialog">
    <div class="modal-dialog" style="margin-top: 10rem;width: 1200px !important;">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title pop-up-title">Bavet Branch<img src="{{ URL::asset('img/icon_About/close.png') }}" width="70" alt='search-png' class="close" data-dismiss="modal"></h3>
        </div>

        <div class="modal-body">
        <div class="row">
        	<div class="col-md-4"><img src="{{ URL::asset('img/icon_Contactus/head_map.jpg') }}" width="400" alt='search-png'></div>
        	<div class="col-md-4">
        		<p class='detail-branch top-d'><img src="{{ URL::asset('img/icon_Contactus/location.png') }}" width="30" alt='search-png'> 
        			National Road 1, Sangkat Bavet, Krong Barvet, Svay Rieng Province</p>
    			<p class='detail-branch'><img src="{{ URL::asset('img/icon_Contactus/phone.png') }}" width="30" alt='search-png'> 
    				Tel: (+855) 23 72 72 72</p>
				<p class='detail-branch'><img src="{{ URL::asset('img/icon_Contactus/mail.png') }}" width="30" alt='search-png'> 
    				sales@online.com.kh</p>
    			<p class='detail-branch'><img src="{{ URL::asset('img/icon_Contactus/site.png') }}" width="30" alt='search-png'> 
    				www.online.com.kh</p>

        	</div>
        	<div class="col-md-4"><img class='branchimg_' src="{{ URL::asset('img/icon_Contactus/bv.png') }}" width="200" alt='search-png'></div>
        	
        </div>
      </div>
      
    </div>
  </div>
</div>
	</section>

    @endif

@stop
<!-- end content -->
<!-- internal script -->
@section('script')
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <style type="text/css">
                .contactusbtn{
                     border-bottom:3px solid orange !important;
                }
  </style>
@stop