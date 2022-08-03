<?php
session_start();
if(!isset($_SESSION['name'])){

	header('location: login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
<!-- 
	Link below for the style css file -->




	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="loggedinstyle.css">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"> -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

</head>
<body>

	<header>
			<nav class = "navbar">
				<div class = "logo">
					<a href="#"><?php echo $_SESSION['name']; ?></a>
				</div>
				<div class = "menu">
					<ul>
						<li><a href="loggedin.php">Home</a></li>
						<li><a href="#">Gallery</a></li>
						<li><a href="reservation.php">Services/Book Now</a></li>
						<li><a href="viewBookingsCustomerProperty1.php">My Bookings</a></li>
						<li><a href="viewPropertyRatings.php">View Property Ratings</a></li>
					</ul>
				</div>

				<div class = "contact_btn">
					<a href="logout.php">LOGOUT </a>
				</div>
			</nav>



	<section class = "my-5">
	<div class = "py-3">
		<h1 class = "text-center"><strong>Choose Your Adventure</strong></h1>
	</div>

	<div class="container-fluid">
		<div class = "row">
			<div class = "col-lg-4 col-md-4 col-12">

				<div class="card">
					<img class="card-img-top" src="glamp1.png" alt="Card image">
  						<div class="card-body">

    						<h4 class="card-title text-dark">Star-Gaze Tent</h4>
    						<p class="card-text text-dark">From $189.00 per day</p>
    						<a href="property1.php" class="btn btn-primary btn-block">Book The Star-Gaze Tent</a>
  						</div>
				</div>
				
			</div>



			<div class = "col-lg-4 col-md-4 col-12">

				<div class="card">
					<img class="card-img-top" src="cabin0.png" alt="Card image">
  						<div class="card-body">
  								
    						<h4 class="card-title text-dark">Cabin</h4>
    						<p class="card-text text-dark">From $359.00 per day</p>
    						<a href="property2.php" class="btn btn-primary btn-block">Book The Cabin</a>
  						</div>
				</div>
				
			</div>




			<div class = "col-lg-4 col-md-4 col-12">

				<div class="card">
					<img class="card-img-top" src="lux0.jpg" alt="Card image">
  						<div class="card-body">
  								
    						<h4 class="card-title text-dark">Luxury Villa</h4>
    						<p class="card-text text-dark">From $979.00 per day</p>
    						<a href="property3.php" class="btn btn-primary btn-block">Book The Luxury Villa</a>
  						</div>
				</div>
				
			</div>
			
		</div>

	</div>
</section>

		

			





	
			
		

	</header>





	

</body>
</html>