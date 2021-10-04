<?php

class Post {

    private $conn;
    private $table = 'base_sku';

    //base-sku properties

    public $idbase_sku;
    public $base_sku;
    public $product_type;
    public $brand;
    public $model; 
    public $form_factor;
    public $processor_type;
    public $specification;
    public $cost;
    public $front_picture_icons;
    public $front_picture;
    public $back_picture;
    public $left_picture;
    public $right_picture;
    public $back_and_front_picture;
    public $generation;
    public $processor_speed;
    public $processor_socket;
    public $memory;
    public $memory_speed;
    public $memory_type;
    public $storage;
    public $storage_type;
    public $operating_system;
    public $usb_3_0;
    public $usb_2_0;
    public $vga_ports;
    public $display_ports;
    public $dvi_port;
    public $hdmi_ports;
    public $graphics_processors;
    public $optical_drive;
    public $optical_drive_type;
    public $width;
    public $depth;
    public $height;
    public $weight;
    public $warranty;

    public $created_at;
    public $updated_at;

    //constructor

    public function __construct($db){
        $this->conn =$db;
    }

    //method to display data
     public function read(){

        //create query
     // $query = 'SELECT * FROM ' . $this->table . ' ';

        $query = 'SELECT   base_sku.idbase_sku, base_sku.base_sku, base_sku.brand, base_sku.model, base_sku.form_factor, base_sku.processor_type,
        extended_sku.specification,extended_sku.cost,extended_sku.front_picture_icons, extended_sku.front_picture,
         extended_sku.back_picture, extended_sku.left_picture,extended_sku.right_picture,extended_sku.back_and_front_picture, extended_sku.generation,
         extended_sku.processor_speed,  extended_sku.processor_socket, extended_sku.memory,extended_sku.memory_speed,extended_sku.memory_type, 
         extended_sku.storage,extended_sku.storage_type, extended_sku.operating_system, extended_sku.usb_3_0, extended_sku.usb_2_0, extended_sku.vga_ports,
         extended_sku.display_ports, extended_sku.dvi_port, extended_sku.hdmi_ports, extended_sku.graphics_processors, extended_sku.optical_drive, extended_sku.optical_drive_type,
         extended_sku.width, extended_sku.depth, extended_sku.height, extended_sku.weight, extended_sku.warranty
         
        
        FROM  ' . $this->table . '
        INNER JOIN extended_sku 
        ON base_sku.base_sku = extended_sku.base_sku';
        
        

      

        /// prepare statement
        $stmt = $this->conn->prepare($query);
         //execute

         $stmt->execute();

         return $stmt;

        
     }

     // search data

     public function Search(){

              $search = " ";

//         //  $searchQuery =  'SELECT * FROM ' . $this->table . '  WHERE  MATCH (base_sku, product_type, brand, model, form_factor, processor_type ) AGAINST ('%" .$search. " %')' ;
         
              //$searchQuery =  'SELECT * FROM ' . $this->table . ' WHERE idbase_sku = ? LIMIT 0,1 ' ;

            //   $searchQuery =  'SELECT * FROM ' . $this->table . ' ' ;
              


         $searchQuery =  'SELECT * FROM ' . $this->table . ' WHERE brand LIKE "%$search%" ' ;


        
//         // $searchQuery = 'SELECT   base_sku.idbase_sku, base_sku.base_sku, base_sku.brand, base_sku.model, base_sku.form_factor, base_sku.processor_type,
//         // extended_sku.specification,extended_sku.cost,extended_sku.front_picture_icons
        
//         // FROM  ' . $this->table . '
//         // INNER JOIN extended_sku 
//         // ON base_sku.base_sku = extended_sku.base_sku WHERE idbase_sku LIKE   %$search%  OR  brand LIKE  %$search%    ' ;



//         // $searchQuery = " SELECT   base_sku.idbase_sku, base_sku.base_sku, base_sku.brand, base_sku.model, base_sku.form_factor, base_sku.processor_type,
//         // extended_sku.specification,extended_sku.cost,extended_sku.front_picture_icons
        
//         // FROM  base_sku
//         // INNER JOIN extended_sku 
//         // ON base_sku.base_sku = extended_sku.base_sku WHERE idbase_sku LIKE   '%$search%'  OR  brand LIKE  '%$search%'    " ;
      
      
      $stmt = $this->conn->prepare($searchQuery);

//        //bind id

//         //$stmt -> bindParam (1, $this->idbase_sku);

//    //execute

    $stmt -> execute();

    return $stmt;

      
    //$row = $stmt ->fetch(PDO::FETCH_ASSOC);
       

//        //set properties

//         // $this-> idbase_sku = $row ['idbase_sku'];   
//         // $this -> base_sku = $row['base_sku'];   
//         // $this -> brand = $row['brand'];     
//         //  $this -> model = $row['model'];   
//         //  $this -> form_factor= $row['form_factor'];   
//         //  $this -> processor_type = $row['processor_type'];   
//         //  $this -> specification = $row['specification'];  
//         //  $this -> cost = $row['cost'];   
//         //  $this -> front_picture_icons = $row['front_picture_icons'];   

         


               
      }
}