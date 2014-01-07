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
		<header>
	        <div class="side-nav">
	          <ul id="gn-menu" class="gn-menu-main">
	            <li class="gn-trigger">
	              <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
	              <nav class="gn-menu-wrapper">
	                <div class="gn-scroller">
	                  <ul id="main-nav" class="gn-menu">
	                    <li class="current"><a href="#intro"><i class="gn-icon icon-home"></i>Home</a></li>
	                    <li class=""><a href="#about"><i class="gn-icon linecon-bulb"></i>About</a></li>
	                    <li class=""><a href="#about-1"><i class="gn-icon linecon-star"></i>Features</a></li>
	                    <li><a href="#testimonials"><i class="gn-icon linecon-like"></i>Testimonials</a></li>
	                    <li><a href="#pricing"><i class="gn-icon linecon-banknote"></i>Pricing</a></li>
	                  </ul>
	                </div><!-- /gn-scroller -->
	              </nav>
	            </li>

	            <!-- logo -->
	            <li class="logo-wrapper"><a class="logo home" href="index-full.html">CASSIUS</a></li>

	            <!-- top right: call to action -->
	            <li class="cta"><a href="login.html">Login</a></li>
	            <li class="cta hidden-xxsm"><a href="signup.html">Sign up</a></li>
	          </ul>
	        </div>

	        <div id="nav" class="col-lg-3 section-header hidden-xs">
	          <a class="display prev" id="prev" href="#"><span aria-hidden="true" class="icon-angle-up"></span></a>
	          <a class="display next" id="next" href="#"><span aria-hidden="true" class="icon-angle-down"></span></a>
	        </div>
	    </header>
	  	<section class="section" id="inicio" data-section="1">
			<div class="container" style="padding: 0 15px">
			<div class="row">
					<div id="inicio-Derecho" class="col-md-6 text-right" >
						<img src="http://placehold.it/350x222" alt="imagen celulares">
					</div>
					<div id="inicio-Izquierdo"class="col-md-6 ">
						<h1>Titulo Mensaje 1</h1>
						<h1>Titulo Mensaje 2</h1>
								
						<p>Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. Quo mundi lobortis reformidans eu, legimus senserit definiebas an eos.
						</p>	
						<div id="descargas">
							<div id="googleplay">
				                <a href="#" target="_blank">
								   	<img src="http://placehold.it/194x70" width="194" height="70">
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