<?php 
require ('clsFunction1.php');
require ('clsFunction2.php');
require ('clsFunction3.php');

/*
 *  ２つの数値を掛け算する
 *  クラス編
 */
 
$objFunction1 = new clsFunction1;
$objFunction2 = new clsFunction2;
$objFunction3 = new clsFunction3;
 
 
 
echo "ANSWER=".$objFunction3->testFnPiyo( 7, 8 ).PHP_EOL;

 ?>