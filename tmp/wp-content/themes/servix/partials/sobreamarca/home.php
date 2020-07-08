<?php
	$title_sobre_marca = get_field('title_sobre_marca');
	$description_sobre_marca = get_field('description_sobre_marca');
	$image_sobre_marca = get_field('image_sobre_marca')['url'];

?>

<section id="home-sobreamarca" class="home-sobreamarca">
	<div id="anchor-top"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<div class="content-group text-justify">
						<div class="panel panel-skewed">
							<p></p>
							<h1 class="uppercase">
								<?= $title_sobre_marca  ?><br>
							</h1>
						</div>
							<p>
								<?= $description_sobre_marca ?>
							</p>
					</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="video-home">
					<a href="#"><img src="<?= $image_sobre_marca ?>"  alt=""></a>
				</div>
			</div>
		</div>
	</div>
</section>