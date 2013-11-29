<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Administracion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{HTML::style('css/bootstrap.min.css')}}
    {{HTML::style('css/bootstrap-theme.min.css')}}
    {{HTML::script('http://codeorigin.jquery.com/jquery-2.0.3.min.js')}}
    {{HTML::script('http://code.jquery.com/ui/1.10.3/jquery-ui.js')}}
    {{HTML::script('js/bootstrap.min.js')}}
    <script type="text/javascript">

    var Login = {
      entrar: function() {
            $.ajax({
              type: 'POST',
              url: 'Panel/Usuario/Login',
              datatype: 'json',
              data : $('#formLogin').serialize(),
              success: function(data)
              {
                if(data.indicadorLogin == 'Falso') {
                  $("#formLogin").effect("shake", { times: (4) }, 150);
                } else {
                  window.location ="/Panel/dashboard";
                }
              }
            });
        },
      ResetFRM: function() {
        $('#ResetFRM').slideToggle();
      }
    }

  
    </script>
</head>
<body>
	<div style="padding: 0 15px">
    <div class="row" >
      <div class="col-md-3 col-md-offset-5 well" style="margin-top:160px;margin-bottom: 0px;border-radius:0px">
      	  <p class="text-right"><a href="" class="btn btn-link">Registrate gratis!</a></p>
          <h2>Ingreso al Sistema</h2>
          {{ Form::open(array('id'=>'formLogin','onsubmit'=>'Login.entrar();return false;')) }}
              <div class="form-group">
                <label for="email">Usuario:</label>
                <input type="text" class="form-control input-lg" name="usuario" placeholder="Ingresa tu email">
              </div>
              <div class="form-group">
                <label for="password">Contrase&ntilde;a:</label>
                <input type="password" class="form-control input-lg" name="password" placeholder="Escribe tu Contrase&ntilde;a">
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox">Recordar contrase&ntilde;a
                </label>
                
              </div>
                {{Form::submit('Enviar', ['class' => 'btn btn-default'])}}
              	<a href="#" onclick="Login.ResetFRM(); return false;" class="btn btn-link">Olvidaste tu contrase&ntilde;a?</a>
	         {{ Form::close() }}
	            
      </div>
      
    </div>
    <div class="row" style="margin-top: 0px; display: none" id="ResetFRM">
	    <div class="col-md-3 col-md-offset-5 well" style="border-top-right-radius: 0px; border-top-left-radius:  0px;border-bottom-right-radius: 10px; border-bottom-left-radius:  10px;" >
	      	<form>
	      		<small style="margin-bottom: 20px">Si has olvidado tu contrase&ntilde;a, escribe tu mail para recuperarla, ¡AQUI!</small>
	      		<div class="form-group">
	                <div class="input-group">
				      <input type="text" class="form-control" name="recuperarEmail" placeholder="Ingresa tu e-mail">
				      <span class="input-group-btn">
				        <button class="btn btn-default" type="button">Recuperar!</button>
				      </span>
				    </div>
	            </div>
	        </form>
	    </div>
     </div>
     
    @include('Tienda.formCambiarTienda')
   </div>
</body>
</html>