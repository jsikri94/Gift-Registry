<?php
	function check_login_creds($username, $password){
		require 'connectDB.php';
		$result = $mysqli->query("SELECT * FROM login_credentials WHERE username = '".$username."' and password = '".$password."'");
		$row = mysqli_fetch_assoc($result);
		if($row){
			return true;
		}else{
			return false;
		}
	}
?>