<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Negative extends Model
{
    protected $fillable = [
        'nombres', 'apellidos', 'cedula', 'fecha_nac'
    ];
    //
}
