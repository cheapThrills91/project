<?php 
	$title_rendimento_medida_certa = get_field('title_rendimento_medida_certa');
	$tl_rendimento = get_field('tl_rendimento')
?>

<section id="rendimento-medidacerta" class="rendimento-medidacerta hide-mobile">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-rendimento">
					<h1>
						<?= $title_rendimento_medida_certa ?>
					</h1>
				</div>
			</div>
	</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<?php 

									$count= 0; 

									$quantidade = array(
										array('3500'),
										array('3000'),
										array('2500'),
										array('2000'),
										array('1500'),
										array('1000'),
										array('500')

									);

									foreach ($quantidade as $qnt) : 
										$count++;

								?>

									<tr>
										<th scope="row"><?= $qnt[0]; ?><hr></th>
									</tr>


								<?php endforeach; ?>
			
								<tr>
									<th scope="row">0<hr></th>
										<?php
											$count = 0;

											if(have_rows('content_images_text_redimento')) :
												while( have_rows('content_images_text_redimento')) :
													the_row();

													$quantidade_rendimento = get_sub_field('quantidade_rendimento');
													$image_product_rendimento = get_sub_field('image_product_rendimento')['url'];
													$title_product_rendimento = get_sub_field('title_product_rendimento');
													$count++;

										?>

										<td class="<?= 'detergente'.$count; ?> hide-mobile">
											<h3><?= $quantidade_rendimento ?> </h3>
											<img src="<?= $image_product_rendimento ?> " alt=""><br>
											<p><?= $title_product_rendimento ?></p>
										</td>

												<?php endwhile; ?>
											<?php endif; ?>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="texto-legal">
						<p>
							<?= $tl_rendimento ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="rendimento-medidacerta" class="rendimento-medidacerta hide-desk" style="">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="title-rendimento">
					<h1> 
						<?= $title_rendimento_medida_certa ?>
					</h1>
				</div>
			</div>
	</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<tbody>

						<?php 

							$count= 0; 

							$quantidade_mobile = array(
								array('3500'),
								array('3000'),
								array('2500'),
								array('2000'),
								array('1500'),
								array('1000'),
								array('500'),
								array('0'),

							);

							foreach ($quantidade_mobile as $qnt_mobile) : 
								$count++;

						?>
							<tr>
								<th scope="row"> <?= $qnt_mobile[0] ?> <hr></th>
							</tr>

						<?php endforeach; ?>

						</tbody>
					</table>

					<div class="swiper-container swiper-carousel-rendimento carousel-position">
						<div class="swiper-wrapper">

							<?php

							if(have_rows('content_images_text_redimento')) :
								while( have_rows('content_images_text_redimento')) :
									the_row();

									$quantidade_rendimento = get_sub_field('quantidade_rendimento');
									$image_product_rendimento = get_sub_field('image_product_rendimento')['url'];
									$title_product_rendimento = get_sub_field('title_product_rendimento');
									$class_product_rendimento = get_sub_field('class_product_rendimento');
									$count++;

							?>

								<div class="swiper-slide <?= 'detergente'.$count; ?> ">
									<div class="content-group <?= $class_product_rendimento ?>">
										<div class="box-yield-product">
											<h3><?= $quantidade_rendimento ?></h3>
										</div>
										<img src="<?= $image_product_rendimento ?> " alt=""><br>
										<div class="box-description-product">
											<p><?= $title_product_rendimento ?></p>
										</div>
									</div>
								</div>
								
									<?php endwhile; ?>
								<?php endif; ?>
						</div>
					</div>

					<a href="javascript:void(0);" class="swiper-button-next" ></a>
					<a href="javascript:void(0);" class="swiper-button-prev" ></a>

				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="texto-legal">
						<p>
							<?= $tl_rendimento ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

