<?php
/*
Template Name: page-case-studies
*/
?>


<?php get_header(); ?>
<?php include "inc/nav.php" ?>

<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

<div class="cs-hero">

    <?php
    $image = get_field('hero_image');
    $size = 'full';
    if ($image) {
        echo wp_get_attachment_image($image, $size);
    } ?>

</div>

<div class="global-content-width">

    <div class="cases">
        <h1>Case Studies</h1>
        <?php
        $query = new WP_Query(array('post_type' => 'case_studies', 'posts_per_page' => 8, 'paged' => $paged));

        if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>

                <div class="case">
                    <div class="case-image-wrapper">
                        <div class="case-image-background"></div>
                        <div class="case-image">
                         <?php echo wp_get_attachment_image(13283, "full");  ?>
                        </div>
                    </div>

                    <div class="case-text">
                        <div>
                            <h3> <?php the_title(); ?></h3>
                            <p><?php the_excerpt() ?></p>
                        </div>
                    </div>

                    <div class="hs-pop-up-wrapper">
                        <div class="hs-pop-up">

                            <div class="close-modal"><span>X</span></div>
                            <h3>Read the case study</h3>

                            <p><?php the_title(); ?></p>
                            <br />
                            <?php echo do_shortcode(get_field('form_shortcode')); ?>
                        </div>
                    </div>

                </div>
            <?php endwhile; ?>

    </div>
</div>


<div class="pagination">
    <?php
        echo paginate_links(array(
            'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
            'total'        => $query->max_num_pages,
            'current'      => max(1, get_query_var('paged')),
            'format'       => '?paged=%#%',
            'show_all'     => false,
            'type'         => 'plain',
            'end_size'     => 2,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text'    => sprintf('<i></i> %1$s', __('Newer Posts', 'text-domain')),
            'next_text'    => sprintf('%1$s <i></i>', __('Older Posts', 'text-domain')),
            'add_args'     => false,
            'add_fragment' => '',
        ));
        ?>
</div>


<?php wp_reset_postdata(); ?>
<?php else : ?>


    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>



<?php get_footer(); ?>