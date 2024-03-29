<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Model;

class PointTest extends Model
{
    protected $table="points";


    protected $fillable=[
        'id',
        'direction',
        'ubication',
        'artista',
        'artist_id',
        'ubication_id',
        'image',
        'lat',
        'lon',
        'publicity',
        'description',
        'punto_id',
        'type_attractive'
        ];

        public function ubication()
            {
            return $this->belongsTo(Ubication::class, 'ubication_id');
            }

        public function artist()
            {
            return $this->belongsTo(Artista::class, 'artist_id');
            }

}
