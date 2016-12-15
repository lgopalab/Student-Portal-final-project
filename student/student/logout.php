<?php
	ob_start();
	session_start();
	session_destroy();
	echo '<h1>Successfully logged out...</h1>';
	header('Location:'.'../index.php');
	ob_flush();
?>