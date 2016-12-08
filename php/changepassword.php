<?php
session_start();
if(!file_exists("../data/user.xml")){
	header('Location: login.php');
	die;
}
$error = false;
if(isset($_POST['change'])){
	$old = $_POST['o_password'];
	$new = $_POST['n_password'];
	$c_new = $_POST['c_n_password'];
	
	$xml = simplexml_load_file("../data/user.xml");
	if($old == $xml->password){
		if($new == $c_new){
			$xml->password = $new;
			$xml->asXML("../data/user.xml");
			header('Location: logout.php');
			die;
		}
	}
	$error = true;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Change Password</title>
</head>
<body>
	<h1>Change Password</h2>
	<form method="post" action="">
		<?php
		if($error){
			echo '<p>Some of the passwords do not match</p>';
		}
		?>
		<p>Old password <input type="password" name="o_password" /></p>
		<p>New password <input type="password" name="n_password" /></p>
		<p>Comfirm new password <input type="password" name="c_n_password" /></p>
		<p><input type="submit" name="change" value="Change Password" /></p>
	</form>
	
	<hr />
	<a href="index.php">User home</a>
</body>
</html>