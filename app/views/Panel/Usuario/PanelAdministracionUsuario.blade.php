@extends('Template.templatePanelAdministracion')
@section('Contenido')
					
					<div class="row" style="margin-top:50px">
		              
		              <div class="col-md-4">
		              	<div class="table-responsive">
		              	<table class="table table-bordered table-striped">
		                  <caption id="cap-usuarios">Ultimos Suscritos</caption>
		                  <thead>
		                    <tr>
		                      <!-- <th>#</th>
		                      <th>Nombre</th>
		                      <th>Fecha Suscripcion</th> -->
		                      
		                    </tr>
		                  </thead>
		                  <tbody>
		                    <tr>
		                      <td><img src="{{URL::asset('img/avatar.jpg')}}" alt=""></td>
		                      <td>Jeyson Fuentes</td>
		                      <td>20/11/2013</td>
		                      
		                    </tr>
		                    <tr>
		                      <td><img src="{{URL::asset('img/avatar.jpg')}}" alt=""></td>
		                      <td>Angelo Leva</td>
		                      <td>20/11/2013</td>
		                     
		                    </tr>
		                    <tr>
		                      <td><img src="{{URL::asset('img/avatar.jpg')}}" alt=""></td>
		                      <td>Jorge Pacora</td>
		                      <td>20/11/2013</td>
		                      
		                    </tr>
		                    <tr>
		                      <td><img src="{{URL::asset('img/avatar.jpg')}}" alt=""></td>
		                      <td>Charlie Ochoa</td>
		                      <td>20/11/2013</td>
		                      
		                    </tr>
		                  </tbody>
		                </table> 
		               </div>
		              </div>
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
		                </div>
		              </div>
		            </div>
		            <div class="row">
		            	<div class="col-md-8">
		            	<div class="table-responsive">
		            		<table class="table table-bordered table-striped">
			                  <caption id="cap-codigos">Codigos de Oferta</caption>
			                  <thead>
			                    <tr>
			                      <th>#</th>
			                      <th>Codigo de Oferta</th>
			                      <th>Nombre de Oferta</th>
			                      <th>Usuario</th>
			                      <th>Fecha de Uso</th>
			                      
			                    </tr>
			                  </thead>
			                  <tbody>
			                    <tr>
			                      <td>1</td>
			                      <td>2013-05</td>
			                      <td>Pizza vegetariana a S/.30.00</td>
			                      <td>angelolev</td>
			                      <td>27/11/2013</td>
			                    </tr>
			                    <tr>
			                      <td>1</td>
			                      <td>2013-05</td>
			                      <td>Pizza vegetariana a S/.30.00</td>
			                      <td>angelolev</td>
			                      <td>27/11/2013</td>
			                    </tr>
			                    <tr>
			                      <td>1</td>
			                      <td>2013-05</td>
			                      <td>Pizza vegetariana a S/.30.00</td>
			                      <td>angelolev</td>
			                      <td>27/11/2013</td>
			                    </tr>
			                    <tr>
			                      <td>1</td>
			                      <td>2013-05</td>
			                      <td>Pizza vegetariana a S/.30.00</td>
			                      <td>angelolev</td>
			                      <td>27/11/2013</td>
			                    </tr>
			                  </tbody>
			                </table>
		            	</div>
		            </div>
		           </div>

		        
	<!-- Modal -->
	<div class="modal fade" id="modalTiendas" tabindex="-1" role="dialog" aria-labelledby="modalLabelRegistro" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="modalLabelRegistro">Haz clic sobre la Tiendas que deseas configurar para dirigirte
		 		 al Modulo de Administracion de la misma.!</h4>
	      </div>
	      <div class="modal-body">
	        <div class="col-md-12 text-center">
		 		<ul class="menu-tiendas">
		 			<li><a href="">Tienda1</a></li>
		 			<li><a href="">Tienda2</a></li>
			 	</ul>
			 	
		 	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
	        
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
@endsection