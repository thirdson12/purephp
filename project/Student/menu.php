<?php
define("TITLE","Menu");
    include('includes/header.php');

?>

<div id="menu-items">
    <h1>Menu</h1>
    <p>Our Team</p>
    <p><em>click to learn more </em></p>
    <hr>
    <ul>
        <?php
            foreach($menuItems as $dish => $items) {
        ?> 
            <li><a href="dish.php?item=<?php echo $dish;?>"><?php echo $items['Title'];?></a>  <sup>$</sup><?php echo $items['price'];?></li>
        <?php
            }
        ?>
    </ul>
</div>


<?php
    include('includes/footer.php');

?>
