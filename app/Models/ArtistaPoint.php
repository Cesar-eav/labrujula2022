<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtistaPoint extends Model
{
    use HasFactory;

    protected $table ='artist_point';

    protected $fillable = [
        'id',
        'artist_id',
        'point_id'


    ];

    public function points()
    {
    return $this->belongsTo(Atractivos::class, 'point_id');
    }

    public function artista()
    {
    return $this->belongsTo(Artista::class);
    }

}
