<?php
$p = 0;
$d = 100;
while( $p <= 100 ){
    if($d >= $p){
        $d++; 
         $p++;
     }
   echo "dana $p puz je presao " .  $p * 3 . "cm, visina drveta je:" . $d . "<br>";
   if($p * 3 >= $d){

    echo " <h3 style='color:green;'>Puz je presao drvo za: $p dana </h3> <br>";
    break;
   }
}
?>