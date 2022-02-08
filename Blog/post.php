<?php
session_start();
if (isset($_SESSION['auth']) == 1) :?>


<?php

if (isset($_POST['send'])) {
include_once '../Blog/BlogData.php';

$title =$_POST['title'];
$content =$_POST['content'];
$category =$_POST['category'];
$user = $_SESSION['user'];

Blog::PostBlog($title,$content,$category,$user);

}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Blog Post</title>
	<link rel="stylesheet" type="text/css" href="../Blog/style.css">
</head>
<body>

	<center>
		
		<div class="mainaddpostContainer">
			<div class="postContainer">
				<h1>Add Blog </h1>
				<form action="#" method="POST">
			<div>
				<input type="text" name="title" id="title">
			</div>

			<div>
				<textarea id="content" name="content"></textarea> 
			</div>

			<div>
				<select id="category" name="category">
					<option>Technology</option>
					<option>Entertainment</option>
					<option>Food</option>
					<option>Culture</option>
					<option>Education</option>
				</select>
			</div>

			<div>
				<input type="submit" name="send" id="send_post">
			</div>

			</form>


			</div>

		</div>


	</center>


</body>
</html>

<?php

else:
	header("location:login.php");
endif;
?>

