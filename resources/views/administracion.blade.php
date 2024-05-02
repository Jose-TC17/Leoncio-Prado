<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <!-- letters -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;800&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- css connection -->
    <link rel="stylesheet" href="{{ asset('/css/inicioLogin.css') }}">    
    <!-- fontaweasome -->
    <script src="https://kit.fontawesome.com/ec6ef5217c.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav>
            <div class="logo-nav">
                <a href="">
                    <img src="images/logoB.png" alt="logo LP">
                </a>
            </div>
            <div class="links-nav">
                <a href="" class="inicio">INICIO</a>
                <a href="">NOTICIAS</a>
                <a href="">ACADEMIAS</a>
                <a href="">ACTIVIDADES</a>
                <a href="">TIENDA</a>
                <a href="">PRODUCTO</a>
            </div>
            <div class="settings-nav">
                <ul>
                    <li class="btn-settings">
                        <i class="fa-solid fa-gear"></i>
                        <ul class="list-settings">
                            <li>
                                <a href="">Cuentas</a>
                            </li>
                            <li>
                                <a href="/registro">Crear Cuenta</a>
                            </li>
                            <li>
                                <a href="">Cambiar contraseña</a>
                            <li>
                                <a href="{{route('logout')}}">Cerrar sesión</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <section>
        <div class="container-slider">
            <h1>Insertar Imagen al slider</h1>
            <div class="inputs-img">
                <div class="img-slider">
                    <label>Imagen 1:</label>
                    <div class="container-inputs">
                        <input type="file" name="" id="file-img">
                        <input type="submit" value="Seleccionar" id="btn-submit">
                    </div>
                </div>
                <div class="img-slider">
                    <label>Imagen 2:</label>
                    <div class="container-inputs">
                        <input type="file" name="" id="file-img">
                        <input type="submit" value="Seleccionar" id="btn-submit">
                    </div>
                </div>
                <div class="img-slider">
                    <label >Imagen 3:</label>
                    <div class="container-inputs">
                        <input type="file" name="" id="file-img">
                        <input type="submit" value="Seleccionar" id="btn-submit">
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
