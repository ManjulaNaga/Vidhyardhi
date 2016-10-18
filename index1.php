<?php
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

<!DOCTYPE html>
<html>
<head>
    <title>login page</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
<main>
    <h1>userdetails confirmation</h1>
	<aside>
        <!-- display a list of users -->
        <h2>user id  user names Passwords</h2>
        <nav>
        <ul>
            <?php foreach ($users as $user) : ?>
            <li><?php echo $user['id'] ; ?>
			<?php echo $user['UserName'] ; ?> 
            <?php echo $user['Password'] ; ?></li>
			<?php endforeach; ?>
		</ul>
        </nav>           
    </aside>

</main>    
</body>
</html>
