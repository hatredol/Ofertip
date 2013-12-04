<!DOCTYPE html>
	<html>
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<title>Panel de Administraci&oacute;n</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
		    {{HTML::style('css/bootstrap.min.css')}}
		    {{HTML::style('css/bootstrap-theme.min.css')}}
		    {{HTML::style('css/estilos-admin.css')}}

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
			<p style="color:#fff">{{$tienda->nombrePersonaJuridica}}</p>
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
						<li><a href="/public/Panel/Perfil"><i class="fa fa-user"></i> Mi Perfil</a></li>
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

				<div class="col-md-2" style="background:#3d3d3d">
					<div class="page-sidebar navbar-collapse collapse" style="height: 0px;">
						<!-- BEGIN SIDEBAR MENU -->        
						<ul class="nav nav-tabs nav-stacked">
							
							<li>
								<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->

								<form class="sidebar-search" action="extra_search.html" method="POST">
									<div class="form-container">
										<div class="input-box">
											
										</div>
									</div>
								</form>
								<!-- END RESPONSIVE QUICK SEARCH FORM -->
							</li>
							<li class="start active ">
								<a href="{{URL::to('Panel/Usuario')}}">
								<i class="fa fa-home"></i> 
								<span class="title">Inicio</span>
								<span class="selected"></span>
								</a>
							</li>
							<li class="">
								<a href="{{URL::to('Panel/'.$tienda->urlTienda.'/Ofertas')}}">
								<i class="fa fa-briefcase"></i> 
								<span class="title">Ofertas</span>
								</a>
							</li>
							<li class="">
								<a href="{{URL::to('Panel/Suscritos')}}">
								<i class="fa fa-cogs"></i> 
								<span class="title">Suscritos</span>
								</a>
							</li>
							<li class="">
								<a href="{{URL::to('Panel/Codigos')}}">
								<i class="fa fa-cogs"></i> 
								<span class="title">Codigos de Oferta</span>
								</a>
							</li>
							<li class="">
								<a href="{{URL::to('Panel/Reportes')}}">
								<i class="fa fa-gift"></i> 
								<span class="title">Reportes</span>
								</a>
							</li>
							<li class="">
								<a href="#">
								<i class="fa fa-bookmark-o"></i> 
								<span class="title">Salir</span>
								
								</a>
								
							</li>
						</ul>
						<!-- END SIDEBAR MENU -->
					</div>
				</div>
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
								<li class="pull-right" style="background:#e02222; color:#fff; padding:10px">
									
										<i class="fa fa-calendar"></i>
										<span>27 de Noviembre de 2013</span>
										<i class="fa fa-angle-down"></i>
									
								</li>
							</ul>
							<!-- END PAGE TITLE & BREADCRUMB-->
						</div>
						<div class="col-md-12 text-center">
							
							<img src="{{URL::asset('img/logo.png')}}" alt="">
						</div>
					</div>
					@yield('Contenido')
				</div>
			</div>
			
			
		</div>
		  {{HTML::script('js/bootstrap.min.js')}}
	    </body>
		
		<footer>
					
		</footer>		
	</body>
</html>