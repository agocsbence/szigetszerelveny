<?php get_header(); the_post(); ?>

<section class="section container">
    <h1 class="mt-5"><?php the_title() ?></h1>
    <div class="row mt-4">
        
        <?php the_content() ?>

    </div>
</section>

<?php get_footer();
