<?php
/*
Template Name: page-leadership
*/
?>

<?php get_header(); ?>
<?php include "inc/nav.php" ?>


<?php include "inc/skyline-hero.php" ?>

<div class="global-content-width-sml">
   
    <div class="leadership-members">
         <h1>Leadership Team</h2>
        <?php
        $args = array(
            'post_type' => 'team_members',
            'orderby' => 'date',
            'order'   => 'DESC',
        );

        $the_query = new WP_Query($args); ?>

        <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                <div class="leadership-member">

                    <div class="leadership-member--header">

                        <div class="leadership-member--headshot">
                            <?php $image = get_field('headshot');
                                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                    if ($image) {
                                        echo wp_get_attachment_image($image, $size);
                                    }  ?>

                        </div>

                        <div class="leadership-member--name-and-position">
                            <div class="leadership-member--name">
                                <h2><?php the_title() ?> </h2>
                            </div>
                            <div class="leadership-member--position">
                                <h3><?php the_field('position') ?></h3>
                            </div>

                        </div>


                    </div>

                    <h3 class="leadership-member--bio-btn">Read Bio <span>+</span> </h3>
                
                    <div class="leadership-member--bio">
                        <?php the_field('bio') ?>
                    </div>

                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>

    </div>

</div>


<?php get_footer(); ?>