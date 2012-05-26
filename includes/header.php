<?php require_once('./includes/head.php'); ?> 

<?php $current_page = substr(str_replace('.php', '', $_SERVER['REQUEST_URI']), 1) ?>

<body>
    <div id="wrapper">
        <div id="header">
            <div id="navigation">
                <ul id="navlist">  

                    <li <?php if ($current_page == "index") { ?>id="active"<?php } ?> class="home"><a href="<?php echo getSiteBaseUrl('index.php') ?>">Home</a></li>  
                    <li <?php if ($current_page == "about") { ?>id="active"<?php } ?> class="about"><a href="<?php echo getSiteBaseUrl('about.php') ?>">About</a></li>  

                    <?php if ($isLoggedIn) : ?>
                        <li <?php if ($current_page == "dashboard") { ?>id="active"<?php } ?> class="dashboard"><a href="<?php echo getSiteBaseUrl('dashboard.php') ?>">Admin</a></li>
                    <?php endif; ?>

                </ul>
            </div>
        </div>
    </div>

    </br> </br>

    <?php if ($isLoggedIn) : ?>
        <a href="<?php echo getSiteBaseUrl('logout.php') ?>">Logout</a>
    <?php else : ?>
        <?php if ($current_page != "login") { ?> <a href="login.php">Log In</a><?php } ?>
    <?php endif; ?>

    </br><h1><?php echo $current_page; ?></h1>

    </hr><hr width=100%>

