<?php
	
	// Constants
	define("TITLE","IDK");
	
	// Custom Variables
    $my_name = "bertu";
	$lesson_sum = 7;
	
	// Moustache Associative Array
    $handlebar = array(
        "name" => "abaaac",
        "creepfactor" => "high",
        "avggrowthdays"  => 14
    );
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE;?> </title>
		<link href="/assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson_sum;?>: <small><?php echo TITLE;?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
			
				<h2>The <?php echo $handlebar["name"];?>  Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo $handlebar["creepfactor"];?></strong> and takes <strong><?php echo $handlebar["avggrowthdays"];?> days</strong> to grow on average.</strong></p>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<!-- YEAR --> - <!-- YOUR NAME --></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
