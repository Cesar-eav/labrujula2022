<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'instagram_address',
        'description',
        'email',
        'mobile',
        'web_direction'


    ];

public function artist()
    {
    return $this->hasMany(Atractivos::class, 'artist_id');
    }
}
