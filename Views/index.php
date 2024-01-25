<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Iniciar Sesión</title>
        <!-- Bootstrap CSS - SB Admin v7.0.7 -->
        <link href="<?php echo base_url; ?>Assets/css/styles.css" rel="stylesheet" />
        <!-- Font Awesome 6.3.0 -->
        <script src="<?php echo base_url; ?>Assets/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Iniciar Sesión</h3></div>
                                    <div class="card-body">
                                        <form>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">
                                                    <i class="fas fa-user"></i>
                                                </span>
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputEmail" type="text" placeholder="Ingrese Usuario" />
                                                    <label for="inputEmail">Usuario</label>
                                                </div>
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">
                                                    <i class="fas fa-key"></i>
                                                </span>
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputPassword" type="password" placeholder="Ingrese Contraseña" />
                                                    <label for="inputPassword">Contraseña</label>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="btn btn-primary" href="index.html">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; 
                                <a href="#" target="_blank" rel="noopener noreferrer">Visite mi página web</a> 
                                <?php echo date("Y"); ?> 
                            </div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <!-- Bootstrap v5.2.3 -->
        <script src="<?php echo base_url; ?>Assets/js/bootstrap.bundle.min.js"></script>
        <!-- Bootstrap - SB Admin v7.0.7 -->
        <script src="<?php echo base_url; ?>Assets/js/scripts.js"></script>
    </body>
</html>
