<?php get_header(); the_post(); ?>

	<div class="container">
		<div class="">

			<?php if ( have_posts() ) : ?>

			<div class="article-header">
				<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
			</div>

			<?php while ( have_posts() ) : the_post(); ?>
				
				<div class="article-content">
					<?php the_content();?> 
				</div>
				
			<?php endwhile;

			else :
			
				echo 'No posts found';

			endif;
			?>
        
		</div>
	</div>
</main>

<?php get_footer();