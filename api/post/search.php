<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once  '../../config/Database.php';
include_once  '../../models/Posts.php';


//intantiate db and connect

$dataBase = new Database();
$db = $dataBase->connect();

//intantiate  post object

$post = new Post($db);



// get values

$post->idbase_sku = isset($_GET['idbase_sku'])? $_GET['idbase_sku'] : die();
 
//Post query
 $post->Search();

      $post_array = array(

        'idbase_sku'=> $post-> idbase_sku,
        'base_sku'=> $post -> base_sku,
        //'product_type'=> $product_type,
        'brand'=> $post -> brand ,
        'model'=> $post -> model,
        'form_factor'=> $post -> form_factor,
        'processor_type' => $post ->processor_type,
        'specification' => $post-> specification,
        'cost' => $post ->cost,
        'front_picture_icons' => $post ->front_picture_icons
        // 'created_at'=> $created_at,
        // 'updated_at' => $updated_at,
      );

  
   // turn to json

   print_r (json_encode($post_array));
// }else{
//  echo json_encode(

//     array('message' => 'No Posts found'
//  );

// }
 