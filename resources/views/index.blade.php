<!DOCTYPE html>
<html class='no-js' >
    
	<head>
        @include('layouts.meta')
		<title>Gino King Resume</title>
		<!--[if lt IE 9]>
		  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		@include('layouts.css')
	</head>
	<body>
		<!--=============================================================================
			Preloader
		===============================================================================-->
		<div id='preloader' >
			<div class='loader' >
				<img src='/images/load.gif' alt='symp' >
			</div>
		</div>
		<div id='wrapper' >
			@include('front')
			@include('about')
			@include('resume')
			@include('portfolio')
			@include('blog')
			<!--close button-->
			<div class='close-btn' >
				<span></span>
				<span></span>
			</div>
		</div>

		@include('layouts.js')
	</body>
</html>