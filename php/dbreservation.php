<?php

$server = "localhost";
$user = "root";
$password = ""; 

$db = "reser";


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