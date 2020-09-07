<?php 
include 'config.php';
$phonenum = $_POST['phonenum'];


$sql = $mysqli->query("SELECT * FROM `form` WHERE `phonenumber`='$phonenum'");

if($sql){

	$row_count=$sql->num_rows;

	if($row_count>0){
		echo "duplicate first Phone Number is present";
	}
	else{
		echo "0";
	}
}
?>