<?php
define("TITLE","Teams");
    include('includes/header.php');

?>


<div id="team-members" class="cf">
    <h1>Our teams</h1>
<hr>
<?php
    foreach($teamMember as $member){

?>
<div class=""member>
    <img src="/deneme/project/student/img/<?php echo $member['img'];?>" alt="<?php echo $member['name'];?>">
    <h2><?php echo $member['name'];?></h2>
    <p><?php echo $member['bio'];?></p>
</div>
<?php
    }
?>
</div>

<?php include('includes/footer.php');?>