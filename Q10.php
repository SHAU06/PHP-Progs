<?php
/*Write a PHP program to find the single element in an array where every element appears three times except for one.
Input : array(5, 3, 4, 3, 5, 5, 3)
Output : Array
(
[0] => 5
[1] => 3
[2] => 4
[3] => 3
[4] => 5
[5] => 5
[6] => 3
)
Single Number: 4*/
$arr=array(5, 3, 4, 3, 5, 5, 3,2,9);
print_r($arr);
$i;$j;
$count = 1;
$n=count($arr);
echo "<br><br>Single Number===  ";
for($i = 0; $i < $n; $i++)
{
		for($j = 0; $j < $n; $j++)
	{
			if($arr[$i] == $arr[$j] && $i != $j)
			break;
	}
		if($j == $n )
{
echo $arr[$i]."   ,";

}

}



?>