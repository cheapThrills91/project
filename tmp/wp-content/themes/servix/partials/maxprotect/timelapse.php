<?php
	$timelapse_visibility = get_field('show_timelapse');
	$timelapse_title = get_field('timelapse_title');
	$timelapse_description = get_field('timelapse_description');
	$timelapse_background = get_field('timelapse_background');
	$timelapse_video = get_field('timelapse_video_url');

	if ( $timelapse_visibility == 'yes' ) :
?>

	<section id="maxprotect-timelapse" class="maxprotect-timelapse active" data-script="TimelapseControls">
		<div id="video-wrapper-controls" class="active">
			<div class="tooltip-sticky" data-script="Tooltip">Clique para assistir ao vídeo</div>

			<div class="container timelapse-content">
				<div class="col-md-5">
					<!-- <h2><?= $timelapse_title ?></h2> -->
					<!-- <p><?= $timelapse_description ?></p> -->
				</div>
			</div>
		</div>


		<div class="embed-responsive embed-responsive-16by9 background-video" style="height: 100vh; padding: 0 !important; margin-top: -23px;">
			<iframe id="timelapse-video" src="https://www.youtube.com/embed/ZJtgRLmf9dI?autoplay=0&loop=1&controls=0&iv_load_policy=3&rel=0&showinfo=0&showsearch=0&enablejsapi=1" allowfullscreen="" frameborder="0"></iframe>
		</div>
	</section>

<?php endif; ?>