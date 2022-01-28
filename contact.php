<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

	<title>VAB.Tech-Blog - Contact Us</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="https://github.com/VAB2007"><img src="Starship_HLS_Moon_landing.jpg" height="40px" width="40px">Vin's Blog</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="/">Home <span class="sr-only"></span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/about.html">About</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Topics
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Technology</a>
						<a class="dropdown-item" href="#">Web Development</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Support</a>
						<a class="dropdown-item" href="#">Write for us</a>
					</div>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="/contact.html">contact Us</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>

	<div class="container my-4">
		<h2>Contact Us</h2>
		<form action="backend.php" method="post">
			<div class="form-group">
				<label for="exampleFormControlInput1">Your Name</label>
				<input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Your Name" name="user">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Email address</label>
				<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Mobile Number</label>
				<input type="number" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="mobile">
			</div>
			<div class="form-group">
				<label for="exampleFormControlTextarea1">Comments</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment"></textarea>
			</div>
			<button class="btn btn-primary">Submit</button>
		</form>	
	</div>

	<hr>
	
	<footer class="container">
		<p class="float-right"><a href="#">Back to top</a></p>
		<p>© Vin'sBlog created:2021.   ·<a href="#">Privacy</a> · <a href="#">Terms</a></p>
	</footer>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>