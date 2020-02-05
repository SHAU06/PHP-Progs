<?php
/*4. Write a PHP program to check if an integer is the power of another integer. 
Input : 16, 2
Output : 16 is power of 2
Example: For x = 16 and y = 2 the answer is "true", and for x = 12 and y = 2 "false"*/


  
  $x=12;
  $y=2;
       $c=$x;
      while ($x % $y == 0) {
      $x /= $y;
     }
       
  if($x == 1)
    {
    echo "$c is power of $y";
    }
    else
    {
    echo "$c is not power of $y";
    }
  

?>


