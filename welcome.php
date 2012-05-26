<?php
//welcome.php

require_once 'includes/global.inc.php';

//check to see if they're logged in
if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
}

?>

<?php
//settings.php

$page_title = "Welcome";

//Load header  
require_once('./includes/header.php');
?>

<title>Welcome <?php echo $currentUser->username; ?></title>
Hey there, <?php echo $currentUser->username; ?>. You've been registered and logged in. Welcome! <a href="logout.php">Log Out</a> | <a href="index.php">Return to Homepage</a>

<?php require_once('./includes/footer.php'); ?>