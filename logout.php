<?php
	session_start();
if(isset($_POST['userName'])) {
	$_SESSION['userName'] = $_POST['userName'];
}
?>
<html>
<head><center><img src="6.jpg" alt="Books" style="width:104px;height:128px;"></center>
<!--<link rel ="stylesheet"  type = "text/css" href ="style.css"> -->
<link REL="StyleSheet" TYPE="text/css" HREF="style.css">

</head>
<body id="bordering">
<h1><center>Logged out sucessfully......<?php echo $_SESSION['userName']; ?></center></h1>
<h2><center>Want to go home..click below</center></h2>
<a href="webDevelopment.php"><h2><center>home</center></h2></a>
<?php
// delete all session values
session_unset();
?>
</body>
</html>