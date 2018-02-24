<div class="container">
    <div class="navbar-header">
        <!-- responsive nav button -->
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
        </button>
		<!-- /responsive nav button -->
		
		<!-- logo -->
		<h1 class="navbar-brand">
			<a href="/"><img class='brand-logo' alt='online-logo' src="{{ URL::asset('img/icon_Home/ONLINE_Web_icon_home_ONLINE_logo.png')}}" width="143" height="45"></a>
		</h1>
		<!-- /logo -->
    </div>

	<!-- main nav -->
    <nav class="collapse navbar-collapse navbar-right" role="navigation">

        <ul id="" class="nav navbar-nav">
            <li class='nav-content homebtn'><a href="/">Home</a></li>
            <li class='nav-content aboutusbtn'><a href="/aboutus">About Us</a></li>
            <li class='nav-content downloadbtn'><a href="/download">Download</a></li>
            <li class='nav-content ourservicesbtn'><a href="/#service">Our Services</a></li>
            <li class='nav-content supportbtn'><a href="/support">Support</a></li>
            <li class='nav-content contactusbtn'><a href="/contactus">Contact Us</a></li>
            <li class='search-icon'><img class="searchpopup" onclick="myFunction()" src="{{ URL::asset('img/icon_Home/ONLINE_Web_icon_home_search_blue.png') }}" height="30" width="30" alt='search-png'></li>
            <li class='lang_ right10'><img src="{{ URL::asset('img/icon_Home/ONLINE_Web_icon_home_ico_English.png') }}" height="30" width="30" alt='search-png' title='English'  data-toggle='tooltip' data-placement='bottom'></li>
            <li class='lang_ right6'><img src="{{ URL::asset('img/icon_Home/ONLINE_Web_icon_home_ico_Khmer.png') }}" height="30" width="30" alt='search-png' title='ភាសាខ្មែរ'​ data-toggle='tooltip' data-placement='bottom'></li>
            
        </ul>

    </nav>
	<!-- /main nav -->
	
</div>
<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>