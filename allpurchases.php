
<html>
	<head>
		<title>View Users</title>
		<link rel = " stylesheet" type ="text/css" href ="style.css">
		<img src ="saraswati.jpg" style="width: 4em; height: 4em;"><b id ="big">Vidyardhi.com</b>
		<div style="padding-left:600px"><a href="webDevelopment.php">Back</a></head></div>
	<body id="bordering">
	<h2> View all purchase Details here </h2><br>
	<h3>Keep it secured</h3>

<?php
$myfile = fopen("billing-".date("Y-m-d").".csv", "r") or die("Unable to open file!");
//echo readfile($myfile);

 while (!feof($myfile) ) {
	$detailArray =  fgetcsv($myfile, 4000);
	echo "<b>No. of Website Development books: </b>". $detailArray[0]."<br>";
	echo "<b>No. of Website Design books: </b>".$detailArray[1]."<br>";
	echo "<b>No. of Advanced Website Development books: </b>".$detailArray[2]."<br>";
	echo "<b>Bought on : </b>".$detailArray[3]."<br><br>";
  }
fclose($myfile);
?>
<form>
	<input type="hidden" value="userName" name = "userName">
	

</body>
</html>