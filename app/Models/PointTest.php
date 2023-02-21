<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Model;

class PointTest extends Model
{
    protected $table="points";


    protected $fillable=[
        'direction',
        'ubication',
        'image',
        'lat',
        'lon',
        'publicity',
        'ubication_id',
        'description',
        'artist_id',
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
