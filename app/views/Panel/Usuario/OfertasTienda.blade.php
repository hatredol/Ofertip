@extends('Template.templatePanelAdministracion')
@section('Contenido')
					
					<div class="row">
						<div class="col-md-12">
		              	<div class="table-responsive">
		                	<table class="table table-bordered table-striped">
			                  <caption id="cap-tiendas">Ofertas Realizadas</caption>
			                  <thead>
			                    <tr>
			                      <th>Estado</th>
			                      <th>Nombre de Oferta</th>
			                      <th>Descripcion</th>
			                      <th>Fecha Inicio de Oferta</th>
			                      <th>Codigos Usados</th>
			                      <th>Fecha Fin de Oferta</th>
			                    </tr>
			                  </thead>
			                  <tbody>
			                  @foreach($ofertas as $oferta)	
			                    <tr>
			                      @if($oferta->indicadorActivo = 'A')	
			                      <td><span class="label label-sm label-success label-mini" style="font-size:0.8em; font-weight:normal">Disponible</span></td>
			                      @else
			                      <td><span class="label label-sm label-success label-mini" style="font-size:0.8em; font-weight:normal">Terminada</span></td>
			                      @endif
			                      <td>{{$oferta->nombreOferta}}</td>
			                      <td>{{$oferta->descripcionOferta}}</td>
			                      <td>{{$oferta->fechaInicioOferta}}</td>
			                      <td>12</td>
			                      <td>{{$oferta->fechaTerminoOferta}}</td>
			                    </tr>
			                  @endforeach  
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
		            		{{ Form::open(array('url' => 'Panel/'.$tienda->idTienda.'/Ofertas/AgregarBD')) }}
							  <div class="form-group">
							    <label for="nombreOferta">Titulo de Oferta:</label>
							    <input type="text" class="form-control" name="nombreOferta" placeholder="Titulo de la oferta">
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
							    <input name="fechaInicioOferta" class="form-control" type="date" value="2013-02-21" size="2"><span class="add-on"><i class="icon-th"></i></span>
                              </div>
                              <div class="form-group">
							    <label for="fechaTerminoOferta">Fecha de Termino de Oferta:</label>
							    <input name="fechaTerminoOferta" class="form-control" type="date" value="2013-02-21" size="2"><span class="add-on"><i class="icon-th"></i></span>
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