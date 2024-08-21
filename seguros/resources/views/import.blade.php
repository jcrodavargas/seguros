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
            Importar Datos Negativas de afiliacion
        </div>
        <div class="card-body">
           
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import Data .csv</button>
                <a class="btn btn-warning" href="{{ route('export') }}">Export Data .xls</a>
            </form>
        </div>
    </div>
</div>
@endsection
