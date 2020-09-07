<?php 
include 'config.php';
$email = $_POST['email'];


$sql = $mysqli->query("SELECT * FROM `form` WHERE `email`='$email'");

if($sql){

	$row_count=$sql->num_rows;

	if($row_count>0){
		echo "duplicate email is present";
	}
	else{
		echo "0";
	}
}
?>