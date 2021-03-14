<?php
/*

Template Name: Termékek

*/

get_header();

?>

<section class="section products container">

    <?php
        // wp_list_categories( array(
        //     'depth' => 1
        // ));

        $categories = get_terms( 
            'category', array(
                'parent' => 0,
                'hide_empty' => false,
                'exclude' => 4
            )
        );
        $count = count($categories);
        
        echo '<ul>';

        for( $i=0; $i<$count; $i++ ) { 
            var_dump($categories[$i]);
            $category_link = get_category_link( $categories[$i]->{'term_id'} ); ?>
            <div class="col-sm-12 col-lg-4">
                <a href="<?php echo esc_url( $category_link ); ?>" class="card">
                <?php
                    $image = get_field('kep', $category->taxonomy . '_' . $category->term_id );
                    echo '<pre>';

                    echo "Image field value:";
                    var_dump($image);
                    echo '</pre>'; ?>
                    <img src="./assets/img/slider-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $categories[$i]->{'name'} ?></h5>
                    </div>
                </a>
            </div>

        <?php }

        echo '</ul>';
    ?>

    <h1 class="mt-5">Termékek</h1>
    <div class="row mt-4">
        <div class="col-sm-12 col-lg-4">
            <a href="vizgaz.html" class="card">
                <img src="./assets/img/slider-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Víz-gáz-fűtés</h5>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-lg-4">
            <a href="" class="card">
                <img src="./assets/img/slider-2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Kondenzációs kazánok</h5>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-lg-4">
            <a href="" class="card">
                <img src="./assets/img/slider-3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Szaniter-fürdőszoba</h5>
                </div>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
