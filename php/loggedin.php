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

	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


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

						
        </div>
					</ul>
				</div>

				<div class = "contact_btn">
					<a href="logout.php">LOGOUT </a>
				</div>
			</nav>

		<div class = "center_content">

			<h1>Welcome <?php echo $_SESSION['name']; ?>!</h1>
			<h2></h2>
			
		</div>

	</header>



</body>
</html>