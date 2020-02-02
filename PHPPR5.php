<!-- <!DOCTYPE html>
<html>
<head>
	<title>Practical 5</title>
</head>
<body>
	<center><h1>Calculate Power</h1>
		<form method="POST">
		<label>Enetr Base Value :</label><br><br>
		<input type="text" name="a"><br><br>
		<label>Enter Power Value :</label><br><br>
		<input type="text" name="b"><br><br>
		<input type="submit" name="submit" value="submit">
<?php
if (isset($_POST['submit'])) {
		$a=$_POST['a'];
		$b=$_POST['b'];
		$res=1;	}
echo $a ." ". $b; 

// function power($a,$b){

// for($i=1;$i<=$b;$i++)
// {
// 	$res*=$a;
// }
// echo $res!=0?"A Raise To B =".$res:"";
// }
// power($a,$b); 

?></form></center>
</body>
</html>



 -->


 <!DOCTYPE html>
<html>
<head>	<title>PRACTICAL 5</title>  </head>
<body>
	<center>	<h1>Calculate POWER</h1>
		<form method="POST">
			<label>Enter Base Value :</label><br><br>
			<input type="text" name="a"><br><br>
			<label>Enter Power Value :</label><br><br>
			<input type="text" name="b"><br><br>

			<input type="submit" name="submit"><br><br>
<?php
		if (isset($_POST['submit'])) {
		$bs=$_POST['a'];
		$p=$_POST['b'];	}
	function raise($bs,$p)
	{
		$res=1;
		for($i=1;$i<=$p;$i++)
		{
			$res=$res*$bs;
		}
			if($res!=0)
			{
				echo "<b>Value of $bs raise to $p =".$res."</b>";
			}
		}
	raise($bs,$p);
?>	</form>
	</center></body></html>