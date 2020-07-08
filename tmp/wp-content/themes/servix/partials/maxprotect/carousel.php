<?php if ( have_rows('carousel_videos') ) : ?>
	<section id="maxprotect-carousel" class="diagonal-carousel">
		<a class="arrow-down" href="#maxprotect-carousel">
			<span class="fa fa-angle-down"></span>
		</a>

		<div class="container">
			<div class="row">
				<div class="col-sm-12 no-padding-mobile">

					<div class="carousel-wrapper" id="carousel-wrapper" data-script="Carousel">
						<div class="swiper-container swiper-carousel">
							<div class="swiper-wrapper">

								<?php
									$count = 0;

									if ( have_rows('carousel_videos') ) :
										while ( have_rows('carousel_videos') ) :
											the_row();

											$image_url = get_sub_field('image')['url'];
											$image_alt = get_sub_field('image')['alt'];
											$title = get_sub_field('title');
											$description = get_sub_field('description');
											$episode = get_sub_field('episode');

											$count++;
								?>

									<div class="swiper-slide">
										<div class="content-center">
											<div class="panel panel-skewed">
												<p></p>
												<h1 class="uppercase" data-script="PanelWidth">
													<i class="fa fa-youtube-play"></i>
													<span><?php echo $title; ?></span>
												</h1>
											</div>

											<a href="javascript:void(0);" data-toggle="modal" data-target="#modalCarousel<?= $count; ?>">
												<span class="fa fa-play"></span>
												<img class="img-responsive" src="<?= $image_url ?>" alt="<?= $image_alt ?>">
											</a>

											<div class="social">
												<?php if ( $episode != '.' ) : ?>
													<p><?= $episode ?></p>
												<?php endif; ?>
												<ul>
													<li>Compartilhe:</li>

													<?php
														if ( have_rows('social_share') ) :
															while ( have_rows('social_share') ) :
																the_row();

																$social = get_sub_field('icon');
																$social_url = get_sub_field('url_sharer');
													?>

														<?php if ( $social == 'facebook' ) : ?>
															<li><a href="<?= $social_url ?>"><span class="fa fa-facebook"></span></a></li>
														<?php elseif ( $social == 'twitter' ) : ?>
															<li><a href="<?= $social_url ?>"><span class="fa fa-twitter"></span></a></li>
														<?php endif; ?>

													<?php endwhile; endif; ?>
												</ul>
											</div>
										</div>
									</div>

								<?php endwhile; endif; ?>
							</div>

							<div class="swiper-pagination"></div>

							<a href="javascript:void(0);" class="swiper-button-next"></a>
							<a href="javascript:void(0);" class="swiper-button-prev"></a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php
	$count = 0;

	if ( have_rows('carousel_videos') ) :
		while ( have_rows('carousel_videos') ) :
			the_row();

			$video_url = get_sub_field('video_url');

			$count++;

?>

	<div class="modal modal-video fade" id="modalCarousel<?= $count ?>" tabindex="-1" role="dialog" aria-labelledby="modalCarousel<?= $count ?>Label">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="fa fa-close"></span></button>

					<div class="embed-responsive embed-responsive-16by9">
					<iframe src="<?= $video_url ?>" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen ></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php endwhile; endif; ?>