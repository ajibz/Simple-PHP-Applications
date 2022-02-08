<?php
include_once '../TodoApp/conn.php';
class TodoList
{

	function AddTodo($todo){
	$conn = Connect::DbConnect();
	$query="INSERT INTO `todo_list`(`todo`) VALUES (?)";
    $statement = $conn->prepare($query);
    $statement->bind_param("s",$todo);
    $result = $statement->execute();
    if ($result) {
    	
    	header("location:index.php?success='Todo Successfully added'");
    }
    else{
    	header("location:index.php?error='Todo Not Successfully added'");
    }

}


	function GetTodo(){
		$conn = Connect::DbConnect();
		$query = "SELECT * FROM `todo_list`";
		$statement = $conn->prepare($query);
	    $statement->execute();
		return $result= $statement->get_result();



	}


	function UpdateTodo($todo,$id){
		$conn = Connect::DbConnect();
		$query = "UPDATE `todo_list` SET `todo`=? WHERE `id`=?";
		$statement = $conn->prepare($query);
		$statement->bind_param("ss",$todo,$id);
		$result = $statement->execute();
		if ($result) {
    	
    	header("location:index.php?success='Todo Updated Successfully'");
    }
    else{
    	header("location:index.php?error='Todo Not Updated Successfully'");
    }

	}


	function TodoDelete($id){
		$conn = Connect::DbConnect();
		$query = "DELETE FROM `todo_list` WHERE `id`=?";
		$statement = $conn->prepare($query);
		$statement->bind_param("s",$id);
		$result = $statement->execute();

	if ($result) {
    	
    	header("location:index.php?success='Todo Deleted Successfully'");
    }
    else{
    	header("location:index.php?error='Todo Not Deleted Successfully'");
    }

	}



}