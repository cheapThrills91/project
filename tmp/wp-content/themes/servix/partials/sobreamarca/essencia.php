<?php
	$title_essencia = get_field('title_essencia');
	$description_essencia = get_field('description_essencia');
	$title_proposito = get_field('title_proposito');
	$description_proposito = get_field('description_proposito');
?>
<section id="essencia-sobreamarca" class="essencia-sobreamarca">
	<div class="container-fluid no-padding">
		<div class="row">
			<div class="col-md-6 essencia-box">
				<div class="arrow-block">
					<a href="#essencia-sobreamarca">
						<span class="fa fa-angle-down"></span>
					</a>
				</div>

				<div class="essencia-txt">
					<h2> 
						<?= $title_essencia ?>
					</h2>

					<h3>
						<?= $description_essencia ?>
					</h3>
				</div>
			</div>
			<div class="col-md-6 proposito-box">
				<div class="proposito-txt">
					<h2>
						<?= $title_proposito ?>
					</h2>
					<h3>
						<?= $description_proposito ?>
					</h3>
				</div>
			</div>
		</div>
	</div>
</section>