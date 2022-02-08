<?php
include_once("connect.php");

class Chats
 {
	

	function GetChats(){

		$conn = new Conn();
		$connect = $conn->Connection();
		$statement = $connect->prepare("SELECT * FROM  `chat`");
		 $statement->execute();
		$result=$statement->get_result();
		return $result;
		
		// if (mysqli_num_rows($result) > 0) {
		// 	while ($row = $result->fetch_assoc()) {
				



		// 	}
		// }
	}

function PostChat($message,$username){
		$conn = new Conn();
		$connect = $conn->Connection();
		$statement = $connect->prepare("INSERT INTO `chat`(`message`, `username`) VALUES (?,?)");
		$statement->bind_param("ss",$message,$username);
		$result = $statement->execute();
		if ($result) {



    }

	}




}

