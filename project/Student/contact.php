<?php
define("TITLE", "contact");
include('includes/header.php');

?>

<div id="contact">
    <h1>Get in touch</h1>
    <form method="POST" action="">
        <label for="name">
            Your Name
        </label>
        <input type="text" id="name" name="name">
        <label for="email">
            Your mail
        </label>
        <input type="text" id="email" name="email">
        <label for="message">
        Message
        </label>
        <textarea type="text" id="message" name="message"></textarea>
        
        <input type="checkbox" id="subscribe" name="subscribe">
        <label for="subscribe">
            Subscribe
        </label>
        <input type="submit" class="button next" name="contact_submit" value="Send Message" >
    </form>
</div>

<?php
include('includes/footer.php');
?>
