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
$num = $result->rowCount();
echo $num;


while( $row = $result->fetch(PDO::FETCH_ASSOC)){
    extract($row);
//create array

$post_array = array(


    'idbase_sku'=>$idbase_sku,
    'base_sku'=> $base_sku,
    //'product_type'=> $product_type,
    'brand'=> $brand,
    'model'=> $model,
    'form_factor'=>$form_factor,

 


);

//Make json

print_r(json_encode($post_array));
}     

 
