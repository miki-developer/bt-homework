<?php
 
 $v_zida = $_GET['zid-h'];
 $s_zida= $_GET['zid-w'];
 $v_plocica = $_GET['pl-h'];
 $s_plocica = $_GET['pl-w'];
 $p_plocica = $v_plocica * $s_plocica;
 $p_zida = $v_zida * $s_zida;
 $koliko_plocica = $p_zida / $p_plocica;

 if(isset($_GET['sub'])){
 echo "Broj plocica koji je potreban je " .ceil($koliko_plocica);

//  if($koliko_plocica < 5) {
//  echo "potrebne su vam " . ceil($koliko_plocica) . " plocice";
// }elseif($koliko_plocica > 100){
//     echo "broj plocica koji je potreban je " .ceil($koliko_plocica);
// }
// else{
//     echo "potrebno vam je " . ceil($koliko_plocica) . " plocica";
 }
//  (ceil(0.60)=>1),(ceil(-5.9)=>-5;
//  floor() function.
// (floor(0.60)=>0
// (floor(-5.1)=>-6

// if(isset($_GET['sub'])){
 ?>