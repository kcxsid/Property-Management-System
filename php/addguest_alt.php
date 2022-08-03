<?php


session_start();
if(!isset($_SESSION['name'])){

	header('location:login.php');
}


$server = "localhost";
$user = "root";
$password = ""; 

$db = "guest";


$conn = mysqli_connect($server, $user, $password, $db);

if($conn){

	?>
	<script>
			alert("Successful connection to Guest!");
	</script>
	<?php
	
}else {

	?>
	<script>
			alert("No Connection to Guest!");
	</script>
	<?php
}


$q = "select * from guestinfo"; 
$query = mysqli_query($conn, $q);






$server1 = "localhost";
$user1 = "root";
$password1 = ""; 
$db1 = "reser";
$conn1 = mysqli_connect($server1, $user1, $password1, $db1);

if($conn1){

	?>
	<script>
			alert("Successful Connection to Reservation database");
	</script>
	<?php
	
}else {

	?>
	<script>
			alert("No Connection to Reservation Database");
	</script>
	<?php
}

/*$cName = $_SESSION['name'];
$q = "select id from registerinfo where name = '$cName";
$query = mysqli_query($conn, $q);
*/


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

			$db2 = "guest";
			$conn2 = mysqli_connect($server2, $user2, $password2, $db2);


			if($conn2){
				
			    
			}else {

			  ?>
			  <script>
			      alert("No Connection to Guest!");
			  </script>
			  <?php

			}





			$server3 = "localhost";
			$user3 = "root";
			$password3 = ""; 
			$db3 = "reser";
			$conn3 = mysqli_connect($server3, $user3, $password3, $db3);



			$cName = $_SESSION['name'];

			// Getting the USER ID, can also be obtained through the $_SESSION ['id'];
			$q3 = "select id from registerinfo where name = '$cName'";
			// Getting the ID of the user, executing the query. 
			$query3 = mysqli_query($conn3, $q3);
			$assoc = mysqli_fetch_assoc($query3);
			
			$cus_ID = $assoc['id'];



			
			// Getting the Check IN and Check OUT Dates from the reservation table, where there is a match for the Prop ID. 
			

			if(isset($_POST['submit'])){

				$guest_name = $_POST['guestName'];
				$dob = date('Y-m-d', strtotime($_POST['dob']));
				
			


				

		

						$insertquery = "insert into guestinfo (customerID, name, dob) 
				    			values ('$cus_ID','$guest_name','$dob')";

			    		$insert_query = mysqli_query($conn, $insertquery);


			    		if ($insertquery) {
			    		?>
						<script>
								alert("Guest Information has been added successfully!");
						</script>
						<?php
					}



					       

					else {
						?>
						<script>
								alert("Could not add Guest Info!");
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
					</ul>
				</div>

				<div class = "contact_btn">
					<a href="managerlogout.php">LOGOUT</a>
				</div>
			</nav>

		<div class = "center_content">
		</div>



		

		<div class = "main_div">
    <div class = "box">
      <h1>Guest Information</h1>
      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method = "POST">

       

        <div class="form-group text-black">
				<label><strong>Guest Name</strong></label>
				<textarea class="form-control text-dark" name="guestName" ></textarea>
			</div>

		 <div class = "inputBox"> 
          <input type="date" name="dob" autocomplete="off" onfocus="(this.type='date')" 
          onblur="if(!this.value)this.type='text' " >
          <label>Date of Birth</label>
        </div>


        <button type="submit" name="submit" class="btn btn-primary btn-block">Save Guest Information!</button>

       

        



      </form>

    </div>

  </div>

		

	</header>








</body>
</html>








































<?php
session_start(); 

$server = "localhost";
$user = "root";
$password = ""; 

$db = "guest";


$conn = mysqli_connect($server, $user, $password, $db);

if($conn){

	?>
	<script>
			alert("Successful connection to Guest!");
	</script>
	<?php
	
}else {

	?>
	<script>
			alert("No Connection to Guest!");
	</script>
	<?php
}


echo $_GET['id'];


if(isset($_POST['done'])){
  $id = $_GET['id'];

  $name = $_POST['guestName'];
  $dob = date('Y-m-d', strtotime($_POST['dob']));


/*
   $insertquery = "update reservation set ReservationID = $id, Status = '$status' where ReservationID = $id";*/

   $insertquery = "insert into guestinfo (reservationID, name, dob) values ($id, '$name', '$dob')";
    $query = mysqli_query($conn, $insertquery);

    header('location: loggedin.php');

}

?>







<!-- $cName = $_SESSION['name'];
$q = "select id from registerinfo where name = '$cName";
$query = mysqli_query($conn, $q);
 -->

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

	<!-- <?php

			$server2 = "localhost";
			$user2 = "root";
			$password2 = ""; 

			$db2 = "guest";
			$conn2 = mysqli_connect($server2, $user2, $password2, $db2);
			if($conn2){			    
			}else {

			  ?>
			  <script>
			      alert("No Connection!");
			  </script>
			  <?php

			}



			$id = $_GET['id'];

			$server3 = "localhost";
			$user3 = "root";
			$password3 = ""; 
			$db3 = "reser";
			$conn3 = mysqli_connect($server3, $user3, $password3, $db3);



			// $cName = $_SESSION['name'];

			// Getting the USER ID, can also be obtained through the $_SESSION ['id'];
			//$q3 = "select id from registerinfo where name = '$cName'";
			// Getting the ID of the user, executing the query. 


			// $query3 = mysqli_query($conn3, $q3);
			// $assoc = mysqli_fetch_assoc($query3);
			
			//$cus_ID = $assoc['id'];



			
			// Getting the Check IN and Check OUT Dates from the reservation table, where there is a match for the Prop ID. 
			

			if(isset($_POST['submit'])){

				$guest_name = $_POST['guestName'];
				$dob = date('Y-m-d', strtotime($_POST['dob']));
				
			


				
						$id = $_GET['id'];
		

						$insertquery = "insert into guestinfo (reservationID, name, dob) 
				    			values ('$id','$guest_name','$dob')";

			    		//$insert_query = mysqli_query($conn, $insertquery);
			    		$insert_query = mysqli_query($conn2, $insertquery);

			    		if ($insertquery) {
			    		?>
						<script>
								alert("Guest Info has been added Successfully!");
						</script>
						<?php
					}



					       

					else {
						?>
						<script>
								alert("Could not add Guest Info!");
						</script>
						<?php
					}

			}

?> -->


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
						<li><a href="feedback.php">Feedback/Rate Us</a></li>
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
      <h1>Guest Information</h1>
      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method = "POST">

       

        <div class="form-group text-black">
				<label><strong>Guest Name</strong></label>
				<textarea class="form-control text-dark" name="guestName" ></textarea>
			</div>

		 <div class = "inputBox"> 
          <input type="date" name="dob" autocomplete="off" onfocus="(this.type='date')" 
          onblur="if(!this.value)this.type='text' " >
          <label>Date of Birth</label>
        </div>


        <button type="submit" name="done" class="btn btn-primary btn-block">Save Guest Information!</button>

       

        



      </form>

    </div>

  </div>

		

	</header>








</body>
</html>