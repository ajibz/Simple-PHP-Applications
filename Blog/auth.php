<?php 
include_once '../Blog/connect.php';


class Authenticate{

	function Register($user,$pass){
		$conn = Connect::Conn();
		$query = "INSERT INTO `auth`(`username`,`password`) VALUES (?,?)";
		$statement = $conn->prepare($query);
		$statement->bind_param("ss",$user,$pass);
		$result = $statement->execute();
		if ($result) {
			header("location:login.php?success='Registration Successful, Please Login'");
		}
		else{

			header("location:register.php?error='Registration Not Successful'");
		}

	}


	function Login($user,$password){
		$conn = Connect::Conn();
		$query = "SELECT `username`,`auth_status` FROM `auth` WHERE `username`=? AND `password`=?";
		$statement = $conn->prepare($query);
		$statement->bind_param("ss",$user,$password);
		$statement->execute();
		$result = $statement->get_result();

		if (mysqli_num_rows($result) > 0) {
			$row = $result->fetch_assoc();

		$query2 = "UPDATE `auth` SET `auth_status`=? WHERE `username`=? ";
		$auth_value = 1;
		$statement2 = $conn->prepare($query2);
		$statement2->bind_param("ss",$auth_value,$row['username']);
		$statement2->execute();
		session_start();
		$_SESSION['user'] = $row['username'];
		$_SESSION['auth'] = $row['auth_status'];


			
			header("location:index.php?succes='Login Successful'");
		}else{
			header("location:login.php?error='Login Not Successful'");
		}

	}



}
