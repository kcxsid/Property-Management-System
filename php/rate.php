<?php
 
// include 'dbrate.php';
$id = $_GET['id']; 

if(isset($_POST['done'])){


$server = "localhost";
$user = "root";
$password = ""; 
$db = "properties";


$conn = mysqli_connect($server, $user, $password, $db);

if($conn){



	?>
	<script>
			alert("Successful connection to Rating!");
	</script>
	<?php
	
}else {

	?>
	<script>
			alert("No Connection to Rating!");
	</script>
	<?php
}




	$number = $_POST['rate'];
	$comment = $_POST['comment'];

	


	$insertquery =  "insert into ratingsinfo (propertyID,value,experience) values ('$id', '$number', '$comment')";
/*	 $insertquery = "update registerinfo set id = $id, email = '$email', password = '$pass', name = '$name', phone = '$number', address = '$address', dob = '$dob' where id = $id ";
*/
    $query = mysqli_query($conn, $insertquery);

    header('location: viewBookingsCustomerProperty1.php');

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
						<h1 class = "text-white text-center">Your feedback matters!</h1>
						
					</div>


					<label>Please rate your experience (1-5)</label>
					<input type="Number" name="rate"> <br>

					<label>Experience/Feedback</label>
					<input type="text" name="comment"> <br>


					<button class="btn btn-success" type="submit" name = "done">Submit Feedback</button><br>
					

				</div>




			</form>



		</div>


</body>
</html>