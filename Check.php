<?php
	
	session_start();
	
	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$gender = $_REQUEST['gender'];
		$date = $_REQUEST[date];
		$month = $_REQUEST[month];
		$year = $_REQUEST[year];
		$SSC = $_REQUEST[SSC];
		$HSC = $_REQUEST[HSC];
		$BSc = $_REQUEST[BSc];
		$MSc = $_REQUEST[MSc];
		
		if(empty(trim($name)))
		{
			echo "Name field cannot be empty!";
		}
		else if(str_word_count($name) != 2)
		{
			echo "Name field must contain two words!";
		}
		/* if(!ctype_alpha(substr($name,0,1)))
		{
			echo "Name field must start with an Alphabet!";
		}*/
		else
		{
			$_SESSION['name'] = $name;
			header("location: Home.php");
		}
	}
	else
	{
		header("location: form.php");
	}
?>