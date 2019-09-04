<?php

for($a=1; $a<=5; $a++){
	
	//for($b=1; $b<=$a; $b++){
		echo "*";
	//}	
	echo "<br/>";
}



$test = array(1 => "ali", 2 => "tree", 3 => "treez");
$tests = array(1,2,3,5,90);
			#  0 1 2 3 4	



$rest = "123";


//echo $rest;

//echo $test[2];
//echo $tests[3];

//$rest = "456";
//echo $test[3];
$test[3] = "555";
//echo $test[3];


$newarray = array("name1","name2","name3","name4","name5","name6","name7","name8");
//echo count($newarray);


//echo $student[0];
//echo $student[21];
//$abc = count($newarray);

//for($x=0; $x<$abc ; $x++){
	//echo $x . $newarray[$x]."<br>";
//}
$example = 10;
foreach($newarray as $sKey => $singleStudent){
	echo "key is ". $sKey;
	echo"<br>";
	echo "value is:".$singleStudent;
	echo"<br>";
}
echo $example;
?>