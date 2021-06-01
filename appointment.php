<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phn=$_POST['phn'];
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"health_tracker");
if(!$conn){
	die("Connection failed:".mysqli_connect_error($conn));
}
else{
	$sql="insert into appointment(fname,lname,email,phn) values ('$fname','$lname','$email','$phn')";
	if(!mysqli_query($conn,$sql)){
		echo "Not Inserted";
	}
	else{
		echo "Inserted Succesfully";
		include 'appointment.html';
	}
}

?>