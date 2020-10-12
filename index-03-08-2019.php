<?php
	$include_slick = TRUE;
	$include_validation_scripts = TRUE;
	$seo_page_name = 'home';
?>
	
<?php include('./modules/header-test.php'); ?>

<script>
	var activePage = "home-link";
	var activeSubPage = "home-link";
</script>	

<?php include('./modules/home-banner-slider-test.php'); ?>

<section class="img-panel" style="background: #ffffff url('./img/home-panel-1.jpg') center center no-repeat; background-size: cover;" id="home-panel-1">
	
	<img src="./img/home-panel-1.jpg" class="mobile-img" alt="">
	
	<div class="panel-text-container">
		<div class="wrapper">
			<div class="panel-text-box">
				<h2 class="heading">Celebrate the<br>little things</h2>
				<p class="text">World-class amenities for you<br>and your family</p>
			</div>
		</div>
	</div>
	
</section>

<section class="img-panel" style="background: #ffffff url('./img/home-panel-2.jpg') center center no-repeat; background-size: cover;">
	
	<img src="./img/home-panel-2.jpg" class="mobile-img" alt="">
	
	<div class="panel-text-container">
		<div class="wrapper">
			<div class="panel-text-box">
				<h2 class="heading">Enjoy<br>Spectacular Views</h2>
				<p class="text">Expansive balconies<br>overlooking the Varthur Lake</p>
			</div>
		</div>
	</div>
	
</section>

<section class="img-panel" style="background: #ffffff url('./img/home-panel-3.jpg') center center no-repeat; background-size: cover;">
	
	<img src="./img/home-panel-3.jpg" class="mobile-img" alt="">
	
	<div class="panel-text-container">
		<div class="wrapper">
			<div class="panel-text-box">
				<h2 class="heading">Close to work.<br>Closer to family.</h2>
				<p class="text">Forum neighbourhood mall: 0m<br>Columbia Asia Hospital: 500 m</p>
			</div>
		</div>
	</div>
	
</section>
<?php include('./modules/map-frame.php'); ?>
<?php include('./modules/footer-test.php'); ?>
