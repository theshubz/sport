<?php
	session_start();
	if (isset($_SESSION['id'])) {
		header('Location: ../index1.php');
	}


?>