<?php

$errorMSG = "";
/* NAME */
if (empty($_POST["name"])) {
    $errorMSG = "<li>Name is required</<li>";
} else {
    $name = $_POST["name"];
}


/* EMAIL 
if (empty($_POST["email"])) {
    $errorMSG .= "<li>Email is required</li>";
} else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $errorMSG .= "<li>Invalid email format</li>";
}else {*/
    $email = $_POST["email"];
//}


/* MSG SUBJECT */

if (empty($_POST["mobile"])) {
    $errorMSG .= "<li>Mobile number is required</li>";
} else if(!validate_mobile($_POST["mobile"])) {
	$errorMSG .= "<li>Invalid mobile number format</li>";
}
else {
    $mobile = $_POST["mobile"];
}


/* MESSAGE */

if (empty($_POST["attendance"])) {
    $errorMSG .= "<li>Attendance selection is required</li>";
} else {
    $attendance = $_POST["attendance"];
}


if (empty($_POST["totalattendee"])) {
    $errorMSG .= "<li>Select Total Guest attending</li>";
} else {
    $totalattendee = $_POST["totalattendee"];
}

if (empty($_POST["attending"])) {
    $errorMSG .= "<li>Select event attending time</li>";
} else {
    $timeattend = $_POST["attending"];
}


if(empty($errorMSG)){

	$ipaddress="";
	if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
	


	$servername = "localhost";
	$username = "rsvpuser";
	$password = "rsvp#2009#";
	$dbname = "RSVP";


	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}


	$query = mysqli_query($conn, "SELECT * FROM `rsvp` WHERE IP='".$ipaddress."'");

    if (!$query)
    {
        die('Error: ' . mysqli_error($dbl));
    }

	if(mysqli_num_rows($query) > 0){
		echo json_encode(['code'=>202, 'msg'=>'Your participation has already been recorded. Thank you!']);;
	}else{
		// do something
		if($attendance == "No") {
			$totalattendee=0;
			$timeattend="-";
		}
		
		$sql = "INSERT INTO rsvp ".
               "(IP, email, name,phonenumber,attend,totalguest,timeattend) "."VALUES ".
               "('$ipaddress','$email','$name','$mobile','$attendance','$totalattendee','$timeattend')";

		if ($conn->query($sql) === TRUE) {
			if($attendance == "Yes") {
				$message2= "Thank you! We look forward to seeing you at Carmel Heights.";
			}
			else {
				$message2= "Thank you! We are missing you in this event at Carmel Heights";
			}
		} else {
			$message2= "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
		//$msg = "Name: ".$name.", Email: ".$email.", Mobile: ".$mobile.", Attendance:".$attendance." IP: ".$ipaddress." Attendee: ".$totalattendee." Database: ".$message2;
		$msg=$message2;
		echo json_encode(['code'=>200, 'msg'=>$msg]);
	}
}
else {
	echo json_encode(['code'=>404, 'msg'=>$errorMSG]);
}


function validate_mobile($mobile)
{
    return preg_match('/^[0-9]{10}+$/', $mobile);
}
?>