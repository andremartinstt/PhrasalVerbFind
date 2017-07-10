<?php

	function conect(){
		$host = "localhost";
		$username = "root";
		$password = "";
		$dbname = "pvfind";

		$conn = new mysqli($host, $username, $password, $dbname);
		return $conn;
	}

	$connect = conect();
	
?>