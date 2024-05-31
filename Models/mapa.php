<?php
 $mysqli = mysqli_connect("localhost", "root", "", "transmetro_bd");
 session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transmetro Guatemala</title>
    
    <link rel="stylesheet" href="../Views/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

    <link rel="stylesheet" href="../Views/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../Views/css/animate.css">

    <link rel="stylesheet" href="../Views/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../Views/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../Views/css/magnific-popup.css">

    <link rel="stylesheet" href="../Views/css/aos.css">

    <link rel="stylesheet" href="../Views/css/ionicons.min.css">

    <link rel="stylesheet" href="../Views/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../Views/css/jquery.timepicker.css">


    <link rel="stylesheet" href="../Views/css/flaticon.css">
    <link rel="stylesheet" href="../Views/css/icomoon.css">
    <link rel="stylesheet" href="../Views/css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<nav>
      
      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">Trasmetro 2024 </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="../index.php" class="nav-link">Inicio</a></li>
                   
                    <li class="nav-item"><a href="estacion.php" class="nav-link">Estaciones</a></li>
                    <li class="nav-item"><a href="piloto.php" class="nav-link">Pilotos</a></li>
                    <li class="nav-item"><a href="rutas.php" class="nav-link">Rutas</a></li>
                    <li class="nav-item"><a href="mapa.php" class="nav-link">Mapa</a></li>
                    
                    <li class="nav-item"><a  type="Button" href="Controller/estacion1.php" class="nav-link btn btn-primary">Iniciar Sesion</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <img src="../../Views/images/logo.png" class="logo">
    </nav>
     
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="img-container"> <!-- Block parent element -->
    <div align="center"><img src="https://www.guatemala.com/fotos/2018/07/Rutas-del-Transmetro.jpg" alt="John Doe"></div>
    </div>
    <div class="content">
        <h1>Transmetro</h1>
    </div>  
    
<body>


</body>
</html>