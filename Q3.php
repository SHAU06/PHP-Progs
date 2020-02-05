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
      while ($x % 4 == 0) {
      $x /= 4;
     }
       
  if($x == 1)
    {
    echo "$n is power of 4";
    }
    else
    {
    echo "$n is not power of 4";
    }
  

?>

</center>

</body>
</html>



