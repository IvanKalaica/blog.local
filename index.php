<?php require_once 'includes/global.inc.php'; ?>

<?php
//index.php

$page_title = "Home";

//Load header  
require_once('./includes/header.php');
?>

<?php if ($isLoggedIn) : ?>

    Hello, <?php echo $currentUser->username; ?>. You are logged in.

<?php else : ?>


<?php endif; ?>

<?php
$postsController = new PostsController();
$posts = $postsController->getAllPosts(null);
?>

<?php foreach ($posts as $post): ?>

    <?php
    $usersController = new UsersController();
    $postUser = $usersController->getUserForPostId($post->id);
    ?>

    <h2>
        <?php echo $post->title; ?>
    </h2>

    <div>
        <?php if ($isLoggedIn) { ?>
            <a href="<?php echo getSiteBaseUrl('post.php') ?>?id=<?php echo $post->id; ?>" >Edit</a>
        <?php } ?>
    </div>

    <div>
        Created at : 
        <?php echo $post->created_at; ?>
    </div>

    <div>
        Author : 
        <a href="<?php echo getSiteBaseUrl('profile.php') ?>?id=<?php echo $postUser->id; ?>" ><?php echo $postUser->username; ?></a>
    </div>

    <div>
        <?php echo $post->content; ?>
    </div>

    </hr><hr width=100%>

<?php endforeach; ?>

<?php require_once('./includes/footer.php'); ?> 
