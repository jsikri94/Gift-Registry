<?php
	function check_registry_name($registryname, $username){
		require 'connectDB.php';

		$result = $mysqli->query("SELECT * FROM registry WHERE username = '".$username."' AND registryname = '".$registryname."'");
		$row = mysqli_fetch_assoc($result);
		if($row){
			return false;//registry name exists for current user 
		}else{
			return true;//registry name can be used by current user
		}
	}
?>