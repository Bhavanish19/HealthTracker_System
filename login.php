<?php
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"health_tracker");
if(!$conn){
	die("Connection failed:".mysqli_connect_error());
}
else{

	$result=mysqli_query($conn,"select uname,pass from usertable where uname='".$uname."' and pass='".$pass."'") 
	             or die("Failed to query database".mysqli_error($conn));
	$row=mysqli_fetch_array($result);
    if($row['uname']==$uname && $row['pass']==$pass){
        include 'appointment.html'; 
          }
    else{
    	echo "Login Failed";
    	exit();
    }
}
?>