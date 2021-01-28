<?php get_header(); ?>

<div class="container single-page">
    <div class="single-page-header">
        <img src="<?php the_field('fejlec_kep') ?>" alt="<?php the_title(); ?>" class="single-page-header-image">
        <h1><span>Novaxell</span> - <?php the_title(); ?></h1>
    </div>
    <div class="single-page-content">
        <?php the_content(); ?>
    </div>
</div>

<section class="section-knowledge bg--white">
    <div class="container">
        <div class="text-center">
            <h2 class="lead"><span>\</span> NovaXell Tudástár</h2>
            <h1>További minőségi anyagok</h1>
        </div>
        <div class="grid grid-3 container">
            <?php
                $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3 ) );
                
                while ( $loop->have_posts() ) : $loop->the_post(); 
                
                    include get_theme_file_path( '/includes/card.php' );
                
                endwhile; wp_reset_query();
            ?>
        </div>
    </div>
</section>

<?php get_footer();
