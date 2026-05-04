<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title"><i class="fas fa-cart-arrow-down"></i> Carrito</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered tabla-striped table-hover align-middle" id="tableListaCarrito">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Producto</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>SubTotal</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-around mb-3">
                <h3 id="totalGeneral"></h3>
                <?php if (!empty($_SESSION['correoCliente'])){ ?>
                    <a class="btn btn-outline-primary" href="<?php echo BASE_URL . 'clientes'; ?>">COMPRAR</a>
                <?php } else { ?>
                    <a class="btn btn-outline-primary" href="#" onclick="abrirModalLogin();">Login</a>
                    
                <?php }?>
            </div>
        </div>
    </div>
</div>

<!--LOGIN DIRECTO-->

<div id="modalLogin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="titleLogin">Iniciar Sesión</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body m-3">
                <form method="get" action="">
                    <div class="text-center">
                        <img class="img-thumbnail rounded-circle" src="<?php echo BASE_URL . 'assets/img/logo.jpeg' ?>" alt="LOGO-GLR" width="200">
                    </div>
                    <div class="row">
                        <div class="col-md-12" id="frmLogin">
                            <div class="form-group mb-3">
                                <label for="correoLogin"><i class="fas fa-envelope"></i> Correo</label>
                                <input id="correoLogin" class="form-control" type="text" name="correoLogin" placeholder="Correo">
                            </div>
                            <div class="form-group mb-3">
                                <label for="claveLogin"><i class="fas fa-key"></i> Contraseña</label>
                                <input id="claveLogin" class="form-control" type="password" name="claveLogin" placeholder="Contraseña">
                                <div class="float-end">
                                    <button class="btn btn-success btn-lg" type="button" id="login">Iniciar Sesión</button>
                                </div>
                            </div>
                            <a href="#" id="btnRegister" style="text-decoration-color: green; color: green;">¿No tienes cuenta?</a>

                        </div>
                        <!-- FORM DE REGISTRO -->
                        <div class="col-md-12 d-none" id="frmRegister">
                            <div class="form-group mb-3">
                                <label for="nombreRegistro"><i class="fas fa-list"></i> Nombre de usuario</label>
                                <input id="nombreRegistro" class="form-control" type="text" name="nombreRegistro" placeholder="Nombre Completo">
                            </div>
                            <div class="form-group mb-3">
                                <label for="correoRegistro"><i class="fas fa-envelope"></i> Correo</label>
                                <input id="correoRegistro" class="form-control" type="text" name="correoRegistro" placeholder="Correo">
                            </div>
                            <div class="form-group mb-3">
                                <label for="claveRegistro"><i class="fas fa-key"></i> Contraseña</label>
                                <input id="claveRegistro" class="form-control" type="password" name="claveRegistro" placeholder="Contraseña">
                            </div>
                            <a href="#" id="btnLogin" style="text-decoration-color: green; color: green;">¿Ya tienes cuenta?</a>
                            <div class="float-end">
                                <button class="btn btn-danger btn-lg" type="button" id="registrarse">Registrarse</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Start Footer -->
<footer class="bg-dark" id="tempaltemo_footer">
    <div class="container">
        <div class="row">

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">GLR</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li>
                        <i class="fa fa-phone fa-fw"></i>
                        <a class="text-decoration-none" href="+52 1 81 1177 6506">+52 1 81 1177 6506</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope fa-fw"></i>
                        <a class="text-decoration-none" href="999999999.ravm@gmail.com">999999999.ravm@gmail.com</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Sagas</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="#">The Legend of Zelda</a></li>
                    <li><a class="text-decoration-none" href="#">Pokemon</a></li>
                    <li><a class="text-decoration-none" href="#">Fire Emblem</a></li>
                    <li><a class="text-decoration-none" href="#">Dragon Quest</a></li>
                    <li><a class="text-decoration-none" href="#">Final Fantasy</a></li>
                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Más Información</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="<?php echo BASE_URL; ?>">Inicio</a></li>
                    <li><a class="text-decoration-none" href="<?php echo BASE_URL . 'principal/about'; ?>">Sobre Nosotros</a></li>
                    <li><a class="text-decoration-none" href="<?php echo BASE_URL . 'principal/contact' ?>">Contacto</a></li>
                </ul>
            </div>

        </div>

        <div class="row text-light mb-4">
            <div class="col-12 mb-3">
                <div class="w-100 my-3 border-top border-light"></div>
            </div>
            <div class="col-auto me-auto">
                <ul class="list-inline text-left footer-icons">
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://www.facebook.com/rexalejandro.villanuevamoreno/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/RexAlejandro00"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="w-100 bg-black py-3">
        <div class="container">
            <div class="row pt-2">
                <div class="col-12">
                    <p class="text-left text-light">
                        Universidad Autónoma de Nuevo Leon - Laboratorio de Programación Web. <b>Diseño creado por Rene Alejandro Villanueva Moreno</b>
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- End Footer -->

<!-- Start Script -->
<script src="<?php echo BASE_URL; ?>assets/js/jquery-1.11.0.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/templatemo.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/custom.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/cdn.jsdelivr.net_npm_sweetalert2@11.7.31_dist_sweetalert2.all.min.js"></script>
<script>
    const base_url = '<?php echo BASE_URL ?>';
</script>
<script src="<?php echo BASE_URL; ?>assets/js/carrito.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/login.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/es-ES.js"></script>
<!-- End Script -->