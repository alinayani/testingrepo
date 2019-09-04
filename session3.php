<?php


//if($a > $b){
	
//}

$x = 0;
$y = 1;
//echo $x;
//echo ", ";
//echo $y;
//echo ", ";
$max = 0;
while($max < 10){
	//$result = $x + $y;
	//$x = $y;
	//$y = $result;
	//echo $result . ", ";
	echo $max;
	$max++;
}
echo "------------------********----------";
echo "<br/>";
do{
	echo $max++;
} while ($max < 10);

/*while(fgets($handle)!== false){
	
}

do{
	$line = fgets($handle);
	echo $line;
} while($line !== false);*/

echo "<br/>";
/*$limit = 10;
for($x=0; $x<$limit; $x++){
		echo $x ." ";
}*/

for($a = 10;  $a < 20; $a++ ) { 
	if($a == 15) {
		continue;		
	}
	echo "value of a: ". $a;
	echo "<br>";
}

