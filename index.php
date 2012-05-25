<?php require_once 'includes/global.inc.php'; ?>

<?php
//index.php

$page_title = "Home";

//Load header  
require_once('./includes/header.php');
?>

<?php if (isset($_SESSION['logged_in'])) : ?>

    <?php $user = unserialize($_SESSION['user']); ?>

    Hello, <?php echo $user->username; ?>. You are logged in. <a href="<?php echo getSiteBaseUrl('settings.php') ?>">Settings</a>

    <!-- Display users here. -->

    <?php
    $db = new DB();
    $users = $db->select('users', null);
    ?>

    <?php if (count($users) > 0): ?>
        <h2>Users</h2>
        <ul>
            <?php foreach ($users as $user): ?>
                <li>
                    <?php
                    $aUser = new User($user);
                    ?>

                    <a href="<?php echo getSiteBaseUrl('profile.php') ?>?id=<?php echo $aUser->id; ?>" ><?php echo $aUser->username; ?></a>

                    <?php /*
                      <?php foreach ($user as $key => $value): ?>
                      <?php if ($key == 'username') echo $value; ?>
                      <?php endforeach; ?>
                     */ ?>
                </li>
            <?php endforeach; ?>
        </ul> 
    <?php endif; ?>

    <!-- Display posts here. -->

    <?php
    $db = new DB();
    $posts = $db->select('posts', null);
    ?>

    <?php if (count($posts) > 0): ?>
        <h2>Posts</h2>

        <ul>
            <?php foreach ($posts as $post): ?>
                <li>
                    <?php
                    $aPost = new Post($post);
                    ?>

                    <a href="<?php echo getSiteBaseUrl('post.php') ?>?id=<?php echo $aPost->id; ?>" ><?php echo $aPost->title; ?></a>

                </li>
            <?php endforeach; ?>
        </ul> 
    <?php endif; ?>

<?php else : ?>

    You are not logged in. <a href="login.php">Log In</a> | <a href="<?php echo getSiteBaseUrl('register.php') ?>">Register</a>

<?php endif; ?>

<?php require_once('./includes/footer.php'); ?> 
