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
        extended_sku.specification,extended_sku.cost,extended_sku.front_picture_icons
        
        FROM  ' . $this->table . '
        INNER JOIN extended_sku 
        ON base_sku.base_sku = extended_sku.base_sku';
        
        

        // $query = 'SELECT spec as specification,
        //  idbase_sku,
        //  base_sku,
        //  specification,
        //  product_type,
        //  brand,
        //  model,
        //  form_factor,
        //  processor_type,
        //  created_at,
        //  updated_at

        // FROM   ' . $this->table . '
       
        // INNER JOIN extended_sku 
        // ON base_sku.base_sku = extended_sku.base_sku
        // ORDER BY created_at DESC
        // ' ;

        /// prepare statement
        $stmt = $this->conn->prepare($query);
         //execute

         $stmt->execute();

         return $stmt;

         //set properties
         $row = $stmt->fetch (PDO::FETCH_ASSOC);
         $this ->$front_picture_icons = $row ['front_picture_icons'];
     }
}