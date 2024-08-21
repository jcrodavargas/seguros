<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
    //
    protected $fillable = [
        'nombres', 'apellidos', 'fecha_nac','cedula','entidad','estado'
    ];
    
    public function scopeNombres($query, $nombres )
    {

        if ($nombres)
        {
            return $query->where('nombres','like',"%$nombres%");
        }
        else 
        {
            
        }

    }

    public function scopeApellidos($query, $apellidos )
    {

        if ($apellidos)
        {
            return $query->where('apellidos','like',"%$apellidos%");
        }
        else 
        {
            
        }

    }
    public function scopeCedula($query, $cedula )
    {

        if ($cedula)
        {
            return $query->where('cedula','like',"%$cedula%");
        }
        else 
        {
            
        }

    }
}
