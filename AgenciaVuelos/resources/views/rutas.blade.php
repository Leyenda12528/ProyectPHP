@extends('plantilla')

@section('titulo','Ciudades&Rutas')

@section('contenido')

<div class="forms">
	
<h2>Registro</h2>
<div class="divisiones">
<div>

			<form id='formularioCiudad' class="form-group">
				@csrf
				@include('ciudades.form')
				<p class="error" id='mensajeCiudad'></p>
				<button type="submit" class="btn btn-gold">Registrar</button>
			</form>
		</div>

		<div>
		
			<form id='formularioRuta' class="form-group">
				@csrf
				@include('rutas.form')
				<p class="error" id='mensajeRuta'></p>
				<button type="submit" class="btn btn-gold">Registrar</button>
			</form>
		</div>
</div>
</div>


<div class="tablas">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Ciudades</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Rutas</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  <table class="table table-hover">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody id='tablaCiudades'>
		    </tbody>
	    </table>		
</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <table class="table table-hover">
			<thead>
				<tr>
					<th>Ciudad origen</th>
					<th>Ciudad destino</th>
					<th>Editar</th>
					<th>Eliminar</th>
					<th>Precios</th>
				</tr>
			</thead>
			<tbody id='tablaRutas'>
		    </tbody>
		</table>
	</div>
</div>
</div>

	
  <div class="modal fade" id="addPokemon" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        	<div class="ciudadesModal">
        		<h2 id="mensajeEditarCiudad"></h2>
        		<form id='formularioEditarCiudad' class="form-group">
					@csrf
					@include('ciudades.form')
					<button type="submit" class="btn btn-gold">Editar</button>
				</form>
        	</div>
        	<div class="rutasModal">
        		<h2 id="mensajeEditarRuta"></h2>
        		<form id='formularioEditarRutas' class="form-group">
					@csrf
					@include('rutas.form')
					<button type="submit" class="btn btn-gold">Editar</button>
				</form>
        	</div>
        	<div class="PRModal">
        		<h2 id='mensajeEditarPR'></h2>
        		<form id='formularioEditarPrecioruta'>
        			@include('preciorutas.form')
        			<button type="submit" class="btn btn-gold">Editar</button>
        		</form>
        	</div>
        </div>
      </div>
    </div>
  </div>
 


   <div class="modal fade" id="precios" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Precios de <span id="precioRModal"></span></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        	<div class="preciorutasModal">
        		<h2 id="mensajePrecioruta"></h2>
        		<form id='formularioPrecioruta'>
					@csrf
					@include('preciorutas.form')
					<button type="submit" class="btn btn-gold" >Registrar</button>
				</form>
				<br>
        	</div>
        	<div>
        		<table class="table table-hover">
        			<thead>
        				<th>Clase/Tarifa</th>
        				<th>Precio</th>
        				<th>Editar</th>
        				<th>Eliminar</th>
        			</thead>
        			<tbody id="tablaPrecioruta"></tbody>
        		</table>
        	</div>
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript" src = "js/ciudades/cargarCiudades.js"></script>
<script type="text/javascript" src = "js/ciudades/crearCiudad.js"></script>
<script type="text/javascript" src = "js/ciudades/editarCiudad.js"></script>
<script type="text/javascript" src = "js/ciudades/eliminarCiudad.js"></script>

<script type="text/javascript" src = "js/rutas/cargarRutas.js"></script>
<script type="text/javascript" src = "js/rutas/crearRuta.js"></script>
<script type="text/javascript" src = "js/rutas/editarRuta.js"></script>
<script type="text/javascript" src = "js/rutas/eliminarRuta.js"></script>

<script type="text/javascript" src = "js/preciorutas/cargarPR.js"></script>
<script type="text/javascript" src = "js/preciorutas/crearPR.js"></script>
<script type="text/javascript" src = "js/preciorutas/editarPR.js"></script>
<script type="text/javascript" src = "js/preciorutas/eliminarPR.js"></script>

<script type="text/javascript" src='/js/rutas/validar.js'></script>

<style type="text/css">
	.divisiones{
		display: grid;
		grid-template-columns: 1fr 2fr;
		column-gap: 20px;
	}
	#precios .modal-dialog{
		overflow-y: initial !important; 
	}
	#precios .modal-body{
		height: 500px;
		overflow-y: auto; 
	}
</style>
@endsection	
