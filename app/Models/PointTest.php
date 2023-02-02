<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Model;

class PointTest extends Model
{
    protected $table="point_tests";


    protected $fillable=[
        'direction',
        'image',
        'lat',
        'long',
        'publicity',
        'ubication_id',
        'description',
        'artist_id'
        ];

}
