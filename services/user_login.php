<?php
	session_start();
	require 'loginms.php';

	if(isset($_POST['username'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$_SESSION['username'] = $username;
		if(!empty($username)){
			$result = check_login_creds($username, $password);
			if($result){
				header("Location: https://localhost:443/wpl/html_pages/website/user.php");
			}else{
				echo "error 404";
			}
		}
	}
?>