<?php 

include_once('test2.php');
$Calculator = new Test(20,20);
$result = $Calculator->Add();
$result2 = $Calculator->Subtract();

$result3  =$Calculator->Divide(60,6);
echo "$result <br>";
echo "$result2";
echo "Result3 Equals = ".$result3;