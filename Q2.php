<!DOCTYPE html>
<html>
<head>
  <title>Question 2</title>
</head>
<body><center><form method="POST">
  <label>Enter No :</label>
  <input type="text" name="no">
  <input type="submit" name="submit">
  

</form>
<?php
  $n=$_POST["no"];
      $x = $n;
      while ($x % 3 == 0) {
      $x /= 3;
     }
       
  if($x == 1)
    {
    echo "$n is power of 3";
    }
    else
    {
    echo "$n is not power of 3";
    }
  

?>

</center>

</body>
</html>



