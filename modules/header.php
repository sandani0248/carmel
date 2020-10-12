<?php include('./seo.php'); ?>
<?php $cache_bust = '6.2' ; ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="shortcut icon" href="favicon.ico"  type="image/x-icon"> 
	
	<?php
	
	if(isset($seo[$seo_page_name])) {
		$seo = $seo[$seo_page_name];
		$seo_title = $seo['title'];
		$seo_desc = $seo['desc'];
		$seo_keywords = $seo['keywords'];
		$seo_canonical = $seo['canonical'];
	} else {
		$seo = $seo['default'];
		$seo_title = $seo['title'];
		$seo_desc = $seo['desc'];
		$seo_keywords = $seo['keywords'];
		$seo_canonical = $seo['canonical'];
	}
	
	?>
	
	<title><?php echo ucwords($seo_title); ?></title>
	<meta name="description" content="<?php echo ucwords($seo_desc); ?>">
	<meta name="keywords" content="<?php echo ucwords($seo_keywords); ?>">
	<meta name="robots" content="noodp"/>
	
	<?php 
	// SLICK CSS
	if( (isset($include_slick)) AND ($include_slick == TRUE) ) { ?>
	
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
	
	<?php
	} ?>
	
	
	<?php // INTLTEL CSS
	if( (isset($include_validation_scripts)) AND ($include_validation_scripts == TRUE) ) { ?>
	<link rel="stylesheet" href="./css/intlTelInput.css">
	<?php
	} ?>

	<?php 	if(!empty($seo_canonical)) { echo $seo_canonical;	} ?>
	
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400|Roboto:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/style.css?v=<?php echo $cache_bust; ?>">
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
		
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NNJSWKB');</script>
	<!-- End Google Tag Manager -->
	
	<!-- Global site tag (gtag.js) - Google Ads: 737721192 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-737721192"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'AW-737721192');
		<!-- Global site tag (gtag.js) - Google Analytics -->
		gtag('config', 'UA-141211401-1');
	</script>
	
		<!--Event Snippet Code-->
		<?php
			if(isset($eventsnippet)) {
				echo $eventsnippet;
			}
			
			if(isset($fbevent)) {
				echo $fbevent;
			}
		?>
		<!-- Event snippet for Calls Generated conversion page.  Call gtag_report_conversion when someone clicks on the chosen link or 	button. -->
	<script>
	function gtag_report_conversion(url) {
	  var callback = function () {
		if (typeof(url) != 'undefined') {
		  window.location = url;
		}
	  };
	  gtag('event', 'conversion', {
		  'send_to': 'AW-737721192/lg0LCIyBrKEBEOj24t8C',
		  'event_callback': callback
	  });
	  return false;
	}
	</script>
	<!-- Facebook Pixel Code -->
	<script>
	  !function(f,b,e,v,n,t,s)
	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	  n.queue=[];t=b.createElement(e);t.async=!0;
	  t.src=v;s=b.getElementsByTagName(e)[0];
	  s.parentNode.insertBefore(t,s)}(window, document,'script',
	  'https://connect.facebook.net/en_US/fbevents.js');
	  fbq('init', '1505371842933068');
	  fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	  src="https://www.facebook.com/tr?id=1505371842933068&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
	

</head>

<body>
	
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNJSWKB"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	
	<?php
		$campaign_keys = array('Secondary_Source', 'Campaign','Tertiary_Source','utm_source','utm_medium','utm_campaign','utm_term','utm_content','GCLID','source_url');

		if(!empty($_SERVER['QUERY_STRING'])) {
			$querystring = $_SERVER['QUERY_STRING'];
			$source_URL=$_SERVER['REQUEST_URI'];  // get original source URL where user landed for landing page.
			setcookie('source_url', $source_URL, time() + (86400 * 30), "/"); // set cookie to expire in 30 days
		} 
		else {
			$querystring="";
			$source_URL="";
			if(isset($_COOKIE["source_url"])) {
				$source_URL=$_COOKIE["source_url"];  // get original source URL where user landed from cookie for inner pages.
				}
		}

		$secondary_source="Website"; // default value;
		parse_str($querystring, $qsarray);
		foreach ($qsarray as $cookie_name => $cookie_value) {
			if(in_array($cookie_name,$campaign_keys)) {
				//echo "{$cookie_name} => {$cookie_value} ";
				setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // cookie to expire in 30 days
			}
		}
	?>
	
	<header id="main-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					
					<div class="dropdown" id="main-menu-dropdown">
						<button id="menu-toggle" class="btn btn-link item" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="glyphicon glyphicon-menu-hamburger"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li class="home-link"><a href="./index.php">Home</a></li>
							<li class="floorPlans-link"><a href="#" data-toggle="modal" data-target="#contactModal">Floor Plans</a></li>
							<li class="amenities-link"><a href="./amenities.php">Amenities</a></li>
							<li class="location-link"><a href="./location.php">Location</a></li>
							<li class="aboutUs-link"><a href="./about-us.php">About Us</a></li>
							<li class="contactUs-link"><a href="#" data-toggle="modal" data-target="#contactModal">Contact Us</a></li>
						</ul>
					</div>
					
					<a href="./index.php" class="header-logo" title="Carmel Heights">
						<img src="./img/logo-carmel-heights.jpg" alt="Carmel Heights Logo">
					</a>
					
					<div class="link-box left">
						<ul class="list-inline">
							<li class="home-link"><a href="./index.php">Home</a></li>
							<li class="floorPlans-link"><a href="#" data-toggle="modal" data-target="#contactModal">Floor Plans</a></li>
							<li class="amenities-link"><a href="./amenities.php">Amenities</a></li>
						</ul>
					</div>
					
					<div class="link-box right">
						<ul class="list-inline">
							<li class="location-link"><a href="./location.php">Location</a></li>
							<li class="aboutUs-link"><a href="./about-us.php">About Us</a></li>
							<li class="contactUs-link"><span data-toggle="modal" data-target="#contactModal"><a href="#" data-toggle="tooltip" data-placement="right" title="88842 55557" >Contact Us</a></span></li>
						</ul>
					</div>
					
				</div>
			</div>
		</div>
	</header>
