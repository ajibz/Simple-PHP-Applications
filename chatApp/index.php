<?php 
session_start();
if (isset($_SESSION['auth']) == 1) :?>

<?php  

include_once 'data.php';

if(isset($_POST['Send'])){
$message = $_POST['message'];
$chatPost = Chats::PostChat($message,$_SESSION['user']);

}

 $getChat = Chats::GetChats();

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Chat  Page</title>
	<link rel="stylesheet" type="text/css" href="../chatApp/style.css">
</head>
<body>
<center>
<div id="chatContainer">

	<div class="chatDisplay" style="background-color: dimgray;padding: 20px 20px 20px 30px;margin-top: 20px;margin-bottom: 20px;">
		<?php
		while ($row =  $getChat->fetch_assoc() ) {
			echo "<div class='innerchat'>";
			if ($_SESSION['user'] == $row['username'] ) {
			echo "<p id='userchat'>";
			echo $row['username']."-"."<span>".$row['created_at']."</span>";
			echo "</p>";
			
			echo "<div id='messages'>";
			echo "<p >";
			echo $row['message'];
			echo "</p>";
			echo "</div>";
			echo "</div>";
			}else{
			
			echo "<small id='nonuserchat'>";
			echo $row['username']."-"."<span>".$row['created_at']."</span>";
			echo "</small>";
			echo "<div >";
			echo "<p style='text-align:right'>";
			echo $row['message'];
			echo "</p>";
			echo "</div>";
			echo "</div>";

			}
		}
		?>
	</div>
	<div style="padding-top: 50px;">
	<div id="chatMessage" >
		
		<form method="post" action="">
			<div>
			<textarea cols="40" rows="10" name="message" id="message_area" onChange="messageChange()"></textarea>
			</div>
			<div>
			<input type="submit" name="Send" >
			</div>
		</form>
		</div>
		
	</div>
	
</div>
</center>

<!-- 
<script>
function messageChange() {
	let msg = document.getElementById('message_area').value
	const newElement = document.createElement("p");
	
	newElement.classList.add('new');
	newElement.innerText=msg;
	document.getElementById('chatMessage').appendChild(newElement);
	msg.value="";

}
</script> -->

</body>
</html>

<?php
 else:
 	header("location:login.php");
 endif;
?>