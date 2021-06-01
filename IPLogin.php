<?php
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"health_tracker");
if(!$conn){
	die("Connection failed:".mysqli_connect_error($conn));
}
else{

	$result=mysqli_query($conn,"select * from ip_login where uname='".$uname."' and pass='".$pass."'") 
	             or die("Failed to query database".mysql_error());
	$row=mysqli_fetch_array($result);
    if($row['uname']==$uname && $row['pass']==$pass){
    	include 'IPregistration form.html';
    }
    else{
    	echo "Login Failed";
    	exit();
    }
}
?>