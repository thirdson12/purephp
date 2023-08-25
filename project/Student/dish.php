<?php
define("TITLE", "Dish");
include('includes/header.php');

function strip_bad_chars($input){
    $output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
    return $output;
}

if (isset($_GET['items'])) {
    $menuItems = strip_bad_chars($_GET['items']);
    
    if (isset($menuItem[$menuItems])) { 
        $dish = $menuItem[$menuItems];
    } else {
        echo "something wrong.";
        exit; 
    }
}
?>

<hr>

<div id="dish">
    <?php print_r($menuItems) ?>
    <h1><?php echo $menuItems['Title'];?> <span class="price">$<?php echo $menuItems['price'];?> </span></h1>
    <p><?php echo $menuItems['blurp'];?></p>
    <br>
    <p><strong><?php echo $menuItems['drink'];?></strong></p>
</div>

<?php
include('includes/footer.php');
?>
