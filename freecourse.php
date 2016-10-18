<?php
session_start();
	$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];

if(isset($_SESSION['userName'])) {
//	$_SESSION['userName'] = $_POST['userName'];
	$user = $_SESSION['userName'];
?>
<html>
<head>
<title>Free Online Course</title>
<link REL="StyleSheet" TYPE="text/css" HREF="style.css">
</head>
<body>
<h1><center>Congratulations!!!<?php echo $user?></center></h1>
<h2><center>You can access the course in couple of days</center></h2>
<h2><center><a href ="htmldoc.php"> home</a></center></h2>

<?php  
 } else
{
	echo "Please login to the Vidhyardhi.com";
	include "login.php";
}
?>
</body>
</html>