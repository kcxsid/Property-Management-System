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


.main_div{

  width: 100%;
  height: 100vh; 
  position: relative;
  background-image :inear-gradient(19deg, white 0%, black 95%);


/*background-color: #1a52f9; 
  background-image: linear-gradient(19deg, #1a52f9 0%, #B721FF 84%);
  position: relative;*/
/*
background-image: linear-gradient(to left, #c850c0 #4158d0)*/
}  


.box{
  width: 400px; 
  position: absolute;
  top: 50%;
  left: 50%; 
transform: translate(-50%, -50%);
padding: 50px; 
background: rgba(0,0,0,0.75);
border-radius: 10px; 
}


.box h1{
margin-bottom: 30px; 
color: #ffff;
text-align: center;
text-transform: capitalize;
}

.box .inputBox{
position: relative;
}

.box .inputBox input{
  width: 100%; 
  padding: 10px; 
  font-size: 15px; 
  color: #fff; 
  letter-spacing: 1px; 
  margin-bottom: 30px; 
  border: none;
  border-bottom: 1px solid #fff; 
  background: transparent;
  outline: none; 
}

.box .inputBox label{
position: absolute;
top: 0; 
left: 0; 
letter-spacing: 1px; 
padding: 10px 0;
font-size: 15px; 
color: #fff; 
transition: 0.5s; 
}


.box .inputBox input:focus ~ label,
.box .inputBox input:valid ~ label{
top: -20px; 
left: 0px; 
color: #03a9f4;
font-size: 12px; 



}



.box input[type="submit"]{

background: transparent;
border: none;
outline: none;
color: #fff; 
background: #03a9f4;
padding: 8px 16px; 
border-bottom-width: 5px; 
border-radius: 5px; 
font-size: 15px; 
text-align: center;

}

.box .signup-link{
text-align: center; 
margin-top: 15px; 
color: white; 
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

	<?php

			$server2 = "localhost";
			$user2 = "root";
			$password2 = ""; 

			$db2 = "reser";
			$conn2 = mysqli_connect($server2, $user2, $password2, $db2);


			if($conn2){
				
			    
			}else {

			  ?>
			  <script>
			      alert("No Connection!");
			  </script>
			  <?php

			}





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
			$propID = 3;
			$cus_ID = $assoc['id'];



			
			// Getting the Check IN and Check OUT Dates from the reservation table, where there is a match for the Prop ID. 
			

			if(isset($_POST['submit'])){

				$checkin = date('Y-m-d', strtotime($_POST['checkin_date']));
				$checkout = date('Y-m-d', strtotime($_POST['checkout_date']));
				$req = $_POST['requirements'];
				$status = "Pending";
				$creditCardNumber = $_POST['creditCardNo'];
				$expiry = $_POST['ExpiryDate'];


				$creditCardEncrypt =  password_hash($creditCardNumber, PASSWORD_BCRYPT);



				$propID = 3;
				$manager_id =2;



				$q4 = "select CheckInDate, CheckOutDate from reservation where PropertyID = '$propID'";
				$query4 = mysqli_query($conn2, $q4);

				$inserted = True; 

				$numRows = 0; 
				$checks = 0;


				while ($row = mysqli_fetch_assoc($query4)) {
					$numRows = $numRows + 1; 

					$cond1 = $checkin > $row['CheckOutDate'] and $checkout > $checkin; 
					$cond2 = $checkout < $row['CheckInDate'] and $checkin < $checkin; 


					


					if (($cond1 or $cond2)) {
						$checks = $checks + 1; 
						$inserted = False; 
						/*echo $checks;
						echo ">";*/
						
						}

					}

					if ($numRows == $checks) {


						$insertquery = "insert into reservation (PropertyID, ManagerID, customerID, CheckInDate, CheckOutDate, SpecialRequirements, Status, creditCardNumber, ExpiryDate) 
				    			values ('$propID', '$manager_id','$cus_ID','$checkin','$checkout','$req','$status', 
				    			'$creditCardEncrypt', '$expiry')";

			    		$insert_query = mysqli_query($conn, $insertquery);
			    		


			    		?>
						<script>
								alert("Reservation is Successful!");
								location.replace("loggedin.php");
						</script>
						<?php



					       

					} else {


						?>
						<script>
								alert("Property is Occupied during this period. Please Enter Different Dates!");
						</script>
						<?php
					}



			}

?>


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



		

		<div class = "main_div">
    <div class = "box">
      <h1>Book A Villa</h1>
      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method = "POST">

        <div class = "inputBox"> 
          <input type="date" name="checkin_date" autocomplete="off" onfocus="(this.type='date')" 
          onblur="if(!this.value)this.type='text' " required>
          <label>Check-IN Date</label>
        </div>

        <div class = "inputBox"> 
          <input type="date" name="checkout_date" autocomplete="off" onfocus="(this.type='date')" 
          onblur="if(!this.value)this.type='text' " required>
          <label>Check-OUT Date</label>
        </div>

        <div class="form-group text-black">
				<label><strong>  OPTIONAL FIELDS: <br /> </strong></label>

        <div class="form-group text-black">
				<label>Special Requirements</label>
				<textarea class="form-control text-dark" name="requirements" ></textarea>
			</div>

		<div class="form-group text-black">
			<label>Credit Card Number</label>
			<textarea class="form-control text-dark" name="creditCardNo" required></textarea>
		</div>


		<div class="form-group text-black">
			<label>Expiry date (mm/yyyy)</label>
			<textarea class="form-control text-dark" name="ExpiryDate" required></textarea>
		</div>


        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit Information!</button>

       

        



      </form>

    </div>

  </div>

		

	</header>








</body>
</html>