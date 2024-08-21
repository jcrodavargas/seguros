<?php

namespace App\Exports;

use App\Affiliate;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportData implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Affiliate::all();
    }
}
