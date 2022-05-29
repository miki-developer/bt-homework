<?php
	
	require_once __DIR__."/models/m-products.php";

	$systemMessage = "PAGE NOT FOUND 404!!!";

	if(empty($_GET['id'])) {
    	die($systemMessage);
	}

	$productId = $_GET['id'];

	

	switch($_GET['page'])
	{
		case "next": $product=getNextProduct($productId);
					 
					 break;
		case "prev": $product=getPrevProduct($productId);
					 
					 break;
		default:$product = getOneProductById($productId);
	}

	//$product = getOneProductById($productId);

	if(!$product) {
    	die($systemMessage);
	}

	$similarProducts = getRelatedByCategory($product["category"],$product["id"]);
	//$similarProducts = $similarProducts?$similarProducts:[];
	//HEADRE
		require __DIR__."/views/_layout/v-header.php";

	// PAGE
	require __DIR__ . "/views/v-single-product.php";

	// FOOTER
	require __DIR__."/views/_layout/v-footer.php";

 ?>


