@extends("menu")

@section("titulo","Leoncio Prado - Ver Producto")

@section("contenido")

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<div class="container mt-3">
        <header>
            <h1>Detalles de la producto {{$productos->nombre_producto}}</h1>
        </header>
        <nav><a href="{{route('productos.index')}}" class="btn btn-outline-info btn-sm"><i class="far fa-hand-point-left">Regresar</i></a></nav>
        <section>
            <div class="alert alert-success" role="alert">
                {{$productos->descripcion}}              
            </div>

            <img src="{{ asset($productos->imagen) }}" alt="Imagen del producto" style="width: 200px;">

            
        </section>
        
    </div>

    </body>

</html>

@endsection