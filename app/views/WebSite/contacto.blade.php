<section id="contacto">
	<div class="container">
		<h1 class="text-center">¿Quieres una demostración?</h1>
		<div class="clearfix"></div>
		<div class="row">
        <div class="col-md-5 col-sm-7">
          <h2 class="hidden-xs">Estamos para ayudarle!</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi perferendis sapiente obcaecati totam nihil iure possimus dicta magni illo aliquam! Quasi, voluptates, repudiandae itaque quas dolores atque animi obcaecati distinctio.</p>
          <hr class="visible-xs">
          <h2>Detalle de Contacto</h2>
          <div class="row">
            <div class="col-md-4 col-xs-6 text-left">
              <strong>Direccion</strong>
            </div>
            <div class="col-md-8 col-xs-6">
              <address>
                <strong>Ofertip</strong><br>
                Calle Tacna #159<br>
                Tacna, Peru<br>
              </address>
            </div>
          </div><!-- /row -->

          <div class="row">
            <div class="col-md-4 col-xs-6 text-left">
              <strong>Telefono Fijo</strong>
            </div>
            <div class="col-md-8 col-xs-6">
              <address>
                +51 (0) 243 888 888<br>
              </address>
            </div>
          </div><!-- /row -->

          <div class="row">
            <div class="col-md-4 col-xs-6 text-left">
              <strong>Telefono Movil</strong>
            </div>
            <div class="col-md-8 col-xs-6">
              <address>
                +51 (0) 424 999 999<br>
              </address>
            </div>
          </div><!-- /row -->
        </div><!-- /col-md-5 -->

        <div class="col-md-7 col-sm-5">
          <!--////////// CONTACT FORM STARTS HERE ///////////-->
          <div class="contact-form">
            <form id="formContacto" class="form-horizontal">
              <div class="row">
                <div class="form-group">
                  <label for="name" class="col-md-3 control-label">Nombre</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" id="name" name="nombre" placeholder="Nombre">
                  </div>
                </div><!-- end form-group -->
              </div><!-- /row -->

              <div class="row">
                <div class="form-group">
                  <label for="email" class="col-md-3 control-label">E-mail</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" id="email" name="email" placeholder="ofertipd@mail.com">
                  </div>
                </div><!-- end form-group -->
              </div><!-- /row -->

              <div class="row">
                <div class="form-group textarea">
                  <label for="message" class="col-md-3 control-label">Mensaje</label>
                  <div class="col-md-9">
                    <textarea class="form-control" id="message" name="mensaje" rows="8" placeholder="Escribe un Mensaje..."></textarea>
                  </div>
                </div><!-- end form-group -->
                
                <input type="hidden" name="save" value="contact">
                <div id="contact-error" class="text-right"></div>
                <button class="btn btn-large btn-primary contact-submit pull-right" type="submit" name="enviar">Enviar!</button>
              </div><!-- /row -->
            </form>
          </div><!-- /contact-form -->
          <!-- ////////// END CONTACT FORM -->
        </div><!-- /col-md-7 -->
      </div>
	</div>
</section>