<?php 


$con = mysqli_connect('localhost', 'root'); 

if($con){

	echo "Successful";
} else{

	echo "No Connection";
}

/*
Send values to the database. */

mysqli_select_db($con, 'testdatabase');


$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$comments = $_POST['comments'];



$query = "insert into enquries (name, email, number, comments)
values('$name','$email','$number','$comments')";

mysqli_query($con, $query); 


 ?>