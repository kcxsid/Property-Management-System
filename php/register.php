<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 
	Link below for the style css file -->

	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  
</head>
<body>
 
	<nav class="navbar navbar-expand-lg navbar-dark	 bg-dark">
  <a class="navbar-brand" href="index.php">Navigation Bar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
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



<section>
  <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Name</label>
    <input type="text" class="form-control" id="inputname">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Phone Number</label>
    <input type="text" class="form-control" id="inputphno" placeholder="eg: +91 1234567890">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Date of Birth (mm/dd/yyyy)</label>
      <input type="Date" class="form-control" id="inputdob">
    </div>
    
  </div>
  <button type="submit" class="btn btn-success">Register</button>
</form>



</section>


</body>
</html>