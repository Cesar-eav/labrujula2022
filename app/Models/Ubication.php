<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubication extends Model
{
    protected $table="ubications";

    protected $fillable=[
    'name'
    ];


    public function point()
        {
        return $this->hasMany(Atractivos::class, 'ubication_id');
        }

    
}


