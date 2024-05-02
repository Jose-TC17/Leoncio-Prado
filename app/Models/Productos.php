<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = "tb_productos";

    protected $fillable = ["nombre_producto" , "costo","imagen","descripcion"];
    
    
    //use HasFactory;
}
