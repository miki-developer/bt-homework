<?php  

define("ORDER_BY_PRICE_ASC","price-asc");
define("ORDER_BY_PRICE_DSC","price-desc");


function getAllProducts()
{
	return $products = [
		[
			'id' => 1,
			'title' => "Building websites",
			'description' => "Building websites allows you to do fun and creative work, 
			from anywhere in the world, and it even pays well. Web development is
			 one of the most future-proof and highest-paying industries in the world.
			  And HTML and CSS is the entry point to this world!
            But you already know all this, that's why you want
			 to learn HTML and CSS too. Well, you came to the right place!
			This is the best and most complete course for starting your web
		    development journey that you will find on Udemy.
			 It's an all-in-one package that takes you from
			  knowing nothing about HTML and CSS, to building
			beautiful websites using tools and technologies
			 that professional web developers use every single day.",
			'img' => "./public/theme/img/undraw_building_websites_i78t.svg",
			'price' => 100,
			'category' => "Web developement",
			'brand' => "IT Bootcamp",
			'available' => true
		],
		[
			'id' => 2,
			'title' => "Business online",
			'description' => "Building websites allows you to do fun and creative work, 
			from anywhere in the world, and it even pays well. Web development is
			 one of the most future-proof and highest-paying industries in the world.
			  And HTML and CSS is the entry point to this world!
            But you already know all this, that's why you want
			 to learn HTML and CSS too. Well, you came to the right place!
			This is the best and most complete course for starting your web
		    development journey that you will find on Udemy.
			 It's an all-in-one package that takes you from
			  knowing nothing about HTML and CSS, to building
			beautiful websites using tools and technologies
			 that professional web developers use every single day.",
			'img' => "./public/theme/img/undraw_business_chat_re_ro2e.svg",
			'price' => 101.50,
			'category' => "Web developement",
			'brand' => "IT Bootcamp",
			'available' => false
		],
		[
			'id' => 3,
			'title' => "App development",
			'description' =>"Building websites allows you to do fun and creative work, 
			from anywhere in the world, and it even pays well. Web development is
			 one of the most future-proof and highest-paying industries in the world.
			  And HTML and CSS is the entry point to this world!
            But you already know all this, that's why you want
			 to learn HTML and CSS too. Well, you came to the right place!
			This is the best and most complete course for starting your web
		    development journey that you will find on Udemy.
			 It's an all-in-one package that takes you from
			  knowing nothing about HTML and CSS, to building
			beautiful websites using tools and technologies
			 that professional web developers use every single day.",
			'img' => "./public/theme/img/undraw_develop_app_re_bi4i.svg",
			'price' => 102.50,
			'category' => "Web developement",
			'brand' => "IT Bootcamp",
			'available' => true
		],
		[
			'id' => 4,
			'title' => "Email Marketing",
			'description' => "Building websites allows you to do fun and creative work, 
			from anywhere in the world, and it even pays well. Web development is
			 one of the most future-proof and highest-paying industries in the world.
			  And HTML and CSS is the entry point to this world!
            But you already know all this, that's why you want
			 to learn HTML and CSS too. Well, you came to the right place!
			This is the best and most complete course for starting your web
		    development journey that you will find on Udemy.
			 It's an all-in-one package that takes you from
			  knowing nothing about HTML and CSS, to building
			beautiful websites using tools and technologies
			 that professional web developers use every single day.",
			'img' => "./public/theme/img/undraw_email_campaign_re_m6k5.svg",
			'price' => 110.50,
			'category' => "Web developement",
			'brand' => "IT Bootcamp",
			'available' => false
		],
		[
			'id' => 5,
			'title' => "Finance",
			'description' => "Building websites allows you to do fun and creative work, 
			from anywhere in the world, and it even pays well. Web development is
			 one of the most future-proof and highest-paying industries in the world.
			  And HTML and CSS is the entry point to this world!
            But you already know all this, that's why you want
			 to learn HTML and CSS too. Well, you came to the right place!
			This is the best and most complete course for starting your web
		    development journey that you will find on Udemy.
			 It's an all-in-one package that takes you from
			  knowing nothing about HTML and CSS, to building
			beautiful websites using tools and technologies
			 that professional web developers use every single day.",
			'img' => "./public/theme/img/undraw_finance_re_gnv2.svg",
			'price' => 97.50,
			'category' => "Web developement",
			'brand' => "IT Bootcamp",
			'available' => true
		],
		[
			'id' => 6,
			'title' => "Flutter",
			'description' => "Building websites allows you to do fun and creative work, 
			from anywhere in the world, and it even pays well. Web development is
			 one of the most future-proof and highest-paying industries in the world.
			  And HTML and CSS is the entry point to this world!
            But you already know all this, that's why you want
			 to learn HTML and CSS too. Well, you came to the right place!
			This is the best and most complete course for starting your web
		    development journey that you will find on Udemy.
			 It's an all-in-one package that takes you from
			  knowing nothing about HTML and CSS, to building
			beautiful websites using tools and technologies
			 that professional web developers use every single day.",
			'img' => "./public/theme/img/undraw_flutter_dev_wvqj.svg",
			'price' => 105.50,
			'category' => "Web developement",
			'brand' => "IT Bootcamp",
			'available' => true
		],
		[
			'id' => 7,
			'title' => "Hiring",
			'description' =>"Building websites allows you to do fun and creative work, 
			from anywhere in the world, and it even pays well. Web development is
			 one of the most future-proof and highest-paying industries in the world.
			  And HTML and CSS is the entry point to this world!
            But you already know all this, that's why you want
			 to learn HTML and CSS too. Well, you came to the right place!
			This is the best and most complete course for starting your web
		    development journey that you will find on Udemy.
			 It's an all-in-one package that takes you from
			  knowing nothing about HTML and CSS, to building
			beautiful websites using tools and technologies
			 that professional web developers use every single day.",
			'img' => "./public/theme/img/undraw_hiring_re_yk5n.svg",
			'price' => 106.50,
			'category' => "Bussiness",
			'brand' => "IT Bootcamp",
			'available' => true
		],
		[
			'id' => 8,
			'title' => "Social",
			'description' =>"Building websites allows you to do fun and creative work, 
			from anywhere in the world, and it even pays well. Web development is
			 one of the most future-proof and highest-paying industries in the world.
			  And HTML and CSS is the entry point to this world!
            But you already know all this, that's why you want
			 to learn HTML and CSS too. Well, you came to the right place!
			This is the best and most complete course for starting your web
		    development journey that you will find on Udemy.
			 It's an all-in-one package that takes you from
			  knowing nothing about HTML and CSS, to building
			beautiful websites using tools and technologies
			 that professional web developers use every single day.",
			'img' => "./public/theme/img/undraw_social_interaction_re_dyjh.svg",
			'price' => 106.50,
			'category' => "Bussiness",
			'brand' => "IT Bootcamp",
			'available' => true
		],
		// [[[[[]]]]]
		[
			'id' => 9,
			'title' => "Working Remotely",
			'description' =>"Building websites allows you to do fun and creative work, 
			from anywhere in the world, and it even pays well. Web development is
			 one of the most future-proof and highest-paying industries in the world.
			  And HTML and CSS is the entry point to this world!
            But you already know all this, that's why you want
			 to learn HTML and CSS too. Well, you came to the right place!
			This is the best and most complete course for starting your web
		    development journey that you will find on Udemy.
			 It's an all-in-one package that takes you from
			  knowing nothing about HTML and CSS, to building
			beautiful websites using tools and technologies
			 that professional web developers use every single day.",
			'img' => "./public/theme/img/undraw_working_remotely_re_6b3a.svg",
			'price' => 106.50,
			'category' => "Web developement",
			'brand' => "IT Bootcamp",
			'available' => true
		],
		[
			'id' => 10,
			'title' => "Photography",
			'description' =>"Building websites allows you to do fun and creative work, 
			from anywhere in the world, and it even pays well. Web development is
			 one of the most future-proof and highest-paying industries in the world.
			  And HTML and CSS is the entry point to this world!
            But you already know all this, that's why you want
			 to learn HTML and CSS too. Well, you came to the right place!
			This is the best and most complete course for starting your web
		    development journey that you will find on Udemy.
			 It's an all-in-one package that takes you from
			  knowing nothing about HTML and CSS, to building
			beautiful websites using tools and technologies
			 that professional web developers use every single day.",
			'img' => "./public/theme/img/undraw_product_photography_91i2.svg",
			'price' => 112.50,
			'category' => "Web developement",
			'brand' => "IT Bootcamp",
			'available' => true
		],
		[
			'id' => 11,
			'title' => "Programming",
			'description' =>"Building websites allows you to do fun and creative work, 
			from anywhere in the world, and it even pays well. Web development is
			 one of the most future-proof and highest-paying industries in the world.
			  And HTML and CSS is the entry point to this world!
            But you already know all this, that's why you want
			 to learn HTML and CSS too. Well, you came to the right place!
			This is the best and most complete course for starting your web
		    development journey that you will find on Udemy.
			 It's an all-in-one package that takes you from
			  knowing nothing about HTML and CSS, to building
			beautiful websites using tools and technologies
			 that professional web developers use every single day.",
			'img' => "./public/theme/img/undraw_programming_re_kg9v.svg",
			'price' => 212.50,
			'category' => "Programming",
			'brand' => "IT Bootcamp",
			'available' => true
		],
		[
			'id' => 12,
			'title' => "Nuxt.js",
			'description' =>"Building websites allows you to do fun and creative work, 
			from anywhere in the world, and it even pays well. Web development is
			 one of the most future-proof and highest-paying industries in the world.
			  And HTML and CSS is the entry point to this world!
            But you already know all this, that's why you want
			 to learn HTML and CSS too. Well, you came to the right place!
			This is the best and most complete course for starting your web
		    development journey that you will find on Udemy.
			 It's an all-in-one package that takes you from
			  knowing nothing about HTML and CSS, to building
			beautiful websites using tools and technologies
			 that professional web developers use every single day.",
			'img' => "./public/theme/img/undraw_nuxt_js_0fq9.svg",
			'price' => 149.50,
			'category' => "Programming",
			'brand' => "IT Bootcamp",
			'available' => true
		],
		[
			'id' => 13,
			'title' => "Next.js",
			'description' =>"Building websites allows you to do fun and creative work, 
			from anywhere in the world, and it even pays well. Web development is
			 one of the most future-proof and highest-paying industries in the world.
			  And HTML and CSS is the entry point to this world!
            But you already know all this, that's why you want
			 to learn HTML and CSS too. Well, you came to the right place!
			This is the best and most complete course for starting your web
		    development journey that you will find on Udemy.
			 It's an all-in-one package that takes you from
			  knowing nothing about HTML and CSS, to building
			beautiful websites using tools and technologies
			 that professional web developers use every single day.",
			'img' => "./public/theme/img/undraw_next_js_-8-g5m.svg",
			'price' => 179.50,
			'category' => "Programming",
			'brand' => "IT Bootcamp",
			'available' => true
		],
		[
			'id' => 14,
			'title' => "Mobile App",
			'description' =>"Building websites allows you to do fun and creative work, 
			from anywhere in the world, and it even pays well. Web development is
			 one of the most future-proof and highest-paying industries in the world.
			  And HTML and CSS is the entry point to this world!
            But you already know all this, that's why you want
			 to learn HTML and CSS too. Well, you came to the right place!
			This is the best and most complete course for starting your web
		    development journey that you will find on Udemy.
			 It's an all-in-one package that takes you from
			  knowing nothing about HTML and CSS, to building
			beautiful websites using tools and technologies
			 that professional web developers use every single day.",
			'img' => "./public/theme/img/undraw_mobile_app_re_catg.svg",
			'price' => 379.50,
			'category' => "Programming",
			'brand' => "IT Bootcamp",
			'available' => true
		],
		[
			'id' => 15,
			'title' => "Laravel & Vue",
			'description' =>"Building websites allows you to do fun and creative work, 
			from anywhere in the world, and it even pays well. Web development is
			 one of the most future-proof and highest-paying industries in the world.
			  And HTML and CSS is the entry point to this world!
            But you already know all this, that's why you want
			 to learn HTML and CSS too. Well, you came to the right place!
			This is the best and most complete course for starting your web
		    development journey that you will find on Udemy.
			 It's an all-in-one package that takes you from
			  knowing nothing about HTML and CSS, to building
			beautiful websites using tools and technologies
			 that professional web developers use every single day.",
			'img' => "./public/theme/img/undraw_laravel_and_vue_-59-tp.svg",
			'price' => 200.50,
			'category' => "Programming",
			'brand' => "IT Bootcamp",
			'available' => true
		],
		[
			'id' => 14,
			'title' => "Mobile App",
			'description' =>"Building websites allows you to do fun and creative work, 
			from anywhere in the world, and it even pays well. Web development is
			 one of the most future-proof and highest-paying industries in the world.
			  And HTML and CSS is the entry point to this world!
            But you already know all this, that's why you want
			 to learn HTML and CSS too. Well, you came to the right place!
			This is the best and most complete course for starting your web
		    development journey that you will find on Udemy.
			 It's an all-in-one package that takes you from
			  knowing nothing about HTML and CSS, to building
			beautiful websites using tools and technologies
			 that professional web developers use every single day.",
			'img' => "./public/theme/img/undraw_mobile_app_re_catg.svg",
			'price' => 379.50,
			'category' => "Programming",
			'brand' => "IT Bootcamp",
			'available' => true
		],
		[
			'id' => 15,
			'title' => "Laravel & Vue",
			'description' =>"Building websites allows you to do fun and creative work, 
			from anywhere in the world, and it even pays well. Web development is
			 one of the most future-proof and highest-paying industries in the world.
			  And HTML and CSS is the entry point to this world!
            But you already know all this, that's why you want
			 to learn HTML and CSS too. Well, you came to the right place!
			This is the best and most complete course for starting your web
		    development journey that you will find on Udemy.
			 It's an all-in-one package that takes you from
			  knowing nothing about HTML and CSS, to building
			beautiful websites using tools and technologies
			 that professional web developers use every single day.",
			'img' => "./public/theme/img/undraw_laravel_and_vue_-59-tp.svg",
			'price' => 212.50,
			'category' => "Programming",
			'brand' => "IT Bootcamp",
			'available' => true
		],
		[
			'id' => 16,
			'title' => "React",
			'description' =>"Building websites allows you to do fun and creative work, 
			from anywhere in the world, and it even pays well. Web development is
			 one of the most future-proof and highest-paying industries in the world.
			  And HTML and CSS is the entry point to this world!
            But you already know all this, that's why you want
			 to learn HTML and CSS too. Well, you came to the right place!
			This is the best and most complete course for starting your web
		    development journey that you will find on Udemy.
			 It's an all-in-one package that takes you from
			  knowing nothing about HTML and CSS, to building
			beautiful websites using tools and technologies
			 that professional web developers use every single day.",
			'img' => "./public/theme/img/undraw_react_re_g3ui.svg",
			'price' => 111.50,
			'category' => "Programming",
			'brand' => "IT Bootcamp",
			'available' => true
		],
		[
			'id' => 17,
			'title' => "Server Management",
			'description' =>"Building websites allows you to do fun and creative work, 
			from anywhere in the world, and it even pays well. Web development is
			 one of the most future-proof and highest-paying industries in the world.
			  And HTML and CSS is the entry point to this world!
            But you already know all this, that's why you want
			 to learn HTML and CSS too. Well, you came to the right place!
			This is the best and most complete course for starting your web
		    development journey that you will find on Udemy.
			 It's an all-in-one package that takes you from
			  knowing nothing about HTML and CSS, to building
			beautiful websites using tools and technologies
			 that professional web developers use every single day.",
			'img' => "./public/theme/img/undraw_server_push_re_303w.svg",
			'price' => 120.50,
			'category' => "Programming",
			'brand' => "IT Bootcamp",
			'available' => true
		],
		[
			'id' => 18,
			'title' => "Static website building",
			'description' =>"Building websites allows you to do fun and creative work, 
			from anywhere in the world, and it even pays well. Web development is
			 one of the most future-proof and highest-paying industries in the world.
			  And HTML and CSS is the entry point to this world!
            But you already know all this, that's why you want
			 to learn HTML and CSS too. Well, you came to the right place!
			This is the best and most complete course for starting your web
		    development journey that you will find on Udemy.
			 It's an all-in-one package that takes you from
			  knowing nothing about HTML and CSS, to building
			beautiful websites using tools and technologies
			 that professional web developers use every single day.",
			'img' => "./public/theme/img/undraw_static_website_re_x70h.svg",
			'price' => 130.50,
			'category' => "Programming",
			'brand' => "IT Bootcamp",
			'available' => true
		],
		[
			'id' => 19,
			'title' => "Static website building",
			'description' =>"Building websites allows you to do fun and creative work, 
			from anywhere in the world, and it even pays well. Web development is
			 one of the most future-proof and highest-paying industries in the world.
			  And HTML and CSS is the entry point to this world!
            But you already know all this, that's why you want
			 to learn HTML and CSS too. Well, you came to the right place!
			This is the best and most complete course for starting your web
		    development journey that you will find on Udemy.
			 It's an all-in-one package that takes you from
			  knowing nothing about HTML and CSS, to building
			beautiful websites using tools and technologies
			 that professional web developers use every single day.",
			'img' => "./public/theme/img/undraw_tailwind_css_1egw.svg",
			'price' => 130.50,
			'category' => "Programming",
			'brand' => "IT Bootcamp",
			'available' => true
		],
		[
			'id' => 20,
			'title' => "Investment data",
			'description' =>"Building websites allows you to do fun and creative work, 
			from anywhere in the world, and it even pays well. Web development is
			 one of the most future-proof and highest-paying industries in the world.
			  And HTML and CSS is the entry point to this world!
            But you already know all this, that's why you want
			 to learn HTML and CSS too. Well, you came to the right place!
			This is the best and most complete course for starting your web
		    development journey that you will find on Udemy.
			 It's an all-in-one package that takes you from
			  knowing nothing about HTML and CSS, to building
			beautiful websites using tools and technologies
			 that professional web developers use every single day.",
			'img' => "./public/theme/img/undraw_investment_data_re_sh9x.svg",
			'price' => 130.50,
			'category' => "Programming",
			'brand' => "IT Bootcamp",
			'available' => true
		],
		[
			'id' => 21,
			'title' => "Online everywhere",
			'description' =>"Building websites allows you to do fun and creative work, 
			from anywhere in the world, and it even pays well. Web development is
			 one of the most future-proof and highest-paying industries in the world.
			  And HTML and CSS is the entry point to this world!
            But you already know all this, that's why you want
			 to learn HTML and CSS too. Well, you came to the right place!
			This is the best and most complete course for starting your web
		    development journey that you will find on Udemy.
			 It's an all-in-one package that takes you from
			  knowing nothing about HTML and CSS, to building
			beautiful websites using tools and technologies
			 that professional web developers use every single day.",
			'img' => "./public/theme/img/undraw_online_everywhere_re_n3lr.svg",
			'price' => 130.50,
			'category' => "Programming",
			'brand' => "IT Bootcamp",
			'available' => true
		],
		[
			'id' => 22,
			'title' => "Version Control",
			'description' =>"Building websites allows you to do fun and creative work, 
			from anywhere in the world, and it even pays well. Web development is
			 one of the most future-proof and highest-paying industries in the world.
			  And HTML and CSS is the entry point to this world!
            But you already know all this, that's why you want
			 to learn HTML and CSS too. Well, you came to the right place!
			This is the best and most complete course for starting your web
		    development journey that you will find on Udemy.
			 It's an all-in-one package that takes you from
			  knowing nothing about HTML and CSS, to building
			beautiful websites using tools and technologies
			 that professional web developers use every single day.",
			'img' => "./public/theme/img/undraw_version_control_re_mg66.svg",
			'price' => 130.50,
			'category' => "Programming",
			'brand' => "IT Bootcamp",
			'available' => true
		],
		[
			'id' => 23,
			'title' => "Hiring",
			'description' =>"Building websites allows you to do fun and creative work, 
			from anywhere in the world, and it even pays well. Web development is
			 one of the most future-proof and highest-paying industries in the world.
			  And HTML and CSS is the entry point to this world!
            But you already know all this, that's why you want
			 to learn HTML and CSS too. Well, you came to the right place!
			This is the best and most complete course for starting your web
		    development journey that you will find on Udemy.
			 It's an all-in-one package that takes you from
			  knowing nothing about HTML and CSS, to building
			beautiful websites using tools and technologies
			 that professional web developers use every single day.",
			'img' => "./public/theme/img/undraw_hiring_re_yk5n.svg",
			'price' => 130.50,
			'category' => "Programming",
			'brand' => "IT Bootcamp",
			'available' => true
		],
		[
			'id' => 24,
			'title' => "Business 2022",
			'description' =>"Building websites allows you to do fun and creative work, 
			from anywhere in the world, and it even pays well. Web development is
			 one of the most future-proof and highest-paying industries in the world.
			  And HTML and CSS is the entry point to this world!
            But you already know all this, that's why you want
			 to learn HTML and CSS too. Well, you came to the right place!
			This is the best and most complete course for starting your web
		    development journey that you will find on Udemy.
			 It's an all-in-one package that takes you from
			  knowing nothing about HTML and CSS, to building
			beautiful websites using tools and technologies
			 that professional web developers use every single day.",
			'img' => "./public/theme/img/undraw_business_chat_re_ro2e.svg",
			'price' => 130.50,
			'category' => "Programming",
			'brand' => "IT Bootcamp",
			'available' => true
		],
		

	
	];


}
	


//echo $products[0]['id'];
function getAllAvailableProducts($sort = "")
{
	$products = getAllProducts();
	$available = [[]];
	
	//$i=0;
	foreach ($products as  $product) {
		if($product['available'] == true)
			$available[] = $product;
	}

	array_shift($available);

	if(ORDER_BY_PRICE_ASC==$sort)
	{
		$columns = array_column($available, 'price');
		array_multisort($columns, SORT_ASC, $available);

	}
	else if(ORDER_BY_PRICE_DSC == $sort)
	{
		
		$columns = array_column($available, 'price');
		array_multisort($columns, SORT_DESC, $available);
	}
	
	return $available;
}


function getOneProductById($id): mixed {
    $allProducts = getAllProducts();
    foreach ($allProducts as $product) {
        if($product['id'] == $id) {
            return $product;
        }
    }
    return false;
}


function getNextProduct($currentProductId) {
    $allProducts = getAllAvailableProducts();
    for ($i=0; $i < count($allProducts); $i++) { 
        if($allProducts[$i]['id'] == $currentProductId) {
        	if($i == count($allProducts)-1)
            	return $allProducts[0];
            else
            	return $allProducts[$i + 1];
        }
    }
}

function getPrevProduct($currentProductId) {
    $allProducts = getAllAvailableProducts();
    for ($i=0; $i < count($allProducts); $i++) { 
        if($allProducts[$i]['id'] == $currentProductId) {
        	if($i == 0)
            	return $allProducts[count($allProducts)-1];
            else
            	return $allProducts[$i - 1];
        }
    }
}

function searchProductsByTerm($searchContent)
{
	$allProducts = getAllAvailableProducts($searchContent);
	$filterProducts= [[]];
	foreach($allProducts as $product)
	{    if(str_contains($product["title"],ucfirst($searchContent))!== false || 
		str_contains($product["category"],$searchContent)!== false || str_contains($product["title"],$searchContent)!== false || 
		str_contains($product["category"],$searchContent)!== false)

		{
			
			$filterProducts[]=$product;
		}
	}
	array_shift($filterProducts);
	return $filterProducts;
}
/*
// if($term == $product["title"] || $term == $product["description"] || $term == $product["brand"])
,$asc=""
$term = "",
    function search_users($users, $searchContent = " "){
       foreach($users as $key=>$value){
           $x = implode(" ", $value);
           if(strpos($x,$searchContent)!== false){
               print_r($value);
           }else{
               echo "Nema rezultata pretrage";
           }
           }
           }
           print_r(search_users($users,'Miric'));
            ?>
*/


function getRelatedByCategory($category,$id)
{
	$products = getAllAvailableProducts();
	$prodCut = [[]];
	$br = 0;
	foreach($products as $product)
	{
		if($product["category"]==$category && $product["id"]!=$id)
		{
			$prodCut[$br]=$product;
			if($br++>1)
				return $prodCut;
		}
	}
	if(empty($prodCut[0]))
		return NULL;
	else
		return $prodCut;
}

//$av = getAllAvailableProducts();

//echo var_dump(getAllAvailableProducts());
//echo var_dump([7,8,9]) ;

//print_r(getAllAvailableProducts());
//var_dump(getRelatedByCategory("kategorija1"));

//print_r(getRelatedByCategory("kategorija1",5));
//print_r(getOneProductById(5));
//var_dump(json_encode(getAllAvailableProducts()));

//echo '<pre>' . var_export(getOneProductById(5), true) . '</pre>';
	//var_dump($av[0])
?>

