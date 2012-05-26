<?php require_once 'includes/global.inc.php'; ?>

<?php
//profile.php

$id = $_GET["id"];

$postsController = new PostsController();
$postData = $postsController->get($id);

$usersController = new UsersController();
$userData = $usersController->getUserForPostId($id);

$page_title = $postData->title;
require_once('./includes/header.php');
?>

<div>Created at : <?php echo $postData->created_at; ?></div>
<div>Author : <?php echo $userData->username; ?></div>

<?php
/*
  <h2><?php echo $post->title; ?></h2>
  <div><?php echo $post->content; ?></div>
 */
?>

<?php require_once('./markitup/markitup_template.php'); ?> 

<?php require_once('./includes/footer.php'); ?> 