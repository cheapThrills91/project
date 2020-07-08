<?php 

	$title_line_products = get_field('title_line_products');
	$title_btn = get_field('title_btn_line_products');
	$url_btn_line_products = get_field('url_btn_line_products');
	$background_line_products_sec = get_field('background_line_products_sec')['url'];

?>

<section id="linha-produtos" class="linha-produtos">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="title text-uppercase">
					<h1>
						<?= $title_line_products ?>
					</h1>
				</div>

				<a class="btn btn-info" href=" <?= $url_btn_line_products ?>" rel="bookmark" title="Conheçoa nossa linha completa de produtos">
					<?= $title_btn ?>
				</a>
			</div>
		</div>
	</div>
	<img src=" <?= $background_line_products_sec ?>" alt="" class="background-linha-produtos-sec"> 
</section>