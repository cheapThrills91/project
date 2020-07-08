<?php
	$title_linha_produtos_louca = get_field('title_linha_produto_louca');

	$count = 0;

	if( have_rows('carousel_modal_louca') ) :
		the_row();

		if (have_rows('modal_louca') ) :
			while(have_rows('modal_louca') ) :
				the_row();


				$img_product_modal = get_sub_field('img_product_modal')['url'];
				$img_selo_proteste = get_sub_field('img_selo_proteste')['url'];
				$title_product_modal = get_sub_field('title_product_modal');
				$description_product_modal = get_sub_field('description_product_modal');
				$id_product_modal = get_sub_field('id_product_modal');

				$count++;

?>


		<div class="modal fade" id="<?= 'modal-loucas'.$count; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-loucasLabel" data-backdrop="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span>x</span></button>
						<div class="img-modal-produto">
						<img src="<?= $img_product_modal ?> "  class="<?= $id_product_modal ?>" alt="">
						<img src="<?= $img_selo_proteste ?> "  alt="" class="selo-proteste">
						</div>
						<div class="text-modal-produto">
							<h1>
								<?= $title_product_modal ?>
							</h1>
							<p>
								<?= $description_product_modal ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

			<?php endwhile; ?>
		<?php endif; ?>



<section class="section-linhadeprodutos-loucas grupo-produtos" data-script="Carousel" data-products="louca">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="title-product">
					<h1>LOUÇA</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">

				<!-- Carrossel de Produtos -->
				<div class="swiper-container swiper-carousel swiper-carousel-linhadeprodutos swiper-carousel-linhadeprodutos-loucas">
					<div class="swiper-wrapper">

						<?php
							$count = 0;
							
							if (have_rows('carousel_louca') ) :
								while(have_rows('carousel_louca') ) :
									the_row();
									
									$product_image_carousel = get_sub_field('product_image_carousel')['url'];
									$title_product_carousel = get_sub_field('title_product_carousel');
									$id_product_carousel = get_sub_field('id_product_carousel');

							
							
								$count++;
						?>

							<div class="swiper-slide produto-unico" data-product="<?= $id_product_carousel ?>">
								<img src="<?= $product_image_carousel ?>" alt="" class="<?= $id_product_carousel ?>">
								<div class="content-group">
									<h1>
										<?= $title_product_carousel ?>
									</h1>
									<a href="#" class="btn btn-blue" data-toggle="modal" data-target="<?= '#modal-loucas'.$count; ?>" ><span>+</span></a>
								</div>
							</div>


									<?php endwhile; ?>
								<?php endif; ?>
							<?php endif; ?>

					</div>
				</div>
				<a href="javascript:void(0);" class="swiper-button-next"></a>
				<a href="javascript:void(0);" class="swiper-button-prev"></a>
			</div>
		</div>
	</div>
</section>


