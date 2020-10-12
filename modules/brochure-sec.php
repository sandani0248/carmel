	
	<img src="./img/about-banner.jpg" width="100%" alt="">
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 text-align-center">
					<div class="">
						<div class="item">
							<!-- h2 class="padding-top-0" style="font-size: 18px;">Choose from a wide variety of<br>remarkable floor plans</h2>
							<a href="./floorplans.pdf" class="btn btn-cta btn-wide"><span class="fa fa-arrow-circle-down"></span> Download</a -->
							
							<h2 class="pading-top-0" style="font-size: 18px;">Fill in your details to download Brochure</h2>
							
							<form id="leadForm2" class="ajaxForm margin-bottom-30" method="POST" action="./leadgrab.php">
								
								<div class="form-group">
									<label for="name2" class="sr-only">Full Name <small class="text-danger">*</small></label>
									<input type="text" class="form-control" style="margin-top: 0px;" id="name2" name="fullname" required placeholder="Full Name" value="">
								</div>
								
								<div class="form-group">
									<label for="email2" class="sr-only">Email address <small class="text-danger">*</small></label>
									<input type="email" class="form-control" id="email2" name="email" required placeholder="Email Address" value="">
								</div>
								
								<div class="form-group">
									<label for="phone2" class="sr-only">Phone <small class="text-danger">*</small></label>
									<input type="tel" class="form-control" id="phone2" name="phone" required placeholder="10 digit mobile" value="">
								</div>
								
								<input type="hidden" name="message" value="">
								
								<input type="hidden" id="leadutmsource2" name="leadutmsource" value="" />
								<input type="hidden" id="leadutmcampaign2" name="leadutmcampaign" value=""/>
								<input type="hidden" id="leadutmmedium2" name="leadutmmedium" value="" />
								<input type="hidden" id="leadutmterm2" name="leadutmterm" value="" />
								<input type="hidden" id="leadutmcontent2" name="leadutmcontent" value="" />
								
								<!-- <div class="g-recaptcha" data-sitekey="6Lfj9XMUAAAAAN5MZxxizviKuuRbsL5h6F8Jv56c" style="transform:scale(0.88);-webkit-transform:scale(0.88);transform-origin:0 0;-webkit-transform-origin:0 0; margin-top: 21px;"></div> -->
								<div class="g-recaptcha" data-sitekey="6LfH4agUAAAAANCXOO2a96z6UGcRtT0D79vjadhs" style="transform:scale(0.88);-webkit-transform:scale(0.88);transform-origin:0 0;-webkit-transform-origin:0 0; margin-top: 21px;"></div>

								<div class="formMessage"></div>
								
								<button type="submit" class="btn btn-cta btn-wide formSubmit" style="margin-top: 12px; width: 152px; display: block;">Submit Details</button>
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
