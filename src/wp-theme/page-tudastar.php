<?php
/*

Template Name: Tudástár

*/

get_header();

?>
			
<section class="bg--pureWhite section-knowledge-hero">
    <div class="container">
        <div class="grid grid-2 grid-reverse">

            <?php
                $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 1 ) );
                
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                
                <div class="first-block image-block">
                    <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                </div>
                <div class="last-block text-block">
                    <h2 class="lead"><span>\</span> <?php the_date(); ?></h2>
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_excerpt(); ?></p>
                    <div class="buttons">
                        <a href="#" class="btn btn-blue desktop-only">
                            <div class="btn-text img-left">
                                <img src="<?php bloginfo('template_url') ?>/assets/img/clock.svg" alt="">
                                <?php the_field('olvasasi_ido'); ?> Perc
                            </div>
                        </a>
                        <a href="<?php echo get_permalink(); ?>" class="btn btn-green">
                            <div class="btn-text img-right">
                                Elolvasom
                                <img src="<?php bloginfo('template_url') ?>/assets/img/long-arrow-right.svg" alt="">
                            </div>
                        </a>
                    </div>
                </div>        
            <?php endwhile; wp_reset_query(); ?>

        </div>
    </div>
</section>

<section class="section-knowledge bg--white">
    <div class="container">
        <div class="text-center">
            <h2 class="lead"><span>\</span> NovaXell Tudástár</h2>
            <h1>Minőségi cikkek, minőségi anyagok</h1>
            <p class="subtitle">Minden, amit a praktikus, megtérülő és környezetkímélő hőszigetelésekről tudni érdemes.</p>
        </div>
        <div class="grid grid-3 container">
            <?php
                $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3, 'offset' => 1 ) );
                
                while ( $loop->have_posts() ) : $loop->the_post(); 
                
                    include get_theme_file_path( '/includes/card.php' );
                
                endwhile; wp_reset_query();
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>