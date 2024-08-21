<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ExportData;
use App\Imports\ImportData;
use Maatwebsite\Excel\Facades\Excel;

class imporController extends Controller
{
    //

    public function importExportView()
    {
        return view ('import');

    }

    public function export() 
    {
        return Excel::download(new ExportData, 'afiliados.xlsx');
    }

    public function import() 
    {
        Excel::import(new ImportData,request()->file('file'));
           
        return back()->with('notificacion' , 'Asignacion registrada exitosamente');
    }
}
