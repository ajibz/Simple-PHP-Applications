<?php 

class Calc{

	public $num1;
	public $num2;


	 function __construct($newNum1,$newNum2){

		$this->num1 = $newNum1;
		$this->num2 = $newNum2;
	}

	function Add(){
		return $this->num1+$this->num2;
	}


	function Subtract(){
		return $this->num2-$this->num1;
	}

}

