<?php
	$include_validation_scripts2 = TRUE;
	$include_validation_scripts = TRUE;
	$seo_page_name = 'location';
?>
	
<?php include('./modules/header.php'); ?>

<script>
	var activePage = "location-link";
	var activeSubPage = "location-link";
</script>	

<section class="location-sec">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				
				<div class="location-box">
					
					<div class="panel-text-box">
						<h2 class="heading">Where everything<br>is nearby.</h2>
						<p class="text">
							Close to top hospitals,<br>
							schools and shopping malls
						</p>
					</div>
					
					<ul class="location-list">
						<li>
							<img src="./img/malls.png" alt="Malls" class="icon">
							Malls: 0 min. away
						</li>
						<li>
							<img src="./img/hospital.png" alt="Malls" class="icon">
							Hospitals: 2 min. away
						</li>
						<li>
							<img src="./img/school.png" alt="Malls" class="icon">
							Schools: 10 min. away
						</li>
						<li>
							<img src="./img/work.png" alt="Malls" class="icon">
							Work: 15 min. away
						</li>
						<li>
							<img src="./img/restaurant.png" alt="Malls" class="icon">
							Restaurants: 1 min. away
						</li>
						<li>
							<img src="./img/metro-station.png" alt="Malls" class="icon">
							Metro Station: 15 min. away
						</li>
					</ul>
					
				</div>
				
			</div>
		</div>
		
		<img src="./img/location-map.png" alt="Location" class="location-img">
		
	</div>
	
</section>

<?php include('./modules/footer.php'); ?>
