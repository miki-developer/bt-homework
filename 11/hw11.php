<?php 
//creating a function
function add($a,$b)
{
$c=$a+$b;
echo $c;
}
echo "sum of 2  numbers is";
//calling a function
add(1, 2);
?>
//

<?php  
$x=200;  
$y=80;  
 
<?php
//array whose sum is to be calculated
$z = array($x,$y);
  
//calculating sum
print_r(array_sum($z));
?> 




<?php
  
  // PHP code to illustrate the working 
  // of intdiv() Functions 
    
  $dividend = 50;
  $divisor = 5; 
    
  echo intdiv($dividend, $divisor);
    
  ?>

  //
  <?php
// PHP program to illustrate bcsub() function
   
// input numbers with arbitrary precision
$num_str1 = 100;
$num_str2 = 3;
   
// calculates the subtraction of
// the two numbers when $scaleVal is
// not specified
$res = bcsub($num_str1, $num_str2);
  
echo $res;
   
?>

<?php
// PHP program to illustrate bcmul() function
   
// input numbers with arbitrary precision
$num_str1 = "3";
$num_str2 = "3";
   
// calculates the multiplication of the two
// numbers when $scaleVal is not specified
$res = bcmul($num_str1, $num_str2);
  
echo $res;
   
?>

<!-- Datum zadavanja domaćeg zadatka: 26.04.2022. god.
Rok za postavljanje domaćeg zadatka: 28.04.2022. god. do 18h
Add
commit
pull
push
Kreirati novi repozitorijum na github-u sa nazivom “bt-homework”. Na tom repozitorijumu cete postavljati sve domace zadatke od sada (Do kraja kursa se domaci postavljaju i na Drive-u).
Kreirati hw10.php fajl i u njemu odraditi sve zadatke sa ovog domaceg.

Dve promenljive (imena birate sami) imaju vrednosti 200 i 80. Izracunati i prikazati njihov zbir, proizvod, razliku i kolicnik.
Postaviti jednu random vrednost od 0 do 6 (int) u jednu promenljivu. Ispisati na ekranu “Danas je …!” u zavisnosti od broja u promenljivoj. Primer ako je br 5 “Danas je petak!”. Mozete racunati 0 kao ponedeljak ili kao nedelju.
Postaviti 3 promenljive a, b i c na vrednosti od 1 do 10 po izboru. Izracunati njihov zbir, i prikazati recenicu 
"Zbir brojeva .., ... i ... je ... ". -->