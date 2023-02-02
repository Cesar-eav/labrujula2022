<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class TypePoint extends Pivot
{
    protected $table="type_point";

    protected $fillable=[
        'id',
        'type_point'
    ];

}
