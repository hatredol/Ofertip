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

		        </div>

@endsection