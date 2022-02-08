<?php 
if (isset($_POST['register'])) {
	

include_once '../Blog/auth.php';
$username = $_POST['user'];
$password = $_POST['password'];


 Authenticate::Register($username,$password);

}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register User</title>
	<link rel="stylesheet" type="text/css" href="../Blog/style.css">
</head>
<body>
	<center>
	<div class="mainUserContainer">
		<div class="UserContainer">
		<h1 style="text-decoration: underline; color: white;">Register </h1>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
			
			<div>
				<label for="user">Username</label>
				<input type="text" name="user" id="user">
			</div>

			<div>
				<label for="pass">Password</label>
				<input type="password" name="password" id="pass">
			</div>
			<div>
				<input type="submit" name="register" id="submit_btn">
			</div>

		</form>
		
	</div>
	</div>
	</center>

</body>
</html>