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
            Buscar datos para Negativas de afiliacion
        </div>
        <div class="card-body">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" name="buscarpor" type="text" placeholder="Buscar por Nombres">
                <input class="form-control mr-sm-2" name="buscarporape" type="text" placeholder="Buscar por Apellidos">
                <input class="form-control mr-sm-2" name="buscarporcedula" type="text" placeholder="Buscar por Cedula">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>

                <a href="{{route('buscador')}}" target="_blank" type="submit" class="btn btn-sm btn-primary">Buscador</a>
                <a href="{{route('descargarPDF')}}" target="_blank" class="btn btn-sm btn-primary">Reporte general</a>
                
              </form>
             
        </div>
        
    </div>
    <div>
  
        <table class="table table-light">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Fecha Nacimiento</th>
                <th scope="col">Cedula</th>
                <th scope="col">Entidad</th>
                <th scope="col">Estado</th>
                <th scope="col">Reporte</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($afiliados as $afiliadositem)
                <tr class="table-light">
                 
                  <th scope="row">{{$afiliadositem->id}}</th>
             
              
                <td>{{$afiliadositem->nombres}}</td>
                <td>{{$afiliadositem->apellidos}}</td>
                <td>{{$afiliadositem->fecha_nac}}</td>
                <td>{{$afiliadositem->cedula}}</td>
                <td>{{$afiliadositem->entidad}}</td>
                <td>{{$afiliadositem->estado}}</td>
                <td><a href="/negativa/{{$afiliadositem->id}}" target="_blank" class="btn btn-sm btn-danger">PDF</a></td>
   
              </tr>

              @endforeach 

              @if ($afiliados == '')
              <td><a href="/certificados/" class="btn btn-sm btn-danger">Registrar negativa</a></td>
              @endif
            </tbody>
          </table> 
          {{$afiliados}}
    </div>
</div>
@endsection
