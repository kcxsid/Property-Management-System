<?php
 
include 'dbcon.php';
$id = $_GET['id']; 
if(isset($_POST['done'])){




	$id = $_GET['id'];
	$email = $_POST['email'];
	$name = $_POST['name'];
	$pass = $_POST['password'];
	$number = $_POST['phone'];
	$address = $_POST['address'];
	$dob = date('Y-m-d', strtotime($_POST['dob']));

	
	$pass_word = password_hash($password, PASSWORD_BCRYPT);


	 $insertquery = "update registerinfo set id = $id, email = '$email', password = '$pass_word', name = '$name', phone = '$number', address = '$address', dob = '$dob' where id = $id ";

    $query = mysqli_query($conn, $insertquery);

    header('location: users.php');

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


</head>
<body>

		<div class = "col-lg-6 m-auto">
			
			<form method = "post">
				
				<div class = "card">

					<div class = "card-header bg-dark">

						<br><br>
						<h1 class = "text-white text-center"> Update Operations</h1>
						
					</div>

					<label>email: </label>
					<input type="text" name="email"> <br>

					<label>password: </label>
					<input type="password" name="password"> <br>

					<label>name: </label>
					<input type="text" name="name"> <br>

					<label>number: </label>
					<input type="text" name="phone"> <br>

					<label>address: </label>
					<input type="text" name="address"> <br>

					<label>date of birth: </label>
					<input type="date" name="dob"> <br>


					<button class="btn btn-success" type="submit" name = "done"> Submit</button><br>
					

				</div>




			</form>



		</div>


</body>
</html>