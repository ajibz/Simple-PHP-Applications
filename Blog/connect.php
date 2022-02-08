<?php

class Connect{

	function Conn(){

		$conn = new mysqli("localhost","ajibztech","ajibose419","blogdb");
		return $conn;
	}

}

