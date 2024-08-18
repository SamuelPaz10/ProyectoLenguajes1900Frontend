<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Hotel Sol y Luna</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/Logo_minimalista_sf.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href=" {{ asset('/css/styles_login.css') }} " rel="stylesheet">
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav style="background-color: #eb8e42" class="navbar navbar-expand-lg text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a style="margin: -30px" class="navbar-brand" href="{{ route('index') }}"><img style="width: 20%"
                    src="{{ asset('assets/img/portfolio/Logo_Oficial_Negro.png') }}" alt=""></a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="###">Ver
                            Habitaciones</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#portfolio">Galería</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#about">Acerca de</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#user"><i
                                class="bi bi-person-fill"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Portfolio Section-->
    <section style="margin-top: 100px" class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h4 class="page-section-heading text-center text-uppercase text-secondary mb-0">Crear Habitación</h4>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>

            <form action=" {{ route('guardar.habitacion.admin') }} " method="GET">
                <main class="flex-shrink-0">


                    <div class="container">

                        <div class="row">
                            <div class="col-4">

                            </div>

                            <div style="background-color: rgba(179, 238, 218, 0.63); border-radius:20px; padding:20px"
                                class="col-4">
                                <div class="col-12">
                                    <label for="clave" class="form-label">N° Habitación</label>
                                    <input type="text" class="form-control" id="clave" name="clave">
                                </div>
                                <br>

                                <div class="col-12">
                                    <label for="nombre" class="form-label">Tipo</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1">Suite</option>
                                        <option value="2">Doble</option>
                                        <option value="3">Sencilla</option>
                                    </select>
                                </div>
                                <br>

                                <div class="col-12">
                                    <label for="descripcion" class="form-label">Descripción</label>
                                    <input type="text" class="form-control" id="fecha_nacimiento"
                                        name="fecha_nacimiento">
                                </div>
                                <br>

                                <div class="col-12">
                                    <label for="piso" class="form-label">Piso</label>
                                    <input type="text" class="form-control" id="telefono" name="telefono"
                                        readonly>
                                </div>
                                <br>

                                <div class="col-12">
                                    <label for="precio" class="form-label">Precio</label>
                                    <input type="text" class="form-control" id="correo_electronico"
                                        name="correo_electronico">
                                </div>
                                <br>

                                <div class="col-12">
                                    <label for="estado" class="form-label">Estado</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1">Disponible</option>
                                        <option value="2">Ocupado</option>
                                        <option value="3">En mantenimiento</option>
                                      </select>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-success btn-sm">AGREGAR</button>
                            </div>

                            <div class="col-4">

                            </div>

                        </div>
                        
                    </div>

                </main>
            </form>



        </div>
    </section>


    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Location</h4>
                    <p class="lead mb-0">
                        2215 John Daniel Drive
                        <br />
                        Clark, MO 65243
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Around the Web</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                            class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                            class="fab fa-fw fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                            class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                            class="fab fa-fw fa-dribbble"></i></a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">About Freelancer</h4>
                    <p class="lead mb-0">
                        Freelance is a free to use, MIT licensed Bootstrap theme created by
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                        .
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; Your Website 2023</small></div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('/js/scripts.js') }}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
