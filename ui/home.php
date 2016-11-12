<?php 
	session_start();
	if(!isset($_SESSION['id']))
	{
		header("location:login.php");
	}
	$id = $_SESSION['id'];
	echo $id;

?>
<html>
<body>
	<a href="#"><button>Next</button></a>
	<a href="login.php"><button>Log out</button></a>
</body>