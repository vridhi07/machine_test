<?php 

//=========== Object Oriented Db Conn ============
 date_default_timezone_set("Asia/Kolkata");
 $servername = "localhost";
 $username = "root";
 $Password = "" ;
 $dbname = "testassignment";
 $mysqli = new mysqli($servername, $username, $Password, $dbname);
 
 if ($mysqli->connect_error) {

		echo "Failed to connect to MySQL: " . $mysqli->connect_error;	
		$mysqli->close();
}




?>