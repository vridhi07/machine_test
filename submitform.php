<?php
 include 'config.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$hobbies = $_POST['hobbies'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$phonenum = $_POST['phonenum'];
$Designation = $_POST['Designation'];


 $sql = "INSERT INTO `form`(`fname`, `lname`, `gender`, `hobbies`, `email`, `dob`, `phonenumber`, `designation`) VALUES ('$fname','$lname','$gender','$hobbies','$email','$dob','$phonenum','$Designation')";
$result = $mysqli->query($sql);

 if ($result)
 {
    ?>  
         <script type="text/javascript">
			alert("Data Inserted successfull");
		</script>  
	<?php
 }

else{
   
     ?>  
    <script type="text/javascript">
			alert("something is wrong");
		</script>  

	<?php
}

?>