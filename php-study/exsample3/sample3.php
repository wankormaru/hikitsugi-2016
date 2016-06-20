<?php 

/*
 *  オートローダーをつかってみた
 *  クラス編
 *  sugitani
 */
require ('app/bootstrap.php');



/*
 *  ２つの数値を掛け算する
 *  クラス編
 *  sugitani
 */
 
$objFunction1 = new clsFunction1;
$objFunction2 = new clsFunction2;
$objFunction3 = new clsFunction3;
 
 
 
echo "ANSWER=".$objFunction3->testFnPiyo( 7, 8 ).PHP_EOL;



 ?>