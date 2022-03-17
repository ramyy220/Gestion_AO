<?php
	session_start();
	session_destroy();
	unset($_SESSION['COP_User']);
	header('Location: ../login/login.php');
?>