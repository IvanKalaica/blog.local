<?php require_once 'includes/global.inc.php'; ?>

<?php
//profile.php
$page_title = "Post";
//Load header  
require_once('./includes/header.php');

$id = $_GET["id"];
$db = new DB();
$result = $db->select('posts', "id = $id");
$post = new Post($result);

$userTools = new UserTools();
$user = $userTools->getUserForPostId($id);

?>

<div>Created at : <?php echo $post->created_at; ?></div>
<div>Author : <?php echo $user->username; ?></div>
<h2><?php echo $post->title; ?></h2>
<div><?php echo $post->content; ?></div>

<?php require_once('./includes/footer.php'); ?> 