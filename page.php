<?php get_header(); ?>
<?php include "inc/nav.php"; ?>
<?php include "inc/skyline-hero.php" ?>
<div class="global-content-width">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>

        <?php endwhile;
        else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

</div>

<?php get_footer(); ?>