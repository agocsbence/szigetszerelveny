<?php
/*

Template Name: Main Page

*/

get_header();

?>
			
<section class="container-fluid section-hero bg--white">
	<div class="grid grid-2">
		<?php
		$hero = get_field('hero_blokk');
		if( $hero ): ?>
			<div class="first-block text-block">
				<h2 class="lead"><span>\</span> <?php echo $hero["hero_alcim"] ?></h2>
				<h1><?php echo $hero["hero_cim"] ?></h1>
				<p><?php echo $hero["hero_szoveg"] ?></p>
				<div class="buttons">
					<a href="<?php echo esc_url( get_page_link( 23 ) ); ?>#contact" class="btn btn-green">
						<div class="btn-text img-right">
							Beszéljünk
							<img src="<?php bloginfo('template_url') ?>/assets/img/headset.svg" alt="">
						</div>
					</a>
					<a href="" class="btn btn-transparent">
						<div class="btn-text img-right">
							Több információt szeretnék
							<img src="<?php bloginfo('template_url') ?>/assets/img/mouse.svg" alt="">
						</div>
					</a>
				</div>
			</div>
			<div class="last-block image-block">
				<img src="<?php echo $hero["hero_kep"] ?>" alt="">
			</div>
		<?php endif; ?>
	</div>
</section>

<section class="container bg--pureWhite">
	<div class="grid grid-2 section-properties-grid">
		
		<?php
		$properties = get_field('tulajdonsagok_blokk');
		if( $properties ): ?>
			<div class="first-block image-block">
				<img src="<?php echo $properties["tulajdonsagok_kep"] ?>" alt="">
			</div>
			<div class="last-block text-block">
				<h2 class="lead"><span>\</span> <?php echo $properties["tulajdonsagok_alcim"] ?></h2>
				<h1><?php echo $properties["tulajdonsagok_cim"] ?></h1>
				<?php echo $properties["tulajdonsagok_szoveg"] ?>
			</div>
		<?php endif; ?>

	</div>
	<div class="grid grid-2 section section-icons">
		<div class="first-block text-block">

			<?php
			$propertiesList = get_field('tulajdonsagok_lista');
			if( $propertiesList ): ?>
				
				<div class="icon-block">
					<div class="icon"><img src="<?php bloginfo('template_url') ?>/assets/img/icon/fire.png" alt=""></div>
					<div class="title"><?php echo $propertiesList["tulajdonsag_1_cim"] ?></div>
					<p><?php echo $propertiesList["tulajdonsag_1_szoveg"] ?></p>
					<a href="" class="btn btn-plain">
						<div class="btn-text img-right">
							Tovább
							<img src="<?php bloginfo('template_url') ?>/assets/img/green-long-arrow-right.png" alt="">
						</div>
					</a>
				</div>
				<div class="icon-block">
					<div class="icon"><img src="<?php bloginfo('template_url') ?>/assets/img/icon/money.png" alt=""></div>
					<div class="title"><?php echo $propertiesList["tulajdonsag_2_cim"] ?></div>
					<p><?php echo $propertiesList["tulajdonsag_2_szoveg"] ?></p>
					<a href="" class="btn btn-plain">
						<div class="btn-text img-right">
							Tovább
							<img src="<?php bloginfo('template_url') ?>/assets/img/green-long-arrow-right.png" alt="">
						</div>
					</a>
				</div>
				<div class="icon-block">
					<div class="icon"><img src="<?php bloginfo('template_url') ?>/assets/img/icon/leaf.png" alt=""></div>
					<div class="title"><?php echo $propertiesList["tulajdonsag_3_cim"] ?></div>
					<p><?php echo $propertiesList["tulajdonsag_3_szoveg"] ?></p>
					<a href="" class="btn btn-plain">
						<div class="btn-text img-right">
							Tovább
							<img src="<?php bloginfo('template_url') ?>/assets/img/green-long-arrow-right.png" alt="">
						</div>
					</a>
				</div>
				<div class="icon-block">
					<div class="icon"><img src="<?php bloginfo('template_url') ?>/assets/img/icon/house.png" alt=""></div>
					<div class="title"><?php echo $propertiesList["tulajdonsag_4_cim"] ?></div>
					<p><?php echo $propertiesList["tulajdonsag_4_szoveg"] ?></p>
					<a href="" class="btn btn-plain">
						<div class="btn-text img-right">
							Tovább
							<img src="<?php bloginfo('template_url') ?>/assets/img/green-long-arrow-right.png" alt="">
						</div>
					</a>
				</div>

				<a href="<?php echo esc_url( get_page_link( 23 ) ); ?>#contact" class="btn btn-green">
					<div class="btn-text img-right">
						Beszéljünk
						<img src="<?php bloginfo('template_url') ?>/assets/img/headset.svg" alt="">
					</div>
				</a>

			</div>
			<div class="last-block image-block">
				<img src="<?php echo $propertiesList["tulajdonsagok_kep"] ?>" alt="">
			</div>

			<?php endif; ?>	
			
	</div>
</section>

<section class="bg--white section-knowledge">
	<div class="text-center container">

		<?php
		$knowledge = get_field('tudastar_blokk');
		if( $knowledge ): ?>
			<h2 class="lead"><span>\</span> <?php echo $knowledge["blokk_alcim"] ?></h2>
			<h1><?php echo $knowledge["blokk_cim"] ?></h1>
			<p class="subtitle"><?php echo $knowledge["blokk_leiras"] ?></p>
		<?php endif; ?>

	</div>
	<div class="grid grid-3 container">
		<?php
			$loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3 ) );
			
			while ( $loop->have_posts() ) : $loop->the_post(); 
			
				include get_theme_file_path( '/includes/card.php' );
			
			endwhile; wp_reset_query();
		?>
	</div>
	<div class="flex flex-center button-wrapper">
		<a href="<?php echo esc_url( get_page_link( 27 ) ); ?>" class="btn btn-green">
			<div class="btn-text img-right">
				Tovább a tudástárra
				<img src="<?php bloginfo('template_url') ?>/assets/img/long-arrow-right.svg" alt="">
			</div>
		</a>
	</div>
</section>

<section id="faq" class="section-faq bg--white">
	<?php
	$faq = get_field('gyik_blokk');
	if( $faq ): ?>
		<div class="text-center container">
			<h2 class="lead"><span>\</span> <?php echo $faq["blokk_alcim"] ?></h2>
			<h1><?php echo $faq["blokk_cim"] ?></h1>
			<p class="subtitle"><?php echo $faq["blokk_leiras"] ?></p>
		</div>
	<?php endif; ?>
	<div class="container accordions-wrapper">
		<?php if( have_rows('gyik') ): ?>
			<?php while( have_rows('gyik') ): the_row();  ?>
				<div class="accordion-wrapper">
					<div class="accordion"><?php the_sub_field('kerdes') ?></div>
					<div class="panel">
						<p><?php the_sub_field('valasz') ?></p>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>

<section id="contact" class="section-contact bg--pureWhite">
	<div class="text-center container">
		<h2 class="lead"><span>\</span> Kapcsolat</h2>
		<h1>Ugorj szintet a hőszigetelésben!</h1>
		<p class="subtitle">Professzionális csapatunk rendelkezésedre áll, ha bármilyen kérdésed/kérésed merülne fel.</p>
	</div>
	<div class="container-fluid">
		<div class="grid grid-2">
			<div class="contact-form first-block text-block">
				<h1 class="small">Írj nekünk</h1>
				<p>Ha megbízható partnerre van szükséged, ránk számíthatsz. Dobj egy üzenetet, és szakértőnk hamarosan válaszol.</p>
				<?php echo do_shortcode('[contact-form-7 id="80" title="Kapcsolat"]'); ?>
			</div>
			<div class="contact-image last-block image-block">
				<img src="<?php bloginfo('template_url') ?>/assets/img/blocks/contact.png" alt="">
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
