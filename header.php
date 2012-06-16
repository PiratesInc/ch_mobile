<!doctype html>
<!-- Conditional comment for mobile ie7 blogs.msdn.com/b/iemobile/ -->
<!--[if IEMobile 7 ]>    <html class="no-js iem7" lang="en"> <![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
  <meta charset="utf-8">

  <title>Chevrolet Mobile</title>
  <meta name="description" content="Chevrolet Mobile">

  <!-- Mobile viewport optimization h5bp.com/ad -->
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width">

  <!-- Home screen icon  Mathias Bynens mathiasbynens.be/notes/touch-icons -->
  <!-- For iPhone 4 with high-resolution Retina display: -->
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/h/apple-touch-icon.png">
  <!-- For first-generation iPad: -->
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/m/apple-touch-icon.png">
  <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
  <link rel="apple-touch-icon-precomposed" href="img/l/apple-touch-icon-precomposed.png">
  <!-- For nokia devices: -->
  <link rel="shortcut icon" href="img/l/apple-touch-icon.png">

  <!-- iOS web app, delete if not needed. https://github.com/h5bp/mobile-boilerplate/issues/94 -->
  <!-- <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black"> -->
  <!-- <script>(function(){var a;if(navigator.platform==="iPad"){a=window.orientation!==90||window.orientation===-90?"img/startup-tablet-landscape.png":"img/startup-tablet-portrait.png"}else{a=window.devicePixelRatio===2?"img/startup-retina.png":"img/startup.png"}document.write('<link rel="apple-touch-startup-image" href="'+a+'"/>')})()</script> -->
  
  <!-- The script prevents links from opening in mobile safari. https://gist.github.com/1042026 -->
  <!-- <script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script> -->
  
	<!-- Mobile IE allows us to activate ClearType technology for smoothing fonts for easy reading -->
	<meta http-equiv="cleartype" content="on">
	
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="style.css">
	
	<!-- Modernizr -->
	<script src="js/libs/modernizr-2.0.6.min.js"></script>
	
	
		
	<!-- Awesome jQuery eyecandy -->
	<script src="js/libs/jquery-1.7.1.min.js"></script>
	<script type="text/javascript">
	    $(document).bind("mobileinit", function(){
		$.mobile.loadingMessage = false;
		$.mobile.ajaxEnabled = false;
		$.mobile.verticalDistanceThreshold = '75px'
		$.mobile.horizontalDistanceThreshold = '15px'
	    });
	</script>
	<script src="js/libs/jquery.mobile-1.1.0.js"></script>
	<script src="js/libs/jquery.flexslider-min.js"></script>
	<script type="text/javascript">
	  $(document).ready(function(){
	      $('.flexslider').flexslider();
	      $('.showroom dt a').live('tap' ,function(e){
		e.preventDefault();
		if($(this).parent().parent().hasClass('active')){
		  $('.showroom dd').slideUp();
		  $(this).parent().parent().removeClass('active');
		} else {
		  $('.showroom dd').slideUp();
		  $('.showroom dd').addClass('hidden');
		  $('.showroom dl').removeClass('active');
		  $(this).parent().parent().addClass('active');
		  $(this).parent().next().slideDown();
		  $(this).parent().next().removeClass('hidden')
		}
		  
	      });
	      $('.desplegable').bind('tap', function(e) {
		  if($(this).parent().css('bottom') == '0px'){
		    $(this).parent().animate({bottom: '-250px'});
		  } else {
		    $(this).parent().animate({bottom: '0px'});  
		  }
	       });
	  });
	</script>

  
</head>

<body>

	<div id="container" data-role="page">
	
		<header data-role="header">
			<h1><a href="index.php" title="Chevrolet Mobile"><img src="img/chevrolet.png" alt="Chevrolet" /></a></h1>
			<nav>
				<ul>
					<li><a data-ajax="false" href="showroom.php" title="Showroom">Showroom</a></li>
					<li><a data-ajax="false" href="concesionarios.php" title="Concesionarios">Concesionarios</a></li>
					<li><a data-ajax="false" href="info.php" title="Más Información">Más Información</a></li>
				</ul>
			</nav>
		</header>
		
		
		
		<div id="main" data-role="content">