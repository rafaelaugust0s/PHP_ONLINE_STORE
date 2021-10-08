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

  $num;
$results_per_page = 1;



    //determine number of pages available
    $num_of_pages = ceil($num/$results_per_page);

   //determine which page number visitor is currently on

   if (!isset($_GET['page'])){
        $page = 1;
   }else{
       $page = $_GET['page'];
   }

 $this_page_first_result = ($page -1) * $results_per_page;
 

// display number of items per page LIMIT STARTING NUMBER


while( $row = $result->fetch(PDO::FETCH_ASSOC)){
    extract($row);

    echo $row['idbase_sku'] .' '. $row['brand'] .' '. $row['model'] .'<br>' ; 
  }

   //display the link to the pages

   for ($page = 1 ; $page<=$num_of_pages; $page++){

    echo '<a href= "pagination.php?page=' . $page .  ' "> ' . $page . '</a>';
   }
