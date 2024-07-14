<?php
	session_start();
	unset($_SESSION['student_id']);
	session_unset();
	session_destroy();
	header('location:../../index.php');
	exit();
?>