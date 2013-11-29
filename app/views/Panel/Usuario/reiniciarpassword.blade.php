<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Administracion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{HTML::style('css/bootstrap.min.css')}}
    {{HTML::style('css/bootstrap-theme.min.css')}}
    {{HTML::script('http://codeorigin.jquery.com/jquery-2.0.3.min.js')}}
    {{HTML::script('js/bootstrap.min.js')}}
    
</head>
<body>
	<div style="padding: 0 15px">
    <div class="row" >
      <div class="col-md-6 col-md-offset-3 well" style="margin-top:200px;margin-bottom: 0px;border-radius:0px">
          <small>Cambia la contraseña de tu usuario para poder ingresar a tu panel.</small>
          
          {{ Form::open(array('url' => 'Panel/Usuario/Login','id'=>'formLogin')) }}
    
              <div class="form-group">
                <label for="email">Nueva Contrase&ntilde;a:</label>
                <input type="password" class="form-control input-lg col-lg-4 " name="password" placeholder="Escribe tu Contrase&ntilde;a Nueva">
              </div>
              <div class="form-group">
                <label for="password">Repetir Nueva Contrase&ntilde;a:</label>
                <input type="password" class="form-control input-lg col-lg-4" name="re-password" placeholder="Escribe Nuevamente tu Contrase&ntilde;a">
              </div>
              &nbsp;
                <div class="form-group" style="margin-top: 10px">
               	<a onclick="" class="btn btn-default">Cambiar Contrase&ntilde;a</a>
              </div>
        </div>  
	            {{ Form::close() }}
      </div>
    </div>
  </div>
</body>
</html>