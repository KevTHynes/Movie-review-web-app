<?php
$error = false;
if(isset($_POST['login'])){
	$username = preg_replace('/[^A-Za-z]/', ' ',$_POST['username']);
	$password = $_POST['password'];
	if(file_exists("../data/user.xml")){
		$xml = simplexml_load_file("../data/user.xml");
		if($password == $xml->password){
			echo "good";
			session_start();
			$_SESSION['username'] = $username;
			header('Location: index.php');
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
 <title>Log In</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="/css/bootstrap.min.css">
 <script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="background-color:ivory;">
  <div class="main">
 <h1 style="color:blue;text-align:center;">International 5 star Movie Review</h1>
  </div>
  <nav class="navbar navbar-inverse  ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">Home</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="latest movie.html">Latest Movies</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="regsiter.php">Sign Up</a></li>
    </ul>
    <form class="navbar-form navbar-left">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="account.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
  </div>
</nav>
  	
<div id="site_content">		

      <div class="slideshow">
	    <ul class="slideshow">
          <li class="show"><img width="100%" height="300" src="/images/home_1.jpg" alt="&quot;Rent all the latest DVD&quot;" /></li>
        </ul> 
	  </div>	
  </div>
  <div class="sidebar_container">       
			<div class="sidebar">
			  <div class="sidebar_item" style= "color:red;text-align:center;width:100%;height:100px;font-style:italic;font-weight:bold;">
				<h1 >	Welcome to our  website</h1>
			  </div>
			  </div>
	
	<div id="content">
	<div class="content_item">
		<?php
		if($error){
			echo '*Invalid username and/or password';
		}
		
		?>
			<h1>Login here:</h1>
		
			<section class="container">
				
				<div class="login">
<form class="form-horizontal"  method="post" action="" >
	
	<div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Username:</label>
    <div class="col-sm-5"> 
      <input type="username" name="username" class="form-control" id="pwd" placeholder="Enter username">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd"> Password:</label>
    <div class="col-sm-5">
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
	
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" value="login" name="login">
		</div>
  </div>
</form>
					<div>
					<h1>
						Don't have an account?<a href="register.php"> Sign Up</a>
						</h1>
				</div>
				</div>
				<div class="login-help">
					<p>Forgot your password? <a href="changepassword.php">Click here to reset your Password</a>.</p>
				</div>
				
				
			</section>
	
			  
	</div>
	</div>
	</div> 
		
	  
	</div>
	  
</body>
</html>
  
 