<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Movie reviews</title>
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
					<a class="navbar-brand" href="index.html">Home</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="../latest movie.html">Latest Movies</a></li>

				</ul>
				<form class="navbar-form navbar-left">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</nav>

		<div id="site_content">
		</div>

		<div class="text-center">
			<h1><img src="/images/gold star.jpg"> Your star review page <img src="/images/gold star.jpg"></h1>
		</div>

		<div class="container">

			<!-- form -->
			<form method="post" action="reviewProcessor.php">

				<div class="form-group">
					<label for="movies">Movies: </label>
					<select class="custom-select" id="movies" name="movie">
						<option value="Arrival">Arrival</option>
						<option value="Badsanta2">Bad Santa 2</option>
						<option value="Sully">Sully</option>
						<option value="Collateral Beauty">Collateral Beauty</option>	
					</select>
				</div>
				
				<div class="form-group">
					<label for="rating">Star rating:</label>
					 <label class="radio-inline"><input type="radio" name="rating"
					value="1">1 star</label>
					 <label class="radio-inline"><input type="radio" name="rating"
					value="2">2 stars</label>
					 <label class="radio-inline"><input type="radio" name="rating"
					value="3">3 stars</label>
					 <label class="radio-inline"><input type="radio" name="rating"
					value="4">4 stars</label>
					 <label class="radio-inline"><input type="radio" name="rating"
					value="5">5 stars</label>
				</div>

				<div class="form-group">
					<label for="text">Your review: </label>
					<textarea class="form-control" id="text" name="text" rows="3" style="minwidth:100%"></textarea>
				</div>

				<input id="submit" name="submit" type="submit" value="Post" class="btn btn-primary">

			</form>

		</div>

		<a href="changepassword.php">Change Password</a>
		<a href="logout.php">Logout</a>
</body>

</html>