<?php
	$include_validation_scripts = TRUE;
	$seo_page_name = 'rsvp';
?>

<?php include('./header.php'); ?>
 <?php
  echo "<script>";
echo "	var activePage = \"RSVP-link\"\;";
echo "	var activeSubPage = \"RSVP-link\"\;";
echo "</script>";

  //Change the password to match your configuration
 
  $link = mysqli_connect("localhost", "rsvpuser", "rsvp#2009#", "RSVP");
  // Check connection
  if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  echo "<br>";
  
    $sql = "SELECT date,name,email,phonenumber, attend,totalguest,timeattend FROM rsvp";
	$result = $link->query($sql);
		echo "<section><div class='container'>";
		echo "<div class='row-fluid'>";
		
		echo " <center><h2>Bhoomi Puja - RSVP Response List</h2></center><br><br>";
			echo "<div class='col-xs-12'>";
			echo "<div class='table-responsive'>";
			
				echo "<table class='table table-hover table-inverse'>";
				
				echo "<tr>";
				echo "<th>Participating Status</th>";
				echo "<th>Name</th>";
				echo "<th>Mobile</th>";
				echo "<th>Email</th>";
				echo "<th>Time Slot</th>";
				echo "<th>No. of Guests</th>";
				echo "<th>Date Submitted</th>";
				echo "</tr>";
		  
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
							
						echo "<tr>";
						echo "<td>" . $row["attend"] . "</td>";
						echo "<td>" . $row["name"] . "</td>";
						echo "<td>" . $row["phonenumber"] . "</td>";
						echo "<td>" . $row["email"] . "</td>";
						echo "<td>" . $row["timeattend"] . "</td>";
						echo "<td>" . $row["totalguest"] . "</td>";
						echo "<td>" . $row["date"] . "</td>";
						echo "</tr>";			
					}
				} else {
					echo "No entries yet.<br><br>";
				}
				
				echo "</table>";
				echo "</div>";
				echo "</div>";
				echo "</div>";
				echo "</div></section>";
		 // Close connection
  mysqli_close($link);
  ?>
  <?php include('./footer.php'); ?>
