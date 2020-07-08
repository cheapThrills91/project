<?php
	$title_medida_certa = get_field('title_medida_certa');
	$description_medida_certa = get_field('description_medida_certa');
	$image_01_medida_certa = get_field('image_01_medida_certa')['url'];
	$image_02_medida_certa = get_field('image_02_medida_certa')['url'];
	$image_mobile_medida_certa = get_field('image_mobile_medida_certa')['url'];
?>

<section id="home-medidacerta" class="home-medidacerta hide-mobile">
	<div id="anchor-top"></div>
	<div class="container">
		<div class="row hide-overflow">
			<div class="col-md-4">
				<div class="pilha-pratos detergente-1300">
					<img src="<?= $image_01_medida_certa ?> " alt="detergente minuano 1300" title="Detergente Minuano 1300">
				</div>
			</div>
			<div class="col-md-4">
				<div class="content-group text-justify">
					<div class="panel panel-skewed">
						<p></p>
						<h1 class="uppercase">
							<?= $title_medida_certa ?>
						</h1>
					</div>
					 <p>
						<?= $description_medida_certa ?>
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="pilha-pratos">
					<img src="<?= $image_02_medida_certa ?> " alt="detergente minuano" title="Detergente Minuano 3000">
				</div>
			</div>
		</div>
	</div>
</section>


<section id="home-medidacerta" class="home-medidacerta hide-desk">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="content-group text-justify">
					<div class="panel panel-skewed">
						<p></p>
						<h1 class="uppercase">
							<?= $title_medida_certa ?>
						</h1>
					</div>
				</div>
			</div>
		</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="pilha-pratos">
						<img src="<?= $image_mobile_medida_certa ?> " alt="">
					</div>
				</div>
			</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="description">
					<p>
						<?= $description_medida_certa ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

