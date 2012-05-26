<?php require_once 'includes/global.inc.php'; ?>

<?php
//index.php

$page_title = "Home";

//Load header  
require_once('./includes/header.php');
?>

<?php if (isset($_SESSION['logged_in'])) : ?>

    <?php $user = unserialize($_SESSION['user']); ?>

    Hello, <?php echo $user->username; ?>. You are logged in.

<?php else : ?>

    

<?php endif; ?>

</br>
<br>
Display posts here...
</br>

<?php require_once('./includes/footer.php'); ?> 
