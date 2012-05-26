<?php require_once 'includes/global.inc.php'; ?>

<?php
//profile.php

$userTools = new UserTools();
$user = $userTools->get($_GET["id"]);

$page_title = $user->username."'s profile";
//Load header  
require_once('./includes/header.php');

?>

You are on profile with id <?php echo $user; ?>!

<?php require_once('./includes/footer.php'); ?> 