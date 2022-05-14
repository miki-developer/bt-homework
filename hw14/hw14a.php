<?php 
$dd = $_GET['day'];
$mm = $_GET['month'];
$yy = $_GET['year'];


// $mobileno = $_POST ["Mobile_no"];  
if (!preg_match ("/^[0-9]*$/", $dd) || empty($dd) ){  
    die("Incorect input!Try again!");  
    
} 
if (!preg_match ("/^[0-9]*$/", $mm) || empty($mm) ){  
    die("Incorect input!Try again!");  
 
} 
if (!preg_match ("/^[0-9]*$/", $yy) || empty($yy) ){  
    die("Incorect input!Try again!");  


}

// if(!is_int($dd) || empty($dd)){
//     die("Niste uneli validan datum");
// }

// elseif(!is_int($mm) || empty($mm)){
//     die("Niste uneli validan datum");
// }
//  elseif (is_int($yy) || empty($yy)){
//     die("Niste uneli validan datum");
//  }else{
//      echo "format je ispravan!";
//  }

if(isset($_GET['sub'])){

if($yy>=1900 && $yy<=9999 && $yy % 4 == 0 && ($yy % 400 == 0 || $yy % 100 !== 0  )){
    echo "You entered a leap year!" ."<br>";
}else{
    echo "You entered a simle(correct) year!" ."<br>";
}

 //check month
  if($mm>=1 && $mm<=12){
      echo "You entered a valid month!"."<br>";
  }else{
    echo "You entered an invalid month!"."<br>";
  }
     //check days
     if(($dd>=1 && $dd<=31) && ($mm==1 || $mm==3 || $mm==5 || $mm==7 || $mm==8 || $mm==10 || $mm==12))
         echo("Date is valid.\n"."<br>");
     else if(($dd>=1 && $dd<=30) && ($mm==4 || $mm==6 || $mm==9 || $mm==11))
         echo("Date is valid.\n"."<br>");
     else if(($dd>=1 && $dd<=28) && ($mm==2))
         echo("Date is valid.\n"."<br>");
     else if($dd==29 && $mm==2 && ($yy%400==0 ||($yy%4==0 && $yy%100!=0)))
         echo("Date is valid.\n"."<br>");
     else
         echo("Day is invalid.\n"."<br>");
}






?>




