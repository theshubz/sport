<?php
	//session_start();
	if (!isset($_SESSION['id'])) {
		// If the session is invalid, redirect the user to the home page
		echo '<script type="text/javascript">'; 
		echo 'alert("Invalid Session");'; 
		echo 'window.location.href = "home.php";';
		echo '</script>'; 
		exit; // Terminate further execution of the script
	}


?>