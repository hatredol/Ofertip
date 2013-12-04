<!DOCTYPE html>
	<html>
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<title>Ofertip - Dashboard</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
		    {{HTML::style('css/bootstrap.min.css')}}
		    {{HTML::style('css/bootstrap-theme.min.css')}}
		    {{HTML::style('css/dashboard.css')}}
		    {{HTML::style('font-awesome/css/font-awesome.css')}}
		    {{HTML::script('http://codeorigin.jquery.com/jquery-2.0.3.min.js')}}
		    {{HTML::style('http://fonts.googleapis.com/css?family=Oxygen')}}
		    
	</head>
	<body>
		<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="header-inner">
			<!-- BEGIN LOGO -->  
			<a class="navbar-brand" href="index.html">
			<img src="{{URL::asset('img/logo.png')}}" alt="logo" class="img-responsive" width="20%">
			</a>
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER --> 
			<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<img src="{{URL::asset('img/sidebar-toggler.jpg')}}" alt="">
			</a> 
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<ul class="nav navbar-nav pull-right">
				
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<li class="dropdown user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" src="{{URL::asset('img/avatar.jpg')}}">
					<span class="username">Angelo Leva</span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="extra_profile.html"><i class="fa fa-user"></i> Mi Perfil</a></li>
						<li><a href="#"><i class="fa fa-tasks"></i> Mis Tiendas</a></li>
						<li class="divider"></li>
						<li><a href="login.html"><i class="fa fa-key"></i> Salir</a></li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
			</ul>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
			
		<!-- <header id="header" class="">
			
			
		</header> --><!-- /header -->
		
		<div style="padding:0 15px">
			
			<div class="row" style="margin-top:50px">
				<div class="col-md-10" style="padding-left:30px">
					<div class="row">
					
						<div class="col-md-12">
							<!-- BEGIN PAGE TITLE & BREADCRUMB-->
							<h3 class="page-title">
								Panel de Administracion <small>Su centro de monitoreo</small>
							</h3>
							<ul class="page-breadcrumb breadcrumb">
								<li>
									<i class="fa fa-home"></i>
									<a href="index.html">Inicio</a> 
									<i class="fa fa-angle-right"></i>
								</li>
								<li><a href="#">Panel</a></li>
								<li><a href="#">Dashboard</a></li>
							</ul>
							<!-- END PAGE TITLE & BREADCRUMB-->
						</div>

					</div>
					<div id="listaDash" class="col-md-12">
						<ul>
							@foreach($tiendas as $tienda)
							<li class="col-md-3 clearfix">
		                        <a href="{{URL::to('Panel/'.$tienda->urlTienda)}}" style="border: 1px solid #D1AD1F; box-shadow: 1px 1px 10px rgba(179, 144, 36, 0.2); background-color: #FFE99B;">
		                            {{$tienda->nombrePersonaJuridica}}
		                            <span class="img"><img src="https://www.markacomercial.com/static/img/tiendatemplate1.jpg" width="100%">
		                            </span>
		                        </a>
	                    	</li>
	                    	@endforeach
	                    </ul>
					</div>

				</div>
			</div>
			
			
		</div>
		  {{HTML::script('js/bootstrap.min.js')}}
	    </body>
		
		<footer>
					
		</footer>		
	</body>
</html>