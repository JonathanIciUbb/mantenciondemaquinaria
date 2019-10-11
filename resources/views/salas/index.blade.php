@extends('layout')


@section('contenido')

<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
<link href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap.min.css" rel="stylesheet"/>

      <ol class="breadcrumb">
        <li><a href="{{ route('salas.index') }}"><i class="fa fa-dashboard"></i> Listado de Salas </a></li> 
        <li class="active"></li>
      </ol>
   <section class="content" >
      <div class="row" >
        <!-- left column -->
        <div class="col-md-12" >
          <!-- general form elements -->
          <div class="box box-info" >
            <div class="box-header with-border">
              <h2 class="titulo">Salas</h2>
              <br>
                                    <a href="{{ route('salas.create') }}" class="btn btn-primary pull-left"
        role="button"><i class="fa fa-check" aria-hidden="true"></i> Añadir Nueva Sala</a>&nbsp
      <br>
      <br>
      
     <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">       
      <thead>
            <tr>
                <th scope="col">Número</th>
                <th scope="col">Nombre</th>
                <th scope="col">Área</th>
                <th scope="col" class="table1"></th>
                <th scope="col" class="table1"></th>
                <th scope="col" class="table1"></th>

            </tr>
      </thead>
            <tbody>
                @foreach ($salas as $sala)

                <tr>
                <td>{{$sala->numero}}</td>
                <td>{{$sala->nombre}}</td>
                <td>{{$sala->area->nombre}} </td>
                <td>
                    <form method="GET" style="display:inline" action="{{ route('salas.show', $sala->codigo)}}">
                    @csrf

                        <button type="submit" class="btn btn-block btn-success btn-xs" title="Ver">
                            <i class="fa fa-eye"></i>
                        </button>
                    </form>

                    </td>
                <td>

                 <form method="GET" style="display:inline" action="{{ route('salas.edit' , $sala->codigo) }}">
                    @csrf

                        <button type="submit" class="btn btn-block btn-warning btn-xs" title="Editar">
                            <i class="fa fa-pencil"></i>
                        </button>
                    </form>


                    
                 </td>


                <td>
                    <form method="POST" style="display:inline" action="{{ route('salas.destroy', $sala->codigo)}}" id="del{{$sala->codigo}}">
                    @csrf
                    {!! method_field('DELETE') !!}

                        <button type="submit" class="btn btn-block btn-danger btn-xs" title="Eliminar" onClick="confirmFunction('del{{$sala->codigo}}')">
                             <i class="fa fa-trash"></i>
                        </button>
                    </form>

                    </td>

            </tr>
                @endforeach

            </tbody>
        
    </table>
    
          </div>
      </div>
  </div>
</div>
</section>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" defer ></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" defer></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js" defer></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js" defer></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap.min.js" defer></script>

<script>
  $(document).ready(function() {
  $('#example').DataTable({
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    }
  });
});

</script>

@stop
