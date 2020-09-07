<?php 
include 'config.php';
$fname = $_POST['fname'];


$sql = $mysqli->query("SELECT * FROM `form` WHERE `fname`='$fname'");

if($sql){

	$row_count=$sql->num_rows;

	if($row_count>0){
		echo "duplicate first name is present";
	}
	else{
		echo "0";
	}
}
?>