<section id="home-carousel" class="home-carousel">
	<div id="anchor-top"></div>
	<div class="container-fluid no-padding">
		<div class="row">
			<div class="col-sm-12 no-padding-mobile">

				<div class="carousel-home" id="carousel-home" data-script="Carousel">
					<div class="swiper-container swiper-carousel-home">
						<div class="swiper-wrapper">

						<?php
							$count = 0;

							if ( have_rows('carousel_home_minuano3000') ) :
								while ( have_rows('carousel_home_minuano3000') ) :
									the_row();

									$background_sec_minuano3000 = get_sub_field('background_sec_minuano3000')['url'];
									$title_minuano3000 = get_sub_field('title_minuano3000_home');
									$description_image_minuano3000 = get_sub_field('description_image_minuano3000_home')['url'];
									$description_minuano3000 = get_sub_field('description_minuano3000_home');
									$class_minuano3000 = get_sub_field('class_product_minuano3000_home');
									$image_url_minuano3000 = get_sub_field('image_minuano3000_home')['url'];
									$image_mobile_url_minuano3000 = get_sub_field('image_mobile_minuano3000_home')['url'];
									$selo_minuao3000 = get_sub_field('selo_minuao3000')['url'];
									$selo_description_minuano3000 = get_sub_field('selo_description_minuano3000');
									$selo_text_btn = get_sub_field('selo_text_btn');
									$selo_url_btn = get_sub_field('selo_url_btn');



									$count++;
						?>

							<div class="swiper-slide slide-bg2">
								<img src="<?= $background_sec_minuano3000 ?>" alt="" class="background-sec-minuano3000">
									<div class="col-md-3 col-md-offset-2">
										<div class="content-group">
											<p class="big-text hidden-xs" >
												<?= $title_minuano3000 ?>
											</p>

											<img src="<?= $description_image_minuano3000 ?>" class="img-mobile" alt="">

											<p class="min-text" >
												<?= $description_minuano3000 ?>
											</p>
										</div>
									</div>

									<div class="col-md-3 size-collum">
										<img src="<?= $image_url_minuano3000 ?>" class="img-mobile img-moneyback hide-mobile-bg2" alt="">
										<img src="<?= $image_mobile_url_minuano3000 ?> " class="img-mobile hide-desk-bg2 img-moneyback" alt="">
									</div>

									<div class="col-md-3">
										<div class="selo-moneyback">
											<img src="<?= $selo_minuao3000 ?>" alt="">
												<p>
													<?= $selo_description_minuano3000 ?>
												</p>
												<a class="btn btn-info" href="<?= $selo_url_btn ?>">
													<?= $selo_text_btn ?>
												</a>
											</div>
									</div>

									<!-- <p class="description uppercase hidden-sm hidden-lg hidden-md">
										<?= $arr[1]; ?>
									</p> -->

							</div>

							<?php endwhile; endif; ?>


								<?php
									$count = 0;

									if ( have_rows('carousel_home') ) :
										while ( have_rows('carousel_home') ) :
											the_row();

											$background_sec = get_sub_field('background_sec_home')['url'];
											$title = get_sub_field('title_home');
											$description = get_sub_field('description_home');
											$class = get_sub_field('class_product_home');
											$image_url = get_sub_field('image_home')['url'];
											$image_mobile_url = get_sub_field('image_mobile_home')['url'];
											$text_btn = get_sub_field('text_btn');
											$link_btn = get_sub_field('link_btn');

											$count++;
								?>


								<div class="swiper-slide slide-bg">
									<img src="<?= $background_sec ?> "  class="background-sec" alt="">
									<div class="background-carousel">
										<div class="col-md-4 col-md-offset-2">
											<div class="content-group">
												<div class="panel panel-skewed">
													<p class="<?= $class ?>"></p>

													<h1 class="uppercase">
														<?= $title ?>
													</h1>
												</div>

												<p class="description uppercase text-justify hidden-xs <?= $class ?>">
													<?= $description ?>
												</p>

												<p class="description uppercase text-justify hidden-sm hidden-lg hidden-md <?= $class ?>">
													<?= $description ?>
												</p>

												<a class="btn btn-info" href="<?= $link_btn ?>"><?= $text_btn ?></a>
											</div>
										</div>

										<div class="col-md-5 ">

											<img class="img-mobile hide-mobile <?= $class ?>" src="<?= $image_url ?> "  alt="">
											<img class="img-mobile hide-desk" src="<?= $image_mobile_url ?> "  alt="">

										</div>

										<!-- <p class="description uppercase hidden-sm hidden-lg hidden-md">
											<?= $title  ?>
										</p> -->
									</div>
								</div>

							<?php endwhile; endif; ?>

						</div>

						<div class="swiper-pagination"></div>

						<a href="javascript:void(0);" class="swiper-button-next hidden-sm hidden-xs"></a>
						<a href="javascript:void(0);" class="swiper-button-prev hidden-sm hidden-xs"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


