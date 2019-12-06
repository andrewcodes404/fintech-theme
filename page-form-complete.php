<?php
/*
Template Name: page-form-complete
*/
?>

<?php get_header(); ?>
<?php include "inc/nav.php" ?>



<div class="cs-hero">

    <?php
    $image = get_field('hero_image');
    $size = 'full';
    if ($image) {
        echo wp_get_attachment_image($image, $size);
    } ?>

</div>


<div class="form-comp global-content-width">
    <h1>Thank you for filling out the form</h1>

    <div class="form-comp-button">

        <a href="<?php the_field('target_page'); ?>">

            <div><?php the_field('button_text') ?></div>
        </a>
    </div>

</div>



<div class="global-content-width">
    <?php the_field('content') ?>
</div>


<?php get_footer(); ?>