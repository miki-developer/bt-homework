<?php
//1.
$a = 200;
$b = 80;
$add = $a + $b;
$sub = $a - $b;
$multi = $a * $b;
$div = $a / $b;
echo " addition of 200 and 80 is: $add <br>\n subtraction is: $sub <br>\n  multiplication is: $multi <br>\n and division is: $div <br>\n";
//2.
$day = 5;
if($day == 5){
    echo "danas je petak <br>\n";
}else {
  echo  "danas nije petak <br>\n";
}
//3.

$num1 = 3;
$num2 = 6;
$num3 = 9;
$sum = $num1 + $num2 + $num3;
echo "zbir brojeva $num1, $num2, $num3 je $sum;"
//
//
// DRUGI NACIN:
//
//
$x=200;  
$y=80;  
$z = array($x,$y);
//1
  echo "Addition of 200 and 80 is: ";
 print_r(array_sum($z)) ; 
 //1b
echo " <br>\n Another way of addition of 200 and 80  is: <br>\n ";
print_r(bcadd($x, $y,2));
//1c
function add($a,$b)
{
$c=$a+$b;ed
echo $c;
}
echo "  <br>\n  Using function to calculate sum of 2  numbers:";
//calling a function
add(200, 80);

 //2
 echo " <br>\n Division is: ";
 print_r(bcdiv($x, $y,2));
 //3
 echo "  Substraction is: ";
 print_r(bcsub($x, $y));
 //4
 echo " <br>\n Multiplication is: ";
 print_r(bcmul($x, $y));

?>

