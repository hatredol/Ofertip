@extends('Template.templatePanelAdministracion')
@section('Contenido')
					
					<div class="row">
		            	<div class="col-md-6">
		            		{{ Form::open(array('url' => 'Panel/Usuario/AgregarBD')) }}
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
							  <option name="idCategoriaTienda">
							  	<select>Categoria 1</select>
							  	<select>Categoria 2</select>
							  	<select>Categoria 3</select>
							  </option>
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
						        {{ Form::close() }}
					      </div>
					      <div class="col-md-6">
						      <span class="btn btn-primary fileinput-button">
	                              <i class="icon-plus"></i>
	                          <span>Agregar Imagenes...</span>
	                            <input type="file" name="multiUpload" id="multiUpload" multiple/>
                          </span>
					      </div>
					     
		            </div>
@endsection