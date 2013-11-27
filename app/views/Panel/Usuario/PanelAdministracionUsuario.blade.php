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
		                  <caption id="cap-tiendas">Tiendas Registradas</caption>
		                  <thead>
		                    <tr>
		                      <th>#</th>
		                      <th>Nombre de Tienda</th>
		                      <th>Suscriptores</th>
		                      <th>Nro Ofertas</th>
		                      <th>Ultima Oferta</th>
		                    </tr>
		                  </thead>
		                  <tbody>
		                    <tr>
		                      <td>1</td>
		                      <td>Castelino</td>
		                      <td>125</td>
		                      <td>15</td>
		                      <td>20/11/2013</td>
		                    </tr>
		                    <tr>
		                      <td>1</td>
		                      <td>Castelino</td>
		                      <td>125</td>
		                      <td>15</td>
		                      <td>20/11/2013</td>
		                    </tr>
		                    <tr>
		                      <td>1</td>
		                      <td>Castelino</td>
		                      <td>125</td>
		                      <td>15</td>
		                      <td>20/11/2013</td>
		                    </tr>
		                    <tr>
		                      <td>1</td>
		                      <td>Castelino</td>
		                      <td>125</td>
		                      <td>15</td>
		                      <td>20/11/2013</td>
		                    </tr>
		                  </tbody>
		                </table>
		                </div>
		              </div>
		              <div class="col-md-6">
		              	<div class="table-responsive">
		              	<table class="table table-bordered table-striped">
		                  <caption id="cap-usuarios">Ultimos Suscritos</caption>
		                  <thead>
		                    <tr>
		                      <th>#</th>
		                      <th>Nombre</th>
		                      <th>Tienda Suscripcion</th>
		                      <th>Fecha Suscripcion</th>
		                      
		                    </tr>
		                  </thead>
		                  <tbody>
		                    <tr>
		                      <td>1</td>
		                      <td>Castelino</td>
		                      <td>Castelino</td>
		                      <td>20/11/2013</td>
		                      
		                    </tr>
		                    <tr>
		                      <td>1</td>
		                      <td>Castelino</td>
		                      <td>Castelino</td>
		                      <td>20/11/2013</td>
		                     
		                    </tr>
		                    <tr>
		                      <td>1</td>
		                      <td>Castelino</td>
		                      <td>Castelino</td>
		                      <td>20/11/2013</td>
		                      
		                    </tr>
		                    <tr>
		                      <td>1</td>
		                      <td>Castelino</td>
		                      <td>Castelino</td>
		                      <td>20/11/2013</td>
		                      
		                    </tr>
		                  </tbody>
		                </table> 
		               </div>
		              </div>
		            </div>
	
@endsection