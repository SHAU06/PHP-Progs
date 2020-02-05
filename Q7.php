<?php
/*Write a PHP program to find three numbers from an array such that the sum of three consecutive numbers equal to a given number. 
Input : (array(2, 7,8, 7, 1, 8, 2, 7, 8, 7,2), 16))
Output : Array
(
[0] => 2 + 7 + 7 = 16
[1] => 7 + 1 + 8 = 16
)*/
$arr=array(2, 7, 7, 1, 8, 2, 7, 8, 7,6,3);
$no=16;$j=0;
for($i=0;$i<=count($arr);$i++)
{   
	$sum=$arr[$i]+$arr[$i+1]+$arr[$i+2];
	$n1=$arr[$i];
	$n2=$arr[$i+1];
	$n3=$arr[$i+2];
	
	
	if($sum==$no)
	{	echo "Array(<br>[".$j."]=>".$n1."+".$n2."+".$n3."  = $no<br>)<br>";
			$j++;			
	}
}




?>
