<?php
 include_once("bootstrap.php");
 include_once("inc/functions.inc.php");
// password reset system

$validator = $_GET["validator"];
$selector = $_GET["selector"];

if (empty($validator)) {
    echo "Could not validate your request!";
}  

if (isset($_POST['reset-password-submit'])) {
    try {
        Security::resetPassword();
        echo $_POST['password'];
    }
    catch (Throwable $e) {
        $error = $e->getMessage();
    }

}

?><!DOCTYPE html>
<html>
<head>
	<title>Reset your password</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div id="header">
		<div class="logo"></div>
	</div>
	<div id="main">
		<h1>Reset your password</h1>
        <?php if( isset($e) ) : ?>
				<div class="formError">
					<p>
						<?php echo $error; ?>
					</p>
				</div>
		<?php endif; ?>
                 <form action="" method="post">
                        <input type="hidden" name="selector" value="<?php echo $selector;?>">
                        <input type="hidden" name="validator" value="<?php echo $validator;?>">
                        <input type="password" name="password" placeholder="Enter a new password...">
                        <input type="password" name="passwordrepeat" placeholder="Repeat new password...">
                        <button type="submit" name="reset-password-submit">Reset password</button>
                    </form>    


	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>