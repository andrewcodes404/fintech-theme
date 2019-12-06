<?php
/*
Template Name: page-method
*/
?>

<?php get_header(); ?>
<?php include "inc/nav.php" ?>

<div class="method-hero--wrapper">

    <div class="method-hero global-content-width">

        <div class="method-hero--title">
            <h1><?php the_field('title') ?></h2>
        </div>
        <div class="method-hero--img">
            <?php $image = get_field('hero_image');
            $size = 'full'; // (thumbnail, medium, large, full or custom size)
            if ($image) {
                echo wp_get_attachment_image($image, $size);
            }  ?>
        </div>

    </div>
</div>




<div class="method-card">
    <div class="global-content-width">
        <div class="method-card--icon-and-text">
            <div class="method-card--icon">
                <?php $image = get_field('design_icon');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if ($image) {
                    echo wp_get_attachment_image($image, $size);
                }  ?>
            </div>

            <div class="method-card--text">
                <h4>
                    <h4>
                        <?php the_field('design_text') ?></h4>

            </div>

        </div>
        <div class="method-card--illus">
            <?php $image = get_field('design_illustration');
            $size = 'full'; // (thumbnail, medium, large, full or custom size)
            if ($image) {
                echo wp_get_attachment_image($image, $size);
            }  ?>

        </div>
    </div>
</div>

<div class="method-card">
    <div class="global-content-width">
        <div class="method-card--icon-and-text">
            <div class="method-card--icon">
                <?php $image = get_field('perform_icon');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if ($image) {
                    echo wp_get_attachment_image($image, $size);
                }  ?>
            </div>

            <div class="method-card--text">
                <h4><?php the_field('perform_text') ?></h4>

            </div>

        </div>
        <div class="method-card--illus">
            <?php $image = get_field('perform_illustration');
            $size = 'full'; 
            if ($image) {
                echo wp_get_attachment_image($image, $size);
            }  ?>

        </div>
    </div>
</div>

<div class="method-card">
    <div class="global-content-width">
        <div class="method-card--icon-and-text">
            <div class="method-card--icon">
                <?php $image = get_field('manage_icon');
                $size = 'full'; 
                if ($image) {
                    echo wp_get_attachment_image($image, $size);
                }  ?>
            </div>

            <div class="method-card--text">
                <h4><?php the_field('manage_text') ?></h4>

            </div>

        </div>
        <div class="method-card--illus">
            <?php $image = get_field('manage_illustration');
            $size = 'full'; 
            if ($image) {
                echo wp_get_attachment_image($image, $size);
            }  ?>

        </div>
    </div>
</div>


<?php
if (get_field('show_case_study_banner')) {
    include "inc/banner-case.php";
}
?>

<?php
if (get_field('show_capability_banner')) {
    include "inc/banner-capability.php";
}
?>


<?php
if (get_field('show_banner_talk')) {
    include "inc/banner-talk.php";
}
?>


<?php
if (get_field('show_banner_principle')) {
    include "inc/banner-principle.php";
}
?>




<?php get_footer(); ?>