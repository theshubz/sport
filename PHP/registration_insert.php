<?php
if(isset($_POST['submit'])){
	$uname=$_POST['name'];
	$uemail=$_POST['email'];
	$upass=$_POST['pass'];
	$contact=$_POST['contact'];
	$regdate=$_POST['regdate'];
	
	$uadd=$_POST['address'];
	

	include('connection_db.php');

	$sql="INSERT INTO users(user_name,user_email,user_password,user_contact,register_date,user_address) VALUES('$uname','$uemail','$upass','$contact','$regdate','$uadd')";

	$result=mysqli_query($con,$sql);
	if ($result){
		header('Location:../login.php');
	}
	else{
		 header('Location:index1.html');
	}
	
}
?>