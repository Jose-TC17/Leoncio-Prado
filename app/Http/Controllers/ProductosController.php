<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    //Maneja los Datos
    public function index(){
        $productos = Productos::orderBy('nombre_producto', 'asc')->paginate();
        return view('productos.index',compact('productos'));
    }

    public function show($nombre_producto){
        return view(
            'productos.show', ['productos'=> Productos::findOrFail($nombre_producto)]
        );
    }


    public function create(){
        return view(
            'productos.create', ['productos'=> new Productos()]
        );
    }


    public function store(Request $request){
        $arr_campo = request()->validate(
            ['nombre_producto'=> 'required|unique:tb_productos', 
            'costo'=>'required',
            'imagen'=>'required',
            'descripcion'=>'required'], 

            ['nombre_producto.required'=> 'Escribe un producto',
            'nombre_producto.unique' => 'Este producto ya está registrado. Elige otro nombre',
            "costo.required"=> 'Escriba el costo del producto',
            "imagen.required"=> 'Elija una imagen',
            "descripcion.required"=> 'Escriba una breve descripcion para el producto']
        );


        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $destinationPath = 'imagen/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('imagen')->move($destinationPath, $filename);
            if ($uploadSuccess) {
                $arr_campo['imagen'] = $destinationPath . $filename;
            } else {
                return redirect()->back()->with('error', 'No se pudo cargar la imagen.');
            }
        }

        Productos::create($arr_campo);

        return redirect()->route('productos.index');
    }




     public function edit(Productos $productos){
     return view(
        'productos.edit', ['productos'=> $productos]
     );
 }

 public function update(Productos $productos, Request $request)
 {
     $arr_campo = request()->validate(
         [
            'nombre_producto' => 'required|unique:tb_productos,nombre_producto,'.$productos->id,
             'costo' => 'required',
             'descripcion' => 'required'
         ],
         [
             'nombre_producto.required' => 'Escribe un producto',
             'nombre_producto.unique' => 'Este producto ya está registrado. Elige otro nombre',
             'costo.required' => 'Escriba el costo del producto',
             'descripcion.required' => 'Escriba una breve descripcion para el producto'
         ]
     );
 
     if ($request->hasFile('imagen')) {
         $file = $request->file('imagen');
         $destinationPath = 'imagen/';
         $filename = time() . '-' . $file->getClientOriginalName();
         $uploadSuccess = $request->file('imagen')->move($destinationPath, $filename);
         if ($uploadSuccess) {
             $arr_campo['imagen'] = $destinationPath . $filename;
         } else {
             return redirect()->back()->with('error', 'No se pudo cargar la imagen.');
         }
     }
 
     $productos->update($arr_campo);
 
     return redirect()->route('productos.index');
 }
 


     public function destroy(Productos $productos)
         {
             $productos-> delete();
           return redirect()->route('productos.index');

        }
}
