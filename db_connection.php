<?php
function OpenCon()
{
	$dbhost = "localhost:3306";
	$dbuser = "root";
	$dbpass = "elena2020";
	$db = "feuga";
	$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
	if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 

	return $conn;
}
 
function CloseCon($conn)
{
	$conn -> close();
}
   
