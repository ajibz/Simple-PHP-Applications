<?php
session_start();
if (isset($_SESSION['auth']) == 1) :?>


<?php
include_once '../Blog/BlogData.php';
$id = $_GET['id'];
$getBlogById = Blog::GetBlogPostById($id);

$row = $getBlogById->fetch_assoc();

if (isset($_POST['send'])) {


$title =$_POST['title'];
$content =$_POST['content'];
$category =$_POST['category'];



Blog::UpdateBlogPost($title,$content,$category,$id);

}

if(isset($_POST['delete'])){

	Blog::DeleteBlogPost($id);
}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Blog Post</title>
	<link rel="stylesheet" type="text/css" href="../Blog/style.css">
</head>
<body>

	<center>
		
		<div class="mainaddpostContainer">
			<div class="postContainer">
				<h1>Update Blog </h1>
				<form action="#" method="POST">
			<div>
				<input type="text" name="title" id="title" value="<?php echo $row['title']?>">
			</div>

			<div>
				<textarea id="content" name="content"><?php echo $row['content']?></textarea> 
			</div>

			<div>
				<select id="category" name="category" >
					<option>Technology</option>
					<option>Entertainment</option>
					<option>Food</option>
					<option>Culture</option>
					<option>Education</option>
				</select>
			</div>

			<div>
				<input type="submit" name="send" id="send_post" value="Update Post">
				<form method="POST" action="<?php echo $_SESSION['PHP_SELF']?>">
					<input type="submit" name="delete" id="send_post" value="Delete Post">
				</form>
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

