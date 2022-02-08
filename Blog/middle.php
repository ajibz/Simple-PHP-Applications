

<?php

include_once '../Blog/BlogData.php';


	// $user = $_SESSION['user'];



$getBlog = Blog::GetBlogPost($_SESSION['user']);
?>

<div class="middlecontainer">
	<div style="display: flex;justify-content: space-evenly;">
		<a href="post.php" style="margin-top: -50px;background-color: green; height: 30px;text-decoration: none;color: white;margin-right: 20px;padding-top: 5px;width: 75px;padding-left: 17px;border-radius: 7px;">Add Post</a>
	<h1 style="text-align: center; margin-top: -60px;font-size: 40px;color: red;text-decoration: underline;font-weight: bolder;">Blog Post</h1>
	
	</div>

	<?php 

	while ($row = $getBlog->fetch_assoc()) { ?>
		<div id="middle_post">
	 	<p id="post_user">created by- <?php echo $row['user']; ?> | <small><?php echo $row['date'];?></small></p>
		<h1><?php echo $row['title'];?></h1>
		<p><?php echo $row['content'];?></p>
		<div>
			<a href="edit.php?id=<?php echo $row['id'];?>"  style="background-color: green;text-decoration: none;color: white;border-radius: 7px;">Edit</a>
		</div>
		</div>
	 <?php } ?>


</div>

