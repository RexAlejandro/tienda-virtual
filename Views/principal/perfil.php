<?php include_once 'Views/template-principal/header.php'; ?>

<!-- Start Content -->
<div class="container py-5">
    <?php if ($data['verificar']['verify'] == 1) { ?>
        <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Comprar</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pendientes-tab" data-bs-toggle="tab" data-bs-target="#pendientes-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Pendientes</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="completados-tab" data-bs-toggle="tab" data-bs-target="#completados-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Completados</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered tabla-striped table-hover align-middle" id="tableListaProductos">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Producto</th>
                                                <th>Precio</th>
                                                <th>Cantidad</th>
                                                <th>SubTotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <h3 id="totalProducto">

                            </h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow-lg">
                            <div class="card-body text-center">
                                <img class="img-thumbnail rounded-circle" src="<?php echo BASE_URL . 'assets/img/icono-usuario.png' ?>" alt="" width="150">
                                <hr>
                                <p><?php echo $_SESSION['nombreCliente']; ?></p>
                                <p><i class="fas fa-envelope"></i><?php echo $_SESSION['correoCliente']; ?></p>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                PayPal
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <!--paypal-->
                                                <div id="smart-button-container">
                                                    <div style="text-align: center;">
                                                        <div id="paypal-button-container"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Otro Metodo
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pendientes-tab-pane" role="tabpanel" aria-labelledby="pendientes-tab" tabindex="0">
                <div class="col-12">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped tabe-hover" id="tblPendientes" style="width: 100%">
                                    <thead class="bg-dark text-white">
                                        <th>#</th>
                                        <th>Monto</th>
                                        <th>Fecha</th>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="completados-tab-pane" role="tabpanel" aria-labelledby="completados-tab" tabindex="0">...</div>
        </div>
    <?php } else { ?>
        <div class="alert alert-danger text-center" role="alert">
            <div class="h3">
                Verifica tu correo electronico
            </div>
        </div>
    <?php } ?>
</div>
<!-- End Content -->

<?php include_once 'Views/template-principal/footer.php'; ?>

<script src="<?php echo BASE_URL . 'assets/DataTables/datatables.min.js'; ?>"></script>

<script src="<?php echo BASE_URL; ?>assets/js/es-ES.js"></script>

<script src="<?php echo BASE_URL . 'assets/js/clientes.js'; ?>"></script>
</body>

</html>