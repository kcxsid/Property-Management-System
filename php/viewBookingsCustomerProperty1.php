<?php

session_start();
if(!isset($_SESSION['name'])){

	header('location:login.php');
}


$server = "localhost";
$user = "root";
$password = ""; 

$db = "reser";


$conn = mysqli_connect($server, $user, $password, $db);

if($conn){

	?>
	<script>
			alert("Successful connection to Reservation!");
	</script>
	<?php
	
}else {

	?>
	<script>
			alert("No Connection to Reservation!");
	</script>
	<?php
}


$q = "select * from reservation"; 
$query = mysqli_query($conn, $q);






$server1 = "localhost";
$user1 = "root";
$password1 = ""; 
$db1 = "registration";
$conn1 = mysqli_connect($server1, $user1, $password1, $db1);

if($conn1){

	?>
	<script>
			alert("Successful Connection to User's database");
	</script>
	<?php
	
}else {

	?>
	<script>
			alert("No Connection to User Database");
	</script>
	<?php
}

$cName = $_SESSION['name'];
$q = "select id from registerinfo where email = '$cName";
$query = mysqli_query($conn, $q);



?>




<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- <link rel="stylesheet" type="text/css" href="loggedinstyle.css"> 
	 --> <link rel="preconnect" href="https://fonts.gstatic.com"> 
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
   

<style>
	

*{
	margin: 0; 
	padding: 0; 
	box-sizing: border-box;
	font-family: 'Roboto', sans-serif;
	color: white !important; 
	text-decoration: none;
}
 a{
 	color: white;
 	text-decoration: none;
 }


header{

	width: 100%; 
	height: 100vh; 
	background-color: #white; 
	background-image: linear-gradient(19deg, white 0%, black 95%);
	position: relative; 
	text-decoration: none;
}


header:before{

		content: ""; 
		width: 650px; 
		height: 550px; 
		position: absolute;
		left: 0; 
		bottom: 0;
		text-decoration: none;
		/*background-image: url(pictures/penthouse3.jpg);
		background-size: 100% 100%*/


}

nav{
	width: 100%; 
	height: 15vh; 
	display: flex;
	justify-content: space-around;
	align-items: center;
	position: absolute;
	text-decoration: none;
}

.logo a{
	 
	font-size: 1.6rem; 
	text-transform: uppercase; 
	font-weight: bold;
	text-decoration: none;
}

.menu ul li{
	color: white; 
	text-decoration: none; 
	list-style: none; 
	display: inline-block;
	padding: 0 15px; 
	text-decoration: none;

}

.menu ul li a{
	
	text-transform: capitalize;
	text-decoration: none;
} 

 ul li:hover{

	border-top: 2px solid #5dade2;
	border-bottom : 2px solid #5dade2;
	text-decoration: none; 

}



.contact_btn a{

	color: white !important;
	text-decoration-color: white !important;
	text-decoration: none; 
	background-color: black 95%;
	padding: 12px 25px; 
	font-size: 15px; 
	font-weight: 500; 
	border: 1px solid transparent;
	color: white;
	text-transform: uppercase;
}

.contact_btn a:hover{

}


/*center-content*/

.center_content{

	position: absolute;
	top: 50%; 
	left: 50%;
	transform: translate(-50%, -50%);
text-align: center;	
}

.center_content h1{

	color: #fff; 
	font-size: 70px; 
	text-transform: capitalize; 
	font-weight: 700; 
	margin-bottom: 10px; 
	z-index: 1; 

}


.center_content h2{

	font-size: 25px; 
	color: #fff;
	font-weight: 400;
	text-transform: capitalize;
	z-index: 1; 

}

.center_content h2:before{

	content: ""; 
	width: 80px; 
	height: auto;
	border: 2px solid white;
	position: absolute;
	left: 40px; 
	bottom: 0; 
	margin-bottom: 15px; 

}












</style>

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
					<a href="managerlogout.php">LOGOUT </a>
				</div>
			</nav>

		<div class = "center_content">
		</div>



		<div class = "container">
		
			<div class = "col-lg-12">
				<br><br>
				<h1 class = "text-center"><strong>My Bookings</strong></h1>

				<table class = "table table-striped table-hover">

				<tr class = "bg-dark text-white">

					<td> <strong>Reservation ID</strong> </td>
					<td> <strong>Property ID</strong> </td>
					<td> <strong>Check IN Date</strong> </td>
					<td> <strong>Check OUT Date</strong> </td>
					<td> <strong>Special Requirements</strong> </td>
					<td> <strong>Status</strong> </td>
					<td> <strong>Guests</strong> </td>
					<td> <strong>Rating</strong> </td>

					
						

				</tr>

				<?php 


					$server3 = "localhost";
					$user3 = "root";
					$password3 = ""; 
					$db3 = "registration";
					$conn3 = mysqli_connect($server3, $user3, $password3, $db3);

					$cName = $_SESSION['name'];

					// Getting the USER ID, can also be obtained through the $_SESSION ['id'];
					$q3 = "select id from registerinfo where name = '$cName'";
					// Getting the ID of the user, executing the query. 
					$query3 = mysqli_query($conn3, $q3);
					$assoc = mysqli_fetch_assoc($query3);
					$cus_ID = $assoc['id'];




					$server = "localhost";
					$user = "root";
					$password = ""; 

					$db = "reser";


					$conn = mysqli_connect($server, $user, $password, $db);
					$q = "select * from reservation where customerID = '$cus_ID' order by PropertyID ASC, CheckInDate";
					$query = mysqli_query($conn, $q);


					while($res = mysqli_fetch_array($query)){
					$_SESSION['ReservationID'] = $res['ReservationID'];

					//$compare = "Completed";
					$compare = "Confirmed";
					$true = strcmp($res['Status'], $compare);
					// this will have a value of 0, if both the strings match. 



				?>


				  <tr>
					<td> <?php  echo $res['ReservationID'] ?> </td>
					<td> <?php  echo $res['PropertyID'] ?> </td>
					<td> <?php  echo $res['CheckInDate'] ?> </td>
					<td> <?php  echo $res['CheckOutDate'] ?>  </td>
					<td> <?php  echo $res['SpecialRequirements'] ?>  </td>
					<td> <?php  echo $res['Status'] ?>  </td>
					<td><button class="btn-success btn"><a href="addguest.php?id=<?php echo $res['ReservationID']; ?>" >Add/Edit Guests</a></button></td>


					<?php 
					if ($true == 0) {

						?>
						<td><button class="btn-success btn"><a href="rate.php?id=<?php echo $res['PropertyID']; ?>" >Rate Us</a></button></td>
					</tr>


					<?php						
					} else {
					?>

					
				</tr> 

				<?php
			}
		}
				?>

				</table>
			


			</div>

		</div>

	</header>








</body>
</html>