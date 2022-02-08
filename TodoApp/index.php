<?php

include_once '../TodoApp/Database.php';
if (isset($_POST['send'])) {

	$todo_msg = $_POST['todo_message'];
	$AddTodo = TodoList::AddTodo($todo_msg);
}elseif(isset($_POST['update'])){

$id = $_GET['id'];
$msg = $_POST['todo_message'];
$update = TodoList::UpdateTodo($msg,$id);

}
elseif (isset($_POST['delete'])) {

	$id = $_GET['id'];
	TodoList::TodoDelete($id);

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Todo List</title>
	<link rel="stylesheet" type="text/css" href="../TodoApp/style.css">
</head>
<body>
	<center>
	<div class="maincontainer">
		<?php
		if(isset($_GET['success'])){
			echo "<h2 style='color:blue'>{$_GET['success']}</h2>";
		}elseif (isset($_GET['error'])) {
			echo "<h2 style='color:red'>{$_GET['error']}</h2>";
		}

		?>
		<div class="header">

		<h1>Todo App</h1>
		<input type="submit" value="Add Todo" id="add_todo">
		</div>
		<div id="todocontainer">
			<?php include_once '../TodoApp/todo.php';?>
		</div>
		
	</div>
	</center>



	<script type="text/javascript" src="../TodoApp/todo.js"></script>

</body>
</html>