<?php require_once 'includes/global.inc.php'; ?>

<?php
//profile.php
//check to see if they're logged in
if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
}

$id = $_GET["id"];

$postsController = new PostsController();
$post = $postsController->get($id);

$usersController = new UsersController();
$userData = $usersController->getUserForPostId($id);

$page_title = $post->title;

//check to see that the form has been submitted
if (isset($_POST['submit-post'])) {

    //retrieve the $_POST variables
    $postContent = $_POST['post-content'];

    $post->content = $postContent;
    $post->save();

    $message = "Changes Saved<br/>";
}

require_once('./includes/header.php');
?>

<div>Created at : <?php echo $post->created_at; ?></div>
<div>Author : <?php echo $userData->username; ?></div>

<?php echo $message; ?>

<form action=<?php echo 'post.php?id=' . $post->id; ?> method="post">
    <textarea name="post-content" type="text" cols="80" rows="20" value="<?php echo $post->content; ?>"><?php echo $post->content; ?></textarea>
    <div><input type="submit" value="Update" name="submit-post" /></div>
</form>

<?php /* require_once('./markitup/markitup_template.php'); */ ?> 

<?php require_once('./includes/footer.php'); ?> 