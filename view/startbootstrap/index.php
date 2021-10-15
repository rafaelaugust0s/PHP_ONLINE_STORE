<?php 
    $products = file_get_contents('http://localhost/php_online_store/api/post/read.php');
    $products = json_decode($products);
    


    ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CNB Computers Online store</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- PHP integration-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
        <!--modal-->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel= "stylsheet"   type= "text/css" href= "https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css"> -->
    </head>
    <body>
                        <!-- Navigation-->
                        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="container px-4 px-lg-5 ">
                <a class="navbar-brand " href="#!"> CNB Computers<img src= "
                "></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
             
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Towers</a></li>
                                <li><a class="dropdown-item" href="#!">Desktops</a></li>
                                <li><a class="dropdown-item" href="#!">Combos</a></li>
                                <li><a class="dropdown-item" href="#!">Monitors</a></li>

                            </ul>
                        </li>
                    </ul>
                    <!-- <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form> -->
                </div>
        </nav>

        <!-- Header-->
        <header class="py- expand">
   
            <div class="container px-4 px-lg-5 my-5" >
            <div id="carouselExampleCaptions" class="carousel slide   " data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="assets/green.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h1 class= "display-4 fw-bolder">We are a green company</h5>
            <p>Some representative placeholder content for the first slide.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="assets/yellow.png" class="d-block w-100 " alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h1 class="display-4 fw-bolder">North America's leading provider Number of refurbisher IT equipment</h5>
            <p>Some representative placeholder content for the second slide.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="assets/blue.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h1 class= "display-4 fw-bolder">Best price. Best Quality and Best Service in the Market</h5>
            <p>Some representative placeholder content for the third slide.</p>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

        <!-- Search bar-->
   
            <nav class=" navbar-expand-lg">
                        <div class="container-fluid  ">
                            <form class="d-flex "  method= "get">
                            <input class="form-control input-lg p-4 m-2  " name = "search" type="search" placeholder="What are you looking for?" aria-label="Search" required>
                            <button class="btn btn-outline-secondary btn-lg m-2 " type="submit" value="submit-search">Search</button>
                            </form>
                            </div> 
                         </div>   
                
             </nav>
             <?php


             
             if(isset($_GET['search'])){

                require ('C:\xampp\htdocs\PHP_online_store\api\post\search.php');

                    // if (count(array($result)) > 0 ) {
                        
                    //    foreach ($result as $r){
                    //     echo $r -> brand;

                    //    }
                    // }else{
                    //     echo "Results found";
                    // }

            }


    
            
             

             ?>
           


                <!-- <div class="text-center text-black">
                    <h1 class="display-4 fw-bolder"> ONLINE STORE</h1>
                    <p class="lead fw-normal text-white-50 mb-0">We are a green company</p>
                </div>
            </div>
        </header> -->


        <!-- Section-->
        <section class="py-">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                        <?php foreach($products-> data as $product):
                                                //echo $product;

                            ?>
                    
                    <div class="col mb-5 ">
                        <div class="card h-100 p-2 ">
                            <!-- Product image-->
                 
                            <a href="#" data-bs-toggle="modal" data-bs-target="#reg-modal" id= "<?php echo json_encode($products) ;?> " onClick="showModal(this);" >
                             <img  class="card-img-top   " src="<?php echo $product-> front_picture_icons ; ?>" alt="..."> </a>
                            
                            <!-- Product details-->
                            <div class="card-body ">
                                <div class="text-left">
                                    <!-- Product brand-->
                                    <h5 class="fw-bolder"  > <?php echo $product-> brand ." ". $product-> model  ; ?>  </h5>
                                    <h5 class="fw-normal"> <?php echo $product -> form_factor ; ?>  </h5>
                                    <h5 class="fw-normal"> <?php echo $product-> processor_type ; ?>  </h5>
                                    <p class="fw-normal"> <?php echo $product-> specification ; ?>  </p> 

                                    <!-- Product price-->
                                 <h5 class="fw-normal"> $ <?php  echo $product -> cost  ; ?>  </h5>

                                </div>
                              </div>
                                 <!-- Product actions-->
                                 <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-outline-secondary mt-auto" data-bs-toggle="modal" 
                                 
                                idbase_sku="<?php echo $product->idbase_sku?>"
                                base_sku="<?php echo $product->base_sku?>"
                                model="<?php echo $product-> model?>"
                                brand="<?php echo $product-> brand?>"
                                processor_type="<?php echo $product-> processor_type?>"
                                front_picture_icons = "<?php echo $product-> front_picture_icons  ?>"

                                data-bs-target="#reg-modal"  id= "<?php echo $product-> brand ." ". $product->model." ". $product->processor_type ; ?> " onclick= "showModal(this);">More Details</a></div>
                               </div>
                                


    <!--Modal-->
                          
    <div class="modal" id= "reg-modal" tabindex="-1">
                             
                             <div class="modal-dialog">
                               
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title fw-bolder" id="brand" > </h5>


                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                  <div class="modal-body">
                                     

                                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                <img id= " picture1" src="<?php echo $product-> front_picture_icons  ; ?>" class="d-block w-100" alt="...">
                                                </div>
                                                        <div class="carousel-item">
                                                        <img src="<?php echo $product-> front_picture  ; ?>" class="d-block w-100" alt="...">
                                                        </div>
                                                                    <div class="carousel-item">
                                                                    <img src="<?php echo $product-> back_picture  ; ?>" class="d-block w-100" alt="...">
                                                                    </div>
                                                        <div class="carousel-item">
                                                        <img src="<?php echo $product-> left_picture  ; ?>" class="d-block w-100" alt="...">
                                                        </div>
                                                <div class="carousel-item">
                                                <img src="<?php echo $product-> right_picture  ; ?>" class="d-block w-100" alt="...">
                                                </div>
                                        <div class="carousel-item">
                                            <img src="<?php echo $product-> back_and_front_picture  ; ?>" class="d-block w-100" alt="..."> 
                                            </div>
                                            
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                        </div>

                                     </div>
                                      <h5 class= "fw-bolder p-3"> Key Features</h5>
                                      <ul class = " text-left fw-normal"> 
                                            <li id="processor"> Processor <?php echo  $product-> processor_type .", ". $product-> generation ." generation, speed ". $product->processor_speed .", socket ". $product->processor_socket ; ?>  </li>
                                            <li> Memory <?php echo $product->memory .", speed ". $product->memory_speed .", ". $product->memory_type   ; ?> </li>
                                            <li> Storage <?php echo $product->storage_type ."  ". $product->storage      ; ?></li>
                                            <li> Operating System <?php echo $product->operating_system ;?> </li>
                                            <li> Ports <?php echo "USB 3.0: ". $product->usb_3_0 ."/ USB 2.0: ".$product->usb_2_0."/ <br>  VGA: ".$product->vga_ports ."/ DISPLAY: ". $product-> display_ports ."/ DVI: ". $product-> dvi_port ."/ <br> HDMI: ". $product-> hdmi_ports ;?> </li>
                                            <li> Graphics <?php echo $product->graphics_processors ;  ?></li>
                                            <li> Optical Drive <?php echo $product->optical_drive_type ;  ?> </li>
                                            <li> Dimensions<?php echo " (W) ". $product -> width . " (D) ". $product->depth . " (H) ". $product->height ; ?> </li> 
                                            <li> Weight <?php echo  $product->weight; ?></li>
                                            <li> Warranty <?php echo  $product->warranty ;?></li>


                                        </ul>

                                    
                                    <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                    
                                    </div>

                                    </div>
                                    
                                </div>
                                
                            </div>
                            <!-- end of modal -->
                         </div>
    
                    </div>

                    

                    <?php endforeach; ?>


                 <script>

            
                     function showModal(product){

                                        
                            console.log(product);
                             $("#brand").text(product.id);
                             $("#brand").text(product.id);
                             $("#processor").text(product.id.processor_type);




                       

                        // console.log(product);
                        //  console.log(products.data.map(function(items){
                        //      return  items.brand
                               //$("#brand").text(JSON.stringify(product));
                              // $("#model").text(product.model);
                                //$("#processor").text(product.id)

                        //  }));

                         
                        //  $("#brand").text(product.brand);
                      

                        //   for(let i = 0; len=items.length, i < len; i++){

                        //       $ ("#brand").text(items[i].brand);
                        //   }
                         
                            // $("#brand").text(products.data[i]);    
                            //  $("#brand").text(products.data[0].brand).text(products.data[0].idbase_sku);


                            //  console.log(products)
                        //     console.log(idbase_sku);
                        //    // $("#brand").text($("#brand"+id).text());
                        //     $("#brand").text($("#brand" + idbase_sku).text());

                            
                     }

                 </script>                   
                    
        </section>

          <!-- pagination -->


          <?php
            // include_once ('C:\xampp\htdocs\PHP_online_store\api\post\read.php');
            
            // for ($page = 1 ; $page<=$num_of_pages; $page++){

            //       echo '<a href= "index.php?page=' . $page .  ' "> ' . $page . '</a>';
            //      }

          ?>
                            <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                        <a class="page-link"  href=" "  tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="">Next</a>
                        </li>
                    </ul>
                    </nav>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; CNB Computers Catalogue 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!--PHP INTEGRATION -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
       <!-- modal -->                         
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src= "https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script> -->
  </body>
</html>

