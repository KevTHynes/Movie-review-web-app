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
      <div class="container">
 					<h2>Feedback Display</h2>
 							<div class="panel panel-default">
							 <table class="table">
 						<thead>
 							<tr>
					 		<th>#</th>
							<th>Name</th>
							 <th>Movies</th>
								<th>Your review</th>
							 <th>Star Rating</th>
							 </tr>
					 </thead>
 					<tbody>
 						<?PHP
  						 $xml=simplexml_load_file("../data/reviews.xml") or die("ERROR: Cannot load reviews.xml file.");

 									$n = 1; // simple counter

 foreach($xml->children() as $review) {

 echo "<tr>"; // beginning of row
 echo "<th scope=\"row\">" . $n . "</th>";

 foreach($review->children() as $child){
 echo "<td>" . $child . "</td>";
 }

 echo "</tr>"; // end of row
 $n++;
 }

 ?>

 </tbody>
 </table> 
    </div>
   </div>
		

		<a href="changepassword.php">Change Password</a>
		<a href="logout.php">Logout</a>
  </div>
</body>

</html>