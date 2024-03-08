<?php
if(isset($_POST['submit'])){
	$uname=$_POST['name'];
	$uemail=$_POST['email'];
	$usubject=$_POST['subject'];
	$uabout=$_POST['about'];

	$con=mysqli_connect("localhost","root","","sportclub");
	$sql="INSERT INTO feedback(name,email,subject,about) VALUES('$uname','$uemail','$usubject','$uabout')";

	$result=mysqli_query($con,$sql);
	if ($result){
		 header('Location:../feedback.php');
	}
	else{
		 header('Location:index1.php');
	}
	
}
?>