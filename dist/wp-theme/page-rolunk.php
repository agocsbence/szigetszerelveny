<?php
/*

Template Name: Rólunk

*/

get_header();

?>

<section class="section nolinkdecor container">
    <h1 class="mt-5"><?php the_title() ?></h1>
    <div class="row bg-white p-3 mt-4">
        
        <?php the_content() ?>
        
        <div class="about-icons row">
            <div class="col"><p><i class="far fa-comment"></i> Tanácsadás</p></div>
            <div class="col"><p><i class="fas fa-fingerprint"></i> Egyedi ajánlatok</p></div>
            <div class="col"><p><i class="fas fa-medal"></i> Innovatív megoldások</p></div>
            <div class="col"><p><i class="fas fa-user-check"></i> Megbízható gyártók termékei</p></div>
            <div class="col"><p><i class="fas fa-shipping-fast"></i> Gyors teljesítés</p></div>
        </div>

    </div>
</section>

<?php get_footer(); ?>