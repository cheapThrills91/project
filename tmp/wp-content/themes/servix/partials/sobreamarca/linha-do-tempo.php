<?php 
	$title_timeline = get_field('title_timeline');
?>

<section id="time-line-sobreamarca" class="time-line-sobreamarca">
	<div class="container">
		<h1>
			<?= $title_timeline ?>
		</h1>
		<div class="swiper-container swiper-carousel-home">
			<div class="swiper-wrapper">

				<?php 
					$count = 0;

					if(have_rows('carousel-timeline')) :
						while( have_rows('carousel-timeline')) :
							the_row();
							$image_timeline = get_sub_field('image_timeline')['url'];
							$year_timeline = get_sub_field('year_timeline');
							$description_timeline = get_sub_field('description_timeline');

							$count++;
				?>

					<div class="box-time-line swiper-slide">
						<img src="<?= $image_timeline ?>" alt="">
						<h2><?= $year_timeline ?></h2>
						<hr>
						<div class="cicle"></div>
						<p><?= $description_timeline ?></p>
					</div>
							
						<?php endwhile; ?>
					<?php endif; ?>

			</div>

			<div class="swiper-pagination"></div>
				<a href="javascript:void(0);" class="swiper-button-next hidden-sm hidden-xs"></a>
				<a href="javascript:void(0);" class="swiper-button-prev hidden-sm hidden-xs"></a>
			</div>
		</div>
	</div>
</section>