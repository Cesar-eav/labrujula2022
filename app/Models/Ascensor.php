<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ascensor extends Model
{
    use HasFactory;

    protected $table='miapp_ascensores';

    protected $perPage = 10;

    public $timestamps = false;


    protected $fillable = [
        'id',
        'nombre',
        'direccion',
        'content'

    ];

}
