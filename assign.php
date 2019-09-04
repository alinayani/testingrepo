new change<!DOCTYPE html>
<html>
	<head>
		<title>Assignment Solutions</title>
	</head>
	<body>
		<h1>Assignment 1</h1>
		<h2><?php echo "swapping two values without a temporary variable";?></h2>
		<?php 
			$x = 50; 
			$y = 30; 
			
			echo "before swapping: x =" . $x;
			echo " y =" . $y ;
			echo "<br>";
   
			$x = $x + $y;  
			$y = $x - $y;
			$x = $x - $y;  
  
			echo "After Swapping: x = ", $x, " y = ", $y; 
			echo'<br>';
		?>
		<hr>
	<h2><?php echo "Adding two string type variables and getting result in integer";?></h2>
<?php
	
		$a = "50foo";
		$b = "40bar";
		echo '$a = ',$a,' $b = ',$b,"<br/>";
		settype($a, "integer");
		settype($b, "integer");
		$c = $a+$b;
		echo "total = ".$c."<br>";
?>
<hr/>
<?php
			echo '<h1>Assignment 2</h1>';
			echo '<h2>give each and every subject a grade along with total</h2>';
			
			$maths = 40;
			if($maths > 80){
				echo 'Maths '.$maths.' A1';
			}
			elseif($maths > 70){
				echo 'Maths '.$maths.' A';
			}
			elseif($maths > 60){
				echo 'Maths '.$maths.' B';
			}
			elseif($maths > 50){
				echo 'Maths '.$maths.' C';
			}
			else{
				echo 'Maths '.$maths.' D ';
			}
			echo '<br/>';
			
			$science = 60;
			if($science >= 80){
				echo 'Science '.$science.' A1';
			}
			elseif($science >= 70){
				echo 'Science '.$science.' A';
			}
			elseif($science >= 60){
				echo 'Science '.$science.' B';
			}
			elseif($science >= 50){
				echo 'Science '.$science.' C';
			}
			else{
				echo 'Science '.$science.' D ';
			}
			echo '<br/>';

			$urdu = 70;
			if($urdu >= 80){
				echo 'Urdu '.$urdu.' A1';
			}
			elseif($urdu >= 70){
				echo 'Urdu '.$urdu.' A';
			}
			elseif($urdu >= 60){
				echo 'Urdu '.$urdu.' B';
			}
			elseif($urdu >= 50){
				echo 'Urdu '.$urdu.' C';
			}
			else{
				echo 'Urdu '.$urdu.' D ';
			}
			echo '<br/>';

			$english = 90;
			if($english >= 80){
				echo 'English '.$english.' A1';
			}
			elseif($english >= 70){
				echo 'English '.$english.' A';
			}
			elseif($english >= 60){
				echo 'English '.$english.' B';
			}
			elseif($english >= 50){
				echo 'English '.$english.' C';
			}
			else{
				echo 'English '.$english.' D ';
			}
			echo '<br/>';

			$islamiat = 80;
			if($islamiat >= 80){
				echo 'Islamiat '.$islamiat.' A1';
			}
			elseif($islamiat >= 70){
				echo 'Islamiat '.$islamiat.' A';
			}
			elseif($islamiat >= 60){
				echo 'Islamiat '.$islamiat.' B';
			}
			elseif($islamiat >= 50){
				echo 'Islamiat '.$islamiat.' C';
			}
			else{
				echo 'Islamiat '.$islamiat.' D ';
			}
			echo '<br/>';	
			
			echo '<h2>use switch-case to assign grade to total variable</h2>';
			
			$maths = 40;
			$science = 60;
			$urdu = 70;
			$english = 90;
			$islamiat = 80;
			$sum = $maths + $science + $urdu + $english + $islamiat;
			echo $sum . ' Total Marks ';
			echo '<br/>';
			$per = $sum / 500;
			$per *= 100;
			echo $per . ' % ';
			echo '<br/>';
			
			switch($sum){
				case ($sum >= 425):
					echo 'A1 grade';
					break;
				case ($sum >= 350):
					echo 'A grade';
					break;
				case ($sum >= 300):
					echo 'B grade';
					break;
				case ($sum >= 250):
					echo 'C grade';
					break;
				default:
					echo 'FAIL';	
			}
			
			?>
			
			<hr/>
			<?php
			echo '<h1>Assignment 3</h1>';
		
			echo '<h2>Create program to calculate factorial of a number</h2>';
						
			$num = 5;  
			$factorial = 1;  
			for ($x=$num; $x >= 1; $x--)   
			{
				$factorial *= $x;  
			}  
			echo "Factorial of $num is $factorial"; 

			echo '<br/>';
			
			echo '<h2>Use While loop to show only even numbers out of a given range $n</h2>';
			
			$i = 0;
			$n = 20;
            
			while($i <= $n){
                if($i % 2 == 0){
                    echo $i . ',';
                }
                $i++;
            }
			 
			echo '<br/>'; 
			?>
			<hr/>
			<h1>Assignment 4</h1>
			<h2>Nested For Loop</h2>
			<?php
			
			for($a=5; $a>=1; $a--){
	
				for($b=1; $b <= $a; $b++){
					
					echo "*";
					
				}
				
				echo "</br>";
			}
			?>
			<hr/>
			<h1>Assignment 5</h1>
			<h2>Print tables uptil 10 using for loop</h2>
			<?php
			$num = 10;
			for($x=1; $x<=$num; $x++){	
				echo 'Table of '.$x;
				echo "<br/>";
				echo "---------------------------";
				echo "<br/>";
					for($y=1; $y<=$num; $y++){
						$multi = $x*$y;
						echo $x.' * '.$y.' = '.$multi;
						echo "<br/>";
					}
				echo "<br/>";
			}
		?>

	</body>
</html>
abc text

test for new branch
