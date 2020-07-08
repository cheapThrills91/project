<?php
	$home_title = get_field('home_title');
	$home_description = get_field('home_description');
	$home_obs = get_field('home_obs');
	$image_desk_mp = get_field('image_desk_mp')['url'];
	$image_mobile_mp = get_field('image_mobile_mp')['url'];
	$background_sec_mp = get_field('background_sec_mp')['url'];
?>

<section id="maxprotect-home" class="maxprotect-home">
	<div class="background-sec">
		<img  src="<?= $background_sec_mp ?>">
	</div>
	<div id="anchor-top"></div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-1">
				<div class="row">
					<div class="content-group text-justify">
						<div class="panel panel-skewed">
							<p></p>
							<h1 class="uppercase">
								<?= $home_title ?><br>
							</h1>
						</div>

						<?= $home_description ?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6">
				<img  src="<?= $image_desk_mp ?>" class="img-mobile hidden-sm hidden-xs " alt="desinfetante minuano" title="Desinfetante Minuano MaxProtect">
				<img  src="<?= $image_mobile_mp ?>" class="img-mobile image-mobile hidden-md hidden-lg" alt="desinfetante minuano" title="Desinfetante Minuano MaxProtect">
			</div>
		</div>
		<div class="row hidden-sm hidden-md hidden-lg style-p-mobile">
			<?= $home_description ?>

		</div>
	</div>
	<div class="disclaimer"><?= $home_obs ?></div>
</section>