<!doctype html>

<html>

<head>

	<noscript>
		<meta http-equiv="refresh" content="0; url=http://qualflow.com/athraigh.php" />
	</noscript>

	<script>
		if (window.location.href== "http://qualflow.com/athraighme.php")
		{
			window.location.href = 'http://qualflow.com/athraigh.php';
		}
	</script>

	<meta name="robots" content="noindex">
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<title>Qualflow | Edit</title>

	<link rel="stylesheet" href="css/foundation.css" />
	<script src="js/vendor/modernizr.js"></script>

</head>

<body>

	<!-- PHP For Writing Text To .txt File -->
	
	<?php

	// News Page

	$myfile ="edit-news-body-one.txt";
	if (isset($_POST['NewBody'])) 
	{
	
    		$newData = nl2br(htmlspecialchars($_POST['NewBody']));
    		$handle = fopen($myfile, "w");
    		fwrite($handle, $newData);
    		fclose($handle);
    		
	}

	$myfile2 ="edit-news-title-one.txt";
	if (isset($_POST['NewTitle'])) 
	{
	
    		$newData = nl2br(htmlspecialchars($_POST['NewTitle']));
    		$handle = fopen($myfile2, "w");
    		fwrite($handle, $newData);
    		fclose($handle);
    		
	}

	$myfile3 ="edit-news-date-one.txt";
	if (isset($_POST['NewDate'])) 
	{
    		$newData = nl2br(htmlspecialchars($_POST['NewDate']));
    		$handle = fopen($myfile3, "w");
    		fwrite($handle, $newData);
    		fclose($handle);
	}
	
	// End News Page

	// Home Page Story One
	
	$myfile4 ="edit-home-body-one.txt";
	if (isset($_POST['NewBodyHomeOne'])) 
	{
    		$newData = nl2br(htmlspecialchars($_POST['NewBodyHomeOne']));
    		$handle = fopen($myfile4, "w");
    		fwrite($handle, $newData);
    		fclose($handle);
	}

	$myfile5 ="edit-home-title-one.txt";
	if (isset($_POST['NewTitleHomeOne'])) 
	{
    		$newData = nl2br(htmlspecialchars($_POST['NewTitleHomeOne']));
    		$handle = fopen($myfile5, "w");
    		fwrite($handle, $newData);
    		fclose($handle);
	}
	
	// End Home Page Story One

	// Home Page Story Two
	$myfile6 ="edit-home-body-two.txt";
	if (isset($_POST['NewBodyHomeTwo'])) 
	{
		$newData = nl2br(htmlspecialchars($_POST['NewBodyHomeTwo']));
		$handle = fopen($myfile6, "w");
		fwrite($handle, $newData);
		fclose($handle);
	}

	$myfile7 ="edit-home-title-two.txt";
	if (isset($_POST['NewTitleHomeTwo'])) 
	{
		$newData = nl2br(htmlspecialchars($_POST['NewTitleHomeTwo']));
		$handle = fopen($myfile7, "w");
		fwrite($handle, $newData);
		fclose($handle);
	}

	// End Home Page Story Two

	?>
	
<!-- End PHP For Writing Text to .txt File -->

<!-- For Tablet and Desktop Only -->

	<div class="show-for-medium-up">
	
		<!-- Navigation -->
		
		<nav class="top-bar" data-topbar>
  			<section class="top-bar-section">
    				<ul class="right">
      					<li class="divider"></li>
      
      					<!-- Sign-Out -->
      					
      					<li class="has-form">
      						<a href="athraigh.php" class="button" name="SignOut">Sign-Out</a>
      					</li>
      					
					<li class="divider">
					</li>
    				</ul>
  			</section>
		</nav>

		<!-- End Navigation -->

		<!-- Top Banner -->
		
		<div class="topbannerrest">
  			<div class="row">
    				<div class="medium-12 medium-12 columns">
      					<img src="css/images/qualflow-logo.PNG" alt="Qualflow Logo">
				</div>
			</div>
		</div>
		
		<!-- End Top Banner -->

		<!-- Title -->
		
		<div class="row">
			<div class="medium 12-columns">
				<br>
				<h1>News Editor</h1>
				<hr>
			</div>
		</div>
		
		<!-- End Title -->

		<form action="athraighme.php" method="post">
			
			<!-- Edit Field for Home Page Story One -->
		
		
			<div class="row">
				<div class="medium-12 columns">
					<h4>Home Page</h4>
					<h5 class="subheader">Story One</h5>
				</div>
			</div>
  
			<div class="row">
				<div class="medium-12 columns">
			
					<!-- News Title -->
					<?php $HomeT1 = file_get_contents($myfile5); ?>
					<input type="text" name="NewTitleHomeOne" value="<?php echo $HomeT1; ?>">
				</div>
			</div>

			<div class="row">
				<div class="medium-12 columns">
					<!-- News Story -->
					<?php $HomeS1 = file_get_contents($myfile4); ?>
					<textarea type="text" name="NewBodyHomeOne"><?php echo $HomeS1; ?></textarea>
				</div>
			</div>
			
			<!-- End Edit Field for Home Page -->

			<!-- Edit Field for Home Page Story Two -->

			<div class="row">
				<div class="medium-12 columns">
					<h4>Home Page</h4>
					<h5 class="subheader">Story Two</h5>
				</div>
			</div>
  
			<div class="row">
				<div class="medium-12 columns">
				
      					<!-- News Title -->
      					
      					<?php $HomeT2 = file_get_contents($myfile7); ?>
      					<input type="text" name="NewTitleHomeTwo" value="<?php echo $HomeT2; ?>">
    				</div>
  			</div>
  
  			<div class="row">
    				<div class="medium-12 columns">
      
      					<!-- News Story -->
      					
      					<?php $HomeS2 = file_get_contents($myfile6); ?>
      					<textarea type="text" name="NewBodyHomeTwo"><?php echo $HomeS2; ?></textarea>
    				</div>
  			</div>
  
  			<div class="row">
    				<div class="medium-12 columns">
					<!-- Submit -->
					<button class="ultanbutton button inline-list right" name="Submit" type="submit">Submit &amp; Exit</button>
				</div>
			</div>
			
			<!-- End Edit Field for Home Page -->
			
		</form>


		<!-- Edit Field for News Page -->
		
		<form action="athraighme.php" method="post">
			<div class="row">
				<div class="medium-12 columns">
					<h4>News Page</h4>
				</div>
			</div>

			<div class="row">
				<div class="medium-12 columns">
				
					<!-- News Title -->
					
					<?php $NewsT = file_get_contents($myfile2); ?>
					<input type="text" name="NewTitle" value="<?php echo $NewsT; ?>">
    				</div>
  			</div>
  
  			<div class="row">
    				<div class="medium-12 columns">
    				
      					<!-- News Date -->
      					
      					<?php $NewsD = file_get_contents($myfile3); ?>
      					<input type="text" name="NewDate" value="<?php echo $NewsD; ?>">
    				</div>
  			</div>
  			
  			<div class="row">
    				<div class="medium-12 columns">
    				
      					<!-- News Story -->
      					
      					<?php $NewsS = file_get_contents($myfile); ?>
      					<textarea type="text" name="NewBody"><?php echo $NewsS; ?></textarea>
    				</div>
  			</div>
  			
  			<div class="row">
    				<div class="medium-12 columns">
					
					<!-- Submit -->
					
					<button class="ultanbutton button inline-list right" name="Submit" type="submit">Submit &amp; Exit</button>
				</div>
			</div>
		</form>
		
		<!-- End Edit Field for News Page -->

		<!-- Foundation Script -->
		
    		<script src="js/vendor/jquery.js"></script>
    		<script src="js/foundation.min.js"></script>
    		<script>
      			$(document).foundation();
    		</script>
    		
		<!-- End Foundation Script -->
	</div>

</body>

</html>
