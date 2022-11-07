<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escalera extends Model
{
    use HasFactory;

    protected $table='miapp_escaleras';

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
