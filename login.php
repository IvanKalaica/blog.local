<?php
//login.php

require_once 'includes/global.inc.php';

$error = "";
$username = "";
$password = "";

//check to see if they've submitted the login form
if (isset($_POST['submit-login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $usersController = new UsersController();
    if ($usersController->login($username, $password)) {
        //successful login, redirect them to a page
        header("Location: index.php");
    } else {
        $error = "Incorrect username or password. Please try again.";
    }
}
?>

<?php
//login.php

$page_title = "Login";

//Load header  
require_once('./includes/header.php');
?>

<?php
if ($error != "") {
    echo $error . "<br/>";
}
?>


Don't have account? Register <a href="<?php echo getSiteBaseUrl('register.php') ?>">here</a>!
<br></br>

<form action="login.php" method="post">
    Username: <input type="text" name="username" value="<?php echo $username; ?>" /><br/>
    Password: <input type="password" name="password" value="<?php echo $password; ?>" /><br/>
    </br>
    <input type="submit" value="Login" name="submit-login" />
</form>

<?php require_once('./includes/footer.php'); ?> 