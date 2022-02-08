<?php

include_once("connect.php");

class Auth
 {

	function Register($Username,$Password,$Role){
		$conn = new Conn();
		$connect = $conn->Connection();
		$statement = $connect->prepare("INSERT INTO `user`(`username`, `password`,`role`) VALUES (?,?,?)");
		$statement->bind_param("sss",$Username,$Password,$Role);
		$result = $statement->execute();
		if ($result) {
  $_SESSION['success'] = "Registration Successful";
  header("location:login.php");


    }else{
    	$_SESSION['error'] = "Registration Not Successful";
    }

	}



	function Login($Username,$Password){
		
		$conn = new Conn();
		$connect = $conn->Connection();
		$statement = $connect->prepare("SELECT * FROM  `user` WHERE `username` = ? AND `password`=?");
		$statement->bind_param("ss",$Username,$Password);
		 $statement->execute();
		$result=$statement->get_result();
		
		if (mysqli_num_rows($result) > 0) {
			$auth = 1;
			$row = $result->fetch_assoc();
			$statement2 = $connect->prepare("UPDATE `user` SET `authenticated` = ? WHERE `id` = ?");
		$statement2->bind_param("ss",$auth,$row['id']);
		 $statement2->execute();

		$_SESSION['auth'] = $row['authenticated'];
		$_SESSION['user'] = $row['username'];
			
			header("location:index.php");
		}
	}




function LogOut(){


$conn = new Conn();
		$connect = $conn->Connection();
		$statement = $connect->prepare("SELECT * FROM  `user` WHERE `username` = ?");
		$statement->bind_param("s",$_SESSION['user']);
		 $statement->execute();
		$result=$statement->get_result();
		
		if (mysqli_num_rows($result) > 0) {
			$auth = 0;
			$row = $result->fetch_assoc();
			$statement2 = $connect->prepare("UPDATE `user` SET `authenticated` = ? WHERE `id` = ?");
		$statement2->bind_param("ss",$auth,$row['id']);
		 $statement2->execute();

		 session_destroy();
			
			header("location:login.php");
		}



}







}

