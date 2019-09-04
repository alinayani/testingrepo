<?php
$abc = array('test'=>'resr');
if(in_array('test',$abc)){
	echo "test";
}

$arr1 = array('123','456','789');
$arr2 = array('345','678','910');

//var_dump(array_merge($arr1, $arr2));
$abc = array('test'=>123, 'best' => 456);
//var_dump(array_values($abc));

$xyz = array('test','best','rest','rest','nest','test','vcx');
//var_dump(array_unique($xyz));
//var_dump(array_slice($xyz, 3));


$students1 = array('n1','n2','n3');
$students2 = array('n4','n5','n3');
$students3 = array('n7','n2','n7');

//var_dump(array_diff($students3, $students2, $students1));

$yxp = array(10=>'v1',20 =>'v2', 30=>'v3', 40=>'v4');
//var_dump(array_search('v5',$yxp));



var_dump(array_reverse($yxp, true));


//var_dump(array_unshift);
$apo = array_merge($students1, $students2, $students3);
$apo[] = "new";

var_dump($apo);
var_dump(array_slice($apo, 2, count($apo)-3));
function abc(){
	echo "xyz";	
}

abc();