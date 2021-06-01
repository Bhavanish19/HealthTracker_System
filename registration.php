<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$sex=$_POST['sex'];
$hgt=$_POST['hgt'];
$wgt=$_POST['wgt'];
$sym=$_POST['sym'];
$dis=$_POST['dis'];
$days=$_POST['days'];
$bldgrp=$_POST['bldgrp'];
$addr=$_POST['addr'];
$phn=$_POST['phn'];
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"health_tracker");
if(!$conn){
	die("Connection failed:".mysqli_connect_error($conn));
}
else{
	$sql="insert into patient (fname,lname,age,sex,hgt,wgt,sym,dis,days,bldgrp,addr,phn) values ('$fname','$lname','$age','$sex','$hgt','$wgt','$sym','$dis','$days','$bldgrp','$addr','$phn')";
	if(!mysqli_query($conn,$sql)){
		echo "Not Inserted";
	}
	else{
		echo "Inserted Succesfully";
		include 'IPregistration form.html';
	}
}

?>