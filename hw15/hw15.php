<?php 
// 1.Zadatak 
// NIZOVI. Dat je niz ucenika $hwArray = [“Pera”, ”Milka”, ”Pera” ,”Sonja”, “Danilo”, “Marica”, ”Ivica”, ”Sonja”, ”Vanja”, “Mira”]; 
// Sve raditi u jednom fajlu hw15.php. 
// Najpre u ovaj postojeci niz dodati vase ime. 
// Nakon toga dodati ime vase/g rodjaka/e na trecem mestu u nizu.
// Nakon toga prebrojte koliko ucenika ima
// Zatim dodati novog clana na pocetak niza
// Zatim obrisati Danila iz niza
// Zatim skloni sve duplirane clanove niza
// Za svako ubacivanje u niz ispitati da li postoji u nizu i ako vec postoji ne dozvoliti da se upise.
// $hwArray = [“Pera”, ”Milka”, ”Pera” ,”Sonja”, “Danilo”, “Marica”, ”Ivica”, ”Sonja”, ”Vanja”, “Mira”]; 
   $hwArray = array('Pera', 'Milka', 'Pera' ,'Sonja', 'Danilo', 'Marica', 'Ivica', 'Sonja', 'Vanja', 'Mira');

array_push($hwArray,"Milos");
echo join(", ", $hwArray);
echo "<br>"."***". "<br>";
array_splice($hwArray,3,0,'RODJAK');//drugi broj jede postojece clanove
echo join(", ", $hwArray);
echo "<br>"."***". "<br>";
echo count($hwArray);
echo "<br>"."***". "<br>";
array_unshift($hwArray,"NOVI CLAN");
echo join(", ", $hwArray);
echo "<br>"."***". "<br>";
foreach (array_keys($hwArray, 'Danilo', true) as $key) {
    unset($hwArray[$key]);
}
echo join(", ", $hwArray);
echo "<br>"."***". "<br>";
$hwArray = array_unique($hwArray);
echo join(", ", $hwArray);
echo "<br>"."***". "<br>";
// ***
$novi_clan = "Nebojsa";
$novi_clan = "Milos";
if (in_array($novi_clan, $hwArray)) {
    echo "Clan sa tim imenom vec postoji";
}else{
    echo "Dobrodosli " . $novi_clan;
}
echo "<br>"."***". "<br>";
echo "<br>"."***". "<br>";
echo "<br>"."***". "<br>";
// 2.Zadatak 
// Kreirati $data koja je niz asocijativnih nizova. Svaki asocijativni niz treba da ima strukturu:
// [
// 	‘name’ => “Pera”,
// 	‘last_name’ => “Peric”,
// 	‘age’ => 28,
// 	‘gender’ => ‘male’,
// 	‘avg_rating’ => 7.5,
// 	‘married’ => false,
// 	‘courses’ => [‘laravel’, ‘react’, ‘jQuery’]
// ]
// Proizvoljno dodati 5 asocijativnih niza.
// Ispisati za sve pr:

// Pera Peric ima 28 godina i nije ozenjen. Ima prosecnu ocenu 7.5, a kurseve koje trenutno slusa su: Laravel, PHP, jQuery.

$ucenici = array(
'name' => 'Pera',
      'last_name' => 'Peric',
      'age' => 28,
      'gender' => 'male',
      'avg_rating' => 7.5,
      'married' => true,
      'courses' => ['laravel','react','jQuery']
);
 echo $ucenici['name'] . " " . $ucenici['last_name'] . " ima " . $ucenici['age'] . " godina i "; 

if($ucenici['married']){
    echo "ozenjen je";
}else{
    echo "nije ozenjen";
}
echo " Ima prosecnu ocenu" . $ucenici['avg_rating'] . ", a kurseve koje trenutno slusa su: ";
foreach($ucenici['courses'] as $course ){
     echo $course . ", ";
}

?>