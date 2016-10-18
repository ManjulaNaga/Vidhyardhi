<?php
	$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
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
	<table><form action ="validation.php" method = "post">
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
	<a href = "reg2.php">Register here</a></h2>
	<br><a href = "webDevelopment.php"> Home </a>
	
	
</div>
</body>
</html>