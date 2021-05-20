<?php
/*
Template Name: Search Page
*/
get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php get_search_form(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<section class="section nolinkdecor products search container">

    <div class="row mt-4">

        <?php if ( have_posts() ) : ?>

            <header class="page-header">
                <h1 class="mt-5"><?php printf( __( 'Keresés: %s', 'szigetszerelveny' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
            </header>

            <?php get_search_form(); ?>

            <?php while ( have_posts() ) : the_post(); ?>

                <?php include get_theme_file_path( '/includes/card.php' ); ?>

            <?php endwhile; ?>


            <?php else : ?>

                <h3>A keresés sajnos nem hozott eredményt :(</h3>

        <?php endif; ?>

    </div>
</section>

<?php get_footer();