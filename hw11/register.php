<?php
$fname = $_GET['fname'];
$lname = $_GET['lname']; 
$email = $_GET['email'];
$password = $_GET['password'];
$password2 = $_GET['password2'];
$required = array('fname', 'lname', 'email','password');
$error = false;
foreach($required as $field) {
  if (empty($_GET[$field])) {
    $error = true;
  }
}
if ($error) {
  echo "<h1 style='color:red;'>	&#9949;&#9949;&#9949; All fields are required</h1>";
  ?>

  <html>
<ul style="list-style-type: none">
  <li><a href="register.html" style='color:red; font-size:22px; text-decoration: none;'>&ShortLeftArrow; Nazad</a></li>
</ul>
</html>
<?php
} else {
    echo "<h1 style='color:green;'>&check;&check;&check; <br> Dobrodosli!</h1>";
    //
    if(isset($_GET['sub'])){
        if(isset($_GET['gender'])){
           $gender_type = $_GET['gender'];
           if($gender_type == "musko"){
               echo "  Postovani &#9794; , <br>\n";
           }elseif($gender_type == "zensko"){
               echo "Postovana  &#9792; , <br>\n";
           }
       }
        echo " $fname $lname <br>\n Uspesno ste se registrovali na nasem sajtu. <br>\n Vasa lozinka je: $password <br>\n Vas username je Vas email: $email <br>\n ";
        // $kursevi = $_GET['courses'];
        if(empty($_GET['courses'])){
            echo "<h4>Molimo odaberite bar jedan kurs!</h4>";
        }
        else{
            $kursevi = $_GET['courses'];
            echo "</h4>Odabrali ste kurseve:</h4> ";
            print_r(implode( ', ', $kursevi ));
        }
   
   
       }
}

?>



