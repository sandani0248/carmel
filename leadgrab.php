<?php

date_default_timezone_set("Asia/Kolkata");
require_once('functions.php');

if( ! passed_reCaptcha()) {
	$output['error'] = TRUE;
	$output['error_messages'] = array('Please confirm you are not a robot');
	$output['success'] = FALSE;
	echo json_encode($output);
	exit();
}

$full_name  = get_field('fullname');
$email      = get_field('email');
$phone      = get_field('phone');
$message   = get_field('message');

$leadutmsource   = get_field('leadutmsource');
$leadutmmedium   = get_field('leadutmmedium');
$leadutmcampaign = get_field('leadutmcampaign');
$leadutmcontent  = get_field('leadutmcontent');
$leadutmterm     = get_field('leadutmterm');

$date 			= date('Y-m-d H:i:s', time());
$post_dump		= $_POST;
$post_dump 		= json_encode($post_dump);
$post_dump 		= $post_dump;
$form_page 		= get_form_page_url();

$type = "Carmel Heights Website | New Enquiry";

$error = 0;
$error_messages = array();
$output = array(
	'error' => TRUE,
	'error_messages' => array(),
	'success' => FALSE,
);

if($full_name == '') {
	$error_messages['fullname'] = "Please enter your Full Name";
	$error = 1;
}

if( ($email == '') OR  ( ! valid_email($email)) ) {
	$error_messages['email'] = "Please enter your Email Address";
	$error = 1;
}

if($phone == '') {
	$error_messages['phone'] = "Please enter your Phone Number";
	$error = 1;
}

if($error == 1) {
	$output['error'] = TRUE;
	$output['error_messages'] = $error_messages;
	$output['success'] = FALSE;
	echo json_encode($output);
	exit();
	//header("message:{$form_page}#leadForm");
	//exit();
}

ini_set("log_errors", 1);
$log_name = date('M-d-Y', time());
ini_set("error_log", "{$log_name}.log");
error_log("\nNew Enquiry | full_name: '{$full_name}', phone: '{$phone}', email: '{$email}', message: '{$message}', lead_type: '{$type}', date_captured: '{$date}'\n\n");

//require_once('db_config_testing.php');
//require_once('db_config_production.php');

$table = 'lead';

$ip = $_SERVER['REMOTE_ADDR'];
$page_url = $form_page;

//$con = mysqli_connect("localhost","deepredi_sudaksh", "khulja$1m", "deepredi_sudaksha");
//$con = mysqli_connect("localhost", "carmelheights_db", "ranjith2812$$","carmelheights_db");
$con = mysqli_connect("localhost","incor","!ncor456@2019","carmelheights_db");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql_query = "INSERT INTO {$table}(firstname, full_name, phone, email, message, lead_type, ip, page_url, date_captured) VALUES('{$full_name}', '{$full_name}', '{$phone}', '{$email}', '{$message}', '{$type}', '{$ip}', '{$page_url}', '{$date}')";

if( ! mysqli_query($con, $sql_query)) {
	echo mysqli_info($con) . '<br><br>';
	echo mysqli_error($con);
	ini_set("log_errors", 1);
	$log_name = date('M-d-Y', time());
	ini_set("error_log", "{$log_name}.log");
	error_log("\nError: couldn't save {$type} into DB | mysql_error: " . mysqli_error($con) . " | data: '{$full_name}', '{$phone}', '{$email}', '{$message}', '{$type}', '{$ip}', '{$page_url}', '{$date}'\n");
	//$_SESSION['global_error'] = "Error! Please try again.";
	//header("message:{$form_page}#leadForm");
	
	$errors['global_error_message'] = "Error! Please try again.";
	$output['error'] = TRUE;
	$output['error_messages'] = $error_messages;
	$output['success'] = FALSE;
	echo json_encode($output);
	exit();
}


/******** CURL method for Leadstore *********/ 		
$input_params=array(				
	'firstname'=> $full_name,
	'email'=> $email,
	'phone'=> $phone,
	'city'=> '',
	'message'=>'',
	'udf1'=> 'message: ' . $message,
	'udf2'=> '',
	'udf3'=> '',
	'udf4'=> '',	
	'udf5'=> '',	
	'udf6'=> '',							
	'udf7'=> '',
	'udf8'=> '',
	'udf9'=> '',
	'udf10'=> '',																					
	'ua_ip'=> $ip,
	'ua_device'=> '',
	'ua_query_url'=> $page_url,
	'landing_page_title'=> $type,
	'utm_source'=> $leadutmsource,
	'utm_medium'=> $leadutmmedium,
	'utm_campaign'=> $leadutmcampaign,
	'utm_content'=> $leadutmcontent,
	'utm_term'=> $leadutmterm,
	'ua_city'=>'',
	'ua_country'=>'',
	'form_data'=> $post_dump,
);	
$fields = $input_params;
$postvars = '';
foreach($fields as $key=>$value) {
	$postvars .= $key . "=" . $value . "&";
}
//$ch = curl_init();
//curl_setopt($ch, CURLOPT_URL,"http://leadstore.in/capture_leads/capture/19");
//curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS,$postvars);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//$server_output = curl_exec ($ch);
//curl_close ($ch);
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
		<p style="font-size: 15px;font-weight: bold;margin: 0;">Origin: <a href="<?php echo $page_url; ?>"><?php echo $page_url; ?></a></p>
		
		<div style="font-size: 13px;color: #333;display:block;margin: 15px 0 15px;max-width:360px;">
			<p style="font-size: 12px; color: #888;margin: 0 0 6px;"><?php echo date('M d, Y', strtotime($date)); ?></p>
			<p style="margin: 0 0 6px;"><strong>Name: </strong><?php echo ucwords($full_name); ?></p>
			<p style="margin: 0 0 6px;"><strong>Email: </strong><?php echo $email; ?></p>
			<p style="margin: 0 0 6px;"><strong>Phone: </strong><?php echo $phone; ?></p>
			<p style="margin: 0 0 6px;"><strong>Message: </strong><?php echo $message; ?></p>
		</div>
		
		<p style="margin-bottom: 0px;">Thanks,<br><strong>Admin</strong></p>
	</div>
</body>
</html>


<?php
$email_message = ob_get_clean();
$subject = 'New Lead - ' . ucwords($type);

//require_once('emails_list_testing.php');
require_once('emails_list_production.php');

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
		
		<p style="font-size: 15px;font-weight: normal;margin: 15px 0px 0px;">Dear <strong><?php echo ucwords($full_name); ?></strong>,</p>
		<p>Your information has been recorded.<br>Our team will get in touch with you shortly.</p>
		
		<p style="margin-bottom: 0px;">Thanks,<br><strong>Carmel Heights</strong></p>
	</div>
</body>
</html>


<?php
$email_message = ob_get_clean();
$subject = 'New Lead - ' . ucwords($type);

//require_once('emails_list_testing.php');
require_once('emails_list_production.php');

send_email($from, $from_name, $email, ucwords($full_name), 'Thank You', $email_message, '', NULL, NULL);


mysqli_close($con);
//$success_message['success_message'] = "Thank you! Your registration was successfull.";
//header("location:thankyou.html");

$output['error'] = FALSE;
$output['error_messages'] = array();
$output['success'] = TRUE;
$output['success_message'] = "Thank you for your interest.<br>We will get in touch with you soon.";
echo json_encode($output);
exit();
?>
