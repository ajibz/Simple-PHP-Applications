<?php

class Connect
{
    function DbConnect(){
    	return  mysqli_connect("127.0.0.1", "ajibztech", "ajibose419", "TodoDb");
    }
}
