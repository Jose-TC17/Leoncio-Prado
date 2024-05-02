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
    <link rel="stylesheet" href="{{ asset('/css/register.css') }}">    
    <!-- fontaweasome -->
    <script src="https://kit.fontawesome.com/ec6ef5217c.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <a href="{{route('login')}}">Regresar</a>

    </header>
    <section>
        
        <form action="{{route('validar-registro')}}" method="POST">
            @csrf
            <div class="container-login">
                <div class="logo-nav">
                    <a href="">
                        <img src="images/logoB.png" alt="logo LP">
                    </a>
                </div>
                <div class="container-login-fields">
                    <p>Nombre:</p>
                    <input type="text" name="name" placeHolder="" id="input-type-name" require>
                    <p>Crear usuario:</p>
                    <input type="email" name="email" placeHolder="example@gmail.com" id="input-type-email" require autocomplete="disable">
                    <p>Crear contraseña:</p>
                    <input type="password" name="password" placeHolder="********" id="input-type-password" require>
                </div>
                <div class="container-login-button">
                    <input type="submit" name="btnIniciar" value="Crear Usuario" id="btn-login-btton">
                </div>
            </div>
        </form>
    </section>
</body>
</html>
