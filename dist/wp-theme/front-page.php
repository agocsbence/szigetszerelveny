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

			<?php
				$categories = get_terms( 
					'category', array(
						'parent' => 0,
						'hide_empty' => false,
						'exclude' => 4
					)
				);
				$count = count($categories);
				$cnt = 0;

				for( $i=0; $i<$count; $i++ ) { 
					$cnt++;
					$category_link = get_category_link( $categories[$i]->{'term_id'} );
					$image = get_field('kep', $categories[$i]->taxonomy . '_' . $categories[$i]->term_id );

					if($cnt == 1) { ?>
						<div class="carousel-item active" data-bs-interval="5000" style="background-image: url('<?php echo $image?>');">
							<img src="<?php bloginfo('template_url') ?>/assets/img/fade.png" class="d-block w-100" alt="<?php echo $categories[$i]->{'name'} ?>">
							<div class="carousel-caption d-none d-md-block">
								<h1><?php echo $categories[$i]->{'name'} ?></h1>
							</div>
						</div>
					<?php } else { ?>
						<div class="carousel-item" data-bs-interval="5000" style="background-image: url('<?php echo $image?>');">
							<img src="<?php bloginfo('template_url') ?>/assets/img/fade.png" class="d-block w-100" alt="<?php echo $categories[$i]->{'name'} ?>">
							<div class="carousel-caption d-none d-md-block">
								<h1><?php echo $categories[$i]->{'name'} ?></h1>
							</div>
						</div>
					<?php }
				} ?>
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

<section class="section" id="home-about">
	<?php
		$your_query = new WP_Query( 'pagename=rolunk' );
		while ( $your_query->have_posts() ) : $your_query->the_post();
			the_title();
			the_content();
		endwhile;
		wp_reset_postdata();
	?>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
