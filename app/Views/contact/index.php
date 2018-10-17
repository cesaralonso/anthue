<?php $this->layout('master', ['title' => 'Contáctanos', 'main' => false, 'description' => '']) ?>
<!-- Contact
	================================================== -->
<section id="contactarea" class="parallax section" style="background-image: url(assets/images/suite13.jpg);">
<div class="wrapsection">
	<div class="parallax-overlay" style="background-color: #1cbb9b;opacity:0.95;"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="maintitle">
					<h3 class="section-title"><strong>Antonio Huerta Navarro.</strong></h3>
					<p class="lead">
						Preguntas? Comentarios?<br>
						No dude en enviarnos un mensaje y nos pondremos en contacto con usted lo antes posible.
					</p>
				</div>
				<form id="contact" name="contact" method="post" class="text-left">
					<fieldset>
						<div class="row">
							<div class="col-md-4 wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
								<label for="name">Nombre<span class="required">*</span></label>
								<input type="text" name="name" id="name" size="30" value="" required/>
							</div>
							<div class="col-md-4 wow fadeIn animated" data-wow-delay="0.3s" data-wow-duration="2s">
								<label for="email">Email<span class="required">*</span></label>
								<input type="text" name="email" id="email" size="30" value="" required/>
							</div>
							<div class="col-md-4 wow fadeIn animated" data-wow-delay="0.3s" data-wow-duration="2s">
								<label for="phone">Teléfono</label>
								<input type="text" name="phone" id="phone" size="30" value=""/>
							</div>
						</div>
						<div class="wow fadeIn animated" data-wow-delay="0.3s" data-wow-duration="1.5" style="margin-top:15px;">
							<label for="message">Mensaje<span class="required">*</span></label>
							<textarea name="message" id="message" required ></textarea>
						</div>
						<div class="wow fadeIn animated" data-wow-delay="0.3" data-wow-duration="1.5s">
							<input id="submit" type="submit" name="submit" value="Enviar" class="btn btn-success"/>
						</div>
					</fieldset>
				</form>
				<div id="success">
					<p class="contactalert">
						Su mensaje fue enviado con éxito! Estaré en contacto tan pronto como pueda.
					</p>
				</div>
				<div id="error">
					<p class="contactalert">
						Algo salió mal, intente actualizar y volver a enviar el formulario.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
</section>