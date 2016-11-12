<?php

$server = "localhost";
$username = "root";
$password = "root";
$database = "mydb";

//Create Connection
$conn = new mysqli($server,$username,$password,$database);

//Check Connection
if($conn->connect_error)
{
	die("Connection failed : ".$conn->connect_error);
}
/*else
	echo "Connected successfully!!!";
*/
?>