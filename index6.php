<?php
	
	// Constants

	
	// Custom Variables
    $native_lang = "fr";

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <!-- TITLE --></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <!-- LESSON NUMBER -->: <small><!-- TITLE --></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
                <?php
                    if ($native_lang == 'fr'){
                        echo "french";
                    } elseif($native_lang == 'eng'){
                        echo "english";
                    }else{
                        echo "türkçe";
                    }
                ?>

			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<!-- YEAR --> - <!-- NAME --></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
