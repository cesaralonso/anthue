
<?php $this->layout('master', ['title' => 'Photo Gallery', 'main' => false, 'description' => 'Algunas imagenes de nuestras clases']) ?>
<!-- Gallery
	================================================== -->
<section id="gallery" class="parallax section" style="background-image: url(assets/images/piano1.jpg);">
<div class="wrapsection">
	<div class="parallax-overlay" style="background-color:#00c1c1;opacity:0.9;"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 sol-sm-12">
				<div class="maintitle">
					<h3 class="section-title">Galeria Antonio Huerta</h3>
					<br>
					<!-- <p class="lead wow flipInX">
						Contamos con cómodas suites de 1, 2, 3 y 4 recámaras, además de lindos estudios.
					</p> -->
				</div>
			</div>

				<?php 
					$total_imagenes =glob('assets/images/gallery/{*.jpeg,*.jpg,*.gif,*.png}',GLOB_BRACE);
					foreach($total_imagenes as $v){
						// echo "'.$v.' \n";
						echo '
								<div class="col-md-4">
									<a href="'.$v.'" title="">
										<img height="5px" src="'.$v.'" alt="" class="image-responsive">
										<div class="description">
											<span class="caption">Master Suite  <b>Mountain View</b></span>
											<span class="camera"><i class="fa fa-camera"></i></span>
											<div class="clearfix"></div>
										</div>
									</a>
								</div>
							';
					}
					
				?>
			<!-- <div class="col-md-4">
				<a href="assets/images/clases/1.jpeg" title="This is the description">
					<img src="assets/images/clases/1.jpeg" alt="" class="image-responsive">
					<div class="description">
						<span class="caption">Master Suite  <b>Mountain View</b></span>
						<span class="camera"><i class="fa fa-camera"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
			<div class="col-md-4">
				<a href="assets/images/clases/2.jpeg" title="This is the description">
				<img src="assets/images/clases/2.jpeg" alt="" class="image-responsive">
					<div class="description">
						<span class="caption">Master Suite <b>Ocean Front</b></span>
						<span class="camera"><i class="fa fa-camera"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
			<div class="col-md-4">
				<a href="assets/images/clases/3.jpeg" title="This is the description">
				<img src="assets/images/clases/3.jpeg" alt="" class="image-responsive">
					<div class="description">
						<span class="caption">Suite <b>Mountain View</b></span>
						<span class="camera"><i class="fa fa-camera"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
			<div class="col-md-4">
				<a href="assets/images/clases/4.jpeg" title="This is the description">
				<img src="assets/images/clases/4.jpeg" alt="" class="image-responsive">
					<div class="description">
						<span class="caption">Suite  <b>Ocean View</b></span>
						<span class="camera"><i class="fa fa-camera"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
			<div class="col-md-4">
				<a href="assets/images/clases/1.jpeg" title="This is the description">
				<img src="assets/images/clases/1.jpeg" alt="" class="image-responsive">
					<div class="description">
						<span class="caption">Master Suite <b>Ocean Front </b></span>
						<span class="camera"><i class="fa fa-camera"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
			<div class="col-md-4">
				<a href="assets/images/clases/5.jpeg" title="This is the description">
				<img src="assets/images/clases/5.jpeg" alt="" class="image-responsive">
					<div class="description">
						<span class="caption">Master Suite <b>Ocean View</b></span>
						<span class="camera"><i class="fa fa-camera"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div> -->
		</div>
	</div>
</div>
</section>