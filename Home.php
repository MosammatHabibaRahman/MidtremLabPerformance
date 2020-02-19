<?php
	session_start();
	if(!isset($_SESSION['name']))
	{  
		header("location: form.php");
	}
?>

<!DOCTYPE html> 
<html>
	<head>
		<title>Home Page</title>
	</head>
	<body>
		<h1>Welcome to the Home Page!</h1>
	</body>
</html>