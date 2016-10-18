<?php
// define variables and set to empty values
$usernameErr = $fnameErr= $lnameErr=$emailErr = $genderErr = $address =$phone=" ";
$username = $firstname= $lastname=$email = $gender = $phone = $address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "Name is required";
  } else {
    $username = test_input($_POST["username"]);
  }
  
   if (empty($_POST["firstname"])) {
    $fnameErr = "FirstName is required";
  } else {
    $fname = test_input($_POST["firstname"]);
  }
  
   if (empty($_POST["lastname"])) {
    $lnameErr = "LastName is required";
  } else {
    $lname = test_input($_POST["lastname"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["phone"])) {
    $phone = "";
  } else {
    $phone = test_input($_POST["phone"]);
  }

  if (empty($_POST["address"])) {
    $address = "";
  } else {
    $address = test_input($_POST["address"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
<script src = "jquery-3.1.0.min.js"></script>
<script src = "rollover.js"></script>
<title>Loginform
</title>
<div id ="image_rollover">
	<img  src="login1.jpg" alt="Books" style="width:160px; height:248px"  margin_left = "50%" id ="login2.jpg">
</div>
<link REL="StyleSheet" TYPE="text/css" HREF="style.css">
</head>
<body id="bordering">
<div id ="details">
	<h1> User login </h1>
	<table>
	<!--<form action ="sucess.php" method = "post">-->
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
		<tr>
			<td><label>User Name: </label></td>
			<td><input  type = "text" name = "userName" ><br></td>
			<td><span class= "error">*<?php echo $username; ?></td>
		</tr>
		<tr>
			<td><label>Password: </label></td>
			<td><input type = "password" name = "password" ><td>
		</tr>
		<tr>
			<td></td>
			<td><input id ="bsubmit"  type = "submit" value = "Login"></td>
		</tr>
	</table >
	<h2>New user 
	<a href = "registration.html">Register here</a></h2>
	<br><a href = "webDevelopment.html"> Home </a>
</div>
</body>
</html>