<?php /* Template Name: Cases Single Page */ ?>
<?php	get_header();?>
<?php include 'includes/components/header-menu.php';  ?>

<div class="container no-padding">
	<div class="title-with-square">
		<p class="title text-bold">Cases</p>
		<span class="square"></span>
	</div>

	<div class="breadcrumbs">
		<span class="location"> <a href="#" class="link">Cases</a> </span> > <span class="location"> <a href="#" class="link">Título</a> </span>
	</div>

	<?php include 'includes/components/cases-single-page.php'; ?>


</div>

<!-- Footer -->
<div class="container-fluid no-padding">
	<?php get_footer(); ?>
</div>