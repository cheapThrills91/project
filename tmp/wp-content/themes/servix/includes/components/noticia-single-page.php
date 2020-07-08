<div class="cases-single-page post-page posts-list">

	<div class="single-post">
		<div class="post">
			<div class="img-header">
				<img src="<?php echo get_template_directory_uri().'/img/noticias_01.jpg' ?>" alt="Imagem" class="img-responsive image">
			</div>
			<div class="post-header">
				<div class="post-date">
					<p class="date">14 de janeiro de 2019</p>
				</div>
				<div class="post-title">
					<p class="title">Título</p>
				</div>
			</div>
			<div class="post-body">
				<p class="text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum itaque similique officia molestiae, mollitia officiis numquam nemo rerum eum consequatur. Quasi ut reprehenderit perspiciatis necessitatibus excepturi laborum nulla in ad?
				</p>
			</div>
		</div>
	</div>

	<div class="division orange"></div>

	<div class="more-info">

		<div class="share">
			<p class="share-title">Compartilhe:</p>
			<ul class="social-list">
				<li class="social-item">
					<a href="https://twitter.com/home?status=<?php echo the_permalink(); ?>" target="_blank" rel="noopener">
						<img src="<?php echo get_template_directory_uri().'/img/icone-twitter.png' ?>" alt="Icone twitter">
					</a>
				</li>
				<li class="social-item">
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink(); ?>" target="_blank" rel="noopener">
						<img src="<?php echo get_template_directory_uri().'/img/icone-facebook.png' ?>" alt="Icone facebook">
					</a>
				</li>
				<li class="social-item">
					<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo the_permalink(); ?>&title=<?php echo get_the_title(); ?>&summary=<?php echo the_excerpt(); ?>&source=<?php echo get_home_url(); ?>" target="_blank" rel="noopener">
						<img src="<?php echo get_template_directory_uri().'/img/icone-linkedin.png' ?>" alt="Icone linkedin">
					</a>
				</li>
				<li class="social-item">
					<a href="whatsapp://send?text=<?php echo get_the_title(); ?>" target="_blank" rel="noopener">
						<img src="<?php echo get_template_directory_uri().'/img/icone-whatsapp.png' ?>" alt="Icone whatsapp">
					</a>
				</li>
			</ul>
		</div>
		<a href="<?php echo get_permalink( get_page_by_title( 'noticias' ) ); ?>" class="voltar">
			<img src="<?php echo get_template_directory_uri().'/img/arrow-left.png' ?>" alt="Seta para a esquerda" class="arrow">
			<span class="text">Voltar para noticias</span>
		</a>
	</div>

</div>