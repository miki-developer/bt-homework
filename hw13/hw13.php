<?php

 //************* 
 //Funkcija za pravougaonik
function povrsina_bazena_pravouganik($sirina,$duzina){
   return $sirina * $duzina;
}
 echo povrsina_bazena_pravouganik(2,3) ."<br>";

 //************* 
 //Funkcija za krug
function povrsina_bazena_krug($r){
    return $r * $r;
}
 echo povrsina_bazena_krug(5) ."<br>";
 //************* 


 //Funkcija kombinovano
function oba($sirina,$duzina,$r){
    $pravougaonik = $sirina * $duzina;
    $polukrug = ($r * $r)/2;
    return $pravougaonik + $polukrug;
}
echo oba(2,3,4) ."<br>";


?>