<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<div class="row" >
    <!-- left column -->
    <div class="col-md-12" >
      <!-- general form elements -->
      <div class="box box-info" >
        <div class="box-header with-border">
            <hr>
          <h2 style="color: black">Listado de Maquinarias</h2>
          <hr>
          <hr>
          <br>
    <br>
    <br>


 <table class="table table-bordered" width="100%"  border="0"  cellspacing="0" cellpadding="0" style="font-size:10px">
    <thead>
        <tr>
            <th scope="col">Id General</th>
            <th scope="col">Id Inventario</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Estado</th>
            <th scope="col">Mantenciones Preventivas</th>
            <th scope="col">Tipo</th>
          

        </tr>
        <tbody>
                
            @foreach ($maquinarias as $maquinaria)

            <tr>
            <td>{{$maquinaria->id_general}}</td>
            <td>{{$maquinaria->id_inventario}}</td>
            <td>{{$maquinaria->nombre}}</td>
            <td>{{$maquinaria->descripcion}}</td>
            <td>{{$maquinaria->estado}}</td>
            <td>{{$maquinaria->mantenciones_preventivas}}</td>

            <td>{{$maquinaria->tipo->nombre}}</td>
        </tr>
        
     
            @endforeach
 
        </tbody>
    </thead>
</table>
      </div>
  </div>
</div>
</div>
