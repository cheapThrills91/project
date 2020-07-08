<section id="maxprotect-vantagens" class="maxprotect-vantagens">
	<div class="arrow-block">
		<a href="#maxprotect-vantagens">
			<span class="fa fa-angle-down"></span>
		</a>
	</div>

	<div class="container">
		<div class="row">

			<div class="swiper-container-mobile swiper-vantagens" data-script="Carousel">
				<div class="swiper-wrapper-mobile">

					<?php
						$column_size = get_field('columns_qty');
						$count = 0;

						if ( have_rows('columns') ) :
							while ( have_rows('columns') ) :
								the_row();

								$image_url = get_sub_field('icon')['url'];
								$image_alt = get_sub_field('icon')['alt'];
								$title = get_sub_field('title');
								$description = get_sub_field('description');

								$count++;
					?>

						<div class="col-xs-12 col-md-<?= $column_size ?> box-vantagens swiper-slide-mobile">
							<img src="<?= $image_url ?>" alt="<?= $image_alt ?>">

							<div class="content-wrapper">
								<h3 class="title"><?= $title ?></h3>
								<?= $description ?>

								<div class="clearfix"></div>
							</div>
						</div>

						<?php if ( $count == 1 ) : ?>
							<div class="disclaimer hidden-sm hidden-lg">
								<p>
									² Microrganismos testados:<i> Staphylococcus aureus, Salmonella choleraesuis, Escherichia coli e Trichophyton mentagrophytes</i>
								</p>
							</div>
						<?php endif; ?>

					<?php endwhile; endif; ?>
				</div>

				<div class="swiper-pagination-mobile"></div>

				<a href="javascript:void(0);" class="swiper-button-next-mobile"></a>
				<a href="javascript:void(0);" class="swiper-button-prev-mobile"></a>
			</div>

		</div>
	</div>

	<div class="disclaimer hidden-xs hidden-sm">
		<p>
			²Microrganismos testados:<i> Staphylococcus aureus, Salmonella choleraesuis, Escherichia coli e Trichophyton mentagrophytes</i>
		</p>
	</div>

	<!-- <a class="arrow-down" href="#maxprotect-timelapse">
		<span class="fa fa-angle-down"></span>
	</a> -->
</section>