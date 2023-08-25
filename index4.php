<?php


	define("TITLE","IDK");
	

    $my_name = "bertu";
	$lesson_sum = 7;

	

    $age_group = array("child", "teenager", "adult");


    $handlebarmain = array(
        
            "name" => "alo",
            "creepfactor" => "high 2",
            "age"  => 14
          
    );
	
	// Arrays
	$handlebar = array(
        array(
            "name" => "abaasdaac",
            "creepfactor" => "high",
            "age"  => 14
        ),
        array(
            "name" => "1abaaadheac",
            "creepfactor" => "1high",
            "age"  => 114
        ),
        array(
            "name" => "2abaaabvncc",
            "creepfactor" => "2high",
            "age"  => 124
        ),  
    );
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Get Your Hands Dirty: <?php echo TITLE;?> </title>
		<link href="/assets/styles.css" rel="stylesheet">
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shCore.js"></script>
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shBrushPhp.js"></script>
		<link type="text/css" rel="stylesheet" href="/assets/syntaxhighlighter/styles/shCoreDefault.css"/>
		<script type="text/javascript">SyntaxHighlighter.all();</script>
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Get Your Hands Dirty: <small><!-- TITLE --></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3><?php echo $handlebar[0]["name"];?> from  canada</h3>
				<p><?php echo $handlebar[0]["age"];?> is old</p>
				
				<h3></h3>
				<p></p>
				
				<h3></h3>
				<p></p>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the final example</a>
			
			<div class="navs cf">
				<a href="" class="button prev">Previous Lecture</a>
				<a href="" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<!-- YEAR --> - <!-- YOUR NAME --></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
