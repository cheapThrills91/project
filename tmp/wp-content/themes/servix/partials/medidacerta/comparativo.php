<?php
	$title_comparativo = get_field('title_comparativo');
	$description_comparativo = get_field('description_comparativo');
	$img_1_comparativo = get_field('img_1_comparativo')['url'];
	$img_2_comparativo = get_field('img_2_comparativo')['url'];
	$img_3_comparativo = get_field('img_3_comparativo')['url'];
	$title_proteste = get_field('title_proteste');
	$img_proteste = get_field('img_proteste')['url'];
	$description_proteste = get_field('description_proteste');

?>

<section id="comparativo-medidacerta" class="comparativo-medidacerta">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-comparativo">
					<h1>
						<?= $title_comparativo ?>
					</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="description">
					<p class="text-justify">
						<?= $description_comparativo ?>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<img src="<?= $img_1_comparativo ?>" class="comparativo-1300" alt="">
			</div>
			<div class="col-md-2 comparativo-x">
				<img src="<?= $img_2_comparativo ?>" class="img-responsive"  alt="">
			</div>
			<div class="col-md-5">
				<img src="<?= $img_3_comparativo ?>" class="comparativo-3000" alt="">
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-comparativo-selo">
					<h1>
						<?= $title_proteste ?>
					</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="selo-comparativo">
					<img src=" <?= $img_proteste ?>" class="img-responsive" alt="">
				</div>
			</div>
			<div class="col-md-7 selo-comparativo-p text-justify">
				<p>
					<?= $description_proteste ?>
				</p>
			</div>
		</div>
	</div>
</section>