<?php

require_once 'classes/User.class.php';
require_once 'classes/Post.class.php';
require_once 'classes/UserTools.class.php';
require_once 'classes/DB.class.php';

function getSiteBaseUrl($path) {
    return 'http://blog.local/' . $path;
}

//connect to the database
$db = new DB();
$db->connect();

//initialize UserTools object
$userTools = new UserTools();

//start the session
session_start();

$isLoggedIn = isset($_SESSION['logged_in']);

//refresh session variables if logged in
if ($isLoggedIn) {
    $user = unserialize($_SESSION['user']);
    $_SESSION['user'] = serialize($userTools->get($user->id));
}
?>
