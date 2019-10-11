<!DOCTYPE html>
<html>
<head>
	<title>Mail</title>
</head>
<body>	
	<p> Estimados <strong>{!! $nombreEmpresa!!}</strong>,<br><br> Junto con saludar, se solicita realizar mantención para la maquinaria indicada a continuación:
	<ol>
	<li> <b>Nombre de la maquinaria: </b>{!! $nombreMaquinaria !!} </li>
	<li> <b>Código de la maquinaria: </b>{!! $maqCodigo !!} </li>
	<li> <b>Tipo de maquinaria: </b>{!! $tipoMaquinaria !!} </li>
	<li> <b>Descripción de mantención: </b>{!! $detalleSolicitud !!} </li>
	</ol>
	<strong>Ubicada en:</strong>
	<ul>
		<li><strong>Centro de salud:</strong>  {!!$nombreCentro !!} ubicado en: {!! $ubicacionCentro!!}.</li>
		<li><strong>Área:</strong>  {{$areaMaq}}.</li>
		<li><strong>Sala:</strong>  {{$salaMaq}}.</li>
	</ul>
	Se despide atentamente: <h5>{!! $usuario !!}</h5> Jefe de Servicios Generales {!!$nombreCentro !!}
	</p>

	<strong><h4>Este correo fue generado automáticamente, por favor no responderlo.</h4></strong>
</body>
</html>