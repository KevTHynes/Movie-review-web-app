<?php
session_start();
if(!file_exists("../data/user.xml")){
	header('Location: login.php');
	die;
}
?>
	<!DOCTYPE html>
	<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<title>Homepage</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container">
			
			<div class="main">
				<h1 style="text-align:center;color:green;">International 5 star Movie Review</h1>
			</div>
			
			<nav class="navbar navbar-inverse  ">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="index.php">Home</a>
					</div>
					
					<ul class="nav navbar-nav">
						<li><a href="../latest movie.html">Latest Movies</a></li>
					</ul>
					
					<div class="navbar-header">
						<a class="navbar-brand" href="reviews.php">Review a movie</a>
					</div>
					
					
					<ul class="nav navbar-nav navbar-right">
						<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
					</ul>
				</div>
			</nav>

			<div id="site_content">

				<div class="slideshow">
					
						<li class="show"><img width="100%" height="300" src="/images/home_1.jpg" alt="&quot;Rent all the latest DVD&quot;" /></li>
					
				</div>
			</div>
			
			
			 <div class="container">
        <div class="row">
          <div class="col-sm-12">
				  <h1>Welcome To Our Website</h1>
				  </div>
        </div>

			 <div class="row">
					<div class="col-sm-8">
					 <img width="100%" height="300" src="/images/greed.jpg" alt="greed" />
				 </div>

					<div class="col-sm-4">
						<h2>Message</h2>
						<p>>Welcome<?php echo $_SESSION['username']; ?> to our new website</p>
						<hr />
						<a href="changepassword.php">Change Password</a>
						<a href="logout.php">Logout</a>
						<h2>Latest Release</h2>
							<p>December 2016</p>
						<h2>Contact</h2>
							<p>Phone: +353 872345678</p>
							<p>Email: <a href="719480573@qq.com">719480573@qq.com</a>
				 </div>
				 </div>

		</div>

		</div>
	</body>


	</html>