<?php 
$users = [
    [
        'name' => "Pera",
    	'last_name' => "Miric",
    	'img' =>"profile_pic01"
        ],
        [
        'name' => "Mitar",
        'last_name' => "Miric",
        'img' =>"profile_pic02"
        ]
        ];
 echo "<pre>";
 print_r($users);
 echo "</pre>";
                
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