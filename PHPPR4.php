<!DOCTYPE html>
<html>
<head>	<title>PRACTICAL 4</title>  </head>
<body>
	<center>	<h1>Calculate Factorial</h1>
		<form method="POST">
			<label>Enter Value :</label><br><br>
			<input type="text" name="no"><br><br>
			<input type="submit" name="submit"><br><br>
<?php
		if (isset($_POST['submit'])) {
		$no=$_POST['no'];	}
	function fact($no)
	{
		$fact=1;
		for($i=1;$i<=$no;$i++)
		{
			$fact=$fact*$i;
		}
			echo "<br><br><b>Factorial of $no is $fact </b>";
		}
	fact($no);
?>	</form>
	</center></body></html>