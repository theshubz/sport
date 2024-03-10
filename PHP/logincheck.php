<?php
     require_once("connection_db.php");
	 session_start();

//echo "session  id =".$_SESSION['id'];
	//session_start();
	if (!isset($_SESSION['id'])) {
		echo $_SESSION[id];
        echo '<script type="text/javascript">'; 
echo 'alert("Invalid Session");'; 
echo 'window.location.href = "home.php";';
echo '</script>'; 

	}else{
		header('Location: ../index1.php');
		exit();
	}


?>