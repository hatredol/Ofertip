<!DOCTYPE html>
	<html>
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Ofertip</title>
			{{HTML::style('css/bootstrap.min.css')}}
			{{HTML::style('font-awesome/css/font-awesome.min.css')}}
		    {{HTML::style('css/website.css')}}
		    
	</head>
	<body>
		<header id="header" class="">
		    <nav role="navigation">
		      <div class="container">
		        <!-- Brand and toggle get grouped for better mobile display -->
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		            <span data-icon="" aria-hidden="true"></span>
		          </button>
		          <a class="navbar-brand" href=""><img src="img/logo.png" class="img-responsive" alt="" style="margin-bottom: 24px; margin-top: 24px"></a>
		        </div>
		        <div id="main-nav" class="collapse navbar-collapse navbar-collapse">          
		          <ul class="nav navbar-nav fancy-nav navbar-right">
		            <!--////////// NAVIGATION MENU //////////-->
		            <li class="active"><a href="#section-home"><span data-hover="home">Inicio</span></a></li>
		            <li><a href="#section-tour"><span data-hover="tour">¿Como Funciona?</span></a></li>
		            <li><a href="#section-portfolio"><span data-hover="work">Beneficios</span></a></li>
		            <li><a href="#section-pricing"><span data-hover="pricing">Planes</span></a></li>
		            <li class=""><a href="#section-contact"><span data-hover="contact">Contacto</span></a></li>
		            <li class=""><a href="#modalRegistro" data-toggle="modal" data->
					  <i class="fa fa-user fa-2x"></i></a>
					</button></li>
		          </ul>
		        </div><!-- /navbar-collapse -->
		      </div><!-- /container -->
		    </nav>
		    @include('Usuario.formRegistro')
	  	</header>
		
		@include('WebSite.funcionamiento')

		<footer>

		</footer>
		{{HTML::script('http://codeorigin.jquery.com/jquery-2.0.3.min.js')}}
		{{HTML::script('js/bootstrap.min.js')}}

	</body>
</html>