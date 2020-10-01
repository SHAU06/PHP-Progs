//Write a Program to show the use of following operators used in PHP : Arithmatic, Logical, Comparison, Relational.
<!DOCTYPE html>
<html>
<head>
	<title>Operator-2</title>
	<style type="text/css">
		body{ font-family: verdana; }
	</style>
</head>
<body>
<center>
	<form action="#" method="POST" autocomplete="off">
	<label style="color: red;"><br><b>Practical No. 1</b><br></label>
<label style="color: brown;"><br><br><b>Q. Write a Program to show the use of following operators used in PHP : Arithmatic, Logical, Comparison, Relational  </b><br><br></label>
<label><br><b>CALCULATOR</b><br><br></label><label style="color: red;">NOTE : For Logical Operator Please use value in the form of 0 and 1.</label><br><br>
<label for="no1">Enter No.1 : <br></label><input type="text" name="no1"><label for="no2"><br><br>Enter No.2 : <br> </label><input type="text" name="no2">
		<br><br>
		<label>Arithmatic Operators  : <br><br></label>
		<input type="submit" name="submit" value="+">
		<input type="submit" name="submit" value="-">
		<input type="submit" name="submit" value="*">
		<input type="submit" name="submit" value="/">
		<input type="submit" name="submit" value="%">
		<label><br><br>Logical Operators  : <br><br></label>
		<input type="submit" name="submit" value="&&">
		<input type="submit" name="submit" value="||">
		<input type="submit" name="submit" value="!">
		<input type="submit" name="submit" value="^">
		<LABEL><br><br>Relational Operations : <br><br></LABEL>
		<input type="submit" name="submit" value=">">
		<input type="submit" name="submit" value="<">
		<input type="submit" name="submit" value=">=">
		<input type="submit" name="submit" value="<=">
		<input type="submit" name="submit" value="==">
		<input type="submit" name="submit" value="!=">
		<br><br>
		</form>
			<?php  $a= $_POST['no1'];
			$b= $_POST['no2'];
			$c= $_POST['submit'];
echo "<b>Ans : ";($c=='+')?var_dump($a+$b): ($c=='-')?var_dump($a-$b): ($c=='*')?var_dump($a*$b): ($c=='/')?var_dump($a/$b): ($c=="%")?var_dump($a%$b): ("");
echo $c=='&&'? var_dump($a&&$b) : $c=='||'? var_dump($a||$b): $c=='!'? var_dump(!$a>$b): $c=='^'? var_dump($a XOR $b): "";
echo $c=='>'? $a>$b?"$a is greater than $b":"$a is not greater than $b": $c=='<'? $a<$b? "$a is less than $b":"$a is not less than $b": $c=='>='? $a>=$b? "$a is Greater than and Equals to $b":"$a is not Equal or Greater than $b":$c=='<='? $a<=$b? "$a is Lesser than or Equals to $b":"$a is not Lesser or Equal than $b": $c=='=='? $a==$b? "$a and $b both number are Equal":"$a and $b both number are Different":$c=='!='? $a!=$b? "$a and $b both number are Different":"$a and $b both number are Equal ":  "</b>";
			?>
</center>
</body>
</html>
