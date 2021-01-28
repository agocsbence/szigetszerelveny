<?php
/*

Template Name: Technológia

*/

get_header();

?>
			
<section class="container-fluid section-tech-hero bg--white">
    <div class="grid grid-2">
        <div class="first-block text-block">
            <?php
            $hero = get_field('hero_blokk');
            if( $hero ): ?>
                <h2 class="lead"><span>\</span> <?php echo $hero["blokk_alcim"] ?></h2>
                <h1><?php echo $hero["blokk_cim"] ?></h1>
                <p><?php echo $hero["blokk_leiras"] ?></p>
            <?php endif; ?>
        </div>
        <div class="last-block image-block">
            <img src="<?php bloginfo('template_url') ?>/assets/img/blocks/tech-hero.png" alt="">
        </div>
    </div>
</section>

<section class="container bg--pureWhite">
    <?php
    $properties = get_field('tulajdonsagok_blokk');
    if( $properties ): ?>
        <div class="grid grid-2 grid-reverse">
            <div class="first-block image-block">
                <img src="<?php bloginfo('template_url') ?>/assets/img/blocks/tech-chair.png" alt="">
            </div>
            <div class="last-block text-block">
                <h2 class="lead"><span>\</span> <?php echo $properties["blokk_alcim"] ?></h2>
                <h1><?php echo $properties["blokk_cim"] ?></h1>
                <p><?php echo $properties["blokk_leiras"] ?></p>
            </div>
        </div>
        <p><?php echo $properties["blokk_leiras_2"] ?></p>
    <?php endif; ?>
</section>

<section class="container bg--pureWhite section-tech-icon-cards">
    <div class="grid grid-3">

        <?php if( have_rows('tulajdonsagok') ): ?>
			<?php while( have_rows('tulajdonsagok') ): the_row();  ?>
                <div class="icon-card">
                    <div class="card-title">
                        <img src="<?php the_sub_field('ikon') ?>" alt="<?php the_sub_field('cim') ?>">
                        <div class="title"><?php the_sub_field('cim') ?></div>
                    </div>
                    <p><?php the_sub_field('leiras') ?></p>
            </div>
			<?php endwhile; ?>
		<?php endif; ?>

    </div>
</section>

<section class="bg--white">
    <div class="container">
        <?php
        $hero2 = get_field('hero_blokk_2');
        if( $hero2 ): ?>
            <div class="grid grid-2">
                <div class="first-block text-block">
                    <h2 class="lead"><span>\</span> <?php echo $hero2["blokk_alcim"] ?></h2>
                    <h1><?php echo $hero2["blokk_cim"] ?></h1>
                    <p><?php echo $hero2["blokk_leiras"] ?></p>
                </div>
                <div class="last-block image-block">
                    <img src="<?php echo $hero2["blokk_kep"] ?>" alt="<?php echo $hero2["blokk_cim"] ?>">
                </div>
            </div>
            <p><?php echo $hero2["blokk_leiras_2"] ?></p>
        <?php endif; ?>
    </div>
</section>

<section class="bg--pureWhite section-tech-details">
    <div class="container">
        <div class="text-center">

            <?php
            $tech = get_field('tech_blokk');
            if( $tech ): ?>
                <h2 class="lead"><span>\</span> <?php echo $tech["blokk_alcim"] ?></h2>
                <h1><?php echo $tech["blokk_cim"] ?></h1>
                <p class="subtitle"><?php echo $tech["blokk_leiras"] ?></p>
            <?php endif; ?>

        </div>
        <div class="grid grid-2-3">

            <?php include get_theme_file_path( '/includes/tech-details.php' ); ?>

            <div class="downloads">
                
                <?php if( have_rows('letoltheto_anyagok') ): ?>
                    <?php while( have_rows('letoltheto_anyagok') ): the_row();  ?>
                        
                        <?php $file = get_sub_field('fajl'); ?>
                        <a href="<?php echo $file['url']; ?>" class="btn btn-download" download>
                            <div class="btn-text img-right">
                                <?php echo $file['filename']; ?>
                                <img src="<?php bloginfo('template_url') ?>/assets/img/icon/download.svg" alt="">
                            </div>
                        </a>

                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>