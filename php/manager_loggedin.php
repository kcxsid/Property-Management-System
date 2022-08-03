<?php
session_start();
if(!isset($_SESSION['name'])){

	header('location:managerlogin.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="loggedinstyle.css">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"> -->
	<link href="https://fonts.gogoleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

</head>
<body>

	<header>
			<nav class = "navbar">
				<div class = "logo">
					<a href="#"><?php echo $_SESSION['name']; ?></a>
				</div>
				<div class = "menu">
					<ul>
						<li><a href="manager_loggedin.php">Home</a></li>
						<li><a href="properties.php">Property List</a></li>
						<li><a href="viewReservationsManager.php">Bookings</a></li>
						<li><a href="users.php">Registered Users</a></li>
						<li><a href="viewfeedback.php">View Feedback</a></li>
						<li><a href="valuableCustomers.php">Valuable Customers</a></li>
					</ul>
				</div>

				<div class = "contact_btn">
					<a href="managerlogout.php">LOGOUT </a>
				</div>
			</nav>

		<div class = "center_content">

			<h1>Welcome <?php echo $_SESSION['name']; ?>!</h1>
			<h2></h2>
			
		</div>

	</header>

</body>
</html>