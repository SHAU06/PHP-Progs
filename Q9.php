<?php
/*Write a PHP program to find a single number in an array that doesn't occur twice. 
Input : array(5, 3, 4, 3, 4)
Output : Array
(
[0] => 5
[1] => 3
[2] => 4
[3] => 3
[4] => 4
)
Single Number: 5*/
// $arr=array(5, 3, 4,7,3, 4,7,9,9,2);
$arr=array(5, 3, 4, 3, 4);
print_r($arr);
$i;$j;
$count = 1;
$n=count($arr);
echo "<br><br>Single Number===";
for($i = 0; $i < $n; $i++)
{
		for($j = 0; $j < $n; $j++)
	{
			if($arr[$i] == $arr[$j] && $i != $j)
			break;
	}
		if($j == $n )
{
echo " ".$arr[$i]."   ";
++$count;
}

}
?>