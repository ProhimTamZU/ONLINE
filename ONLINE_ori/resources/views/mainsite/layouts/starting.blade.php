 
<!DOCTYPE html>
 <html lang="en" class="no-js">
    <head>
        @include('mainsite.includes.head')
    </head>

<body id="body">
<!-- container section start -->
    <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
        @include('mainsite.includes.nav')
     </header> <!--End of header -->
    <!--main content start-->

    @yield('content')
    <!--main content end-->
    <footer id="footer" class="footer">
        @include('mainsite.includes.footer')
    </footer>
@yield('script')
</body>
</html>
