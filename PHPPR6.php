<!DOCTYPE html>
<html>
<head>
	<title>Practical 6</title>
</head>
<body>
	<center>
		<h1>Rectangle</h1>
		<form method="POST">
		<label>Enter Length :</label><br><br>
		<input type="text" name="l"><br><br>
		<label>Enter Breadth :</label><br><br>
		<input type="text" name="b"><br><br>
		<input type="submit" name="submit"><br><br><br>

<?php 
	$l=$_POST["l"];
	$b=$_POST["b"];
	function Rectangle(&$l,&$b)
	{
		$area=$l*$b;
		$peri=2*($l+$b);
		echo"<b>Area =".$area."</b><br><br>";
		echo "<b>Perimeter =".$peri."</b>";
	}
	Rectangle($l,$b);

?>
	</form></center>

</body>
</html>