<?php
	
	function create_registry($registryname, $username){
		require 'connectDB.php';

		$sql_query = "INSERT INTO registry(registryname, username) VALUES ('".$registryname."','".$username."')";
		$result = $mysqli->query($sql_query);
		if($result){
			return true;//registry created
		}else{
			return false;//registry could not be created
		}
	}
?>