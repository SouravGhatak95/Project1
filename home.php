<? php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home Page</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
	
	<a href="log-in.php" class="btn btn-danger">Logout</a>

 <h1> Welcome 
 	<?php 
 	session_start();
 	echo $_SESSION['Username']; 
 	?>  
 </h1>

</body>
</html>