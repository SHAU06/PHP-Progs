<?php
/*Write a PHP program to find three numbers from an array such that the sum of three consecutive numbers equal to zero.
Input : (-1,0,1,2,-1,-4)
Output : Array
(
[0] => -1 + 0 + 1 = 0
)*/
$a1=array(-1,0,1,2,-1,-4);
for($i=0;$i<=count($a1);$i++)
{   
	$sum=$a1[$i]+$a1[$i+1]+$a1[$i+2];
	$n1=$a1[$i];
	$n2=$a1[$i+1];
	$n3=$a1[$i+2];
	echo"<br>";
	
	if($sum==0)
	{	echo "Array(<br>[".$i."]=>".$n1."+".$n2."+".$n3."  = 0<br>)";
		break;
		
	}
}
?>