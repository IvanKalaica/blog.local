<?php require_once 'includes/global.inc.php'; ?>

<?php
//index.php

$page_title = "Home";
$current_page = "home";

//Load header  
include_once('./includes/header.php');
?>

<?php if (isset($_SESSION['logged_in'])) : ?>
    <?php $user = unserialize($_SESSION['user']); ?>
    Hello, <?php echo $user->username; ?>. You are logged in. <a href="settings.php">Settings</a>
<?php else : ?>
    You are not logged in. <a href="login.php">Log In</a> | <a href="register.php">Register</a>
<?php endif; ?>

<?php include_once('./includes/footer.php'); ?> 
