<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Model;


class TypePoint extends Model
{
    protected $table="type_point";

    protected $fillable=[
        'id',
        'type_point',
        'created_by_user_id',
        'updated_by_user_id'
    ];

}
