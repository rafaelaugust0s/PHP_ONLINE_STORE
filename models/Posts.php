<?php

class Post {

    private $conn;
    private $table = 'base_sku';

    //base-sku properties

    public $idbase_sku;
    public  $base_sku;
    //public $specification;
    public $product_type;
    public $brand;
    public $model; 
    public $form_factor;
    public $processor_type;
    public $created_at;
    public $updated_at;

    //constructor

    public function __construct($db){
        $this->conn =$db;
    }

    //method to display data
     public function read(){

        //create query


        $query = 'SELECT * FROM ' . $this->table . ' ';

        // $query = 'SELECT spec as specification,
        // -- idbase_sku,
        // -- base_sku,
        // -- specification,
        // -- product_type,
        // -- brand,
        // -- model,
        // -- form_factor,
        // -- processor_type,
        // -- created_at,
        // -- update_at,
        // FROM    ' .$this ->table . 'base_sku
       
        // INNER JOIN extended_sku 
        // ON base_sku.base_sku = extended_sku.base_sku
        // ORDER BY created_at DESC
        // ' ;

        /// prepare statement
        $stmt = $this->conn->prepare($query);
         //execute

         $stmt->execute();

         return $stmt;
     }
}