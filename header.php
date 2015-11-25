<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width" />
	<title>Site title</title>
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/jquery.browser.min.js" type="text/javascript"></script>
	<script src="js/selectivizr-min.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" media="all" />
	<script src="fancybox/jquery.fancybox.js" type="text/javascript"></script>
	<script src="js/modernizr.js" type="text/javascript"></script>
	<script src="js/jquery.watermark.min.js" type="text/javascript"></script>
	<script src="js/jquery.selectBox.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="css/slick.css" media="all" />
	<script src="js/slick.js" type="text/javascript"></script>
	<!-- remove Files -->
	<script src="develop/autocssrenew.js" type="text/javascript"></script>
	<!-- remove Files -->	
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
	<script src="js/scr.js" type="text/javascript"></script>

	<!--[if lt IE 9]>
		<script>
		document.createElement('header');
		document.createElement('nav');
		document.createElement('section');
		document.createElement('article');
		document.createElement('aside');
		document.createElement('footer');
		document.createElement('time');
		</script>	
		<script src="js/pie.js" type="text/javascript"></script>
		<script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      	<script src="http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!--[if lt IE 8]><script src="js/oldie/warning.js"></script><script>window.onload=function(){e("js/oldie/")}</script><![endif]-->
</head>
<body>
	<? 
		global $act;
		partial('zHiddenBlock');
	?>
	<header class="header">
		<div class="container">
			<a href="#" class="header-logo"><img src="images/logo.png"  alt="" /></a>
			<a href="tel:+79007000811" class="contacts-phone header-phone"><i class="icon icon-phone-gray"></i><span>+7 (900)<b> 700-08-11</b></span></a>
			<div class="navbar-toggle">
				<span class="icon-container">
					<span class="line line01"></span>
					<span class="line line02"></span>
					<span class="line line03"></span>
					<span class="line line04"></span>
				</span>
			</div>
		</div>
	</header>
	<div class="header-menu">
		<div class="container">
			<nav class="navbar topMenu">
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="#">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Product and Services</a></li>
						<li><a href="#">Contact us</a></li>
						<li><a href="#">Our partners</a></li>
					</ul>
					<div class="navbar-search">
						<input type="text" placeholder="Поиск" class="search" />
						<input type="submit"  value="" />
					</div>
				</div>
			</nav>
		</div>
	</div>