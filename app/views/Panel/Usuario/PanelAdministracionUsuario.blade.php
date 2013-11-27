@extends('Template.templatePanelAdministracion')
@section('Contenido')
					<div class="row text-center">
						<div class="col-md-3" style="background:#3498db; padding:10px">
	               		 	<i class="fa fa-shopping-cart fa-2x" style="color: #fff;"></i><a class="link-menu" href="#"><h2 style="color:#fff; margin:20px; font-size: 1.5em">Mis Tiendas</h2></a>
	              		</div>
	              		<div class="col-md-3 col-md-offset-1" style="background:#2ecc71;padding:10px">
	                		<i class="fa fa-user fa-2x" style="color: #fff;"></i><a class="link-menu" href="#"><h2 style="color:#fff; margin:20px; font-size: 1.5em">Mi Perfil</h2></a>
	              		</div>
	              		<div class="col-md-3 col-md-offset-1" style="background:#34495e;padding:10px">
	                		<i class="fa fa-tag fa-2x" style="color: #fff;"></i><a class="link-menu" href="#"><h2 style="color:#fff; margin:20px; font-size: 1.5em">Mis Ofertas</h2></a>
	              		</div>
	              		
					</div>
					<div class="row" style="margin-top:50px">
		              
		              <div class="col-md-6">
		              	<div class="table-responsive">
		              	<table class="table table-bordered table-striped">
		                  <caption id="cap-usuarios">Ultimos Suscritos</caption>
		                  <thead>
		                    <tr>
		                      <th>#</th>
		                      <th>Nombre</th>
		                      <th>Fecha Suscripcion</th>
		                      
		                    </tr>
		                  </thead>
		                  <tbody>
		                    <tr>
		                      <td>1</td>
		                      <td>Castelino</td>
		                      <td>20/11/2013</td>
		                      
		                    </tr>
		                    <tr>
		                      <td>1</td>
		                      <td>Castelino</td>
		                      <td>20/11/2013</td>
		                     
		                    </tr>
		                    <tr>
		                      <td>1</td>
		                      <td>Castelino</td>
		                      <td>20/11/2013</td>
		                      
		                    </tr>
		                    <tr>
		                      <td>1</td>
		                      <td>Castelino</td>
		                      <td>20/11/2013</td>
		                      
		                    </tr>
		                  </tbody>
		                </table> 
		               </div>
		              </div>
		               <div class="col-md-6">
		              	<div class="table-responsive">
		                	<table class="table table-bordered table-striped">
			                  <caption id="cap-tiendas">Ofertas Realizadas</caption>
			                  <thead>
			                    <tr>
			                      <th>#</th>
			                      <th>Nombre de Oferta</th>
			                      <th>Descripcion</th>
			                      <th>Fecha de Oferta</th>
			                      <th>Codigos Usados</th>
			                    </tr>
			                  </thead>
			                  <tbody>
			                    <tr>
			                      <td>1</td>
			                      <td>Pizza Vegetariana</td>
			                      <td>Pizza vegetariana a S/.30.00</td>
			                      <td>27/11/2013</td>
			                      <td>12</td>
			                    </tr>
			                    <tr>
			                      <td>1</td>
			                      <td>Pizza Vegetariana</td>
			                      <td>Pizza vegetariana a S/.30.00</td>
			                      <td>27/11/2013</td>
			                      <td>12</td>
			                    </tr>
			                    <tr>
			                      <td>1</td>
			                      <td>Pizza Vegetariana</td>
			                      <td>Pizza vegetariana a S/.30.00</td>
			                      <td>27/11/2013</td>
			                      <td>12</td>
			                    </tr>
			                    <tr>
			                      <td>1</td>
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