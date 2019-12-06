<?php
/*
Template Name: page-hero-large
*/
?>

<?php get_header(); ?>
<?php include "inc/nav.php" ?>


<?php include('inc/hero-anim-'. $pagename . '.php') ?>


<div class="hero-large-btn-wrapper global-content-width">
    <div class="hero-large-btn">
        <?php
        if (get_field('show_button')) {

            $image = get_field('button');
            $size = 'full'; 
            if ($image) {
                echo wp_get_attachment_image($image, $size);
            }
        }
        ?>
    </div>
</div>


<?php if (is_page('tamp1-platform-investment-managers')) { ?>

    <div class="tamp-image1-wrapper">
        <div class="tamp-image1">
            <?php $image = get_field('top_image');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if ($image) {
                    echo wp_get_attachment_image($image, $size);
                }  ?>
        </div>
    </div>

<?php } ?>

<div class="hero-large-page-content global-content-width">

    <?php the_field('content') ?>
</div>


<?php if (is_page('tamp1-platform-investment-managers')) { ?>

    <div class="tamp-image2-wrapper">

        <div class="tamp-image2-flexbox global-content-width">
            <div class="tamp-image2a">
                <?php $image = get_field('bottom_image_1');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if ($image) {
                        echo wp_get_attachment_image($image, $size);
                    }  ?>
            </div>
            <div class="tamp-image2b-wrapper">
                <div class="tamp-image2b">
                    <?php $image = get_field('bottom_image_2');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if ($image) {
                            echo wp_get_attachment_image($image, $size);
                        }  ?>

                </div>
            </div>
        </div>

    </div>

<?php } ?>



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