<?php 

	require_once __DIR__."/models/m-products.php";
	$systemMessage = "PAGE NOT FOUND 404!!!";
	$systemErrors = [];

	if(empty($_GET['id'])) {
    	die($systemMessage);
	}
	//echo $_GET['id'];

	$productId = $_GET['id'];

	$product = getOneProductById($productId);

	//HEADRE
	

	if(!$product) {
    	die($systemMessage);
	}

	

	require __DIR__."/views/_layout/v-header.php";
	

	if(empty($_POST['quantity']))
	{
		$systemErrors['quantity'] = "You did not enter the quantity of goods!!!";
		require __DIR__ . "/views/v-single-product.php";
		
	}
	else
	{
		$quantity =  $_POST['quantity'];
		require __DIR__ . "/views/v-checkout.php";
	}

	// PAGE
	

	//echo var_dump($products);

	//echo '<pre>' . var_export($products, true) . '</pre>';

	// FOOTER
	require __DIR__."/views/_layout/v-footer.php";
 ?>