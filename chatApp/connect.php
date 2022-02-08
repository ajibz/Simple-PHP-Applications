<?php

class Conn{


	function Connection(){
		$con = mysqli_connect("localhost","ajibztech","ajibose419","chatApp");
		return $con;
	}
}



