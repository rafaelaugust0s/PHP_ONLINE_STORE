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

//Post query
$result= $post->read();
//get row count

$num = $result->rowCount();

if ($num > 0){
 $arr = array();
 $arr ['data'] = array();

 while( $row = $result->fetch(PDO::FETCH_ASSOC)){
      extract($row);

      $post_item = array(


        'idbase_sku'=>$idbase_sku,
        'base_sku'=> $base_sku,
        // 'specification' => $specification,
        'product_type'=> $product_type,
        'brand'=> $product_type,
        'model'=> $model,
        'form_factor'=>$form_factor,
        'processor_type' =>$processor_type,
        'created_at'=> $created_at,
        'update_at' => $updated_at,
      );

      //push to DATA

      array_push($arr['data'], $post_item); 
 }
   // turn to json

   echo json_encode($arr);
}else{
 echo json_encode(

    array('message' => 'No Posts found')
 );

}
