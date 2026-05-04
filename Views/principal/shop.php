<?php include_once 'Views/template-principal/header.php';?>

    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">
            <!--MENU LATERAL IZQUIERDO-->
            <!-- <div class="col-lg-3">
                <h1 class="h2 pb-4">Categories</h1>
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Gender
                            <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul class="collapse show list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Men</a></li>
                            <li><a class="text-decoration-none" href="#">Women</a></li>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Sale
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Sport</a></li>
                            <li><a class="text-decoration-none" href="#">Luxury</a></li>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Product
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseThree" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Bag</a></li>
                            <li><a class="text-decoration-none" href="#">Sweather</a></li>
                            <li><a class="text-decoration-none" href="#">Sunglass</a></li>
                        </ul>
                    </li>
                </ul>
            </div> -->

            <!--
                <div class="col-lg-9">
            -->
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-inline shop-top-menu pb-3 pt-1">
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">Productos</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($data['productos'] as $producto){?>
                        <div class="col-md-4">
                            <div class="card mb-4 product-wap rounded-0">
                                <div class="card rounded-0">
                                    <img class="card-img rounded-0 img-fluid" src="<?php echo $producto['imagen']; ?>">
                                    <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                        <ul class="list-unstyled">
                                            <li><a class="btn btn-success text-white btnAddDeseo" href="#" prod ="<?php echo $producto['id']; ?>"><i class="fas fa-heart"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="<?php echo BASE_URL . 'principal/detail/' . $producto['id'];?>"><i class="fas fa-eye"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2 btnAddcarrito" href="#" prod ="<?php echo $producto['id']; ?>"><i class="fas fa-cart-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id'];?>" class="h3 text-decoration-none"><?php echo $producto['nombre']; ?></a>
                                    <ul class="list-unstyled d-flex justify-content-center mb-1">
                                        <!-- <li>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-muted fa fa-star"></i>
                                            <i class="text-muted fa fa-star"></i>
                                        </li> -->
                                    </ul>
                                    <p class="text-center mb-0"><?php echo MONEDA . ' ' .$producto['precio'];?></p>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
                <div div="row">
                    <ul class="pagination pagination-lg justify-content-end">
                        <?php
                        $anterior = $data['pagina'] - 1;
                        $siguiente = $data['pagina'] + 1;
                        $url = BASE_URL . 'principal/shop/';
                        if($data['pagina'] > 1)
                        {
                            echo '  <li class="page-item">
                                        <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-white" href="' . $url . $anterior.'" 
                                        >Anterior</a>
                                    </li>';
                        }
                        if($data['total'] >= $siguiente)
                        {
                            echo '  <li class="page-item">
                                        <a class="page-link active rounded-0 shadow-sm border-top-0 border-left-0 text-white" 
                                        href="'. $url . $siguiente.'">Siguiente</a>
                                    </li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->

    <!-- Start Brands -->
    <section class="bg-light py-5">
        <div class="container my-4">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Sagas</h1>
                    <p>
                        Principales IP's de Videojuegos 
                    </p>
                </div>
                <div class="col-lg-9 m-auto tempaltemo-carousel">
                    <div class="row d-flex flex-row">
                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="prev">
                                <i class="text-light fas fa-chevron-left"></i>
                            </a>
                        </div>
                        <!--End Controls-->

                        <!--Carousel Wrapper-->
                        <div class="col">
                            <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="templatemo-slide-brand" data-bs-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">

                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="<?php echo BASE_URL .'assets/img/marca1.svg';?>" alt=""></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="<?php echo BASE_URL. 'assets/img/marca2.png';?>" alt=""></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="<?php echo BASE_URL . 'assets/img/marca3.svg';?>" alt=""></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="<?php echo BASE_URL . 'assets/img/marca4.png';?>" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="<?php echo BASE_URL. 'assets/img/marca5.png';?>" alt=""></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="<?php echo BASE_URL . 'assets/img/marca6.webp';?>" alt=""></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="<?php echo BASE_URL . 'assets/img/marca7.webp';?>" alt=""></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="<?php echo BASE_URL . 'assets/img/marca8.png';?>" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Second slide-->

                                </div>
                                <!--End Slides-->
                            </div>
                        </div>
                        <!--End Carousel Wrapper-->

                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="next">
                                <i class="text-light fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Brands-->


    <?php include_once 'Views/template-principal/footer.php'; ?>
</body>

</html>