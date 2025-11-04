<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    // Nombre de la tabla explícito (buena práctica cuando es plural)
    protected $table = 'proveedores';

    // Campos que se pueden asignar en masa con create() / update()
    protected $fillable = [
        'nombre',
        'nit',
        'telefono',
        'direccion',
        'correo',
    ];
}
