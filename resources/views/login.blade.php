<?php
    session_start();
    session_destroy();
?>

@extends("menu")

@section("titulo","Leoncio Prado - admin")

@section("contenido")


<meta name="keywords" content="Administrador">


<link rel="stylesheet" href="{{ asset('/css/login.css') }}" media="screen">

    <section>
        <div class="container">
            <div class="container-login">
                <a href="/"><img src="images/LogoB.png"></a>
                <form action="{{route('inicio-sesion')}}" method="POST">
                    @csrf
                    <div class="container-login-fields">
                        <p>Usuario:</p>
                        <input type="email" name="email" placeHolder="example@gmail.com" id="input-type-email">
                        <p>Contraseña:</p>
                        <input type="password" name="password" placeHolder="********" id="input-type-password">
                    </div>
                    <div class="container-login-showPassword">
                        <input type="checkbox" id="chbx-showPassword" onclick="mostrarPassword()">
                        <p>Mostrar Contraseña</p>
                    </div>
                    <div class="container-login-button">
                        <input type="submit" name="btnIniciar" value="Ingresar" id="btn-login-btton">
                    </div>
                </form>
            </div>
            <div class="messages">
            </div>
        </div>
    </section>
    <script src="/index.js"></script>
</body>
</html>

@endsection