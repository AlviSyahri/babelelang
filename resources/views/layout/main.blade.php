<!doctype html>
<html class="no-js" lang="">
@include('include.head')


<body>
	 <div class="wrapper-area">
	 	@include('include.header')
	 	@yield('content')
	 	@include('include.footer')


	 </div>
    <!-- Modal Dialog Box End Here-->
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- jquery-->
    <script src="{{url('js/vendor/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
    <!-- Bootstrap js -->
    <script src="{{url('js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!-- Owl Cauosel JS -->
    <script src="{{url('js/owl.carousel.min.js')}}" type="text/javascript"></script>
    <!-- Nivo slider js -->
    <script src="{{url('lib/custom-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
    <script src="{{url('lib/custom-slider/home.js')}}" type="text/javascript"></script>
    <!-- Meanmenu Js -->
    <script src="{{url('js/jquery.meanmenu.min.js')}}" type="text/javascript"></script>
    <!-- WOW JS -->
    <script src="{{url('js/wow.min.js')}}" type="text/javascript"></script>
    <!-- Plugins js -->
    <script src="{{url('js/plugins.js')}}" type="text/javascript"></script>
    <!-- Countdown js -->
    <script src="{{url('js/jquery.countdown.min.js')}}" type="text/javascript"></script>
    <!-- Srollup js -->
    <script src="{{url('js/jquery.scrollUp.min.js')}}" type="text/javascript"></script>
    <!-- Isotope js -->
    <script src="{{url('js/isotope.pkgd.min.js')}}" type="text/javascript"></script>
    <!-- Custom Js -->
    <script src="{{url('js/main.js')}}" type="text/javascript"></script>
</body>

</html>