<?php


include_once  '../../config/Database.php';
include_once  '../../models/Posts.php';


//intantiate db and connect

$dataBase = new Database();
$db = $dataBase->connect();

//intantiate  post object

$post = new Post($db);

$result= $post->pages();
$num = $result->rowCount();

echo $num;

  $results_per_page = 1;

 
    //determine number of pages available
   echo $num_of_pages = ceil($num/$results_per_page);

   //determine which page number visitor is currently on

   if (!isset($_GET['page'])){
        $page = 1;
   }else{
       $page = $_GET['page'];
   }

// display number of items per page LIMIT STARTING NUMBER


//  $this_page_first_result = ($page -1) * $results_per_page;

 

//  $query = "SELECT   base_sku.idbase_sku, base_sku.base_sku, base_sku.brand, base_sku.model, base_sku.form_factor, base_sku.processor_type,
//  extended_sku.specification,extended_sku.cost,extended_sku.front_picture_icons, extended_sku.front_picture,
//   extended_sku.back_picture, extended_sku.left_picture,extended_sku.right_picture,extended_sku.back_and_front_picture, extended_sku.generation,
//   extended_sku.processor_speed,  extended_sku.processor_socket, extended_sku.memory,extended_sku.memory_speed,extended_sku.memory_type, 
//   extended_sku.storage,extended_sku.storage_type, extended_sku.operating_system, extended_sku.usb_3_0, extended_sku.usb_2_0, extended_sku.vga_ports,
//   extended_sku.display_ports, extended_sku.dvi_port, extended_sku.hdmi_ports, extended_sku.graphics_processors, extended_sku.optical_drive, extended_sku.optical_drive_type,
//   extended_sku.width, extended_sku.depth, extended_sku.height, extended_sku.weight, extended_sku.warranty
  
 
//  FROM  base_sku
//  INNER JOIN extended_sku 
//  ON base_sku.base_sku = extended_sku.base_sku LIMIT " . $this_page_first_result . ','. $results_per_page ;




 while( $row = $result->fetch(PDO::FETCH_ASSOC)){
    extract($row);

    echo $row['idbase_sku'] .' '. $row['brand'] . '<br>' ; 
  }
 


   //display the ling to the pages

   for ($page = 1 ; $page<=$num_of_pages; $page++){

    echo '<a href= "pagination.php?page=' . $page .  ' "> ' . $page . '</a>';
   }
