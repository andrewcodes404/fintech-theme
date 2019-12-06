<?php
/*
Template Name: page-hero-small-no-illus
*/
?>

<?php get_header(); ?>
<?php include "inc/nav.php" ?>

<div class="hero-small-no-illus">
    <div class="hero-small-no-illus--bkg"></div>
    <div class="hero-small-no-illus--content global-content-width">
        <div class="hero-small-no-illus--title">
            <h1><?php the_field('hero_banner_text') ?></h1>
            <h2><?php the_field('sub_title') ?></h2>
        </div>
    </div>
</div>

<div class="global-content-width">
    <?php the_field('content') ?>
</div>

<?php
if (get_field('show_case_study_banner')) {
    include "inc/banner-case.php";
}
?>


<?php
if (get_field('show_banner_principle')) {
    include "inc/banner-principle.php";
}
?>


<?php get_footer(); ?>