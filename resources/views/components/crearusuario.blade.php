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
            <a style="margin: -30px" class="navbar-brand" href="{{route('index')}}"><img style="width: 20%"
                    src="{{ asset('assets/img/portfolio/Logo_Oficial_Negro.png') }}" alt=""></a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>
    <!-- Masthead-->
    <header style="height: 930px" class="masthead bg-primary text-white text-center">
        <div class="container-fluid">
            <div style="display: flex;
                        justify-content: center;
                        justify-content: space-evenly;
                        margin-top: 20px;"
                class="row">
                <div style="height: 100%" class="container d-flex align-items-center flex-column col-7">
                    <!-- Masthead Avatar Image-->
                    <img style="width: 80%" class="masthead-avatar mb-5"
                        src="{{ asset('assets/img/portfolio/Logo_Oficial_SF.png') }}" alt="..." />
                    <!-- Masthead Heading-->
                    {{-- <h1 class="masthead-heading text-uppercase mb-0">Start Bootstrap</h1> --}}
                    <!-- Icon Divider-->
                    <div style="margin-top: -20px" class="divider-custom divider-light">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                        <div class="divider-custom-line"></div>
                    </div>
                    <!-- Masthead Subheading-->
                    <p class="masthead-subheading font-weight-light mb-0">El mejor lugar para tus vacaciones.</p>
                </div>
                <div style="background-color: beige;
                            margin-right: 100px;
                            color:black;
                            text-align:left; 
                            height: 730px;
                            display: flex;
                            justify-content: center;
                            flex-wrap: wrap;
                            padding:40px;
                            border-radius:30px;
                            margin-top: -50px"
                            
                    class="formulario col-3">
                    <form>
                        <div class="mb-3">
                            <h5 style="text-align: center">REGISTRARSE</h5>
                            <label for="" class="form-label">DNI:</label>
                            <input type="text" class="form-control" id="exampleInputDNI">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="exampleInputNombre">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Apellido:</label>
                            <input type="text" class="form-control" id="exampleInputApellido">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Teléfono:</label>
                            <input type="text" class="form-control" id="exampleInputTelefono">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Correo:</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="abc@example.com">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Contraseña:</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Registrarse</button>
                        <br><br><a href=" {{route('login')}} ">¿Ya tienes una cuenta? <br>Inicia sesión</a>
                    </form>
                </div>
            </div>

        </div>

    </header>

    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; Hotel Sol y Luna 2024</small></div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('/js/scripts.js') }}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
