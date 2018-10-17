<?php $this->layout('master', ['title' => 'Photo Gallery', 'main' => false, 'description' => 'Conoce importantes participaciones. | Algunas imagenes de mis clases']) ?>

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
					<p class="lead wow flipInX">
						Conoce importantes participaciones.
					</p>
					</div>
				</div>

				<?php 
					$total_imagenes =glob('assets/images/gallery/{*.jpeg,*.jpg,*.gif,*.png}',GLOB_BRACE);
					$cont = 0;
					foreach($total_imagenes as $v){
						$cont++;
						
						echo '
								<div class="col-md-4">
									<a href="'.$v.'" title="">
										<img height="5px" src="'.$v.'" alt="" class="image-responsive" style="height:350px;">
										<div class="description">
											<span class="caption">Foto # <b>'.$cont.'</b></span>
											<span class="camera"><i class="fa fa-camera"></i></span>
											<div class="clearfix"></div>
										</div>
									</a>
								</div>
							';
					}
					
				?>
				
			</div>
		</div>

		<div class="row">
			<div class="col">
				<div class="card-columns">
					<div class="card wow fadeIn animated" data-wow-delay="0.3" data-wow-duration="1.5s" style="border-radius: 0px !important;">
						<a href="../assets/images/clases-musica.jpg" title="¿Amas la musica? Aprende con nosotros">
							<img style="cursor: zoom-in; opacity: .7;" src="../assets/images/clases-musica.jpg" class="img-fluid card-img-top">
							<div class="description">
								<span class="caption">Clases de Musica</span>
								<span class="camera"><i class="fa fa-camera"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
					<div class="card wow fadeIn animated" data-wow-delay="0.3" data-wow-duration="1.5s" style="border-radius: 0px !important;">
						<a href="../assets/images/jazzdelbeneficio.jpg" title="Imagen de Ejemplo">
							<img style="cursor: zoom-in; opacity: .7;" src="../assets/images/jazzdelbeneficio.jpg" class="img-fluid card-img-top">
							<div class="description">
								<span class="caption">Jazz para el beneficio</span>
								<span class="camera"><i class="fa fa-camera"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
					<div class="card wow fadeIn animated" data-wow-delay="0.3" data-wow-duration="1.5s" style="border-radius: 0px !important;">
						<a href="../assets/images/musicos-a-moderna.jpg" title="Imagen de Ejemplo">
							<img style="cursor: zoom-in; opacity: .7;" src="../assets/images/musicos-a-moderna.jpg" class="img-fluid card-img-top ">
							<div class="description">
								<span class="caption">Musico armonía moderna</span>
								<span class="camera"><i class="fa fa-camera"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
					<div class="card wow fadeIn animated" data-wow-delay="0.3" data-wow-duration="1.5s" style="border-radius: 0px !important;">
						<a href="../assets/images/conciertogrtransicion.jpg" title="Imagen de Ejemplo">
							<img style="cursor: zoom-in; opacity: .7;" src="../assets/images/conciertogrtransicion.jpg" class="img-fluid card-img-top ">
							<div class="description">
								<span class="caption">Concierto en los Arcos del Malecón</b></span>
								<span class="camera"><i class="fa fa-camera"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
					<div class="card wow fadeIn animated" data-wow-delay="0.3" data-wow-duration="1.5s" style="border-radius: 0px !important;">
						<a href="../assets/images/tacos-2e.jpg" title="Imagen de Ejemplo">
							<img style="cursor: zoom-in; opacity: .7;" src="../assets/images/tacos-2e.jpg" class="img-fluid card-img-top ">
							<div class="description">
								<span class="caption">Proyecto taco's 2da Edición</b></span>
								<span class="camera"><i class="fa fa-camera"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
					<div class="card wow fadeIn animated" data-wow-delay="0.3" data-wow-duration="1.5s" style="border-radius: 0px !important;">
						<a href="../assets/images/festivaljazzcarlos.jpg" title="Imagen de Ejemplo">
							<img style="cursor: zoom-in; opacity: .7;" src="../assets/images/festivaljazzcarlos.jpg" class="img-fluid card-img-top ">
							<div class="description">
								<span class="caption">Participacion en  Festival de Jazz</span>
								<span class="camera"><i class="fa fa-camera"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
					<div class="card wow fadeIn animated" data-wow-delay="0.3" data-wow-duration="1.5s" style="border-radius: 0px !important;">
						<a href="../assets/images/img-proyectotaco.jpg" title="Imagen de Ejemplo">
							<img style="cursor: zoom-in; opacity: .7;" src="../assets/images/img-proyectotaco.jpg" class="img-fluid card-img-top ">
							<div class="description">
								<span class="caption">Proyecto Taco's</b></span>
								<span class="camera"><i class="fa fa-camera"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
					<div class="card wow fadeIn animated" data-wow-delay="0.3" data-wow-duration="1.5s" style="border-radius: 0px !important;">
						<a href="../assets/images/a-new-dish.jpg" title="Imagen de Ejemplo">
							<img style="cursor: zoom-in; opacity: .7;" src="../assets/images/a-new-dish.jpg" class="img-fluid card-img-top ">
							<div class="description">
								<span class="caption">Nuevo album con mucho sabor</b></span>
								<span class="camera"><i class="fa fa-camera"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
					<div class="card wow fadeIn animated" data-wow-delay="0.3" data-wow-duration="1.5s" style="border-radius: 0px !important;">
						<a href="../assets/images/pt-sabortropico.jpg" title="Imagen de Ejemplo">
							<img style="cursor: zoom-in; opacity: .7;" src="../assets/images/pt-sabortropico.jpg" class="img-fluid card-img-top ">
							<div class="description">
								<span class="caption">Sabor a tropico</span>
								<span class="camera"><i class="fa fa-camera"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
					<div class="card wow fadeIn animated" data-wow-delay="0.3" data-wow-duration="1.5s" style="border-radius: 0px !important;">
						<a href="../assets/images/festival-jazz-carlostorre.jpg" title="Imagen de Ejemplo">
							<img style="cursor: zoom-in; opacity: .7;" src="../assets/images/festival-jazz-carlostorre.jpg" class="img-fluid card-img-top ">
							<div class="description">
								<span class="caption">Festival de Jazz </b></span>
								<span class="camera"><i class="fa fa-camera"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
					<div class="card wow fadeIn animated" data-wow-delay="0.3" data-wow-duration="1.5s" style="border-radius: 0px !important;">
						<a href="../assets/images/festival-jazz-carlos-integrantes.jpg" title="Imagen de Ejemplo">
							<img style="cursor: zoom-in; opacity: .7;" src="../assets/images/festival-jazz-carlos-integrantes.jpg" class="img-fluid card-img-top ">
							<div class="description">
								<span class="caption">Grupo Abraxas	</b></span>
								<span class="camera"><i class="fa fa-camera"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
</section>