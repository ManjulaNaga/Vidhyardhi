<?php
$lifetime = 60 * 60 * 24 * 365;
session_set_cookie_params($lifetime,'/');
session_start();

require_once('database.php');

// Get category ID
$user_id = filter_input(INPUT_GET, 'id', 
                            FILTER_VALIDATE_INT);
if ($user_id == NULL || $user_id == FALSE) {
    $user_id = 0;
}
// Get name for selected user id
$queryUser = 'SELECT * FROM vidhyardhi.userdetails
                      WHERE ID = :user_id';
$statement1 = $db->prepare($queryUser);
$statement1->bindValue(':user_id', $user_id);
$statement1->execute();
$user = $statement1->fetch();
$username = $user['username'];
$statement1->closeCursor();

// Get all user details
$queryAllUsers = 'SELECT * FROM vidhyardhi.userdetails
                           ORDER BY ID';
$statement2 = $db->prepare($queryAllUsers);
$statement2->execute();
$users = $statement2->fetchAll();
$statement2->closeCursor();
?>

<html>
<head>
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
	<table><form action ="profile.php" method = "post">
		<tr>
			<td><label>User Name: </label></td>
			<td><input  type = "text" name = "userName" required><br></td>
			</tr>
		<tr>
			<td><label>Password: </label></td>
			<td><input type = "password" name = "password" required><td>
		</tr>
		<tr>
			<td></td>
			<td><input id ="bsubmit"  type = "submit" value = "Login"></td>
		</tr>
	</table >
	
	<h2>New user 
	<a href = "reg.php">Register here</a></h2>
	<br><a href = "webDevelopment.php"> Home </a>
</div>
</body>
</html>