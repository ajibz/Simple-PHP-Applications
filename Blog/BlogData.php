<?php
include_once '../Blog/connect.php';

class Blog{


function PostBlog($title,$content,$category,$user){

$conn = Connect::Conn();

$query = "INSERT INTO `blog_post`(`title`, `content`, `category`, `user`) VALUES (?,?,?,?)";
$statement  = $conn->prepare($query);
$statement->bind_param("ssss",$title,$content,$category,$user);
$result = $statement->execute();
if ($result) {
	header("location:index.php?success='Blog Posted Successfully'");
}else{
	header("location:post.php?error='Blog Not Posted Successfully'");
}

	
}



function GetBlogPost($user){
	$conn = Connect::Conn();
$query = "SELECT * FROM `blog_post` WHERE `user` = ?";
$statement = $conn->prepare($query);
$statement->bind_param("s",$user);
$statement->execute();
$result = $statement->get_result();
return $result;

}



function GetBlogPostById($id){
	$conn = Connect::Conn();
$query = "SELECT * FROM `blog_post` WHERE `id` = ?";
$statement = $conn->prepare($query);
$statement->bind_param("s",$id);
$statement->execute();
$result = $statement->get_result();
return $result;

}



function UpdateBlogPost($title,$content,$category,$id){

	$conn = Connect::Conn();
$query = "UPDATE `blog_post` SET `title` =? ,`content`=? ,`category`=? WHERE `id` = ?";
$statement = $conn->prepare($query);
$statement->bind_param("ssss",$title,$content,$category,$id);
$result = $statement->execute();
if ($result) {
	header("location:index.php");
}


}



function DeleteBlogPost($id){

	$conn = Connect::Conn();

	$query="DELETE FROM `blog_post` WHERE id=?";
	$statement = $conn->prepare($query);
$statement->bind_param("s",$id);
$result = $statement->execute();
if ($result) {
	header("location:index.php");
}

}




}


