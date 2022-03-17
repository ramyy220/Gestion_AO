<?php
	session_start();
	session_destroy();
	unset($_SESSION['Admin_User']);
	header('Location: ../login/login.php');
?>