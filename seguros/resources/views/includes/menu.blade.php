<div class="card">
            
    <div class="card-header">Bienvenido al Sistema</div>

    <div class="card-body">
        @if (auth()->check())
        <div class="list-group">
            <a href="/home" class="list-group-item list-group-item-action">
              Home
            </a>
            @if (! auth()->user()->is_client)
              <a href="/import" class="list-group-item list-group-item-action">
                  Importar datos
              </a>
            @endif
              <a href="/buscar" class="list-group-item list-group-item-action">
                  Buscar registros
              </a> 
              <a href="/reportes" class="list-group-item list-group-item-action">
                  Reporte general
              </a> 
            
              
            @if (auth()->user()->is_admin)    
              <a class="list-group-item list-group-item-action dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Administracion</a>
              <div class="dropdown-menu" style="">
                <a class="dropdown-item" href="/usuarios">Usuarios</a>
                <a class="dropdown-item" href="/proyectos">Proyectos</a>
                <a class="dropdown-item" href="/config">Configuracion</a>
              </div>
              @endif 
          </div>
          
        @else
            
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">
                  Bienvenido
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    Instrucciones de uso
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    Creditos
                </a>
              </div>

          
        @endif
            
        
        
          
    </div>
</div>