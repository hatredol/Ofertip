<!DOCTYPE html>
	<html>
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<title>Panel de Administraci&oacute;n</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
		    {{HTML::style('css/bootstrap.min.css')}}
		    {{HTML::style('css/bootstrap-theme.min.css')}}
		    {{HTML::style('css/estilos.css')}}
		    {{HTML::style('font-awesome/css/font-awesome.css')}}
		    {{HTML::script('http://codeorigin.jquery.com/jquery-2.0.3.min.js')}}
		    
		    {{HTML::style('http://fonts.googleapis.com/css?family=Oxygen')}}
		    
	</head>
	<body>
			<ul class="nav navbar-nav navbar-right">
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<li class="dropdown user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" src="/public/img/avatar.jpg">
					<span class="username">Usuario</span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="extra_profile.html"><i class="fa fa-user"></i> Mi Perfil</a></li>
						<li><a href="inbox.html"><i class="fa fa-envelope"></i> Mis Ofertas</a></li>
						<li class="divider"></li>
						<li><a href="login.html"><i class="fa fa-key"></i> Salir</a></li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
			</ul>
		<header id="header" class="">
			<h2>Panel de Administracion</h2>
			
		</header><!-- /header -->
		<hr>
		<div style="padding:0 15px">
			<div class="row">
				<div class="col-md-2">
					<ul class="nav nav-tabs nav-stacked">
                        <li><a href="">Inicio</a></li>
		                <li><a href="">Editar Perfil</a></li>
		            </ul>
				</div>
				<div class="col-md-10">
					<div class="row text-center">
						<div class="col-md-3" style="background:#3498db">
	               		 	<i class="fa fa-shopping-cart fa-2x" style="color: #fff;"></i><a href="#"><h2 style="color:#fff; margin:20px; font-size: 1.5em">Mis Tiendas</h2></a>
	              		</div>
	              		<div class="col-md-3" style="background:#2ecc71">
	                		<i class="fa fa-user fa-2x" style="color: #fff;"></i><a href="#"><h2 style="color:#fff; margin:20px; font-size: 1.5em">Mi Perfil</h2></a>
	              		</div>
	              		
					</div>
					<div class="row" style="margin-top:50px">
		              <div class="col-md-6">
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
		                  </tbody>
		                </table>
		              </div>
		              <div class="col-md-6">
		               
		               
		              </div>
		            </div>
				</div>
			</div>
			
			
		</div>
		  {{HTML::script('js/bootstrap.min.js')}}
	    </body>
		@yield('Contenido')
		<footer>
					
		</footer>		
	</body>
</html>