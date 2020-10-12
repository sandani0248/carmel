	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 clearfix">
					<ul class="footer-links">
						<li><a href="./about-us.php">About the Developer</a></li>
						<li><a href="./amenities.php">Amenities</a></li>
						<li><a href="#" data-toggle="modal" data-target="#contactModal">Download Brochure</a></li>
						<li><a href="#" data-toggle="modal" data-target="#contactModal">Schedule Site Visit</a></li>
						<li style="margin-top: 15px;"><small><strong>RERA No: PRM/KA/RERA/1251/446/PR/180924/002016</strong></small></li>
					</ul>
					
					<!-- ul class="footer-links">
						<li>Follow us on</li>
						<li>
							<a href="#" class="social-link fb"><span class="fa fa-facebook"></span></a>
							<a href="#" class="social-link twitter"><span class="fa fa-twitter"></span></a>
							<a href="#" class="social-link linkedin"><span class="fa fa-linkedin"></span></a>
							<a href="#" class="social-link yt"><span class="fa fa-youtube-play"></span></a>
						</li>
					</ul -->
				</div>
				
				<div class="col-sm-6">
					<div class="oceanus-box">
						<a href="http://incor.in/" target="_blank">
							<img src="./img/oceanus.png" width="260" alt="Oceanus">
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<p class="disclaimer"><b>Disclaimer</b>: This document is conceptual and not a legal offering by the Company for advertising and is to be used for general information only. Any interested party should verify all the information including designs, plans, specifications, facilities, features, payment schedules, terms of sales etc independently with the Company prior to concluding any decision for buying in any of the project. The user of the Brochure confirms that he/she has not solely relied on this information for making any booking/purchase in any project of the Company. The visuals and information contained herein marked as “artistic impression” are artistic impressions being indicative in nature and are for general information purposes only. The visuals contained marked as “generic image” and other visuals/image/photographs are general images and do not have any correlation with the project. The imagery used on the brochures may not represent actuals or may be indicative of style only. Photographs of interiors, surrounding views and location may not represent actuals or may have been digitally enhanced or altered. These photographs may not represent actuals or may be indicative only. Computer generated images, walkthroughs and render images are the artist’s impression and are an indicative of the actual designs. No information given on this brochure creates a warranty or expand the scope of any warranty that cannot be disclaimed under the applicable laws. The information on this brochure is presented as general information and no representation or warranty is expressly or impliedly given as to its accuracy. While enough care is taken by the Company to ensure that information in the brochure are up to date, accurate and correct, the readers/users are requested to make an independent enquiry with the Company before relying upon the same. Nothing on the brochure should be misconstrued as advertising, marketing, booking, selling or an offer for sale or invitation to purchase a unit in any project by the Company. The Company is not responsible for the consequences of any action taken by the viewer relying on such material/ information on this brochure without independently verifying with the Company.</p>		
				</div>
			</div>
		</div>
	</footer>
	
	<section class="copyright-sec">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-align-center">
					<p>&copy; <span id="footerYear">2018</span> All Rights Reserved - INCOR</p>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Salesforce Enquiry Modal -->

			<a href="#" id="book-now-button" data-toggle="modal" data-target="#contactModal" style="outline: none !important;">
				<img src="./img/download-brochure.png" alt="Download Brochure" title="Download Brochure">
			</a>
	
			<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel" style="font-weight: bold;">Contact Us</h4>
						</div>
						<div class="modal-body">
							<form id="salesforce" class="ajaxForm" action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
								<input type=hidden name="oid" value="00D6F000001GsLT">
								<input type=hidden name="retURL" value="http://carmelheights.in/thankyou.php">
								
								<!--  ----------------------------------------------------------------------  -->
								<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
								<!--  these lines if you wish to test in debug mode.                          -->
								<!-- <input type="hidden" name="debug" value=1>      			-->			  
								<!-- <input type="hidden" name="debugEmail" value="kuladeepparchuri@gmail.com"> -->	
								<!--  ----------------------------------------------------------------------  -->
						
								<div class="form-group">
									<label for="last_name" class="sr-only">Full Name<small class="text-danger">*</small></label>
									<input  id="last_name" maxlength="80" name="last_name" class="form-control" value="" style="margin-top: 0px;" type="text" required placeholder="Full Name" />
								</div>
						
								<div class="form-group">
									<label for="email" class="sr-only">Email address <small class="text-danger">*</small></label>
									<input type="email" class="form-control" id="email" name="email" required placeholder="Email Address" value="">
								</div>
						
								<div class="form-group">
									<label for="mobile" class="sr-only">Phone <small class="text-danger">*</small></label>
									<input type="tel" class="form-control" id="mobile" name="mobile" required placeholder="10 digit mobile" value="">
								</div>
						
								<div class="form-group">
									<label for="description" class="sr-only">Message(optional)</label>
									<textarea name="description" class="form-control" placeholder="Message (optional)" style="max-width: 100%; min-width: 100%; min-height:: 50px;"></textarea>
								</div>

								<input id="00N6F00000WdFRw" name="00N6F00000WdFRw" type="hidden" value="WEB">
								<input id="00N6F00000WdFSE" name="00N6F00000WdFSE" type="hidden" value="Incor Carmel Heights">
								<input id="lead_source" name="lead_source" type="hidden" value="Digital">
								<input id="00N6F00000WdFSV" name="00N6F00000WdFSV" title="Secondary source" type="hidden" value="<?php 
								if(isset($_COOKIE["Secondary_Source"])) {echo $_COOKIE["Secondary_Source"];}elseif(isset($qsarray["Secondary_Source"])){echo $qsarray["Secondary_Source"];}else{ echo "Website";} ?>" />
								<input id="00N6F00000WdHEc" name="00N6F00000WdHEc" title="Tertiary Source" type="hidden" value="<?php if(isset($_COOKIE["Tertiary_Source"])) {echo $_COOKIE["Tertiary_Source"];}elseif(isset($qsarray["Tertiary_Source"])){echo $qsarray["Tertiary_Source"];}else{ echo "";} ?>"/>
								<input id="00N6F00000WdFSb" name="00N6F00000WdFSb" title="source URL" type="hidden" value="<?php if(isset($source_URL)){echo $source_URL;}elseif(isset($_COOKIE["source_url"])) {echo $_COOKIE['source_url'];}else{ echo "";} ?>" />
								<input id="Campaign_ID" name="Campaign_ID" title="Campaign" type="hidden" value="<?php if(isset($_COOKIE["Campaign"])) {echo $_COOKIE["Campaign"];}elseif(isset($qsarray["Campaign"])){echo $qsarray["Campaign"];}else{ echo "";} ?>" />
								<input id="00N0K00000KJuDM" name="00N0K00000KJuDM"  title="utm_source" type="hidden" value="<?php if(isset($_COOKIE["utm_source"])) {echo $_COOKIE["utm_source"];}elseif(isset($qsarray["utm_source"])){echo $qsarray["utm_source"];}else{ echo "";} ?>" />
								<input id="00N0K00000KJuDq" name="00N0K00000KJuDq" title="utm_medium" type="hidden" value="<?php if(isset($_COOKIE["utm_medium"])) {echo $_COOKIE["utm_medium"];}elseif(isset($qsarray["utm_medium"])){echo $qsarray["utm_medium"];}else{ echo "";} ?>" />
								<input id="00N0K00000KJuDv" name="00N0K00000KJuDv" title="utm_campaign" type="hidden" value="<?php if(isset($_COOKIE["utm_campaign"])) {echo $_COOKIE["utm_campaign"];}elseif(isset($qsarray["utm_campaign"])){echo $qsarray["utm_campaign"];}else{ echo "";} ?>" />
								<input id="00N0K00000KJuE0" name="00N0K00000KJuE0" title="utm_term" type="hidden" value="<?php if(isset($_COOKIE["utm_term"])) {echo $_COOKIE["utm_term"];}elseif(isset($qsarray["utm_term"])){echo $qsarray["utm_term"];}else{ echo "";} ?>" />
								<input id="00N0K00000KJuE5" name="00N0K00000KJuE5" title="utm_content" type="hidden" value="<?php if(isset($_COOKIE["utm_content"])) {echo $_COOKIE["utm_content"];}elseif(isset($qsarray["utm_content"])){echo $qsarray["utm_content"];}else{ echo "";} ?>" />
								<input id="00N0K00000KJvAE" name="00N0K00000KJvAE" title="GCLID" type="hidden" value="<?php if(isset($_COOKIE["GCLID"])) {echo $_COOKIE["GCLID"];}elseif(isset($qsarray["GCLID"])){echo $qsarray["GCLID"];}else{ echo "";} ?>" />
						
								<div class="g-recaptcha" data-sitekey="6LfH4agUAAAAANCXOO2a96z6UGcRtT0D79vjadhs" style="transform:scale(0.88);-webkit-transform:scale(0.88);transform-origin:0 0;-webkit-transform-origin:0 0; margin-top: 21px;"></div>
						
								<div class="formMessage"></div>
						
								<button type="submit" class="btn btn-cta btn-wide btn-block formSubmit" style="margin-top: 21px;">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		<!-- End Salesforce Enquiry Modal -->
		
	<!-- Start Call now sticky button only for mobile device 
	<a id="callnow-mobile" onclick="return gtag_report_conversion('tel:8884255557')"
href="tel:8884255557" style="outline: none !important;">
		<img src="./img/call-now.png" alt="Call now!" title="Call now">
	</a>-->

	<!-- End Call now sticky button only for mobile device -->
	
	<div id="mqCheck-1199"></div>
	<div id="mqCheck-991"></div>
	<div id="mqCheck-767"></div>
	<div id="mqCheck-600"></div>
	<div id="mqCheck-539"></div>
	<div id="mqCheck-500"></div>
	<div id="mqCheck-479"></div>
	<div id="mqCheck-399"></div>
	
	<a href="#main-header" id="toTop"><span class="glyphicon glyphicon-menu-up"></span></a>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="./js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<?php // SLICK JS
	if( (isset($include_slick)) AND ($include_slick == TRUE) ) { ?>
	
	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
	<!-- script src="js/vendor/slick.min.js"></script -->
	
	<?php
	} ?>
	
	<?php // VALIDATION SCRIPTS
	if( (isset($include_validation_scripts)) AND ($include_validation_scripts == TRUE) ) { ?>
	
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script src="./js/vendor/intlTelInput.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.13.1/additional-methods.min.js"></script>

	
	<?php
	} ?>
	
	<script src="./js/plugins.js"></script>
	<script src="./js/main.js?v=<?php echo $cache_bust; ?>"></script>
	
	<?php // BANNER SLIDER
	if( (isset($include_banner_slider)) AND ($include_banner_slider == TRUE) ) { ?>
	<script>
		$('.banner-slider').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
  			autoplaySpeed: 10000,
  			pauseOnHover: false,
			dots: false,
			fade: true,
			adaptiveHeight: false,
			arrows: false,
		});
	</script>
	<?php
	} ?>
	
	<?php // VALIDATION SCRIPTS
	if( (isset($include_validation_scripts)) AND ($include_validation_scripts == TRUE) ) { ?>
	
	<script>
		$("#phone1").intlTelInput(
			{
				utilsScript: "js/vendor/utils.js",
				initialCountry: 'in',
				autoHideDialCode: false
			}
		);
			
		$("#leadForm1 #phone1").on('change', function() {
			var elem = $("#phone1");
			
			$("#gen-error1").remove();
			elem.val(elem.intlTelInput("getNumber"));
			
			if(elem.intlTelInput("isValidNumber") === false) {	
				
				elem.addClass('error');
				elem.after("<label id='gen-error1' class='cust-error' for='phone1'>Enter a valid phone number</label>");
				$("#gen-error1").css('display', 'block');
				return false;
				
			} else {
				
				$("#gen-error1").css('display', 'none');
			
			}
		});
		

		
		$("body").on('submit', '#leadForm1', function(e) {
			
			var form = $(this);
			var elem = $("#phone1");
			
			$("#gen-error1").remove();
			elem.val(elem.intlTelInput("getNumber"));
			
			if(elem.intlTelInput("isValidNumber") === false) {	
				
				elem.addClass('error');
				elem.after("<label id='gen-error1' class='cust-error' for='phone1'>Enter a valid phone number</label>");
				$("#gen-error1").css('display', 'block');
				return false;
				
			} else {
				
				$("#gen-error1").css('display', 'none');
				
				e.preventDefault();
	
				var form = $(this);
				var submitButton = form.find('.formSubmit');
				var messageBox = form.find('.formMessage');
				messageBox.html('');
				
				var origButtonHTML = submitButton.html();
				submitButton.attr('disabled', 'disabled');
				submitButton.html('<span class="fa fa-spin fa-spinner"></span>');
				
				var postData = form.serializeArray();
				var formURL = form.attr('action');
				var methodType = form.attr('method');
				
				form.children('.form-group').removeClass('error');
				
				$.ajax({
					url: formURL,
					type: methodType,
					contentType: false,
					processData: false,
					data: new FormData(this),
					
					success: function(data, textStatus, jqXHR) {
						var response = jQuery.parseJSON(data);
						if(response.success === true) {
							/*document.location.href = "thankyou.html";*/
							/*gtag_report_conversion();*/
							messageBox.html("<div class='alert alert-success'>" + response.success_message + "</div>");
							submitButton.attr('disabled', 'disabled');
							submitButton.html("<span class='glyphicon glyphicon-thumbs-up'></span>");
							;
							return;
						} else {
							var error_phrase = '<div>';
							console.log(response.error_messages);
							var error_messages = response.error_messages;
							console.log(error_messages);
							
							$.each(error_messages, function(index, value) {
								var key = Object.keys(value)[0];
								
								$('#'+key).parent('.form-group').addClass('error');
								/*$('#'+key).after("<small class='help-block error text-danger'>" + value + "</small>")*/
								
								error_phrase = error_phrase + '<div>' + value;
								error_phrase = error_phrase + '</div>';
							});
							error_phrase += '</div>';
							
							messageBox.html("<div class='alert alert-danger'>" + error_phrase + "</div>");
							submitButton.html(origButtonHTML);
							submitButton.removeAttr('disabled');
							return;
						}
					},
					error: function(jqXHR, textStatus, errorThrown) {}
				});
			
			}
		});
		
		
		$.validator.addMethod(
			"regex",
			function(value, element, regexp) 
			{
				if (regexp.constructor != RegExp)
					regexp = new RegExp(regexp);
				else if (regexp.global)
					regexp.lastIndex = 0;
				return this.optional(element) || regexp.test(value);
			},
			"Please check your input."
		);
		
		$("#leadForm1").validate({
			rules: {
				name1: "required",
				email1: {
					required: true,
					email: true,
					regex: /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/
				},
			},
			messages: {
				name1: "Name is required",
				email1: "Invalid Email",
			}
		});
		
		$("#leadutmsource").val(getCookie("_carmelweb_utm_source"));
		$("#leadutmcampaign").val(getCookie("_carmelweb_utm_campaign"));
		$("#leadutmmedium").val(getCookie("_carmelweb_utm_medium"));
		$("#leadutmterm").val(getCookie("_carmelweb_utm_term"));
		$("#leadutmcontent").val(getCookie("_carmelweb_utm_content"));
	</script>
	
	<script>
	
		$("#mobile").intlTelInput(
			{
				utilsScript: "js/vendor/utils.js",
				initialCountry: 'in',
				autoHideDialCode: false
			}
		);
		
		$("#salesforce #mobile").on('change', function() {
			var elem = $("#mobile");
			
			$("#gen-error1").remove();
			elem.val(elem.intlTelInput("getNumber"));
			
			if(elem.intlTelInput("isValidNumber") === false) {	
				
				elem.addClass('error');
				elem.after("<label id='gen-error1' class='cust-error' for='mobile'>Enter a valid phone number</label>");
				$("#gen-error1").css('display', 'block');
				return false;
				
			} else {
				
				$("#gen-error1").css('display', 'none');
			
			}
		});
		

		
		$.validator.addMethod(
			"regex",
			function(value, element, regexp) 
			{
				if (regexp.constructor != RegExp)
					regexp = new RegExp(regexp);
				else if (regexp.global)
					regexp.lastIndex = 0;
				return this.optional(element) || regexp.test(value);
			},
			"Please check your input."
		);
		
		$("#salesforce").validate({
			rules: {
				last_name: "required",
				email: {
					required: true,
					email: true,
					regex: /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/
				},
			},
			messages: {
				last_name: "Name is required",
				email: "Invalid Email",
			},

submitHandler: function (form) {

				/*Start Leadstore integration*/
        var request;
        // bind to the submit event of our form

        // let's select and cache all the fields
        var $inputs = $(form).find("input, select, button, textarea");
        // serialize the data in the form
        var serializedData = $(form).serialize();
        //console.log(serializedData);

        // let's disable the inputs for the duration of the ajax request
        //$inputs.prop("disabled", true);

        // fire off the request to /form.php



        request = $.ajax({
                url: "https://carmelheights.in/lead_to_leadstore.php",
                type: "post",
                data: serializedData
        });

        // callback handler that will be called on success
        request.done(function (response, textStatus, jqXHR) {
                // log a message to the console
                //console.log("Hooray, it worked!"+response);
               // alert("success awesome"+response);
               // $('#add--response').html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><strong>Well done!</strong> You successfully read this important alert message.</div>');
        });

        // callback handler that will be called on failure
        request.fail(function (jqXHR, textStatus, errorThrown) {
                // log the error to the console
                //console.error("The following error occured: " + textStatus, errorThrown);
        });

            // callback handler that will be called regardless
            // if the request failed or succeeded
        request.always(function () {
                // reenable the inputs
                //$inputs.prop("disabled", false);
        }); 

        /*Form Submit*/

     //$("form[name='form_download_brochure']").submit();        
$("form").submit();
    }


		});
	</script>
	
	<?php
	} ?>
	
	<?php // VALIDATION SCRIPTS 2
	if( (isset($include_validation_scripts2)) AND ($include_validation_scripts2 == TRUE) ) { ?>
	
	<script>
		$("#phone2").intlTelInput(
			{
				utilsScript: "js/vendor/utils.js",
				initialCountry: 'in',
				autoHideDialCode: false
			}
		);
		
		$("#leadForm2 #phone2").on('change', function() {
			var elem = $("#phone2");
			
			$("#gen-error2").remove();
			elem.val(elem.intlTelInput("getNumber"));
			
			if(elem.intlTelInput("isValidNumber") === false) {	
				
				elem.addClass('error');
				elem.after("<label id='gen-error2' class='cust-error' for='phone2'>Enter a valid phone number</label>");
				$("#gen-error2").css('display', 'block');
				return false;
				
			} else {
				
				$("#gen-error2").css('display', 'none');
			
			}
		});
		
		$("body").on('submit', '#leadForm2', function(e) {
			
			var form = $(this);
			var elem = $("#phone2");
			
			$("#gen-error2").remove();
			elem.val(elem.intlTelInput("getNumber"));
			
			if(elem.intlTelInput("isValidNumber") === false) {	
				
				elem.addClass('error');
				elem.after("<label id='gen-error2' class='cust-error' for='phone2'>Enter a valid phone number</label>");
				$("#gen-error2").css('display', 'block');
				return false;
				
			} else {
				
				$("#gen-error2").css('display', 'none');
				
				e.preventDefault();
	
				var form = $(this);
				var submitButton = form.find('.formSubmit');
				var messageBox = form.find('.formMessage');
				messageBox.html('');
				
				var origButtonHTML = submitButton.html();
				submitButton.attr('disabled', 'disabled');
				submitButton.html('<span class="fa fa-spin fa-spinner"></span>');
				
				var postData = form.serializeArray();
				var formURL = form.attr('action');
				var methodType = form.attr('method');
				
				form.children('.form-group').removeClass('error');
				
				$.ajax({
					url: formURL,
					type: methodType,
					contentType: false,
					processData: false,
					data: new FormData(this),
					
					success: function(data, textStatus, jqXHR) {
						var response = jQuery.parseJSON(data);
						if(response.success === true) {
							document.location.href = "thankyou.php";
							/*gtag_report_conversion();*/
							messageBox.html("<div class='alert alert-success'>" + response.success_message + "</div>");
							submitButton.attr('disabled', 'disabled');
							submitButton.html("<span class='glyphicon glyphicon-thumbs-up'></span>");
							;
							return;
						} else {
							var error_phrase = '<div>';
							console.log(response.error_messages);
							var error_messages = response.error_messages;
							console.log(error_messages);
							
							$.each(error_messages, function(index, value) {
								var key = Object.keys(value)[0];
								
								$('#'+key).parent('.form-group').addClass('error');
								/*$('#'+key).after("<small class='help-block error text-danger'>" + value + "</small>")*/
								
								error_phrase = error_phrase + '<div>' + value;
								error_phrase = error_phrase + '</div>';
							});
							error_phrase += '</div>';
							
							messageBox.html("<div class='alert alert-danger'>" + error_phrase + "</div>");
							submitButton.html(origButtonHTML);
							submitButton.removeAttr('disabled');
							return;
						}
					},
					error: function(jqXHR, textStatus, errorThrown) {}
				});
			
			}
		});
		
		
		$.validator.addMethod(
			"regex",
			function(value, element, regexp) 
			{
				if (regexp.constructor != RegExp)
					regexp = new RegExp(regexp);
				else if (regexp.global)
					regexp.lastIndex = 0;
				return this.optional(element) || regexp.test(value);
			},
			"Please check your input."
		);
		
		$("#leadForm2").validate({
			rules: {
				name1: "required",
				email1: {
					required: true,
					email: true,
					regex: /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/
				},
			},
			messages: {
				name1: "Name is required",
				email1: "Invalid Email",
			}
		});
		
		$("#leadutmsource2").val(getCookie("_carmelweb_utm_source"));
		$("#leadutmcampaign2").val(getCookie("_carmelweb_utm_campaign"));
		$("#leadutmmedium2").val(getCookie("_carmelweb_utm_medium"));
		$("#leadutmterm2").val(getCookie("_carmelweb_utm_term"));
		$("#leadutmcontent2").val(getCookie("_carmelweb_utm_content"));
	</script>
	
	<?php
	} ?>
	
	<script>
	/*	if(getCookie("disclaimerAgreed")) {
			console.log('Disclaimer - Agreed');
		} else {
			$("#disclaimerModal").modal('show');
		} 
		
		$("body").on("click", "#disclaimerAgree", function(e) {
			setCookie("disclaimerAgreed", "agreed", 30);
			$("#disclaimerModal").modal('hide');
		}); */
		
		function setCookie(cname, cvalue, exdays) {
			var d = new Date();
			d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
			var expires = "expires="+d.toUTCString();
			document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
		}
	</script>
	
	<!-- lsquare -->
	<script type="text/javascript">
	  var _paq = _paq || [];
	  _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
	  _paq.push(["setCookieDomain", "*.carmelheights.in"]);
	  _paq.push(['trackPageView']);
	  _paq.push(['enableLinkTracking']);
	  (function() {
		var u=(("https:" == document.location.protocol) ? "https" : "http") + "://lswebanalytics.com/analytics/";
		_paq.push(['setTrackerUrl', u+'lsquare.php']);
		_paq.push(['setSiteId', 174]);
		var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
		g.defer=true; g.async=true; g.src=u+'lsquare.js'; s.parentNode.insertBefore(g,s);
	  })();
	</script>
	<script type="text/javascript">
	(function(d, src, c) { var t=d.scripts[d.scripts.length - 1],s=d.createElement('script');s.id='la_x2s6df8d';s.async=true;s.src=src;s.onload=s.onreadystatechange=function(){var rs=this.readyState;if(rs&&(rs!='complete')&&(rs!='loaded')){return;}c(this);};t.parentElement.insertBefore(s,t.nextSibling);})(document,
	'//livesquare.in/livesq/scripts/track.js',
	function(e){ LiveAgent.createButton('67b2ff47', e); });
	</script>
	<noscript><p><img src="http://lswebanalytics.com/analytics/lsquare.php?idsite=174" style="border:0;" alt="" /></p></noscript>
	<!-- End lsquare Code -->
	
	<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip('show');   
});
</script>
</body>
</html>
