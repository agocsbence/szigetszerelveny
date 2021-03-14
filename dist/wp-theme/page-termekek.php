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
            'category', 
            array('parent' => 0)
         );
        
        echo '<ul>';

        for( $i=0; $i<4; $i++ ) {
            echo "<li>" . $categories[$i]->{'name'} . "</li>";
        }

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
