<?php
	session_start();
	$_SESSION['logged_in'] = null;
	session_destroy();
	header("Location: https://localhost:443/wpl/html_pages/website/index.html");
?>