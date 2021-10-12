// Palindrome Number
// A palindrome number is a number which remains same when its digits are reversed.

// For example, number 24142 is a palindrome number. On reversing it we?ll get the same number.

// Logic:

// Take a number.
// Reverse the input number.
// Compare the two numbers.
// If equal, it means number is palindrome

<?php  
function palindrome($n){  
$number = $n;  
$sum = 0;  
while(floor($number)) {  
$rem = $number % 10;  
$sum = $sum * 10 + $rem;  
$number = $number/10;  
}  
return $sum;  
}  
$input = 1235321;  
$num = palindrome($input);  
if($input==$num){  
echo "$input is a Palindrome number";  
} else {  
echo "$input is not a Palindrome";  
}  
?>
