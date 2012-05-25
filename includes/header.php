<?php require_once('./includes/head.php'); ?> 

<body>
    <div id="wrapper">
        <div id="header">
            <div id="navigation">
                <ul id="navlist">  

                    <?php $current_page = substr(str_replace('.php', '', $_SERVER['REQUEST_URI']), 1) ?>

                    <li <?php if ($current_page == "index") { ?>id="active"<?php } ?> class="home"><a href="<?php echo getSiteBaseUrl('index.php') ?>">Home</a></li>  
                    <li <?php if ($current_page == "about") { ?>id="active"<?php } ?> class="about"><a href="<?php echo getSiteBaseUrl('about.php') ?>">About</a></li>  

                    <?php if (isset($_SESSION['logged_in'])) : ?>
                        <?php $user = unserialize($_SESSION['user']); ?>
                        <li <?php if ($current_page == "settings") { ?>id="active"<?php } ?> class="settings"><a href="<?php echo getSiteBaseUrl('settings.php') ?>">Settings</a></li>
                        <li <?php if ($current_page == "logout") { ?>id="active"<?php } ?> class="logout"><a href="<?php echo getSiteBaseUrl('logout.php') ?>">Logout</a></li>
                    <?php else : ?>
                        <li <?php if ($current_page == "register") { ?>id="active"<?php } ?> class="register"><a href="<?php echo getSiteBaseUrl('register.php') ?>">Register</a></li>
                        <li <?php if ($current_page == "login") { ?>id="active"<?php } ?> class="login"><a href="<?php echo getSiteBaseUrl('login.php') ?>">Log In</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <!-- </hr><hr width=100%> -->
        <br></br>
        <h1><?php echo $current_page; ?></h1>