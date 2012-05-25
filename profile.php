<?php require_once 'includes/global.inc.php'; ?>

<?php
//profile.php
$page_title = "Profile";
//Load header  
require_once('./includes/header.php');

$userTools = new UserTools();
$user = $userTools->get($_GET["id"]);
?>

You are on profile with id <?php echo $user; ?>!

<?php require_once('./includes/footer.php'); ?> 