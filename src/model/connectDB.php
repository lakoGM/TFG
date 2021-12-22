<?php

function connectDB()
{
	$conn = new mysqli("localhost", "root", "", "bbdd");
	 if($conn->connect_error)
	 {
	 	die("Connection failed: " . $conn->connect_error);
	 }
	 $conn->set_charset("utf8");
	 return $conn;
}