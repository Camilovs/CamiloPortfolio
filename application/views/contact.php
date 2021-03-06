<!-- Contact Section-->
<section class="page-section" id="contact">
	<div class="container">
		<!-- Contact Section Heading-->
		<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contáctame</h2>
		<!-- Icon Divider-->
		<div class="divider-custom">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
			<div class="divider-custom-line"></div>
		</div>
		<!-- Contact Section Form-->
		<div class="row">
			<div class="col-sm-7 mx-auto">
				<!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
				<form id="contactForm" name="sentMessage" novalidate="novalidate" action="<?php echo base_url();?>/welcome/validar">
					<div class="control-group">
						<div class="form-group floating-label-form-group controls mb-0 pb-2">
							<label>Nombre</label>
							<input class="form-control" id="name" type="text" placeholder="Nombre" required="required"
								   data-validation-required-message="Please enter your name." />
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="control-group">
						<div class="form-group floating-label-form-group controls  mb-0 pb-2">
							<label>Correo electrónico</label>
							<input class="form-control" id="email" type="email" placeholder="Correo electrónico"
								   required="required" data-validation-required-message="Please enter your email address." />
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="control-group">
						<div class="form-group floating-label-form-group controls mb-0 pb-2">
							<label>Número Telefónico</label>
							<input class="form-control" id="phone" type="tel" placeholder="Número Telefónico"
								   required="required" data-validation-required-message="Please enter your phone number." />
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="control-group">
						<div class="form-group floating-label-form-group controls mb-0 pb-2">
							<label>Mensaje</label>
							<textarea class="form-control" id="message" rows="5" placeholder="Mensaje" required="required"
									  data-validation-required-message="Please enter a message."></textarea>
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="control-group">
						<div class="form-group floating-label-form-group controls mb-0 pb-2">
							<?php echo $this->recaptcha->render();?>
						</div>
					</div>
					<br />
					<div id="success"></div>
					<div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Send</button></div>
				</form>
			</div>
		</div>
	</div>
</section>
