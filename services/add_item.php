<?php
	function add_item(){
		require 'connectDB.php';

		$sql_query = "INSERT INTO gifts(giftid, registryname, username) VALUES('".$giftid."','".$registryname."','".$username."')";
		$result = $mysqli->query($sql_query);
		if($result){
			return true;//item added to registry
		}else{
			return false;//could not add item to registry
		}
	}
?>