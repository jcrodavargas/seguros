<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Affiliate;
use App\Negative;

class PDFController extends Controller
{
    //

    public function PDF()
    {   //se consulta la base de datos extrayendo los datos 
        $datos = Affiliate::all();
       // se carga la variable pdf y se envia a la vista junto con la variable que obtuvo los datos de la tabla 
       $pdf = PDF::loadView('reportes', compact('datos'));
       //$pdf = PDF::loadView('reportes');
       //se retorna la vista con el nombre del archivo a generar
       return $pdf->stream('negativas.pdf');
    }

    //aqui se retorna la vista certificado
   public function certificado()
   {
    return view('certificado');
   } 

   public function guardar( Request $request)
   {
    $negative = new Negative;
    $negative -> nombres = $request -> input('nombres');
    $negative -> apellidos = $request -> input('apellidos');
    $negative -> cedula = $request -> input('cedula');
    $negative -> fecha_nac = $request -> input('fecha_nac');
    $negative ->save();
      //genera el reporte en PDF   
    $pdf = PDF::loadView('negativo', compact('negative'));
    return $pdf->stream('negativo.pdf');
    
   //Negative::create($request->all());
   
   

   }
}

//$data = [
  //  'titulo' => 'Styde.net'
//];

//$pdf = \PDF::loadView('vista-pdf', $data);

//return $pdf->download('archivo.pdf');