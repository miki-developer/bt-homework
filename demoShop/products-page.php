<?php 

require_once __DIR__."/models/m-products.php";
if(!empty($_POST["asc"]))
    $asc = $_POST["asc"];
else
    $asc = "";
//echo $asc;

if(!empty($_POST["term"]))
    $products = searchProductsByTerm($_POST["term"],$asc);
else
    $products = getAllAvailableProducts($asc);

//HEADRE
require __DIR__."/views/_layout/v-header.php";


// PAGE
require __DIR__ . "/views/v-products.php";

//echo var_dump($products);

//echo '<pre>' . var_export($products, true) . '</pre>';

// FOOTER
require __DIR__."/views/_layout/v-footer.php";



 ?>