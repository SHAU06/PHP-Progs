<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><form method="POST">
		<label>Enter No :</label><br><br>
		<input type="text" name="no"><br><br>
		<input type="submit" name="submit"><br><br><br>
<?php
//Checking no is power of 2 or not
$n=$_POST['no'];
$val=$n;
    if($n>0)
    {
        while($n%2 == 0)
        {
            $n/=2;
        }
        if($n == 1)
        {
            echo "$val is power of 2 <br>";
        }
    }
    if($n == 0 || $n != 1)
    {
        echo "$val is not power of 2 <br>";
    }
?></form></center>
</body>
</html>


