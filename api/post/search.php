 <?php

// header('Access-Control-Allow-Origin: *');
// header('Content-Type: application/json');

include_once  '../../config/Database.php';
include_once  '../../models/Posts.php';


//intantiate db and connect

$dataBase = new Database();
$db = $dataBase->connect();



//intantiate  post object

$post = new Post($db);
$result= $post->search();
$num = $result->rowCount();
// echo $num;




   if ($num > 0){
    $arr = array();
    $arr ['data'] = array();

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
    'processor_type' =>$processor_type,
    // 'specification' => $specification,
    // 'cost' => ceil($cost) ,
    // 'front_picture_icons' => $front_picture_icons,
    // 'front_picture' => $front_picture,
    // 'back_picture' => $back_picture,
    // 'left_picture' => $left_picture,
    // 'right_picture' => $right_picture,
    // 'back_and_front_picture' => $back_and_front_picture,
    // 'generation' => $generation,
    // 'processor_speed' => $processor_speed,
    // 'processor_socket' => $processor_socket,
    // 'memory' => $memory,
    // 'memory_speed' => $memory_speed,
    // 'memory_type' => $memory_type,
    // 'storage' => $storage,
    // 'storage_type' => $storage_type,
    // 'operating_system' => $operating_system,
    // 'usb_3_0' => $usb_3_0,
    // 'usb_2_0' => $usb_2_0,
    // 'vga_ports' => $vga_ports,
    // 'display_ports' => $display_ports,
    // 'dvi_port' => $dvi_port,
    // 'hdmi_ports' => $hdmi_ports,
    // 'graphics_processors' => $graphics_processors,
    // 'optical_drive' => $optical_drive,
    // 'optical_drive_type' => $optical_drive_type,
    // 'width' => $width,
    // 'depth' => $depth,
    // 'height' => $height,
    // 'weight' => $weight,
    // 'warranty'=> $warranty

 


);

array_push($arr['data'], $post_array); 

//Make json

 echo ( json_encode($post_array). $num ." " . 'Results found' );
               
        }
    }else{
        echo json_encode(
       
           array( $num ." " . 'Results found'
        ));

    
 }

 