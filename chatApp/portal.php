<?php 
session_start();
if (isset($_SESSION['auth']) == 1) :?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard Page</title>
	<link rel="stylesheet" type="text/css" href="../chatApp/style.css">
</head>
<body>
<?php include_once '../chatApp/topnav.php';?>
<?php include_once 'sidenav.php';?>


</body>
</html>

<?php
 else:
 	header("location:login.php");
 endif;
?>