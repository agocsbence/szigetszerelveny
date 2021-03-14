<?php
/*

Template Name: Main Page

*/

get_header();

?>

<section class="section carousel">
	<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active" data-bs-interval="5000" style="background-image: url('<?php bloginfo('template_url') ?>/assets/img/slider-1.jpg');">
				<img src="<?php bloginfo('template_url') ?>/assets/img/fade.png" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h1>Víz-gáz-fűtésszerelési anyagok</h1>
					<p>Some representative placeholder content for the first slide.</p>
				</div>
			</div>
			<div class="carousel-item" data-bs-interval="5000" style="background-image: url('<?php bloginfo('template_url') ?>/assets/img/slider-2.jpg');">
				<img src="<?php bloginfo('template_url') ?>/assets/img/fade.png" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h1>Kondenzációs kazánok</h1>
					<p>Some representative placeholder content for the first slide.</p>
				</div>
			</div>
			<div class="carousel-item" data-bs-interval="5000" style="background-image: url('<?php bloginfo('template_url') ?>/assets/img/slider-3.jpg');">
				<img src="<?php bloginfo('template_url') ?>/assets/img/fade.png" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h1>Szaniter/fürdőszoba</h1>
					<p>Some representative placeholder content for the first slide.</p>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Előző</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Következő</span>
		</button>
		</div>
</section>

<?php get_footer(); ?>
