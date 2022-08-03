<?php
session_start();  
?>


<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 
  Link below for the style css file -->

  <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

<style>

*{ 
  margin: 0; 
  padding: 0; 
  box-sizing: border-box;
  font-family: 'Roboto', sans-serif;
  }

.main_div{

  width: 100%;
  height: 100vh; 
  position: relative;
  background-image :linear-gradient(to right, rgba(179, 217, 255, 0.2), rgba(77, 121, 255, 1));


/*background-color: #1a52f9; 
  background-image: linear-gradient(19deg, #1a52f9 0%, #B721FF 84%);
  position: relative;*/
/*
background-image: linear-gradient(to left, #c850c0 #4158d0)*/
}  



.box{
  width: 400px; 
  position: absolute;
  top: 50%;
  left: 50%; 
transform: translate(-50%, -50%);
padding: 50px; 
background: rgba(0,0,0,0.75);
border-radius: 10px; 
}


.box h1{
margin-bottom: 30px; 
color: #ffff;
text-align: center;
text-transform: capitalize;
}

.box .inputBox{
position: relative;
}

.box .inputBox input{
  width: 100%; 
  padding: 10px; 
  font-size: 15px; 
  color: #fff; 
  letter-spacing: 1px; 
  margin-bottom: 30px; 
  border: none;
  border-bottom: 1px solid #fff; 
  background: transparent;
  outline: none; 
}

.box .inputBox label{
position: absolute;
top: 0; 
left: 0; 
letter-spacing: 1px; 
padding: 10px 0;
font-size: 15px; 
color: #fff; 
transition: 0.5s; 
}


.box .inputBox input:focus ~ label,
.box .inputBox input:valid ~ label{
top: -20px; 
left: 0px; 
color: #03a9f4;
font-size: 12px; 



}



.box input[type="submit"]{

background: transparent;
border: none;
outline: none;
color: #fff; 
background: #03a9f4;
padding: 8px 16px; 
border-bottom-width: 5px; 
border-radius: 5px; 
font-size: 15px; 
text-align: center;

}

.box .signup-link{
text-align: center; 
margin-top: 15px; 
color: white; 
}






</style>



</head>
<body>

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
      alert("No Connection!");
  </script>
  <?php
}


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
              alert("Registered Successfully!");
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

  ?>






  <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
  <a class="navbar-brand" href="index.php">Property</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="register_alt.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="managerlogin.php">Manager Login</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
    </form>
  </div>
</nav>

  <div class = "main_div">
    <div class = "box">
      <h1>Register</h1>
      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method = "POST">

        <div class = "inputBox"> 
          <input type="text" name="email" autocomplete="off" required>
          <label>Email ID</label>
        </div>

        <div class = "inputBox">
          <input type="password" name="password" autocomplete="off" required>
          <label>Password</label>
        </div>

        <!-- <div class = "inputBox">
          <input type="password" name="confirmpassword" autocomplete="off" required>
          <label>Confirm Password</label>
        </div> -->

        <div class = "inputBox"> 
          <input type="text" name="name" autocomplete="off" required>
          <label>Name</label>
        </div>

        <div class = "inputBox"> 
          <input type="text" name="number" autocomplete="off" required>
          <label>Phone Number</label>
        </div>

        <div class = "inputBox"> 
          <input type="text" name="address" autocomplete="off" required>
          <label>Address</label>
        </div>

        <div class = "inputBox"> 
          <input type="date" name="date" autocomplete="off" onfocus="(this.type='date')" 
          onblur="if(!this.value)this.type='text' " required>
          <label>DOB (mm/dd/yyyy)</label>
        </div>


        <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>

        <div class="signup-link">Already Registered? <a href="login.php">Login here</a> </div>

        



      </form>

    </div>

  </div>

<footer>
  <h5 class="p-3 bg-dark text-white text-center">Email us at abc@gmail.com / Call Us at +61 123 45 789</h5>
</footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>