<?php
include 'dbreservation.php';
echo $_GET['id'];


if(isset($_POST['done'])){



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



  $id = $_GET['id'];

  $status = $_POST['status'];


   $insertquery = "update reservation set ReservationID = $id, Status = '$status' where ReservationID = $id";

    $query = mysqli_query($conn, $insertquery);

    header('location: viewReservationsManager.php');

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
            <h1 class = "text-white text-center"> Update Payment Status</h1>
            
          </div>

          <label>Status (Pending/Confirmed/Cancelled) </label>
          <input type="text" name="status"> <br>

         


          <button class="btn btn-success" type="submit" name = "done">Update Payment Info</button><br>
          

        </div>




      </form>



    </div>


</body>
</html>