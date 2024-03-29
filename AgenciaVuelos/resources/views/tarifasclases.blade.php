@extends('plantilla')

@section('titulo','Clases&Tarifas')

@section('contenido')

<div class="forms">
	
<h2>Registro</h2>
<div class="divisiones">
<div>
			
			<form id='formularioClase' class='form-group'>
				@csrf
				@include('clases.form')
				<p class="error" id='mensajeClase'></p>
				<button type="submit" class='btn btn-gold' id='buttonClase'>Registrar</button>
			</form>
		</div>

		<div>
			
			<form id='formularioTarifa' class='form-group'>
				@csrf
				@include('tarifas.form')
				<p class="error" id='mensajeTarifa'></p>
				<button type="submit" class='btn btn-gold' id='buttonTarifa'>Registrar</button>
			</form>
		</div>

		<div>
				
				<form id='formularioct' class='form-group'>
					@include('clasetarifa.form')
					<p class="error" id='mensaject'></p>
					<button type="submit" class='btn btn-gold' id='buttonct'>Registrar</button>
				</form>
			</div>
</div>
</div>

<div class="tablas">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Clases</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tarifas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Relaciones clases y tarifas</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
		<table class='table table-hover'>
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody id='tablaClases'>
		    </tbody>
	    </table></div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
		<table class='table table-hover'>
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody id='tablaTarifas'>
		    </tbody>
	    </table></div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">	
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Clase</th>
					<th>Tarifa</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody id="tablaClaseTarifa">
				
			</tbody>
		</table></div>
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
        	<div class="tarifasModal">
        		<h2 id="mensajeEditarTarifa"></h2>
        		<form id='formularioEditarTarifa' class='form-group'>
					@csrf
					@include('tarifas.form')
					<button type="submit" class="btn btn-gold" id='buttonEditarTarifa'>Editar</button>
				</form>
        	</div>
        	<div class="clasesModal">
        		<h2 id="mensajeEditarClase"></h2>
        		<form id='formularioEditarClase' class='form-group'>
					@csrf
					@include('clases.form')
					<button type="submit" id='buttonEditarClase' class="btn btn-gold">Editar</button>
				</form>
        	</div>
        	<div class="ctModal">
        		<h2 id='mensajeEditarct'></h2>
        		<form id='formularioEditarCT' class='form-group'>
        			@include('clasetarifa.form')
        			<button type="submit" class="btn btn-gold">Editar</button>
        		</form>
        	</div>
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript" src='/js/tarifas/cargarTarifas.js'></script>
<script type="text/javascript" src='/js/tarifas/crearTarifa.js'></script>
<script type="text/javascript" src='/js/tarifas/eliminarTarifa.js'></script>
<script type="text/javascript" src='/js/tarifas/editarTarifa.js'></script>

<script type="text/javascript" src='/js/clases/cargarClases.js'></script>
<script type="text/javascript" src='/js/clases/crearClase.js'></script>
<script type="text/javascript" src='/js/clases/eliminarClase.js'></script>
<script type="text/javascript" src='/js/clases/editarClase.js'></script>

<script type="text/javascript" src='/js/clasestarifas/cargar.js'></script>	
<script type="text/javascript" src='/js/clasestarifas/crear.js'></script>	
<script type="text/javascript" src='/js/clasestarifas/eliminar.js'></script>	
<script type="text/javascript" src='/js/clasestarifas/editar.js'></script>	

<script type="text/javascript" src='/js/clasestarifas/validar.js'></script>
		
@endsection	

