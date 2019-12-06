<?php
/*
Template Name: page-contact
*/
?>

<?php get_header(); ?>
<?php include "inc/nav.php" ?>

<?php include "inc/skyline-hero.php" ?>

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