<?php
	session_start();
	session_destroy();
	unset($_SESSION['CEOT_User']);
	header('Location: ../login/login.php');
?>