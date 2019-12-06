<?php
/*
Template Name: page-about
*/
?>

<?php get_header(); ?>
<?php include "inc/nav.php" ?>


<?php include "inc/skyline-hero.php" ?>


<div class="global-content-width">


    <div class="about-title-banner">

        <h1 class="about-title">
            <?php the_field('title') ?>
        </h1>

        <h1 class="about-sub-title">
            <?php the_field('sub_title') ?>
        </h1>

        <div class="about-title-content">
            <?php the_field('title_content') ?>
        </div>

    </div>


    <div class="products-cards--wrapper">
        <div class="global-content-width">

            <div class="products-cards">
                <div class="products-card">
                    <div class="products-card--img">
                        <?php
                        $image = get_field('oaas_icon');
                        $size = 'full';
                        if ($image) {
                            echo wp_get_attachment_image($image, $size);
                        } ?>
                    </div>

                    <div class="products-card--text">
                        <p class="bold">Operations as a Service</p>
                        <p><?php the_field('oaas_text') ?></p>
                        <h4>Read more...</h4>
                    </div>

                </div>

                <div class="products-card">
                    <div class="products-card--img">
                        <?php
                        $image = get_field('tamp1_icon');
                        $size = 'full';
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

                </div>

                <div class="products-card">
                    <div class="products-card--img">
                        <?php
                        $image = get_field('rpa_icon');
                        $size = 'full';
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

                </div>

            </div>

        </div>
    </div>

    <div class="about-principles-icons">

        <div class="about-principles-icon">
            <?php
            $image = get_field('clients_icon');
            $size = 'full';
            if ($image) {
                echo wp_get_attachment_image($image, $size);
            } ?>

        </div>
        <div class="about-principles-icon">
            <?php
            $image = get_field('capability_icon');
            $size = 'full';
            if ($image) {
                echo wp_get_attachment_image($image, $size);
            } ?>

        </div>
        <div class="about-principles-icon">
            <?php
            $image = get_field('coverage_icon');
            $size = 'full';
            if ($image) {
                echo wp_get_attachment_image($image, $size);
            } ?>

        </div>
        <div class="about-principles-icon">
            <?php
            $image = get_field('culture_icon');
            $size = 'full';
            if ($image) {
                echo wp_get_attachment_image($image, $size);
            } ?>

        </div>

    </div>

    <div class="about-principles-content">
        <?php the_field('principles_content') ?>
    </div>


    <div class="method-icons">

        <div class="method-icon">
            <?php
            $image = get_field('design_icon');
            $size = 'full';
            if ($image) {
                echo wp_get_attachment_image($image, $size);
            } ?>
        </div>

        <div class="method-icon">
            <?php
            $image = get_field('perform_icon');
            $size = 'full';
            if ($image) {
                echo wp_get_attachment_image($image, $size);
            } ?>
        </div>


        <div class="method-icon">
            <?php
            $image = get_field('manage_icon');
            $size = 'full';
            if ($image) {
                echo wp_get_attachment_image($image, $size);
            } ?>
        </div>



    </div>


    <div class="method-content">

        <?php the_field('method_content') ?>
    </div>


    <div class="engagement-cycle">

        <?php
        $image = get_field('engagement_cycle');
        $size = 'full';
        if ($image) {
            echo wp_get_attachment_image($image, $size);
        } ?>
    </div>


</div>

<?php include "inc/banner-talk.php" ?>

<?php get_footer(); ?>