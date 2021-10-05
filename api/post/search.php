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


//get search
$post->search = isset($_GET['search']) ? $_GET['search'] : die();
//Post query
$result= $post->Search();
// //get row count
// $num = $result->rowCount();
// echo $num;


//create array

$post_array = array(


    'idbase_sku'=>$idbase_sku,
    'base_sku'=> $base_sku,
    //'product_type'=> $product_type,
    'brand'=> $brand,
    'model'=> $model,
    'form_factor'=>$form_factor,

        //   'idbase_sku' => $post-> idbase_sku, 
        //   'base_sku' => $post -> base_sku,   
        //   'brand' => $post->brand,     
        //   'model' => $post->model,   
        //   'form_factor'=> $post->form_factor,


);

//Make json

print_r(json_encode($post_array));
      

 
