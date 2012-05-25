<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <title><?php echo $page_title; ?></title>  

        <link rel="stylesheet" href="styles/global.css" type="text/css" />
    </head> 
    <body>
        <div id="wrapper">
            <div id="header">
                <div id="navigation">
                    <ul id="navlist">  
                        
                        <?php $current_page = substr(str_replace('.php', '', $_SERVER['REQUEST_URI']), 1) ?>
                        <!-- <pre><?php print_r($_SERVER) ?></pre> -->
                         
                        
                        <li <?php if ($current_page == "index") { ?>id="active"<?php } ?> class="home"><a href="index.php">Home</a></li>  
                        <li <?php if ($current_page == "about") { ?>id="active"<?php } ?> class="about"><a href="about.php">About</a></li>  

                        <?php if (isset($_SESSION['logged_in'])) : ?>
                            <?php $user = unserialize($_SESSION['user']); ?>
                            <li <?php if ($current_page == "settings") { ?>id="active"<?php } ?> class="settings"><a href="settings.php">Settings</a></li>
                            <li <?php if ($current_page == "logout") { ?>id="active"<?php } ?> class="logout"><a href="logout.php">Logout</a></li>
                        <?php else : ?>
                            <li <?php if ($current_page == "register") { ?>id="active"<?php } ?> class="register"><a href="register.php">Register</a></li>
                            <li <?php if ($current_page == "login") { ?>id="active"<?php } ?> class="login"><a href="login.php">Log In</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <!-- </hr><hr width=100%> -->
            <br></br>