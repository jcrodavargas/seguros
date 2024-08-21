<?php

namespace App\Imports;

use App\Affiliate;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportData implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Affiliate([
            //colocar los campos que se van a cargar en la base de datos
            'nombres'     => $row['nombres'],
            'apellidos'    => $row['apellidos'],
            'fecha_nac'    => $row['fecha_nac'],
            'cedula'     => $row['cedula'],
            'entidad'     => $row['entidad'],
            'estado'    => $row['estado'],
            
               

        ]);
    }
}
