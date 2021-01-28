<?php
/*

Template Name: Main Page

*/

get_header();

?>

<?php
//ACF GROUP
$knowledge = get_field('tudastar_blokk');
if( $knowledge ): ?>
	<h2 class="lead"><span>\</span> <?php echo $knowledge["blokk_alcim"] ?></h2>
	<h1><?php echo $knowledge["blokk_cim"] ?></h1>
	<p class="subtitle"><?php echo $knowledge["blokk_leiras"] ?></p>
<?php endif; ?>			

<?php
	//POSTS LOOP
	$loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3 ) );
	
	while ( $loop->have_posts() ) : $loop->the_post(); 
	
		include get_theme_file_path( '/includes/card.php' );
	
	endwhile; wp_reset_query();
?>

<?php
//ACF PRO REPEATER ACCORDION
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


<?php echo do_shortcode('[contact-form-7 id="80" title="Kapcsolat"]'); ?>

<?php get_footer(); ?>
