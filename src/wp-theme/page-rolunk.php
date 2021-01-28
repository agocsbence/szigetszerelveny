<?php
/*

Template Name: Rólunk

*/

get_header();

?>
			
<section class="container-fluid section-about-hero bg--white">
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
            <img src="<?php bloginfo('template_url') ?>/assets/img/blocks/about.png" alt="">
        </div>
    </div>
</section>

<section class="container section-about-team bg--pureWhite">
    <div class="text-center">
        <?php
        $team = get_field('csapat_blokk');
        if( $team ): ?>
            <h2 class="lead"><span>\</span> <?php echo $team["blokk_alcim"] ?></h2>
            <h1><?php echo $team["blokk_cim"] ?></h1>
            <p><?php echo $team["blokk_leiras"] ?></p>
        <?php endif; ?>
    </div>
    <div class="grid grid-2">

        <?php if( have_rows('csapat') ): ?>
			<?php while( have_rows('csapat') ): the_row();  ?>
                <div class="image-card bordered">
                    <div class="card-image">
                        <img class="member" src="<?php the_sub_field('kep') ?>" alt="<?php the_sub_field('nev') ?>">
                        <?php if (get_sub_field('logo_szine') == 'feher') { ?>
                            <img class="logo" src="<?php bloginfo('template_url') ?>/assets/img/logo-mini-white.png" alt="">
                        <?php } else { ?>
                            <img class="logo" src="<?php bloginfo('template_url') ?>/assets/img/logo-mini.png" alt="">
                        <?php } ?>

                    </div>
                    <div class="card-content">
                        <h2 class="title">
                            <?php the_sub_field('nev') ?>
                            <span><?php the_sub_field('titulus') ?></span>
                        </h2>
                        <p class="description">
                            <?php the_sub_field('bemutatkozas') ?>
                        </p>
                    </div>
                </div>
			<?php endwhile; ?>
		<?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>