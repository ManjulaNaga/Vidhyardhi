<?php
require_once('database.php');
session_start();
$user_name = $_SESSION['userName'];
?>
<html>
	<head>
		<title>details conformation</title>
			<link rel = " stylesheet" type ="text/css" href ="style.css">
			
	</head>
	<body id="bordering">
		<img src ="saraswati.jpg" style="width: 4em; height: 4em;"><b id ="big">Vidyardhi.com</b>
		<div style="padding-left:600px"><a href="webDevelopment.php">Back</a></head></div>
<?php
$queryUser = 'SELECT * FROM vidhyardhi.userdetails';                      
$statement1 = $db->prepare($queryUser);
$statement1->execute();
$users = $statement1->fetchAll();
$statement1->closeCursor();
		echo "<br><b>All user details are as follows:</b><br><br><br>"; 
 		foreach($users as $user){
				echo "<b>Student Id: </b>". $user[0]."<br>";
				echo "<b>First Name: </b>". $user[1]."<br>";
				echo "<b>Last Name: </b>".$user[2]."<br>";
				echo "<b>User Name: </b>".$user[3]."<br>";
				echo "<b>Email id: </b>".$user[5]."<br>";
				echo "<b>Phone No: </b>".$user[6]."<br>";
				echo "<b>Address: </b>".$user[8]."<br>";
				echo "          ".$user[7]."<br>";
				echo "          ".$user[8]."<br><br>";
				//echo "<b>Created on: </b>".$users[9]."<br><br>";
				$flag = TRUE;
		}
		if($flag == FALSE){
			echo "<b>". $user. "  </b>is not in our records.";
		}
	?>

</body>
</html>
