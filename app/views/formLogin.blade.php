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
    <div class="row">
      <div class="col-md-3 col-md-offset-5" style="margin-top:200px">
          <h2>Ingreso al Sistema</h2>
          {{ Form::open(array('url' => 'foo/bar')) }}
    
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Ingresa tu email">
              </div>
              <div class="form-group">
                <label for="password">Contrase&ntilde;a:</label>
                <input type="password" class="form-control" id="password" placeholder="Escribe tu Contrase&ntild;a">
              </div>
              
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Recordar contrase&ntilde;a
                </label>
                
              </div>

              <button type="submit" class="btn btn-default">Entrar</button>
            {{ Form::close() }}
            <a href="">Registrate gratis!</a>
            <a href="">Olvidaste tu contrase&ntilde;a?</a>
      </div>
    </div>
    
</body>
</html>