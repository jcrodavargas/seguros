<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Arr;
use App\Affiliate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function buscar(Request $request )
    {
        //Se realiza la busqueda desde el formulario consultando a la base de datos
        
        $nombre     = $request ->get('buscarpor');
        $apellido   = $request ->get('buscarporape');
        $cedula     = $request ->get('buscarporcedula');

        $pagina     = $request->all(); //esta variable contiene todos los datos recuperados
        //dd($pagina);
        //$id = Afilliate::where('id',0)->get();
        //se realiza la consulta mediante scope en el modelo y paginacion 
        
        // si vacio
        $afiliados = Affiliate::nombres($nombre)->apellidos($apellido)->cedula($cedula)->paginate(4)->appends($pagina); 
        //dd($afiliados);
        return view('buscar', compact('afiliados')) ;
        
    }    

    public function buscador(Request $request )
    {
        //Se realiza la busqueda desde el formulario consultando a la base de datos
        
        $nombre = $request ->get('buscarpor');
        $apellido = $request ->get('buscarporape');
        $cedula = $request ->get('buscarporcedula');

        $pagina = $request->all(); //esta variable contiene todos los datos recuperados
        dd($pagina);
        //$id = Afilliate::where('id',0)->get();
        //se realiza la consulta mediante scope en el modelo y paginacion 
        
        
        if($pagina != null) 
        {
        // si vacio
        $afiliados = Affiliate::nombres($nombre)->apellidos($apellido)->cedula($cedula)->paginate(8)->appends($pagina); 
        return view('buscar', compact('afiliados')) ; 
        
        }
       else 
            {
        
             return view('certificado'); 
        
            }

        
        
        
    }


    public function negativas( $id)

   {
       //genera un documento con el registro seleccionado
       $nega = Affiliate::findOrFail($id);
       // $nega = Affiliate::where('id', $id);
       $pdf = PDF::loadView('negativas', compact('nega'));
       return $pdf->stream('negativas.pdf');

        
       
   } 

    
}
