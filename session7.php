<?php

/*function abc(){
	$xyz = 20;
	echo $xyz;
}

abc();
echo $xyz;*/


$xyz  = 25;
$z = 5;
//var_dump($GLOBALS);
function another(){
	//global $xyz, $z;
$z = $xyz + $z;
	echo $z;
}
echo $z;

another();
$z = 15;
echo $z;


function newone(){
	$GLOBALS['abc'] = "new";
}
echo $abc;
newone();
echo $abc;


function anothernew($para3, $para2){
	echo $para1 = $para2 + $para3;
}

anothernew(10, 20);
