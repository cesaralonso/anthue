
<?php $this->layout('master', ['title' => 'Contact', 'main' => false, 'description' => 'Business hours 11:00am to 7:00pm These are our phone numbers: LOCAL (329) 298-0065 FROM ALL MEXICO 01-800-570-8372 Thank you for choosing us!.']) ?>
<!-- Contact
	================================================== -->
<section id="contactarea" class="parallax section" style="background-image: url(assets/images/suite13.jpg);">
<div class="wrapsection">
	<div class="parallax-overlay" style="background-color: #1cbb9b;opacity:0.95;"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="maintitle">
					<h3 class="section-title">Contact us</h3>
					<p class="lead">
						Business hours 11:00am to 7:00pm These are our phone numbers: LOCAL (329) 298-0065 FROM ALL MEXICO 01-800-570-8372 Thank you for choosing us!.
					</p>
				</div>
				<form id="contact" name="contact" method="post" class="text-left">
					<fieldset>
						<div class="row">
							<div class="col-md-4 wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
								<label for="name">Name<span class="required">*</span></label>
								<input type="text" name="name" id="name" size="30" value="" required/>
							</div>
							<div class="col-md-4 wow fadeIn animated" data-wow-delay="0.3s" data-wow-duration="2s">
								<label for="email">Email<span class="required">*</span></label>
								<input type="text" name="email" id="email" size="30" value="" required/>
							</div>
							<div class="col-md-4 wow fadeIn animated" data-wow-delay="0.3s" data-wow-duration="2s">
								<label for="phone">Phone</label>
								<input type="text" name="phone" id="phone" size="30" value=""/>
							</div>
						</div>
						<div class="wow fadeIn animated" data-wow-delay="0.3s" data-wow-duration="1.5" style="margin-top:15px;">
							<label for="message">Message<span class="required">*</span></label>
							<textarea name="message" id="message" required></textarea>
						</div>
						<div class="wow fadeIn animated" data-wow-delay="0.3" data-wow-duration="1.5s">
							<input id="submit" type="submit" name="submit" value="Send"/>
						</div>
					</fieldset>
				</form>
				<div id="success">
					<p class="contactalert">
						Your message was sent succssfully! I will be in touch as soon as I can.
					</p>
				</div>
				<div id="error">
					<p class="contactalert">
						 Something went wrong, try refreshing and submitting the form again.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
