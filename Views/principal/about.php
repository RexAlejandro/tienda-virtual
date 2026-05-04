<?php include_once 'Views/template-principal/header.php'; ?>

    <section class="bg-success py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1>Sobre Nosotros</h1>
                    <p>
                    En GLR proporcionamos un espacio para la venta no solo enfocada en una consola como en páginas oficiales, ni limitada 
                    a solo consolas recientes sino ofrecer un gran abanico de productos por medio de nuestra sección de categorías y tienda.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo BASE_URL .'assets/img/about-hero.svg';?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Close Banner -->

    <!-- Start Section -->
    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Nuestros servicios</h1>
                <p>
                    Contamos con un grán catálogo de videojuegos y nos comprometémos a dar atencion al cliente las 24 horas. Contamos con un servicio de entrega
                    y con sistema de devolución por si en algún momento se arepiente de su compra.
                </p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12 col-lg-4 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-truck fa-lg"></i></div>
                    <h2 class="h5 mt-4 text-center">Servicio de entrega</h2>
                </div>
            </div>

            <div class="col-md-12 col-lg-4 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fas fa-exchange-alt"></i></div>
                    <h2 class="h5 mt-4 text-center">Envios y Devoluciones</h2>
                </div>
            </div>

            <div class="col-md-12 col-lg-4 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-user"></i></div>
                    <h2 class="h5 mt-4 text-center">24 Horas de Servicio</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->

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