<?php
include("config/config.php");


?>


<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">
<head>
    <title>ACDyCCC</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.3.3 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/logoACDyCCC.png" />
</head>
<body>
<header>
    <!-- foto superior -->
    <div id="encabezado">
    <img src="img/tormenta.jpg" id="imgsup" alt="Imagen de encabezado">
    <img id="logo" src="img/logoACDyCCC.png" alt="">
    <h1 id="acdyccc">Asociación de Caza Deportiva y Conservacionismo Curuzú Cuatiá</h1>
    </div>
    <!-- La navbar -->

    

    <div class="menu">
      <nav class="navbar navbar-expand-lg navbar-light " id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top"><img src="img/iconologo.png" width="60" height="60" alt=""></a>
                        <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse h5" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Nosotros</a></li>
                    <li class="nav-item"><a class="activo nav-link" href="novedades.php">Novedades</a></li>
                    <li class="nav-item"><a class="nav-link" href="normativa.php">Normativa</a></li>
                    <li class="nav-item"><a class="nav-link" href="socios.php">Socios</a></li>
                    <li class="nav-item"><a class="nav-link" href="tienda.php">Tienda</a></li>
                </ul>
            </div>
        </div>
    </nav>
  </div>





    
        <div class="card card-body mt-3 mx-5">
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="username">Nombre de Usuario</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Iniciar Sesión</button>
            </form>
        </div>
    



<!-- footer -->
<div class="py-4 shadow-sm"></div>

    <footer class="footer bg-dark text-light">
    <div class="footer-card container-fluid">
        <div class="row justify-content-center">
            <!-- contacto -->
            <div class="col-md-4">
                <section id="contacto" class="mt-5">
                    <img id= "logoFooter" src="img/logoACDyCCC.png" alt="Logo ACDyCCC" width="100" height="100">
                    <h2 class="text-center">Contacto</h2>
                    <p class="text">Ponte en contacto con nosotros.</p>
                    <form>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Ingrese su email">
                        </div>
                        <div class="form-group">
                            <label for="mensaje">Mensaje</label>
                            <textarea class="form-control" id="mensaje" rows="3" placeholder="Escriba su mensaje"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Enviar Mensaje</button>
                    </form>
                </section>
            </div>

            <!-- Socios -->
           <div id="footer" class="col-md-4 mt-5 text-center">
    <h5>Hazte Socio</h5>
    <p>Haz <a href="socios.php">click aquí</a> para más información.</p>
    

    <h5 class="mt-5">Redes Sociales</h5>
    <ul class="list-inline mx-4">
        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
    </ul>
</div>

            <!-- noticias -->
            <div id="footer" class="col-md-4 mt-5 px-4 text-center">
                <h5>Noticias Recientes</h5>
                <ul class="list-unstyled">
                    <li class="mb-3"><a href="#">Título de la noticia 1</a></li>
                    <li class="mb-3"><a href="#">Título de la noticia 2</a></li>
                    <li class="mb-3"><a href="#">Título de la noticia 3</a></li>
                    
                </ul>
            </div>
        </div>

       
        <div class="pb-4 container text-center">
            <span class="text-muted pb-4">© 2024 LaEsquinaTeam. Todos los derechos reservados.</span>
        </div>
    </div>
</footer>


<!-- Bootstrap JavaScript Libraries -->
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/script.js"></script>
 
</body>
</body>
</html>
