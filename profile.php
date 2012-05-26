<?php require_once 'includes/global.inc.php'; ?>

<?php

$usersController = new UsersController();
$userData = $usersController->get($_GET["id"]);

$page_title = $userData->username."'s profile";
 
require_once('./includes/header.php');

?>

You are on profile with id <?php echo $userData; ?>!

<?php require_once('./includes/footer.php'); ?> 