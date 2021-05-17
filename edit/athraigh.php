<!doctype html>

<html>

<head>

	<meta name="robots" content="noindex">
  	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  	<title>Qualflow | Edit</title>

  	<link rel="stylesheet" href="css/foundation.css"/>

</head>

<body>

<!-- PHP to Check Log-In Credentials and Log-In -->

	<?php
  	
  	$user = $_POST['user'];
  	$pass = $_POST['pass'];

  	if($user == "Qualflow" && $pass == "MonkeyMagicPass100")
	{
        	include("athraighme.php");
	}
	else
	{
    		if(isset($_POST))
	{?>

		<!-- HTML to Display if Not Logged In (i.e. Log-In Page) -->

		<!-- For Tablet and Desktop Only -->

		<div class="show-for-medium-up">
		
		<!-- Top Banner -->
		
			<div class="topbarstyle">
			</div>
			
			<div class="topbannerrest">
				<div class="row">
					<div class="medium-12 columns">
						<img src="css/images/qualflow-logo.PNG" alt="Qualflow Logo">
					</div>
  				</div>
			</div>	
						
			<!-- End Top Banner -->

			<form method="POST" action="athraigh.php">
				<div class="row">
					<br><br>
		
					<div class="medium-1 columns">
						<label class="inline">Username</label>
					</div>

					<div class="medium-11 columns">
      						
      						<!-- Username -->
      						
						<input type="text" name="user" placeholder="Your Website Username Here">
						
    					</div>
  				</div>

				<div class="row">
					<div class="medium-1 columns">
						<label class="inline">Password</label>
					</div>

					<div class="medium-11 columns">
					
						<!-- Password -->
						
						<input type="password" name="pass" placeholder="Your Password Here">
					</div>
  				</div>

				<div class="row">
					<div class="medium-12 columns">
				
						<!-- Log-In -->
						
						<input type="submit" class="ultanbutton button right" value="Log-In" name="submit">
					</div>
				</div>

				<div class="row">
					<div class="medium-12 columns">
						<label>Note: JavaScript Must be Enabled</label>
					</div>
				</div>
			</form>
		</div>
	<?}
	}
	?>
	
<!-- End PHP & HTML to Display if Not Logged-In -->

	<!-- Foundation Script -->

	<script src="js/vendor/jquery.js"></script>
	<script src="js/foundation.min.js"></script>
	<script>
		$(document).foundation();
	</script>
	
	<!-- End Foundation Script -->

</body>

</html>
