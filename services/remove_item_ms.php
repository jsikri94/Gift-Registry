<?php
	function remove_item(){
		require 'connectDB.php';

		$sql_query = "DELETE FROM gifts WHERE giftid = '".$giftid."', username = '".$username."', registryname='".$registryname."'";
		$result = $mysqli->query($sql_query);
		if($result){
			return true;//item deleted from registry
		}else{
			return false;
		}
	}
?>