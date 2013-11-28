@extends('Template.templatePanelAdministracion')
@section('Contenido')
					
					<div class="row" style="margin-top:50px">
		              
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
		            <div class="col-lg-4">
			       	<p>Ingrese el codigo de promoci&oacute;n:</p>
					    <div class="input-group">
					    	
					      <input type="text" class="form-control">
					      <span class="input-group-btn">
					        <button class="btn btn-default" type="button">Verificar!</button>
					      </span>
					    </div>
					    <div class="alert alert-success">Felicidades! Codigo verificado correctamente</div>
					    <div class="alert alert-danger">Error! El codigo no pudo ser verificado</div>
				  </div>
				  
	           </div>
		       
@endsection