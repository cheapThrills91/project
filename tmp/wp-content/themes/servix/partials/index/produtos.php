<?php
	$title_products = get_field('title_products');
	$subtitle_products = get_field('subtitle_products');
	//Roupas
	$title_roupas = get_field('title_roupas');
	$slide01_product_roupas = get_field('slide01_product_roupas')['url'];
	$slide02_product_roupas = get_field('slide02_product_roupas')['url'];
	$slide03_product_roupas = get_field('slide03_product_roupas')['url'];

	//Casa
	$title_casa = get_field('title_casa');
	$slide01_product_casa = get_field('slide01_product_casa')['url'];
	$slide02_product_casa = get_field('slide02_product_casa')['url'];
	$slide03_product_casa = get_field('slide03_product_casa')['url'];

	//Louça
	$title_louca = get_field('title_louca');
	$slide01_product_louca = get_field('slide01_product_louca')['url'];
	$slide02_product_louca = get_field('slide02_product_louca')['url'];
	$slide03_product_louca = get_field('slide03_product_louca')['url'];
?>

<section id="home-produtos" class="home-produtos">
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-justify">
				<h1 class="text-uppercase"> <?= $title_products ?> </h1>
				<p class="text-uppercase"><?= $subtitle_products ?></p>
			</div>
		</div>
	</div>

<!-- PRODUTOS DESKTOP INICIO -->
<div class="container-fluid hidden-sm hidden-xs">
	<div class="row">
		<div class="box-text"></div>
			<div class="barra-menu">
				<div class="container-fluid">
					<div class="col-md-3" >
						<div class="content-group">
							<div class="panel panel-skewed">
								<p></p>
									<h3><?= $title_roupas ?></h3>
							</div>
							<div class="box-mais">
								<a href="javascript:void(0);" class="open-product-desktop" data-product="roupas"><p>+</p></a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-md-offset-1">
						<div class="content-group">
							<div class="panel panel-skewed">
								<p></p>
									<h3><?= $title_casa ?></h3>
							</div>
							<div class="box-mais">
								<a href="javascript:void(0);" class="open-product-desktop" data-product="casa"><p>+</p></a>
							</div>
						</div>
					</div>
					<div class="col-md-2 col-md-offset-1">
						<div class="content-group">
							<div class="panel panel-skewed">
								<p></p>
									<h3><?= $title_louca ?></h3>
							</div>
							<div class="box-mais">
								<a href="javascript:void(0);" class="open-product-desktop" data-product="louca"><p>+</p></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="wrapper-produtos">

		<!-- Roupas -->

		<?php

			if( have_rows('onclick_roupas') ):
				while( have_rows('onclick_roupas') ): the_row();

				$description_onclick_roupas = get_sub_field('description_onclick_roupas');
				$title_btn_onclick_roupas = get_sub_field('title_btn_onclick_roupas');
				$url_btn_onclick_roupas = get_sub_field('url_btn_onclick_roupas');
				$image_onclick_roupas = get_sub_field('image_onclick_roupas')['url'];
				$image_onclick_mobile_roupas = get_sub_field('image_onclick_mobile_roupas')['url'];

		?>
			<div class="produto back-roupas" data-name="produto-roupas">
				<div class="">
					<div class="box-informacao">
						<p><?= $description_onclick_roupas ?></p>
							<div class="btn-linha-completa">
								<a href="<?= $url_btn_onclick_roupas ?>"><p><?= $title_btn_onclick_roupas ?></p></a>
							</div>
					</div>
				</div>
				<div class="box-animation">
					<div class="animation-content">
						<div class="anim">
							<img src="<?= $slide01_product_roupas ?>" class="img-responsive  img1-roupas" alt="">
						</div>
						<div class="anim">
							<img src="<?= $slide02_product_roupas ?>" class="img-responsive  img1-roupas" alt="">
						</div>
						<div class="anim">
							<img src="<?= $slide03_product_roupas ?>" class="img-responsive  img1-roupas" alt="">
						</div>
					</div>
				</div>
				<img src="<?= $image_onclick_roupas ?>"  class="box-linha-completa  img-remove" alt="">
			</div>

				<?php endwhile; ?>
			<?php endif; ?>

		<!-- Casa -->
		<?php

			if( have_rows('onclick_casa') ):
				while( have_rows('onclick_casa') ): the_row();

				$description_onclick_casa = get_sub_field('description_onclick_casa');
				$title_btn_onclick_casa = get_sub_field('title_btn_onclick_casa');
				$url_btn_onclick_casa = get_sub_field('url_btn_onclick_casa');
				$image_onclick_casa = get_sub_field('image_onclick_casa')['url'];
				$image_onclick_mobile_casa = get_sub_field('image_onclick_mobile_casa')['url'];

		?>

			<div class="produto back-casa" data-name="produto-casa">
				<div class="">
					<div class="box-informacao">
						<p>
							<?= $description_onclick_casa ?>
						</p>

						<div class="btn-linha-completa">
							<a href="<?= $url_btn_onclick_casa ?>">
								<p>
									<?= $title_btn_onclick_casa ?>
								</p>
							</a>
						</div>
					</div>
				</div>
				<div class="box-animation">
					<div class="animation-content">
						<div class="anim">
							<img src="<?= $slide01_product_casa ?>" class="img-responsive  img1-roupas" alt="">
						</div>
						<div class="anim">
							<img src="<?= $slide02_product_casa ?>" class="img-responsive  img1-roupas" alt="">
						</div>
						<div class="anim">
							<img src="<?= $slide03_product_casa ?>" class="img-responsive  img1-roupas" alt="">
						</div>
					</div>
				</div>
				<img src="<?= $image_onclick_casa ?>"  class="box-linha-completa  img-remove" alt="">
			</div>

				<?php endwhile; ?>
			<?php endif; ?>

		<?php

			if( have_rows('onclick_louca') ):
				while( have_rows('onclick_louca') ): the_row();

				$description_onclick_louca = get_sub_field('description_onclick_louca');
				$title_btn_onclick_louca = get_sub_field('title_btn_onclick_louca');
				$url_btn_onclick_louca = get_sub_field('url_btn_onclick_louca');
				$image_onclick_louca = get_sub_field('image_onclick_louca')['url'];
				$image_onclick_mobile_louca = get_sub_field('image_onclick_mobile_louca')['url'];

		?>

			<div class="produto back-louca" data-name="produto-louca">
				<div class="">
						<div class="box-informacao">
							<p><?= $description_onclick_louca ?></p>
							<div class="btn-linha-completa">
								<a href="<?= $url_btn_onclick_louca ?>"><p><?= $title_btn_onclick_louca ?></p></a>
							</div>
						</div>
				</div>

				<div class="box-animation">
					<div class="animation-content">
						<div class="anim">
							<img src="<?= $slide01_product_louca ?>" class="img-responsive  img1-roupas" alt="">
						</div>
						<div class="anim">
							<img src="<?= $slide02_product_louca ?>" class="img-responsive  img1-roupas" alt="">
						</div>
						<div class="anim">
							<img src="<?= $slide03_product_louca ?>" class="img-responsive  img1-roupas custom-barra" alt="">
						</div>
					</div>
				</div>
				<img src="<?= $image_onclick_louca ?>"  class="box-linha-completa img-remove" alt="">
			</div>

				<?php endwhile; ?>
			<?php endif; ?>

		<div class="clearfix"></div>
	</div>
</div>

<!-- PRODUTOS DESKTOP FIM -->
<div class="container-fluid hidden-md hidden-lg">
	<div class="row">
		<div class="box-text">
		</div>
			<div class="barra-menu">
				<div class="container-fluid">
					<div class="panel panel-skewed">
						<p></p>
						<h3 id="products-title-mobile" style="text-transform: uppercase;">ROUPAS</h3>
					</div>
					<div class="box-mais">
					<button id="button">+</button>
						</div>
				</div>
			</div>


			<div class="one">
				<div class="swiper-container-mobile swiper-vantagens" data-script="Carousel">
					<div class="swiper-wrapper-mobile">

						<div class="swiper-slide produto back-roupas" data-title="Roupas">
							<div class="box-information">
								<p>
									<?= $description_onclick_roupas ?>
								</p>
							</div>
							<img src="<?= $image_onclick_mobile_roupas ?>" class="img-responsive img-produto hidden-md hidden-lg" alt="">
						</div>

						<div class="swiper-slide produto back-casa" data-title="Casa">
							<div class="box-information">
								<p>
									<?= $description_onclick_casa ?>
								</p>
							</div>
							<img src="<?= $image_onclick_mobile_casa ?>" class="img-responsive img-produto hidden-md hidden-lg" alt="">
						</div>

						<div class="swiper-slide produto back-louca" data-title="Louça">
							<div class="box-information">
								<p>
								 	<?= $description_onclick_louca ?>
								</p>
							</div>
							<img src="<?= $image_onclick_mobile_louca ?>" class="img-responsive img-produto hidden-md hidden-lg" alt="">
						</div>

					</div>
						<div class="swiper-pagination-mobile"></div>

						<a href="javascript:void(0);" class="swiper-button-next-mobile"></a>
						<a href="javascript:void(0);" class="swiper-button-prev-mobile"></a>
				</div>
			</div>
		</div>
	</div>
</section>