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

<?php foreach ($posts as $postData): ?>

    <?php
    $usersController = new UsersController();
    $postUser = $usersController->getUserForPostId($postData->id);
    ?>

    <h2>
        <?php echo $postData->title; ?>
    </h2>

    <div>
        <?php if ($isLoggedIn) { ?>
            <a href="<?php echo getSiteBaseUrl('post.php') ?>?id=<?php echo $postData->id; ?>" >Edit</a>
        <?php } ?>
    </div>

    <div>
        Created at : 
        <?php echo $postData->created_at; ?>
    </div>

    <div>
        Author : 
        <a href="<?php echo getSiteBaseUrl('profile.php') ?>?id=<?php echo $postUser->id; ?>" ><?php echo $postUser->username; ?></a>
    </div>

    <div>
        <?php echo $postData->content; ?>
    </div>

    </hr><hr width=100%>

<?php endforeach; ?>

<?php require_once('./includes/footer.php'); ?> 
