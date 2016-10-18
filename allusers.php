<html>
	<head>
		<title>View Users</title>
		<link rel = " stylesheet" type ="text/css" href ="style.css">
		<img src ="saraswati.jpg" style="width: 4em; height: 4em;"><b id ="big">Vidyardhi.com</b>
		<div style="padding-left:600px"><a href="webDevelopment.php">Back</a></head></div>
	<body id="bordering">
	<h2> User profiles created on <?php 	
		date_default_timezone_set('America/Los_Angeles');
		echo date("F d,Y");?></h2><br>
	<h3>Keep it secured</h3>

<?php

$myfile = fopen("log-".date("Y-m-d").".csv", "r") or die("Unable to open file!");

 while (!feof($myfile) ) {
	$detailArray =  fgetcsv($myfile, 4000);
	echo "<b>First Name: </b>". $detailArray[0]."<br>";
	echo "<b>Last Name: </b>".$detailArray[1]."<br>";
	echo "<b>User Name: </b>".$detailArray[2]."<br>";
	echo "<b>Email id: </b>".$detailArray[3]."<br>";
	echo "<b>Phone No: </b>".$detailArray[4]."<br>";
	echo "<b>Address: </b>".$detailArray[5]."<br>";
	echo "          ".$detailArray[6]."<br>";
	echo "          ".$detailArray[7]."<br>";
	echo "<b>Created on: </b>".$detailArray[8]."<br><br>";
  }
fclose($myfile);
?>
<form>
	<input type="hidden" value="userName" name = "userName">
</body>
</html>