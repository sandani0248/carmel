<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
/******** CURL method for Leadstore *********/ 	
date_default_timezone_set("Asia/Kolkata");
require_once('/var/www/html/api_methods/functions.php');	
$date 			= date('Y-m-d H:i:s', time());

if (isset($_POST['submit'])) {

	// print_r('hello');
		// die();

	$recaptcha_url      = 'https://www.google.com/recaptcha/api/siteverify';
	$recaptcha_secret   = '6LfOKewUAAAAAG_8AxmxaYigo1wK4jpoLgfeWL5Q';
	$recaptcha_response = $_POST['g-recaptcha-response'];
	$recaptcha_vars = array();
	$recaptcha_vars['response'] =$recaptcha_response;
	$recaptcha_vars['secret'] =$recaptcha_secret;
	           
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $recaptcha_url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $recaptcha_vars);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	 
	curl_close($ch);
	$recaptcha = json_decode($response);
	//echo "<pre>"; print_r($recaptcha);

	if ($recaptcha->success == true || $recaptcha->success == 'success') {

		// print_r('expression');
		// die();
		extract($_POST);
		$USOURCE=isset($USOURCE)?$USOURCE:"Website";
		$UMEDIUM=isset($UMEDIUM)?$UMEDIUM:"Web";
		$UCAMPAIGN=isset($UCAMPAIGN)?$UCAMPAIGN:"Website Form";
		$UTERM=isset($UTERM)?$UTERM:"";
		$UCONTENT=isset($UCONTENT)?$UCONTENT:"";
		$type = "Carmel Heights Website | New Enquiry";
		$input_params=array(				
			'firstname'=> $last_name,
			'email'=> $email,
			'phone'=> $mobile,
			'city'=> '',
			'message'=>$description,
			'udf1'=> '',
			'udf2'=> '',
			'udf3'=>'',
			'udf4'=>'',	
			'udf5'=>'',	
			'udf6'=>'',							
			'udf7'=>'',
			'udf8'=>'',
			'udf9'=>'',
			'udf10'=>'',																					
			'ua_ip'=> $_SERVER['REMOTE_ADDR'],
			'ua_device'=> '',
			'ua_query_url'=> $ILANDPAGE,
			'landing_page_title'=>$UCAMPAIGN,
			'utm_source'=> $USOURCE,
			'utm_medium'=> $UMEDIUM,
			'utm_campaign'=> $UCAMPAIGN,
			'utm_content'=> $UCONTENT,
			'utm_term'=> $UTERM,
			'ua_city'=>'',
			'ua_country'=>'',
			'form_data'=>''
		);	
		$fields = $input_params;
		$postvars = '';
		foreach($fields as $key=>$value) {
		$postvars .= $key . "=" . $value . "&";
		}
		$ch1 = curl_init();
		curl_setopt($ch1, CURLOPT_URL,"http://leadstore.in/capture_leads/capture/58");
		curl_setopt($ch1, CURLOPT_POST, 1);
		curl_setopt($ch1, CURLOPT_POSTFIELDS,$postvars);
		curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch1, CURLOPT_SSL_VERIFYHOST, 1);
		curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, 1);
		$server_output1 = curl_exec ($ch1);
		curl_close ($ch1);
		//echo json_encode($server_output1);

		/****************End CURL CALL**********************/
		ob_start();
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Carmel Heights</title>
		</head>
		<body style="font-family:Arial, sans-serif;font-size:13px;color:#000;background: #f4f4f4;line-height:1.5;padding: 30px;">
			<div style="background: #fff;max-width:550px;display: block;margin: 15px auto;padding: 30px;border-bottom: 6px solid #19386f;">
				<img src="https://i.imgur.com/FMLwA6i.jpg" alt="Carmel Heights" title="Carmel Heights" width="90" style="display: block;margin-bottom:9px;">
				
				<h1 style="font-size: 21px;display:block;margin-bottom: 0;">New Enquiry<br></h1>		
				<div style="font-size: 13px;color: #333;display:block;margin: 15px 0 15px;max-width:360px;">
					<p style="font-size: 12px; color: #888;margin: 0 0 6px;"><?php echo date('M d, Y', strtotime($date)); ?></p>
					<p style="margin: 0 0 6px;"><strong>Name: </strong><?php echo ucwords($last_name); ?></p>
					<p style="margin: 0 0 6px;"><strong>Email: </strong><?php echo $email; ?></p>
					<p style="margin: 0 0 6px;"><strong>Phone: </strong><?php echo $mobile; ?></p>
					
					<?php if(!empty($description)){ ?>
					<p style="margin: 0 0 6px;"><strong>Message: </strong><?php echo $description; ?></p>
					<?php } ?>
				</div>
				
				<p style="margin-bottom: 0px;">Thanks,<br><strong>Admin</strong></p>
			</div>
		</body>
		</html>
		<?php
		$email_message = ob_get_clean();
		$subject = 'New Lead - ' . ucwords($type);
		require_once('/var/www/html/api_methods/emails_list_testing.php');
		send_email($from, $from_name, $to, $to_name, $subject, $email_message, '', $cc_emails, $bcc_emails);
		ob_start();
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Carmel Heights</title>
		</head>
		<body style="font-family:Arial, sans-serif;font-size:13px;color:#000;background: #f4f4f4;line-height:1.5;padding: 30px;">
			<div style="background: #fff;max-width:550px;display: block;margin: 15px auto;padding: 30px;border-bottom: 6px solid #19386f;">
				<img src="https://i.imgur.com/FMLwA6i.jpg" alt="Carmel Heights" title="Carmel Heights" width="120" style="display: block;margin-bottom:9px;">
				
				<p style="font-size: 15px;font-weight: normal;margin: 15px 0px 0px;">Dear <strong><?php echo ucwords($last_name); ?></strong>,</p>
				<p>Your information has been recorded.<br>Our team will get in touch with you shortly.</p>
				
				<p style="margin-bottom: 0px;">Thanks,<br><strong>Carmel Heights</strong></p>
			</div>
		</body>
		</html>
		<?php
		$email_message = ob_get_clean();
		$subject = 'Thank you - Carmel Heights';
		send_email($from, $from_name, $email, ucwords($last_name),$subject, $email_message, '', NULL, NULL);
		
		
		/**** REroot API ***/		
		$full_name=$last_name;
		$phone=$mobile;
		$email=$email;		
		include_once('/var/www/html/api_methods/api.php');		
		/**** End ****/		
		header("Location:thankyou.html");

			// $output['error'] = FALSE;
		 //    $output['error_messages'] = array();
		 //    $output['success'] = TRUE;
		 //    $output['success_message'] = "Thank you for your interest.<br>We will get in touch with you soon.";
		 //    echo json_encode($output);
		 //    exit();
	}else{
	
	// print_r('exit');
	// die();
		// $output['error'] = TRUE;
	 //    $output['error_messages'] = $error_messages;
	 //    $output['success'] = FALSE;
	 //    echo json_encode($output);
	 //    exit();
		// echo '<div class="alert alert-warning">
		// 			  <strong>Error!</strong> You are not a human.
		// 		  </div>';
		//alert('Your request is timed out please resubmit');
		header("Location:index.html");
	}
}

		

?>
