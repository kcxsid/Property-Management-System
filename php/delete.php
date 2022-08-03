<?php 

$server = "localhost";
$user = "root";
$password = ""; 

$db = "registration";


$conn = mysqli_connect($server, $user, $password, $db);

if($conn){
	
}else {

	?>
	<script>
			alert("No Existing Connection!");
	</script>
	<?php
}

$id = $_GET['id'];
$q = "DELETE FROM registerinfo where id = $id";

mysqli_query($conn, $q);

header('location:users.php');

?>