@extends('Template.templatePanelAdministracion')
@section('Contenido')
					
					<div class="row" style="margin-top:50px">
		              
		              <div class="col-md-4">
		              	<div class="table-responsive">
		              	<table class="table table-bordered table-striped">
		                  <caption id="cap-usuarios">Usuarios Suscritos</caption>
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
			                  <caption id="cap-codigos">Codigos de Oferta x Usuarios</caption>
			                  <thead>
			                    <tr>
			                      <th>#</th>
			                      <th>Codigos Usados</th>
			                      <th>Nombre de Oferta</th>
			                      <th>Usuario</th>
			                      <th>Fecha de Uso</th>
			                      
			                    </tr>
			                  </thead>
			                  <tbody>
			                    <tr>
			                      <td>1</td>
			                      <td>23</td>
			                      <td>Pizza vegetariana a S/.30.00</td>
			                      <td>angelolev</td>
			                      <td>27/11/2013</td>
			                    </tr>
			                    <tr>
			                      <td>1</td>
			                      <td>12</td>
			                      <td>Pizza vegetariana a S/.30.00</td>
			                      <td>marcoa</td>
			                      <td>27/11/2013</td>
			                    </tr>
			                    <tr>
			                      <td>1</td>
			                      <td>43</td>
			                      <td>Pizza vegetariana a S/.30.00</td>
			                      <td>playeryto</td>
			                      <td>27/11/2013</td>
			                    </tr>
			                    <tr>
			                      <td>1</td>
			                      <td>42</td>
			                      <td>Pizza vegetariana a S/.30.00</td>
			                      <td>jpacora</td>
			                      <td>27/11/2013</td>
			                    </tr>
			                  </tbody>
			                </table>
		            	</div>
		            </div>
		           </div>
		           </div>
		            
	
@endsection