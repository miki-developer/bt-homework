<?php 

	
	require_once __DIR__."/models/m-form-check.php";
	require_once __DIR__."/models/m-products.php";

	$productId = $_GET['id'];
	$product=getOneProductById($productId);
	$quantity = $_GET['quan'];
	$systemErrors = [];
	if(!empty($_POST['email'])) {
    	$email = $_POST['email'];
	}
	else
		$email="";

	if(!empty($_POST['ime'])) {
    	$ime = $_POST['ime'];
	}
	else
		$ime="";

	if(!empty($_POST['prezime'])) {
    	$prezime = $_POST['prezime'];
	}
	else
		$prezime="";

	if(!empty($_POST['grad'])) {
    	$grad = $_POST['grad'];
	}
	else
		$grad="";

	if(!empty($_POST['ulica'])) {
    	$ulica = $_POST['ulica'];
	}
	else
		$ulica="";

	if(!empty($_POST['telefon'])) {
    	$telefon = $_POST['telefon'];
	}
	else
		$telefon="";

	if(!empty($_POST['zip'])) {
    	$zip = $_POST['zip'];
	}
	else
		$zip="";

	if(!empty($_POST['komentar'])) {
    	$komentar = trim($_POST['komentar']);
	}
	else
		$komentar="";

	if(!isValidMail($email)) {
    	$systemErrors['email'] = "Mail is not valid!";
	}

	if(!isValidName($ime)) {
    	$systemErrors['ime'] = "Name is not valid!";
	}

	if(!isValidName($prezime)) {
    	$systemErrors['prezime'] = "Last name is not valid!";
	}

	if(!isValidName($grad)) {
    	$systemErrors['grad'] = "City is not valid!";
	}

	if(!isValidName($ulica)) {
    	$systemErrors['ulica'] = "Street is not valid!";
	}

	if(!isValidPhoneNumer($telefon)) {
    	$systemErrors['telefon'] = "Numberis not valid!";
	}

	if(!isValidZip($zip)) {
    	$systemErrors['zip'] = "Zip is not valid!";
	}

	if(empty($_POST['uslov']) ) //vrednost je on
		$systemErrors['uslov'] = "Please check the terms!";
	else
		echo $_POST['uslov'];


	//HEADRE
	require __DIR__."/views/_layout/v-header.php";


	// PAGE
	if(empty($systemErrors))
		require __DIR__ . "/views/m-uspesna-porudzbina.php";
	else
		require __DIR__ . "/views/v-checkout.php";

	//echo var_dump($products);

	//echo '<pre>' . var_export($products, true) . '</pre>';

	// FOOTER
	require __DIR__."/views/_layout/v-footer.php";

 ?>