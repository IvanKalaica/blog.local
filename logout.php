<?php
//logout.php
require_once 'includes/global.inc.php';

$usersController = new UsersController();
$usersController->logout();

header("Location: index.php");

?>