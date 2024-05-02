<?php



use App\Http\Controllers\ProductosController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('INICIO');
});

Route::get('/noticias', function () {
    return view('noticias');
});

Route::get('/academias', function () {
    return view('ACADEMIAS');
});

Route::get('/actividades', function () {
    return view('ACTIVIDADES');
});

Route::get('/tienda', function () {
    return view('TIENDA');
});

// productos

Route::get('/productos',[ProductosController::class, 'index'])->name('productos.index');
Route::get('/productos/create',[ProductosController::class, 'create'])->name('productos.create');
Route::get('/productos/{productos}/editar',[ProductosController::class,'edit'])->name('productos.edit');
Route::put('/productos/{productos}',[ProductosController::class,'update'])->name('productos.update');
Route::post('/productos',[ProductosController::class,'store'])->name('productos.store');
Route::get('/productos/{id}',[ProductosController::class,'show'])->name('productos.show');
Route::delete('/productos/{productos}',[ProductosController::class,'destroy'])->name('productos.destroy');

// administrador

Route::view('/login', "login")->name('login');
Route::view('/registro', "register")->name('registro');
Route::view('/admin', "administracion")->middleware('auth')->name('admin');

route::post('/inicio-sesion', [LoginController::class, 'login'])->name('inicio-sesion');
route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');
route::get('/logout', [LoginController::class, 'logout'])->name('logout');




