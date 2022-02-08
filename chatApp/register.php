<?php session_start(); if (isset($_SESSION['auth'])== 1){
	header("location:index.php");
}
?>

<?php 
include_once("../chatApp/Auth.php");
if (isset($_POST['register'])) {
	
	$username = $_POST['name'];
	$password = $_POST['password'];
	$role = $_POST['role'];
   $auth = new Auth();
 $auth->Register($username,$password,$role);
  

}


 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="../chatApp/style.css">
</head>
<body>
<center>
	<div class="userContainer">
		<?php
		if (isset($_SESSION['success'])) {
			echo "<h2 style='color:green'>";
			echo $_SESSION['success'];
			echo "</h2>";
			unset($_SESSION['success']);
		}
		elseif (isset($_SESSION['error'])) {
			echo "<h2 style='color:red'>";
			echo $_SESSION['error'];
			echo "</h2>";
			unset($_SESSION['error']);
		}

		?>
		<form method="post" action="">
			<fieldset >
				<legend>Registration</legend>
				<div style="display: flex;justify-content: space-evenly;align-items: center;">
					<label for="name">UserName</label>
					<input type="text" name="name" id="name" placeholder="Input User Name" required>
				</div>

				<div style="display: flex;justify-content: space-evenly;align-items: center;">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" placeholder="Input Password" required>
				</div>

				<div style="display: flex;justify-content: space-evenly;align-items: center;">
					<label for="role">User Role</label>
					<select name="role" id="role" required>
						
						<option>Student</option>
						<option>Lecturer</option>

					</select>
				</div>
				<input type="submit" name="register" id="userButton">


			</fieldset>
		</form>

	</div>
	</center>

</body>
</html>