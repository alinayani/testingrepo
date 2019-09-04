<?php
$marks = 50;
if($marks != 100){
	echo "Laptop";
}


$a = $b = $c = $d = 50;
if($a == $b OR $c != $d){
	echo "Nothing";
} else {
	echo "executing else";
}


echo "certificate";

$name = "xyz";

if($name == "ali"){
	echo "ali";
}elseif($age == 50){
	echo "abbas";
}elseif($name == "ahmed"){
	echo "ahmed";
}elseif($name == "taqi"){
	echo "taqi";
} else {
	echo "sorry";
}


$name = "ali";
switch($name){
	case 'abc':
		echo "value is ali";
		break;
	case: 'xyz':
		echo "xyz";
		break;
	case 'mnop':
		echo "mnop";
		break;
	default: 
		echo "finaly";
}




if($name == 'abc'){
	echo "value is ali";
}
echo "done";