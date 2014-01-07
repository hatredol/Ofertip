<!DOCTYPE html>
	<html>
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Ofertip</title>
			<!-- CSS -->
			{{HTML::style('css/bootstrap.min.css')}}
			{{HTML::style('font-awesome/css/font-awesome.min.css')}}
		    {{HTML::style('css/website.css')}}
		    {{HTML::style('http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css')}}
		    {{HTML::style('css/jquery-tagit.css')}}
		    
			<!-- JS -->
		    {{HTML::script('http://codeorigin.jquery.com/jquery-1.7.1.min.js')}}
		    {{HTML::script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js')}}

		    {{HTML::script('js/tag-it.js')}}
	</head>
	<body>
		<header id="headere" style="background: #2d2d2d" class="">
		    <nav role="navig">
		      <div class="container">
		        <!-- Brand and toggle get grouped for better mobile display -->
		        <div class="navpage">
		          <a class="navpage-brand" href=""><img src="img/logo.png" class="img-responsive" width="10%" alt="" ></a>
		        </div>
		      </div><!-- /container -->
		    </nav>
	  	</header>
	  	@yield('Contenido')

		<footer>
		</footer>
		
		{{HTML::script('js/bootstrap.min.js')}}
		{{HTML::script('js/website.js')}}
		

	</body>
</html>