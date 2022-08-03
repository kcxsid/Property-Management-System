<?php

$server = "localhost";
$user = "root";
$password = ""; 

$db = "registration";


$conn = mysqli_connect($server, $user, $password, $db);

if($conn){
	echo "Connection Successful!";
	
}else {

	?>
	<script>
			alert("No Connection!");
	</script>
	<?php
}




?> 