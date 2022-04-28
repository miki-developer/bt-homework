<?php  
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
$c=$a+$b;
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
