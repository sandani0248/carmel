<?php
$userName=$full_name;
$userPhone=$phone;
$userEmail=$email;
$fields=array (
  'userName' =>$userName,
  'userPhone' =>$userPhone,
  'userPhoneCode' =>'91',
  'alternatePhone' =>'',
  'alternatePhoneCode' =>'',
  'userEmail' =>$userEmail,
  'leadStatus' =>'Hot',
  'projectNames' =>'Carmel Heights',
  'gender' => '',
  'clientDetails' => 
  array (
    'locationOfWork' => '',
    'companyName' => '',
    'designation' => '',
    'industry' => '',
  ),
  'dob' => '',
  'comment' => '',
);

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.reroot.in/api/external/quick-registration",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS =>json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "x-access-token: 205e2dbb-7e95-4082-be23-dcedfc1b37de",
    "Content-Type: application/json",
  ),
));

$response = curl_exec($curl);
curl_close($curl);
$lead_details=array(
"userName"=>$userName,
"userEmail"=>$userEmail,
"userPhone"=>$userPhone,
"userPhoneCode"=>"91"
);
$lead_details=json_encode($lead_details);
$log_data="Lead Details: $lead_details ----- Return Msg: $response";
error_log($log_data);




