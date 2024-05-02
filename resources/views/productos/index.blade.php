
@extends("menu")

@section("titulo","Leoncio Prado - Producto")

@section("contenido")


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
            
<div class="container mt-3">
    <header>
        <h1>Lista de Productos</h1>
    </header>
    <nav>
        <a href="{{route('productos.create')}}" class="btn btn-outline-info btn-sm">
            <i class="fas fa-cart-plus"></i> Registrar
        </a>
    </nav>
    <section>
        @if($productos)
        <div class="table-responsive">
            <table class="table table-striped table-hover mt-5">
                <tr>
                    <th>Producto</th>
                    <th>Costo</th>
                    <th>Imagen</th>
                    <th colspan="3" class="table-active">Acciones</th>
                </tr>
                @foreach ($productos as $arr_productos)
                <tr>
                    <td>{{$arr_productos->nombre_producto}}</td>
                    <td>{{$arr_productos->costo}}</td>
                    <td>
                        <img src="{{asset($arr_productos->imagen)}}" class="img-fluid img-thumbnail" width="100px">
                    </td>
                    <td>
                        <a href="{{route('productos.show',$arr_productos)}}" class="btn btn-outline-info">
                            <i class="far fa-eye"></i> Ver
                        </a>
                    </td>
                    <td>
                        <a href="{{route('productos.edit',$arr_productos)}}" class="btn btn-outline-warning">
                            <i class="far fa-edit"></i> Editar
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('productos.destroy',$arr_productos) }}">
                            @csrf 
                            @method("delete")
                            <button type="submit" class="btn btn-danger">
                                Borrar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        @else
        <div class="alert alert-primary" role="alert">
            No existen registros en la tabla!
        </div>
        @endif
    </section>
</div>

        
   
    </body>

</html>

@endsection