<?php
/*
Template Name: page-products
*/
?>

<?php get_header(); ?>
<?php include "inc/nav.php" ?>


<div class="hero-small-no-illus">

    <div class="hero-small-no-illus--bkg products-bkg"></div>

    <div class="hero-small-no-illus--content global-content-width">
        <div class="hero-small-no-illus--title">
            <h1><?php the_field('title') ?></h1>
            <h2><?php the_field('subtitle') ?></h2>
        </div>
    </div>
</div>


<div class="products-cards--wrapper">
    <div class="global-content-width">

        <div class="products-cards">
            <div class="products-card">
                <a href="<?php echo get_home_url(); ?>/solutions/middle-and-back-office-outsourcing/">
                    <div class="products-card--img">
                        <?php
                        $image = get_field('oaas_icon');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if ($image) {
                            echo wp_get_attachment_image($image, $size);
                        } ?>
                    </div>

                    <div class="products-card--text">
                        <p class="bold">Operations as a Service</p>
                        <p><?php the_field('oaas_text') ?></p>
                        <h4>Read more...</h4>
                    </div>
                </a>
            </div>

            <div class="products-card">
                <a href="<?php echo get_home_url(); ?>/solutions/tamp1-platform-investment-managers/">
                    <div class="products-card--img">
                        <?php
                        $image = get_field('tamp1_icon');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if ($image) {
                            echo wp_get_attachment_image($image, $size);
                        } ?>
                    </div>

                    <div class="products-card--text">
                        <p class="bold">Turnkey Asset Management Platform</p>
                        <p><?php the_field('tamp1_text') ?>
                        </p>
                        <h4>Read more...</h4>
                    </div>
                </a>
            </div>

            <div class="products-card">
                <a href="<?php echo get_home_url(); ?>/solutions/robotic-process-automation/">
                    <div class="products-card--img">
                        <?php
                        $image = get_field('rpa_icon');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if ($image) {
                            echo wp_get_attachment_image($image, $size);
                        } ?>
                    </div>



                    <div class="products-card--text">
                        <p class="bold">Robotic Process Automation</p>
                        <p><?php the_field('rpa_text') ?>
                        </p>
                        <h4>Read more...</h4>
                    </div>
                </a>
                </a>
            </div>

        </div>



        <div class="products-button-wrapper">
            <div class="products-button">
                <a class="" href="<?php echo get_home_url() ?>/who-we-are/contact/">
                    <span>Free Consultation</span>
                </a>
            </div>
        </div>

    </div>
</div>



<?php get_footer(); ?>