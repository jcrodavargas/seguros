@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @if (session ('notificacion'))
        <div class="alert alert-success">
            {{session ('notificacion')}}
        </div> 
    @endif
    <div class="card bg-light mt-3">
        <div class="card-header">
      Registro y solicitud para generar Negativa de afiliacion
        </div>
        <div class="card-body">
            <form action="{{ route('negativo') }}" method="POST" >
              {{ csrf_field() }}
              
                <div class="form-group">
                  <label for="nombres">Nombres</label>
                  <input type="text" class="form-control" name="nombres" id="nombres" >
                  
                </div>
                <div class="form-group">
                  <label for="apellidos">Apellidos</label>
                  <input type="text" class="form-control" name="apellidos" id="apellidos">
                </div>
                <div class="form-group">
                    <label for="cedula">Cedula</label>
                    <input type="text" class="form-control" name="cedula" id="cedula">
                  </div>
                  <div class="form-group">
                    <label for="fecha_nac">Fecha de Nacimiento</label>
                    <input type="date" class=" date form-control" name="fecha_nac" id="fecha_nac">
                  </div>
                  <small id="emailHelp" class="form-text text-muted">El registro e impresion de este certificados previa revision en base de datos.</small>
                  <small id="emailHelp" class="form-text text-muted">certifica que el portador no esta registrado en el sistema de salud departamental.</small>
                <button type="submit" class="btn btn-danger">Generar negativa</button>
                
              </form>
             
        </div>
        
    </div>
    <div>
  
         
    </div>
</div>
@endsection