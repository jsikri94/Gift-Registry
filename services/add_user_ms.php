<?php

	function add_user($user_data){//data needs to be passed here
		//need to check if optional data has been passed?
		require 'connectDB2.php';

		$size = sizeof($user_data);
		if($size === 8){//all details were entered
			$sql_query1 = "INSERT INTO users(firstname, lastname, contactnumber, emailID, username) VALUES ('".$user_data['fname']."','".$user_data['lname']."','".$user_data['c_number']."','".$user_data['emailID']."','".$user_data['username']."')";
			$sql_query2 = "INSERT INTO login_credentials(username, password) VALUES ('".$user_data['username']."','".$user_data['password']."')";
			$result1 = $mysqli->query($sql_query1);
			$result2 = $mysqli->query($sql_query2);
			if($result1 && $result2){
				return true;
			}else{
				return false;
			}
		}else{//contact number was not entered
			$sql_query1 = "INSERT INTO users(firstname, lastname, emailID, username) VALUES ('".$user_data['firstname']."','".$user_data['lastname']."','".$user_data['emailID']."','".$user_data['username']."')";
			$sql_query2 = "INSERT INTO login_credentials(username, password) VALUES ('".$user_data['username']."','".$user_data['password']."')";
			$result1 = $mysqli->query($sql_query1);
			$result2 = $mysqli->query($sql_query2);
			if($result1 && $result2){
				return true;
			}else{
				return false;
			}
		}		
	}
?>