<?php 


if(isset($_POST['delete'])){

	Blog::DeleteBlogPost($id);
}
