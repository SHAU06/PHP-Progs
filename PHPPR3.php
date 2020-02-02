<!DOCTYPE html>
<html>
<head>	<title></title> </head>
<body>
	<center><b><h1>Array's Inbuilt Functions...</h1></b></center>
	<h4>
<?php 
$arr1=array(40,20,50,10,30);
echo "1. Array is created using array() function : Array Values =";
foreach ($arr1 as  $value) {	echo $value."  ";   }

$len=count($arr1);
echo "<br>2. count() function :Count of Array Elements=".$len;

sort($arr1);
echo "<br>3. sort() function : Sorted Array ="; for ($i=0; $i < $len; $i++) {echo $arr1[$i]." ";}

rsort($arr1);  echo "<br>4. rsort() function : Sorted Array in Reverse Order =";
for ($i=0; $i < $len; $i++) {echo $arr1[$i]." ";}

$arr4=range(1, 6);
echo "<br>5. range() function : Elements within Range (1,6)="; print_r($arr4);

$a1=array(1,2,3);  $a2=array(4,5,6);
echo "<br>6. array_merge() function :";
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Array 1 =";print_r($a1);
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Array 2 =";print_r($a2);
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Merged Array ===";
print_r(array_merge($a1,$a2));

$assarr=array('1'=>'A','2'=>'E','3'=>'I','4'=>'O','5'=>'U');
echo "<br>7. array_search() function :";
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Array  is";print_r($assarr);
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Searching Element ='O'";
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Key value of 'O' is ".array_search('O',$assarr);

echo "<br>8. array_change_key_case() function :";
$assarr2=array('one'=>1,'two'=>2,'three'=>3,'four'=>4,'five'=>5);
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Array  is =";print_r($assarr2);
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Result is ==";
print_r(array_change_key_case($assarr2,CASE_UPPER));


$a1=array(1,2,3);  $a2=array(4,5,6);
echo "<br>9. array_replace() function :";
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Array 1 =";print_r($a1);
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Array 2 =";print_r($a2);
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Replaced Array1 By Array 2 ===";print_r(array_replace($a1,$a2));


echo "<br>10. array_reverse() function :";
$assarr2=array('one'=>1,'two'=>2,'three'=>3,'four'=>4,'five'=>5);
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Array  is =";print_r($assarr2);
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Result is ==";
print_r(array_reverse($assarr2));

?>
</h4>

<center><b><h1>String's Inbuilt Functions...</h1></b></center>
<h5>
<?php
 $s1="ABCDEFGH";
echo "1. strlen() function :";
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; String =";print_r($s1);
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; String length =".strlen($s1);

echo "<br>2. strrev() function :";
// echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; String =";print_r($s1);
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Reverse Of String  =".strrev($s1);

echo "<br>3. strpos() function :";
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; String =";var_dump($s1);
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Position of D in Sting is  =".strpos($s1,'D');

$s2="Hi Welcome to PHP programming.";
echo "<br>4. str_word_count() function :";
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; String =";print_r($s2);
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Word Count of Sting is  =".
str_word_count($s2);

echo "<br>5. str_replace() function :";
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Replace 'PHP' By 'JAVA', Result ="
.str_replace("PHP","JAVA",$s2);

echo "<br>6. implode() function :";
$s3=array("Hello","these","are","inbuilt","sting","functions.");
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Array  is";print_r($s3);
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Result of implode() ==".
implode(" ", $s3);

echo "<br>7. explode() function :";
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; String =";print_r($s2);
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Result of explode() ==";
print_r(explode(" ", $s2));

echo "<br>8. echo() function :";
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; String is printed using 'echo' =".$s2;

echo "<br>9. bin2hex() function :";
$s4="WELCOME";
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; String =".$s4;
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; ASCII conversion =".bin2hex($s4);


echo "<br>10. hex2bin() function :"; $asc=bin2hex($s4);
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; ASCII value=".$asc;
echo" <br> &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Sting conversion =".hex2bin($asc);
?>
</h5>
</body>
</html>

