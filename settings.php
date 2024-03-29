<?php
require_once 'includes/global.inc.php';

//check to see if they're logged in
if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
}

//initialize php variables used in the form
$email = $currentUser->email;
$message = "";

//check to see that the form has been submitted
if (isset($_POST['submit-settings'])) {

    //retrieve the $_POST variables
    $email = $_POST['email'];

    $currentUser->email = $email;
    $currentUser->save();

    $message = "Settings Saved<br/>";
}

//If the form wasn't submitted, or didn't validate
//then we show the registration form again
?>


<?php
//settings.php

$page_title = "Settings";

//Load header  
require_once('./includes/header.php');
?>


<?php echo $message; ?>

<form action="settings.php" method="post">

    E-Mail: <input type="text" value="<?php echo $email; ?>" name="email" /><br/><br/>
    <input type="submit" value="Update" name="submit-settings" />

</form>

<?php require_once('./includes/footer.php'); ?>