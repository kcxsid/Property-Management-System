<?php

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
?>
