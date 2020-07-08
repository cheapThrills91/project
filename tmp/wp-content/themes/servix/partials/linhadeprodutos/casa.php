<?php
	$title_linha_produtos_casa = get_field('title_linha_produto_casa');

	$count = 0;

	if( have_rows('carousel_modal_casa') ) :
		the_row();

		if (have_rows('modal_casa') ) :
			while(have_rows('modal_casa') ) :
				the_row();


				$img_product_modal = get_sub_field('img_product_modal')['url'];
				$title_product_modal = get_sub_field('title_product_modal');
				$description_product_modal = get_sub_field('description_product_modal');
				$id_product_modal = get_sub_field('id_product_modal');

				$count++;

?>


<div class="modal fade" id="<?= 'modal-casa'.$count; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-casaLabel" data-backdrop="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span>x</span></button>
				<div class="img-modal-produto">
				<img src="<?= $img_product_modal ?> " alt="" class="<?= $id_product_modal ?>">
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



<section class="section-linhadeprodutos-casa grupo-produtos" data-script="Carousel" data-products="casa">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="title-product">
					<h1>
						<?= $title_linha_produtos_casa ?>
					</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">

				<!-- Carrossel de Produtos -->
				<div class="swiper-container swiper-carousel swiper-carousel-linhadeprodutos swiper-carousel-linhadeprodutos-casa">
					<div class="swiper-wrapper">

						<?php
							$count = 0;
							
							if (have_rows('carousel_casa') ) :
								while(have_rows('carousel_casa') ) :
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

									<a href="#" class="btn btn-blue" data-toggle="modal" data-target="<?= '#modal-casa'.$count; ?>" ><span>+</span></a>
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













