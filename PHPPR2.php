<!DOCTYPE html>
<html>
<head>
	<title>Switch Case</title>
</head>
<body>
	<center>
		<form method="POST">
			<h1>OPERATIONS</h1>
			<label><b>Enter Value : </b></label>&nbsp;&nbsp;&nbsp;
			<input type="text" name="no"><br><br><br>
			<input type="submit" name="submit" value="FACTORIAL">
			<input type="submit" name="submit" value="PRIME NO">
			<input type="submit" name="submit" value="EVEN/ODD">
			<input type="submit" name="submit" value="POSITIVE/NEGATIVE"><br><br><br>
		
<?php
$n=(int)$_POST['no'];
$c=$_POST['submit'];
// var_dump($n);
// var_dump($c);
$f=1;

	switch ($c) {
		case "FACTORIAL":	
			for ($i=1; $i<=$n ; $i++) { 
				$f=$f*$i;
			}
			echo "<b>FACTORIAL of $n is ".$f."</b>";						
			break;
		case "PRIME NO":
				if($n==2||$n==3||$n==5||$n==7)
				{
					echo "<b>$n is A Prime Number.</b>";
				}
				elseif($n%2!=0){
					if($n%3!=0&&$n%5!=0&&$n%7!=0)				
				{
					echo "<b>$n is A Prime Number</b>";
				}
				else
				{
					echo "<b>$n is NOT a Prime Number</b>";
				}}
				else
				{
					echo "<b>$n is NOT a Prime Number</b>";
				}
			break;
		case "EVEN/ODD":
			if($n==0)
			{
				echo "<b>$n is a EVEN Number</b>";
			}
			else
			{
				echo "<b>$n is a ODD Number</b>";
			}
			break;
		case "POSITIVE/NEGATIVE":
			
		$arr=array(); $rem=0;$j; $t=$n;
					for ($i=0; $n!=0 ; $i++) 
					{ 
						$rem=$n%2;
						$arr[$i]=$rem;
						$n=(int)$n/2;
					}	
					for ($j=$i-1; $j>0 ; $j--)
					 { 	if ($arr[$j]==0) {
							continue;}
						elseif ($arr[$j]==-1) {
							echo "$t is NEGATIVE Number.";	}
						elseif($arr[$j]==1) {
							echo "$t is POSITIVE Number.";
						}
					}

		break;
		
	}


?>
		</form>	</center>

</body>
</html>