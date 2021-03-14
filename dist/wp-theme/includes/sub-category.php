<?php $parent_category = get_category($start_category->parent) ?>

<section class="section single container">
    <nav class="mt-5" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="termekek.html">Termékek</a></li>
            <li class="breadcrumb-item"><a href="<?php echo esc_url( get_category_link( $parent_category->term_id )) ?>"><?php echo $parent_category->name ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $start_category->name ?></li>
        </ol>
      </nav>
    <div class="row mt-4">
        <h1><?php echo $start_category->name ?></h1>
        <p><?php echo $start_category->description ?></p>
    </div>
    <div class="row mt-4">

        <?php
            $loop = new WP_Query( array( 'post_type' => 'post', 'cat' => $start_category->term_id ) );
            
            while ( $loop->have_posts() ) : $loop->the_post(); 
            
                include get_theme_file_path( '/includes/card.php' );
            
            endwhile; wp_reset_query();
        ?>

    </div>
</section>
<section class="container mt-3">
    <p class="alert alert-info" role="alert">Az oldalon nem a teljes kínálatot találja, látogasson el üzletünkbe vagy érdeklődjön elérhetőségeink valamelyikén raktárkészletünkről.</p>
</section>