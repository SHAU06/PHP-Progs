<?php
$a1=array(10,14,16,13,19);
sort($a1);
$max=$a1[0];
for ($i=0; $i <count($a1) ; $i++) { 
	 
		if($a1[$i]>$max)
		{
			$max=$a1[$i];//Maximum no from an array
		}
	
}
 
$cmparr = range($a1[0],$max);                                                    
print_r(array_diff($cmparr, $a1));

?>
