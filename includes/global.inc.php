<?php

require_once 'classes/User.class.php';
require_once 'classes/Post.class.php';
require_once 'classes/UsersController.class.php';
require_once 'classes/PostsController.class.php';
require_once 'classes/DB.class.php';

function getSiteBaseUrl($path) {
    return 'http://blog.local/' . $path;
}

//connect to the database
$db = new DB();
$db->connect();

//initialize UsersController object
$usersController = new UsersController();

//start the session
session_start();

$isLoggedIn = isset($_SESSION['logged_in']);
$currentUser = null;

//refresh session variables if logged in
if ($isLoggedIn) {
    $currentUser = unserialize($_SESSION['user']);
    $_SESSION['user'] = serialize($usersController->get($currentUser->id));
}
?>
