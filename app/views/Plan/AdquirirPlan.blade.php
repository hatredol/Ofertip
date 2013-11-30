@extends('Template.templateAyudaUsuarioWebsite')
@section('Contenido')
	  	<div class="container">
			<div class="row">
				
				<h3>Detalles de la Empresa</h3>
		            	<div class="col-md-6 well">
		            		{{ Form::open(array('url' => 'AdquirirPlan/AgregarBD')) }}
							  <div class="form-group">
							    <label for="nombrePersonaJuridica">Razon Social:</label>
							    <input type="text" class="form-control" name="nombrePersonaJuridica" placeholder="Razon Social o Nombre de la empresa">
							  </div>
							  <div class="form-group">
							    <label for="direccionPersonaJuridica">Direccion:</label>
							    <input type="text" class="form-control" name="direccionPersonaJuridica" placeholder="Direccion del local">
							  </div>
							  <div class="form-group">
							    <label for="telefonoPersonaJuridica">Telefono:</label>
							    <input type="text" class="form-control" name="telefonoPersonaJuridica" placeholder="Telefono del local">
							  </div>
							  <div class="form-group">
							  <label for="idCategoriaTienda">Categoria de su tienda:</label>
							  <select name="idCategoriaTienda">
							  	<option>Categoria 1</option>
							  	<option>Categoria 2</option>
							  	<option>Categoria 3</option>
							  </select>
							  </div>
							  <div class="form-group">
							  	<label for="descripcionTienda">Descripcion de la tienda:</label>
              					<textarea rows="4" cols="50" name="descripcionTienda" style="resize:none"></textarea>
							  </div>
							  <div class="form-group">
							  	<label for="horarioTienda">Horario de atencion:</label>
              					<textarea rows="4" cols="50" name="horarioTienda" style="resize:none"></textarea>
							  </div>
								<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						        <button type="submit" class="btn btn-default">Guardar</button>
					    </div>
					    		{{ Form::close() }}
		    </div>
		    <div class="row">
		    	<h3>Resumen de Plan</h3>
		            	<div class="col-md-6 well">
							  <div class="form-group">
							    <label for="nombrePersonaJuridica">Tipo de Plan:</label>
							    <label for="nombrePersonaJuridica">Basico</label>
							  </div>
							  <div class="form-group">
							    <label for="nombrePersonaJuridica">Frecuencia de Facturacion:</label>
							    <label for="nombrePersonaJuridica">Semestral</label>
							  </div>
							  <div class="form-group">
							    <label for="nombrePersonaJuridica">Precio:</label>
							    <label for="nombrePersonaJuridica">$. 85.00/semestral</label>
							  </div>
							  	<button type="button" class="btn btn-default">Confirmar</button> o <small><a class="btn btn-link">Cancelar</a></small>
							  	<p><small>Se le facturará $. 85 cuando haga clic en Confirmar. Se le facturará el mismo día de la fecha de adquisicion cada 6 meses. Al hacer clic en Confirmar, acepta las <a class="btn btn-link">Condiciones de Uso y la Política de Privacidad.</a></small></p>
						        
					    </div>
			</div>
		</div>
@endsection