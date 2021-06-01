<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$sex=$_POST['sex'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$bldgrp=$_POST['bldgrp'];
$addr=$_POST['addr'];
$phn=$_POST['phn'];
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"health_tracker");
if(!$conn){
	die("Connection failed:".mysqli_connect_error());
}
else{
	$sql="insert into usertable(fname,lname,age,sex,uname,pass,email,bldgrp,addr,phn) values ('$fname','$lname','$age','$sex','$uname','$pass','$email','$bldgrp','$addr','$phn')";
	if(!mysqli_query($conn,$sql)){
		echo "Not Inserted";
	}
	else{
		echo "Inserted Succesfully";
		include 'Login.html';
	}
}

?>