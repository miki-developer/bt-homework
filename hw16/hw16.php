<?php 
// 1.Zadatak 
// Kreirati funkciju koja filtrira niz emailova i vraca samo emailove
// (za email smatrati da je ispravan ako sadrzi @).
$check_email = array( 
'1033edge@.com',
'11mail.com',
'123@.com',
'123box.net',
'123india.com',
'123mail.cl',
'123qwe@.co.uk',
'150ml.com',
'15meg4free.com',
'163.com',
'1coolplace@.com',
'1freeemail.com',
'1funplace.com',
'1internetdrive@.com',
'1mail.net',
'1me@.net',
'1mum.com',
'1musicrow@.com',
'1netdrive.com',
'1nsyncfan.com',
'1under@.com',
'1webave.com',
'1webhighway.com',
'212@.com',
'24horas.com',
'2911.net',
'2bmail@.co.uk',
'2d2i.com',
'2die4@.com',
'3000.it'
);

foreach($check_email as $a){
if(strpos($a,'@') !== false){
$n = explode(' ,',$a);
foreach($n as $k=>$v){
    echo $v . ", ";
}
 }
}

echo "<br>";

// 2.Zadatak 
// Kreirati funkciju koja vrsi racunske operacije svih elemenata prosledjenog niza. 
// Funkcija prima 2 parametra: niz (podrazumevati da je niz brojeva) nad kojim se vrse operacije
// i karakter za operaciju koji je po defaultu = “+”;
$arr = array(1,2,3,20);
function calc($arr, $opp){  
    $sum = 0; 
    for($i = 0; $i < count($arr); $i++){
        if($i === 0) {
            $sum = $arr[$i];
            continue;
        }
    if($opp == '+'){  
    $sum +=$arr[$i];
}else if($opp == '*'){  
    $sum *=$arr[$i];
}else if($opp == '/'){  
    $sum /=$arr[$i];
}else if($opp == '-'){  
    $sum -=$arr[$i];
}
}
return $sum;
}
echo calc($arr,'*');
echo "<br>";
// 3.Zadatak 
// Kreirati funkciju koja proverava da li u datom 
// asocijativnom nizu postoji odredjeni kljuc. != array_key_exists().
$key = 'c';
$ass_niz = array('a'=>'alabama','b'=>'banana','c'=>'cigara','d'=>'dana','e'=>'elektrana');
if (array_key_exists($key, $ass_niz)) {
    echo "Given key exists";
}else{
    echo "Given key doesn't exists";
}
echo "<br>";





?>