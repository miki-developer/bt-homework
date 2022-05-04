<?php
 $tezina = $_GET['tezina'];
 $zanimanje = $_GET['zanimanje'];
 $godine = $_GET['godine'];
$zanimanja = array("programer","menadzer","administrativni radnik","policajac","vojnik","sportista");

if(isset($_GET['sub'])){
    echo "Hvala za unesene podatke! Vi imate " . $tezina . " kila. Vase zanimanje je " . $zanimanje . "." . "<br>";
    if($godine <= 3){
        $godine = ($godine * 1.9) / $godine;
     }elseif($godine > 3 && $godine < 11){
     $godine = ($godine * 1.5) / $godine; 
     }elseif($godine > 10 && $godine < 19){
        $godine = ($godine * 1.2) / $godine; 
     }elseif($godine > 19 && $godine < 27){
        $godine = ($godine * 1) / $godine;     
        }elseif(($godine > 26 && $godine < 31)||($godine < 51 && $godine < 61)){
        $godine = ($godine * .8) / $godine; 
     }elseif(($godine > 30 && $godine < 36)||($godine > 46 && $godine < 50)){
        $godine =  ($godine * .7)/ $godine ;
     }elseif(($godine > 25 && $godine < 45) || $godine >60){
       $godine =  ($godine * .6 )/ $godine;
      };
     
     if ( $zanimanje === $zanimanja[0] || $zanimanje === $zanimanja[1] || $zanimanje === $zanimanja[2]){
                 echo "Mozete uneti " . $tezina * 100 * $godine  . " kalorija.";
    }elseif ( $zanimanje === $zanimanja[3] || $zanimanje === $zanimanja[4]){
        echo "Mozete uneti " . $tezina * 200 * $godine . " kalorija.";
    }elseif ( $zanimanje === $zanimanja[5]){
        echo "Mozete uneti " . $tezina * 300 * $godine . " kalorija.";
    }else{
        echo "Mozete uneti " . $tezina * 150 * $godine . " kalorija.";
    }
};

?>












