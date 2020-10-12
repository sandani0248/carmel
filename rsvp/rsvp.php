<?php
	$include_validation_scripts = TRUE;
	$seo_page_name = 'rsvp';
?>

<?php include('./header.php'); ?>

<script>
	var activePage = "RSVP-link";
	var activeSubPage = "RSVP-link";
</script>

<section>
<div class="container">
<div class="row">
<div class="span6" style="float: none; margin: 0 auto;">
<h2>Bhoomi Puja - RSVP</h2>
   <div class="form-group row">
		<div class="alert alert-danger display-error col-xs-12 col-md-4" id="error" style="display: none;width:100% !important;">
		</div>
	</div>
	<div class="form-group row">
		<div class="alert alert-success display-success col-xs-12 col-md-4" style="display: none;width:100% !important;">
		</div>
	</div>
	<div class="form-group row">
		<div class="alert alert-warning display-warning col-xs-12 col-md-4" style="display: none;width:100% !important;">
		</div>
	</div>

	<form role="form" id="rsvpForm" class="contact-form" data-toggle="validator" class="shake">
    <div class="form-group row">
      <div class="controls col-xs-9 col-md-4">
	  <label for="name">Name: <span style="color:red">*</span></label>
        <input type="text" id="name" class="form-control" placeholder="Name">
      </div>
    </div>
    <div class="form-group row">
      <div class="controls  col-xs-9 col-md-4">
	  <label for="email">Email:</label>
        <input type="email" class="email form-control" id="email" placeholder="Email" >
      </div>
    </div>
    <div class="form-group row">
      <div class="controls  col-xs-9 col-md-4">
	  <label for="Mobile">Mobile: <span style="color:red">*</span></label>
        <input type="text" id="mobile" class="form-control" placeholder="Mobile Number" >
      </div>
    </div>
	<div class="form-group row">
      <div class="controls  col-xs-9 col-md-4">
			<div class="radio">
				<label><input type="radio" name="attendance" value="Yes" checked>Yes, I am glad to participate</label>
			</div>
			<div class="radio">
			  <label><input type="radio" name="attendance" value="No">Sorry, I am unable to participate</label>
			</div>
      </div>
    </div>
	<div class="form-group row">
		<div class="controls  col-xs-9 col-md-4">	
		<label for="totalattendee">No. of Guests accompanying:</label>
			<select class="form-control" name="totalattendee" id="totalattendee">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
			</select>
		</div>
	</div> 
	
	<div class="form-group row">
		<div class="controls  col-xs-9 col-md-4">	
			<label for="totalattendee">Time slot preference:</label>
			<select class="form-control" name="attending" id="attending">
				<option>10:00 AM - 03:00 PM</option>
				<option>03:00 PM - 07:00 PM</option>
			</select>
		</div>
	</div> 
    <button type="submit" id="submit" class="btn btn-success"><i class="fa fa-check"></i> Submit</button>

  </form>

</div>
</div>
</div>
</section>

<?php include('./footer.php'); ?>
