@extends("menu")

@section("titulo","Leoncio Prado - Editar Producto")

@section("contenido")


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


<div class="container mt-3">
        <header>
            <h1>Editar producto</h1>
        </header>
        <nav>
            <a href="{{route('productos.index')}}" class="btn btn-outline-info btn-sm"><i class="far fa-hand-point-left">Regresar</i></a>
        </nav>
        <section>
        <form method="post" action="{{route('productos.update', $productos)}}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="nombre_producto" class="form-label">Nombre del producto</label>
                <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" value="{{old('nombre_producto',$productos->nombre_producto)}}">
            </div>
            @if ($errors->first('nombre_producto'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{$errors->first('nombre_producto')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="mb-3">
                <label for="costo" class="form-label">Costo</label>
                <input type="text" class="form-control" id="costo" name="costo" value="{{old('costo',$productos->costo)}}">
            </div>
            @if ($errors->first('costo'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{$errors->first('costo')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif


            <!-- <div class="mb-3">
                <label for="imagen" class="form-label">Seleccionar nueva imagen (opcional)</label>
                <input type="file" class="form-control-file" id="imagen" name="imagen" value="{{old('imagen',$productos->imagen)}}">
                <div>
                    <img src="{{ asset($productos->imagen) }}" alt="Imagen actual" width="200px">
                </div>
                
            </div> -->
            <div class="mb-3">
                <label for="imagen" class="form-label">Seleccionar nueva imagen (opcional)</label>
                <input type="file" class="form-control-file" id="imagen" name="imagen">
            </div>
            @if ($errors->first('imagen'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{$errors->first('imagen')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{old('descripcion',$productos->descripcion)}}">
            </div>
            @if ($errors->first('descripcion'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{$errors->first('descripcion')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif



            <button type="submit" class="btn btn-primary">Registrar producto</button>
        </form>
        </section>
    </div>

    </body>

</html>

@endsection