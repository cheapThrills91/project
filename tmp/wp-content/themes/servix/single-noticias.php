<?php /* Template Name: Noticias Single Page */ ?>
<?php	get_header();?>
<?php include 'includes/components/header-menu.php';  ?>

<div class="container no-padding">
	<div class="title-with-square">
		<p class="title text-bold">Notícias</p>
		<span class="square"></span>
	</div>

	<div class="breadcrumbs">
		<span class="location"> <a href="#" class="link">Notícias</a> </span> > <span class="location"> <a href="#" class="link">Título</a> </span>
	</div>

	<?php include 'includes/components/noticia-single-page.php'; ?>


</div>

<!-- Footer -->
<div class="container-fluid no-padding">
	<?php get_footer(); ?>
</div>