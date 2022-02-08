<div class="todoList">
	
	<ul>
		<?php 
		include_once '../TodoApp/Database.php';
		$getTodo = TodoList::GetTodo();
		while($row = $getTodo->fetch_assoc()) { ?>
		<div class="edit">
			<small hidden id="hidden"><?php echo $row['id']?></small>
		<li id="msg"> <?php echo $row['todo']?> </li>
		</div>

		<?php 
		}
		?>
		
	</ul>



</div>
