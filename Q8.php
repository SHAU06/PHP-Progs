<?php
/*8. Write a PHP program to compute and return the square root of a given number. 
Input : 16
Output : 4
*/
// $no=16;
// $res=sqrt($no);
// echo"square root of $no is $res."


     $num=256;		$sqrt;
 // store the half of the given number e.g from 144 => 72
    $sqrt = $num / 2;
    $temp = 0;

    // Iterate until sqrt is not equal to temp // both will change in iterations
    while($sqrt != $temp){
        $temp = $sqrt;//
        $sqrt = ( $num/$temp + $temp) / 2;
        //if you want to check value of temp and sqrt
        // echo"<br> temp==$temp<br>sqrt==$sqrt<br><br>";
    }
		echo"square root of $num is $sqrt."

?>