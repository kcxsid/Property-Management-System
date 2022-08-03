<?php
$server = "localhost";
$user = "root";
$password = ""; 
$db = "ratings";

$conn = mysqli_connect($server, $user, $password, $db);

if($conn){

	?>
	<script>
			alert("Successful connection to Ratings!");
	</script>
	<?php
	
}else {

	?>
	<script>
			alert("No Connection to Ratings!");
	</script>
	<?php
}

?>