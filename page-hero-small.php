<?php
/*
Template Name: page-hero-small
*/
?>

<?php get_header(); ?>
<?php include "inc/nav.php" ?>



<div class="hero-small">

    <div class="hero-small--bkg"></div>

    <div class="hero-small--content global-content-width">

        <div class="hero-small--title">
            <h1><?php the_field('hero_banner_text') ?></h1>
        </div>

        <div class="hero-small--image">
            <?php if (has_post_thumbnail()) {
                the_post_thumbnail();
            } ?>
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