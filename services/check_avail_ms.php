<?php

	function check_availability($username){
		require 'connectDB.php';

		$result = $mysqli->query("SELECT * FROM login_credentials WHERE username = '".$username."'");
		$row = mysqli_fetch_assoc($result);
		if($row){
			return false;//username not available need to change username
		}else{
			return true;
		}
	}
	//check_availability("jsi");
?>