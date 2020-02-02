<!DOCTYPE html>
<html>
<head>
	<title>convert A String</title>
</head>
<body>
<center>
	<h1>Convert the String</h1>
	<form method="POST">
		<label>Enter A Stirng:</label>
		<input type="text" name="str"><br><br><br>
		<input type="submit" name="submit" value="to uppercase">&nbsp;&nbsp;
		<input type="submit" name="submit" value="to lowerrcase">
	</form>
<?php
//Converting string to Ascii

$a=$_POST["str"];
$ch=$_POST["submit"];
// echo "$a";
echo"<br><br><br>";
if($ch=="to uppercase"){
for ($i=0; $i <strlen($a) ; $i++) { 
	
	$no[$i]=ord($a[$i]);
	if($no[$i]==32)
		{
			$res[$i]=32;
		}
	else
	{
		$res[$i]=$no[$i]-32;
	}
	echo "".chr($res[$i]);
	
}}
else
{
	for ($i=0; $i <strlen($a) ; $i++) { 
	
	$no[$i]=ord($a[$i]);
	if($no[$i]==32)
		{
			$res[$i]=32;
		}
	else
	{
		$res[$i]=$no[$i]+32;
	}
	echo "".chr($res[$i]);
	
}
}

?>
</center>
</body>
</html>




