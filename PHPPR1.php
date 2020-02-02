<!DOCTYPE html>
<html>
<head><title>Calculator</title></head>
<body>
<center><h1>CALCULATOR</h1><br>
<font color="red" size="4">For Logical Operations Please Enter Values in <b>0</b> and <b>1</b> format.</font><br><br>
	<form method="POST" ><br>
			<label for="n1">Enter NO.1</label>&nbsp;&nbsp;&nbsp;
			<input type="text" name="n1"><br><br>
			<label for="n2">Enter NO.2</label>&nbsp;&nbsp;&nbsp;
			<input type="text" name="n2"><br><br>
			<LABEL><b>Arithmatic Operations</b></LABEL><br>
			<input type="submit" name="submit" value="+">
			<input type="submit" name="submit" value="-">
			<input type="submit" name="submit" value="*">
			<input type="submit" name="submit" value="/">
			<input type="submit" name="submit" value="%"><br><br>
			<LABEL><b>Logical Operations</b></LABEL><br>
			<input type="submit" name="submit" value="&&">
			<input type="submit" name="submit" value="||">
			<input type="submit" name="submit" value="!">
			<input type="submit" name="submit" value="XOR"><br><br>
			<LABEL><b>Relational Operations</b></LABEL><br>
			<input type="submit" name="submit" value=">">
			<input type="submit" name="submit" value="<">
			<input type="submit" name="submit" value=">=">
			<input type="submit" name="submit" value="<=">
			<input type="submit" name="submit" value="==">
			<input type="submit" name="submit" value="!=">
		</form>
<?php
	$a=(int)$_POST['n1'];
	$b=(int)$_POST['n2'];
	$s=$_POST['submit'];

	      var_dump($s);
	      var_dump($a);
	      var_dump($b);

   
      $res=($s=="+"?$a+$b:"");
      echo $res?"<center><br><br><b>Addition is $res </b></center>":"";
      $res=($s=="-"?$a-$b:"");
     echo $res?"<center><br><br><b>Subtraction is $res </b></center>":"";
      $res=($s=="*"?$a*$b:"");
      echo $res?"<center><br><br><b>Multiplication is $res </b></center>":"";
      $res=($s=="/"?$a/$b:"");
     echo $res?"<center><br><br><b>Division is $res </b></center>":"";
      $res=($s=="%"?$a%$b:"");
      echo $res?"<center><br><br>Reminder is $res </b></center>":"";
 
 echo $s=="&&"?$a && $b?"<center><br><br><b>Condition is true</b></center":"<center><b>Condition is false</b></center>":$s=="||"?($a||$b)?"<b>Condition is true</b>":"<b>Condition is false</b>":$s=="!"?!($a==$b)?"<b>Condition is true</b>":"<b>Condition is false</b>":$s=="XOR"?($a XOR $b)?"<b>Condition is true</b>":"<b>Condition is false</b>":"";

 echo $s==">"?$a>$b?"<b><br><br>$a is Greater than $b</b>":"<b>$a is not Greater than $b</b>":"";
 ech $s=="<"?$a<$b?"<b>$a is Lesser than $b</b>":"<b>$a is not Lesser than $b</b>":"";
 // $s=="<"?$a<$b?"<b>$a is Lesser than $b</b>":"<b>$a is not Lesser than $b</b>":"";
 // $s==">="?$a>=$b?"<b>$a is Greater than and Equals to $b</b>":"<b>$a is not Equal or Greater than $b</b>":$s=="<="?$a<=$b?"<b>$a is Lesser than or Equals to $b</b>":"<b>$a is not Lesser or Equal than $b</b>":$s=="=="?$a==$b?"<b>Both No. are Equal </b>":"<b>Both No. are Different</b>":$s=="!="?$a!=$b?"<b>Both No. are Different</b>":"<b>Both No. are Equal</b>":"";
?></center> </body> </html>
