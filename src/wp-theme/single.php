<?php get_header();

$id = get_the_ID();

$start_category = get_the_category($id);

$parent_category_id = $start_category[0]->parent;
$parent_category = get_the_category($parent_category_id);

$master_category_id = $parent_category[0]->parent;
$master_category = get_the_category($master_category_id);

var_dump($parent_category);
?>

<section class="section single container">
    <nav class="mt-5" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo get_permalink(20); ?>">Termékek</a></li>
            <li class="breadcrumb-item"><a href="<?php echo esc_url( get_category_link( $master_category->term_id )) ?>"><?php echo $master_category->name ?></a></li>
            <li class="breadcrumb-item"><?php echo $parent_category->name ?></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo esc_url( get_category_link( $start_category[0]->term_id )) ?>"><?php echo $start_category[0]->name ?></a></li>
        </ol>
      </nav>
    <div class="row mt-4">
        <div class="col-12 col-lg-4">
            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
        </div>
        <div class="col-12 col-lg-8">
            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>
        </div>
    </div>
    <div class="row mt-4">
        <h3>Kapcsolódó termékek</h3>
        <?php
            $loop = new WP_Query( array( 'post_type' => 'post', 'cat' => $start_category->term_id ) );
            
            while ( $loop->have_posts() ) : $loop->the_post(); 
            
                include get_theme_file_path( '/includes/card.php' );
            
            endwhile; wp_reset_query();
        ?>

    </div>
</section>

<?php
include get_theme_file_path( '/includes/alert.php' );
get_footer();
