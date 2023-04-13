<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atractivos extends Model
{
    use HasFactory;

    protected $table = 'points';

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

        public function artpoint()
            {
            return $this->belongsTo(ArtistaPoint::class, 'point_id');
            }

        public function artists()
            {
            return $this->belongsToMany(Artista::class, 'artist_point', 'point_id','artist_id'); 
            }   
    
}
