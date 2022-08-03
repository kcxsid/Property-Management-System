<!-- <?php

include 'dbcon.php'; 

if(isset($_POST['submit'])){

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$name = mysqli_real_escape_string($conn, $_POST['name']);
$number = mysqli_real_escape_string($conn, $_POST['number']);
$address = mysqli_real_escape_string($conn, $_POST['address']);

$dob = date('Y-m-d', strtotime($_POST['date']));






$pass = password_hash($password, PASSWORD_BCRYPT);

$emailquery = "select * from registerinfo where email = '$email'";
$query = mysqli_query($conn, $emailquery);


$emailcount = mysqli_num_rows($query); 

if($emailcount>0){

  echo "Email already exists";

} else {

    $insertquery = "insert into registerinfo (email, password, name, phone, address, dob) 
    values ('$email','$pass','$name','$number','$address','$dob')";

    $iquery = mysqli_query($conn, $insertquery);

    if($iquery){

         ?>
          <script>
              alert("Insert is Successful!");
          </script>
          <?php

        }else {

        ?>
          <script>
              alert("No insert was done!");
          </script>
        <?php
  
        } 

  

} 

}

  ?> -->