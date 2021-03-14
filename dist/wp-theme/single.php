<?php get_header(); ?>

<?php the_title(); ?>
<?php the_content(); ?>

<h1>single.php</h1>

<?php
    $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3 ) );
    
    while ( $loop->have_posts() ) : $loop->the_post(); 
    
        include get_theme_file_path( '/includes/card.php' );
    
    endwhile; wp_reset_query();
?>

<?php get_footer();
