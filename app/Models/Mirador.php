<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mirador extends Model
{
    use HasFactory;

    protected $table='miapp_mira';

    protected $perPage = 10;

    protected $fillable = [
        'id',
        'cerro',
        'direccion',
        'artista',
        'path_imagen',
        'descripcion',
        'instagram',
        'lat',
        'long',
        'publicidad'

    ];

}
