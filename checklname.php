<?php 
include 'config.php';
$lname = $_POST['lname'];


$sql = $mysqli->query("SELECT * FROM `form` WHERE `lname`='$lname'");

if($sql){

	$row_count=$sql->num_rows;

	if($row_count>0){
		echo "duplicate Last name is present";
	}
	else{
		echo "0";
	}
}
?>