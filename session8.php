<?php

/*function abc(){
	
	abc();
}

abc();*/

require('menu.php');
function factorial($number) {
	if ($number < 2) {
		return 1;
	} else {
		 return ($number * factorial($number - 1)); 
	} 			
}

echo factorial(5);

