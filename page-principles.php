<?php
/*
Template Name: page-principles
*/
?>

<?php get_header(); ?>
<?php include "inc/nav.php" ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="hero-small-no-illus">

            <div class="hero-small-no-illus--bkg principles-bkg"></div>

            <div class="hero-small-no-illus--content global-content-width">

                <div class="hero-small-no-illus--title principles-color ">
                    <h1><?php the_field('title') ?></h1>
                    <h2><?php the_field('sub_title') ?></h2>
                </div>



            </div>
        </div>


        <div class="global-content-width">
            <div class="principles-cards">
                <div class="principles-card">

                    <a href="<?php echo get_home_url(); ?>//our-clients/">
                        <div class="principles-card--img">
                            <?php $image = get_field('clients_icon');
                                    $size = 'full';
                                    if ($image) {
                                        echo wp_get_attachment_image($image, $size);
                                    } ?>
                        </div>
                    </a>

                    <div class="principles-card--text">
                        <p class="bold">Clients</p>
                        <p><?php the_field('clients_card_text') ?></p>
                        <h4>Read more...</h4>
                    </div>


                </div>

                <div class="principles-card">
                    <a href="<?php echo get_home_url(); ?>/principles/capability">
                        <div class="principles-card--img">
                            <?php $image = get_field('capability_icon');
                                    $size = 'full';
                                    if ($image) {
                                        echo wp_get_attachment_image($image, $size);
                                    } ?>
                        </div>
                    </a>
                    <div class="principles-card--text">
                        <p class="bold">Capability</p>
                        <p><?php the_field('capability_card_text') ?></p>
                        <h4>Read more...</h4>
                    </div>

                </div>

                <div class="principles-card">
                    <a href="<?php echo get_home_url(); ?>/principles/coverage">
                        <div class="principles-card--img">
                            <?php $image = get_field('coverage_icon');
                                    $size = 'full';
                                    if ($image) {
                                        echo wp_get_attachment_image($image, $size);
                                    } ?>
                        </div>
                    </a>

                    <div class="principles-card--text">
                        <p class="bold">Coverage</p>
                        <p> <?php the_field('coverage_card_text') ?> </p>
                        <h4>Read more...</h4>
                    </div>
                </div>

                <div class="principles-card">
                    <a href="<?php echo get_home_url(); ?>/principles/culture">
                        <div class="principles-card--img">
                            <?php $image = get_field('culture_icon');
                                    $size = 'full';
                                    if ($image) {
                                        echo wp_get_attachment_image($image, $size);
                                    } ?>
                        </div>
                    </a>
                    <div class="principles-card--text">
                        <p class="bold">Culture</p>
                        <p> <?php the_field('culture_card_text') ?> </p>
                        <h4>Read more...</h4>
                    </div>

                </div>

            </div>

            <div class="principles-button-wrapper">
                <div class="principles-button">
                    <a class="" href="<?php echo get_home_url() ?>/who-we-are/contact/">
                        <span>Free Consultation</span>
                    </a>
                </div>
            </div>

            
        </div>

    <?php endwhile;
    else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>




<?php get_footer(); ?>