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
		<header id="header" class="morph-header-large">

		    <nav role="navigation">
		      <div class="container">
		        <!-- Brand and toggle get grouped for better mobile display -->
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		          	
		            <span data-icon="fa fa-bars fa-4x" aria-hidden="true"></span>
		          </button>
		          <a class="navbar-brand" href=""><img src="img/ofertip.png" class="img-responsive" alt="" style="margin: 15px 0 24px;"></a>
		        </div>
		        <div id="main-nav" class="collapse navbar-collapse navbar-collapse">          
		          <ul class="nav navbar-nav fancy-nav navbar-right">
		            <!--////////// MENU //////////-->
		            
		            <li class="active"><a href="#funcionamiento"><span data-hover="¿Como Funciona?">¿Como Funciona?</span></a></li>
		            <li><a href="#beneficios"><span data-hover="Beneficios">Beneficios</span></a></li>
		            <li><a href="#inicio"><span data-hover="Locaciones">Locaciones</span></a></li>
		            <li><a href="#planesyprecios"><span data-hover="Planes y Precios">Planes y Precios</span></a></li>
		            <li class=""><a href="#contacto"><span data-hover="Contacto">Contacto</span></a></li>
		            <!-- <li class=""><a href="#modalRegistro" data-toggle="modal" data->
					  <i class="fa fa-user fa-2x"></i></a>
					</button></li> -->
		          </ul>
		        </div><!-- /navbar-collapse -->
		      </div><!-- /container -->
		    </nav>
		   <!--  @include('Usuario.formRegistro') -->
	  	</header>
	  	<section class="section" id="inicio" data-section="1">
			<div class="row">
					<div id="inicio-Izquierdo" class="col-md-6 text-right" >
						<img src="img/telefono.png" alt="imagen celulares">
					</div>
					<div id="inicio-Derecho"class="col-md-6 ">
						<h1>Suscribete a los Mejores</h1>
						<h1>Recibe las Mejores Ofertas</h1>
								
						<p>Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. Quo mundi lobortis reformidans eu, legimus senserit definiebas an eos.
						</p>	
						<div id="descargas">
							<div id="googleplay">
				                <a href="#" >
								   	<img src="img/googleplay.png" >
				                </a>
				            </div>
						</div>
					</div>			
					
			</div>
			</div>
		</section>
		@include('WebSite.funcionamiento')
		@include('WebSite.beneficios')
		@include('WebSite.negocios')
		@include('WebSite.planesyprecios')
		@include('WebSite.contacto')
				
		<footer>
		</footer>
		{{HTML::script('http://codeorigin.jquery.com/jquery-2.0.3.min.js')}}
		{{HTML::script('js/bootstrap.min.js')}}
		{{HTML::script('js/website.js')}}

	</body>
</html>