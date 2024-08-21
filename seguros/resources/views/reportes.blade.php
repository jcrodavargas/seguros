<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reportes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <div>
  <h5>Reporte general de datos</h5>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Fecha Nacimiento</th>
            <th scope="col">Cedula</th>
            <th scope="col">Entidad</th>
            <th scope="col">Estado</th>
          </tr>
        </thead>
        <tbody>
           @foreach ($datos as $item)
               
           
        
          <tr class="table-primary">
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->nombres}}</td>
            <td>{{$item->apellidos}}</td>
            <td>{{$item->fecha_nac}}</td>
            <td>{{$item->cedula}}</td>
            <td>{{$item->entidad}}</td>
            <td>{{$item->estado}}</td>
            
          </tr>
          @endforeach 
           
        </tbody>
      </table> 
      
</div>
</body>
</html>