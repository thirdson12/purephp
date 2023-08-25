<?php

// Constants
define("TITLE", "Intro to Functions");

// Custom Variables
$myName    = "Bertud asd";
$lessonNum    = 23;

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP <?php echo TITLE; ?></title>
    <link href="../assets/styles.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <a href="/" title="Back to directory" id="logo">
            <img src="../assets/img/logo.png" alt="PHP">
        </a>

        <h1>Tutorial <?php echo $lessonNum; ?>: <small><?php echo TITLE; ?></small></h1>
        <hr>

        <h2>Your Example</h2>

        <div class="sandbox">

            <h3>Using <code>sort()</code></h3>
            <?php
            $handlebar = array(
                "a", "b", "ab", "cb"
            );
            sort($handlebar);
            foreach ($handlebar as $deneme)
                echo $deneme, "<br>";
            ?>

            <h3>Using <code>rsort()</code></h3>
            <?php

            // your code here
            $handlebar1 = array(
                "as", "be", "ab", "cb"
            );
            rsort($handlebar1);
            foreach ($handlebar1 as $deneme1)
                echo $deneme1, "<br>";
            ?>

            <h3>Using <code>strtolower()</code></h3>
            <?php

            // your code here
            $handlebar12 =
                "AaaaASDsbsdSAaASDbcASDb";

            $handlebar12 = strtolower($handlebar12);

            echo $handlebar12, "<br>";

            ?>

            <h3>Using <code>sha1()</code></h3>
            <?php

            // your code here
            $hash = "AaaaASDsbsdSAaASDbcASDb";
            echo $hash, "<br>";
            $hash = sha1($hash);

            echo $hash, "<br>";

            ?>

            <?php
            function Myfunc()
            {
                echo "deneme deneme test test<br>";
            }
            $test = false;
            if ($test == true) {
                Myfunc();
            } else {
                echo "bum<br>";
            }
            Myfunc();
            ?>

            <?php
            function newmulti($val1,$val2)
            {
               
                 $product = $val1*$val2;
                 echo $product;
            }

            newmulti(11,2);
            ?>

        </div><!-- end sandbox -->

        <a href="index.php" class="button">Back to the lecture</a>

        <hr>

        <small>&copy;<?php echo date('Y'); ?> - <?php echo $myName; ?></small>
    </div><!-- end wrapper -->

    <div class="copyright-info">
        <?php include('../assets/includes/copyright.php'); ?>
    </div><!-- end copyright-info -->
</body>

</html>