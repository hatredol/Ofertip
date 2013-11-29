@extends('Template.templatePanelAdministracion')
@section('Contenido')
					
					<div class="row">
						<div class="col-md-8">
		              	<div class="table-responsive">
		                	<table class="table table-bordered table-striped">
			                  <caption id="cap-tiendas">Ofertas Realizadas</caption>
			                  <thead>
			                    <tr>
			                      <th>Estado</th>
			                      <th>Nombre de Oferta</th>
			                      <th>Descripcion</th>
			                      <th>Fecha de Oferta</th>
			                      <th>Codigos Usados</th>
			                    </tr>
			                  </thead>
			                  <tbody>
			                    <tr>
			                      <td><span class="label label-sm label-success label-mini" style="font-size:0.8em; font-weight:normal">Disponible</span></td>
			                      <td>Pizza Vegetariana</td>
			                      <td>Pizza vegetariana a S/.30.00</td>
			                      <td>27/11/2013</td>
			                      <td>12</td>
			                    </tr>
			                    <tr>
			                      <td><span class="label label-sm label-danger" style="font-size:0.8em; font-weight:normal">Terminada</span></td>
			                      <td>Pizza Vegetariana</td>
			                      <td>Pizza vegetariana a S/.30.00</td>
			                      <td>27/11/2013</td>
			                      <td>12</td>
			                    </tr>
			                    <tr>
			                      <td><span class="label label-sm label-danger" style="font-size:0.8em; font-weight:normal">Terminada</span></td>
			                      <td>Pizza Vegetariana</td>
			                      <td>Pizza vegetariana a S/.30.00</td>
			                      <td>27/11/2013</td>
			                      <td>12</td>
			                    </tr>
			                    <tr>
			                      <td><span class="label label-sm label-danger" style="font-size:0.8em; font-weight:normal">Terminada</span></td>
			                      <td>Pizza Vegetariana</td>
			                      <td>Pizza vegetariana a S/.30.00</td>
			                      <td>27/11/2013</td>
			                      <td>12</td>
			                    </tr>
			                  </tbody>
			                </table>
			                <button type="button" class="btn btn-primary" style="padding:15px 60px">
						  		CREAR NUEVA OFERTA
							</button>
		                </div>
		              </div>
		              <div class="col-md-4">
		              	
		              </div>
					</div>
					<div class="row">
		            	<div class="col-md-6">
		            		{{ Form::open(array('url' => 'Panel/Usuario/AgregarBD')) }}
							  <div class="form-group">
							    <label for="tituloOferta">Titulo de Oferta:</label>
							    <input type="text" class="form-control" name="tituloOferta" placeholder="Titulo de la oferta">
							  </div>
							  <div class="form-group">
							  	<label for="descripcionOferta">Descripcion de la Oferta:</label>
              					<textarea rows="4" cols="50" name="descripcionOferta" style="resize:none"></textarea>
							  </div>
							  <div class="form-group">
							  <label for="tipoMoneda">Tipo de Moneda para oferta</label>
							  <select id="tipoMoneda">
									<option value="S/.">(S/.)Nuevo Sol</option>
									<option value="$">($)Dolar Americano</option>
									
								</select>
							 </div>
							  <div class="form-group">
							    <label for="precioNormalOferta">Precio Normal:</label>
							    <input type="text" class="form-control" name="precioNormalOferta" placeholder="Precio normal del producto">
							  </div>
							  <div class="form-group">
							  	
							    <label for="precioOferta">Precio de Oferta:</label>
							    
								<input type="text" class="form-control" name="precioOferta" placeholder="Precio de oferta del producto">
							  </div>
							  <div class="form-group">
							    <label for="precioOfertaSuscripcion">Precio de Oferta por Suscripcion:</label>
							    <input type="text" class="form-control" name="precioOfertaSuscripcion" placeholder="Precio de oferta para suscritos del producto">
							  </div>
							  <div class="form-group">
							    <label for="fechaInicioOferta">Fecha de Inicio de Oferta:</label>
							    <input name="fechaInicioOferta" class="form-control" type="text" value="2013-02-21" size="2"><span class="add-on"><i class="icon-th"></i></span>
                              </div>
                              <div class="form-group">
							    <label for="fechaTerminoOferta">Fecha de Termino de Oferta:</label>
							    <input name="fechaTerminoOferta" class="form-control" type="text" value="2013-02-21" size="2"><span class="add-on"><i class="icon-th"></i></span>
                              </div>
							  
							  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						      <button type="submit" class="btn btn-default">Guardar</button>
						        
					      </div>
					      <div class="col-md-6">
					      	<label>Fotos de la Oferta:</label>
					      	<div class="form-group">

					      		<img src="{{URL::asset('img/imgdefecto.png')}}" alt="..." class="img-thumbnail">
					      		<img src="{{URL::asset('img/imgdefecto.png')}}" alt="..." class="img-thumbnail">
					      		<img src="{{URL::asset('img/imgdefecto.png')}}" alt="..." class="img-thumbnail">
					      		<img src="{{URL::asset('img/imgdefecto.png')}}" alt="..." class="img-thumbnail">
					      		<img src="{{URL::asset('img/imgdefecto.png')}}" alt="..." class="img-thumbnail">
					      	</div>
						      	<span class="btn btn-primary fileinput-button">
	                         	    <i class="icon-plus"></i>
	                         	 <span>Agregar Imagenes...</span>
	                            	<input type="file" name="multiUpload" id="multiUpload" multiple/>
                          		</span>
                          		<span class="btn btn-primary fileinput-button">
	                         	    <i class="icon-plus"></i>
	                         	 <span>Guardar Imagenes</span>
	                            	<input type="file" name="multiUpload" id="multiUpload" multiple/>
                          		</span>
					      </div>
					     	{{ Form::close() }}
		            </div>
@endsection