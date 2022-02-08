<?php
session_start();
if (isset($_SESSION['user'])):?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blog post</title>
	<link rel="stylesheet" type="text/css" href="../Blog/style.css">
</head>
<body>
<!-- <center> -->
	<div class="mainbody">

	<?php	
	include 'leftside.php';
	include 'middle.php';
	include 'rightside.php';
	?>
		
	</div>
<!-- </center> -->

</body>
</html>

<?php 
else:
	header("location:login.php");
endif;
?>