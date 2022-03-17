<?php
	session_start();
	session_destroy();
	unset($_SESSION['BOG_User']);
	header('Location: ../login/login.php');
?>