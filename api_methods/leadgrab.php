<?php
date_default_timezone_set("Asia/Kolkata");
include_once('functions.php');
$full_name  = get_field('last_name');
$email      = get_field('email');
$phone    = get_field('mobile');
$leadutmsource   = get_field('USOURCE');
$leadutmmedium   = get_field('UMEDIUM');
$leadutmcampaign = get_field('UCAMPAIGN');
$leadutmcontent  = get_field('UCONTENT');
$leadutmterm     = get_field('UTERM');
$campaign_name     = get_field('campaign_name');
$Thankyou_Page   = get_field('Thankyou_Page');
$date 			= date('Y-m-d H:i:s', time());
$post_dump		= $_POST;
$post_dump 		= json_encode($post_dump);
$post_dump 		= $post_dump;
$form_page 		= get_form_page_url();
$type = "Carmel Heights Website | New Enquiry";
$ip = $_SERVER['REMOTE_ADDR'];
$page_url = $form_page;


if(empty($leadutmsource)){
	$leadutmsource="Website";
}
else{
	$leadutmsource=$leadutmsource;
}
if(empty($leadutmmedium)){
	$leadutmmedium="Web";
}
else{
	$leadutmmedium=$leadutmmedium;
}

if(empty($leadutmcampaign)){
	$leadutmcampaign=$campaign_name;
}
else{
	$leadutmcampaign=$leadutmcampaign;
}

/******** CURL method for Leadstore *********/ 		
$input_params=array(				
	'firstname'=> $full_name,
	'email'=> $email,
	'phone'=> $phone,
	'phone_country_code'=> "91",
	'city'=> '',
	'message'=>'',
	'udf1'=> '' . $message,
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
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://leadstore.in/capture_leads/capture/58");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$postvars);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
curl_close ($ch);
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
			<p style="margin: 0 0 6px;"><strong>mobile: </strong><?php echo $phone; ?></p>
			<p style="margin: 0 0 6px;"><strong>Message: </strong><?php echo $message; ?></p>
		</div>
		
		<p style="margin-bottom: 0px;">Thanks,<br><strong>Admin</strong></p>
	</div>
</body>
</html>
<?php
$email_message = ob_get_clean();
$subject = 'New Lead - ' . ucwords($type);
include_once('emails_list_testing.php');
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
		<p>Thank you for reaching out to us.</p>
		<p>Located on the Whitefield main road, right next to the Forum Neighbourhood Mall, Carmel Heights is a premium residential community by Group INCOR. It features a vast array of 2&3-BHK homes with a wide range of floor plans and comes equipped with a host of world-class amenities.</p>
		<p>And now, you have a chance to become a homeowner in Whitefield today and save money!</p>
		<p>Our limited period offer on all spot bookings lets you pay only the basic cost for your home’s square footage and get all the extra costs (reticulated gas, amenity development, legal documentation, and more) free of charge!</p>
		<p>To enquire further, please reach out to our team on +91 8884255557 or write to us at info@carmelheights.in!</p>
		
		<p style="margin-bottom: 0px;">Best regards,<br><strong>Carmel Heights</strong></p>
	</div>
</body>
</html>
<?php
$email_message = ob_get_clean();
$subject = 'New Lead - ' . ucwords($type);
include_once('emails_list_testing.php');
send_email($from, $from_name, $email, ucwords($full_name), 'We appreciate your interest in Carmel Heights', $email_message, '', NULL, NULL);
$Thankyou_Page=isset($Thankyou_Page)?$Thankyou_Page:"";
/*** Reroot API Method ***/
include_once('api.php');
/**** End ****/

if($Thankyou_Page=="")
{
	header("location:/404.html");
}
else
{
	header("location:$Thankyou_Page");
}

?>
