<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    use HasFactory;

    protected $table = 'artistas';


    protected $fillable = [
        'id',
        'name',
        'instagram_address',
        'description',
        'email',
        'mobile',
        'web_direction'
    ];

public function atractivo()
    {
    return $this->belongsTo(Atractivos::class, 'artist_id');
    }


public function hm_points()
    {
    return $this->belongsToMany(Atractivos::class, 'artist_point', 'artist_id', 'point_id' ); 
    }   

}