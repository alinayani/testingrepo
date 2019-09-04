<?php


$associative_array = array('student1'=> 100,'student2'=> 80, 'student3'=> 90, 'student4'=> 70);

//echo $associative_array['student3'];

$associative_array['student3'] = 80;

foreach($associative_array as $key => $value){
	//echo $key . " " . $value ."<br/>";
}

$keysAssoc = array_keys($associative_array);
for($x=0; $x<count($associative_array); $x++){
	//echo $associative_array[];
	
	echo $keysAssoc[$x] . " " . 
	$associative_array[$keysAssoc[$x]] . "<br/>";
}


//$abc = array();
$associative_array['student4'] = "test";
$abc[] = "test1";
$abc[] = "test2";
$abc[] = "test3";
echo "<pre>";
var_dump($abc);
echo "=========*************========";
print_r($abc);


$test = array(
	0 => array('test'),
	1 => array('best'),
	2 => array('rest'),
	//3 => 
); 
//$test[2] = "";
//echo $test[2][0];


for($x=0; $x<count($test); $x++){
	for($y=0; $y<count($test[$x]); $y++){
		echo $test[$x][$y];
	}
}
echo "<br/>";
if(is_array($test)){
	foreach($test as $value){
		foreach($value as $cvalue){
			echo $cvalue;
		}
	}
}

//$test[] = 
$y = array();

unset($y);


$array = array("abc", "efg","mno","xyz");
if(in_array("efg", $array)){
	echo "exist";
} else {
	echo "not exist";
}
$array= "test";
if(is_array($array)){
	echo "true";
} else{
	echo "false";
}