<?php
	// Constants
	define("TITLE","IDK");
	
	// Custom Variables
    $my_name = "bertu";
	$lesson_sum = 7;
	
	// Custom Variables
    $species = "bird";
    $native_lang = "german";
    $earthYear = 25;

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
			
			<h1>Get Your Hands Dirty: <small><!-- TITLE --></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">

                <?php
                
                    if($species=="bird"){
                        echo "<p>you are bird<p>";
                    }elseif($species=="human"){
                        echo "<p>you are human <p>";
                    }else{
                        echo "<p>you are alien<p>";
                    }
                
                ?>

            <h2>Your Example 1</h2>
            <?php
                
                if($earthYear==20){
                    echo "<p>you are 20 earth<p>";
                }elseif($earthYear< 20){
                    echo "<p>you are not bigger than 20 <p>";
                }else{
                    echo "<p>you are big boi <p>";
                }
            
            ?>

        <h2>Your Example 2</h2>
            <?php
                
                if($native_lang=="german"){
                    echo "<p>you are german<p>";
                }elseif($species=="black rhino"){
                    echo "<p>black rhino<p>";
                }else{
                    echo "<p>no german and rhino <p>";
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
