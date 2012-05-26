<?php require_once './includes/global.inc.php'; ?>

<?php

$page_title = "Dashboard";
 
require_once('./includes/header.php');
?>

<!-- Display posts here. -->

<?php
$postsController = new PostsController();
$posts = $postsController->getAllPosts(null);
?>

<?php if (count($posts) > 0): ?>
    <h2>Posts</h2>
    <ul>
        <?php foreach ($posts as $post): ?>
            <li>
                <a href="<?php echo getSiteBaseUrl('post.php') ?>?id=<?php echo $post->id; ?>" ><?php echo $post->title; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<!-- Display users here. -->

<?php
$usersController = new UsersController();
$users = $usersController->getAllUsers(null);
?>

<?php if (count($users) > 0): ?>
    <h2>Users</h2>
    <ul>
        <?php foreach ($users as $user): ?>
            <li>
                <a href="<?php echo getSiteBaseUrl('profile.php') ?>?id=<?php echo $user->id; ?>" ><?php echo $user->username; ?></a>
            </li>
        <?php endforeach; ?>
    </ul> 
<?php endif; ?>

<h2>Settings</h2>
<ul>
    <li>
        <a href="<?php echo getSiteBaseUrl('settings.php') ?>">Change your email address</a>
    </li>
</ul>