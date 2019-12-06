<?php get_header(); ?>
<?php include "inc/nav.php" ?>

<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$offset = (($paged - 1) * 8) + 1; ?>

<div class="blog-hero">

    <?php
    $image = get_field('hero_image', get_option('page_for_posts'));
    $size = 'full';
    if ($image) {
        echo wp_get_attachment_image($image, $size);
    } ?>

</div>


<div class="global-content-width">
    <h1>Financial Operations Blog</h1>

    <?php
    $query = new WP_Query(array('posts_per_page' => 1,));
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
            <a href="<?php the_permalink() ?>">

                <div class="hero-post <?php if ($paged > 1) {
                                                    echo "hero-post-hide";
                                                }; ?>">

                    <div class="hero-post-text">
                        <h2 class="hero-post-title-desk">
                            <?php the_title(); ?>
                        </h2>
                        <h4 class="hero-post-date"><?php the_date(); ?> - </h4>
                        <h4 class="hero-post-author"><?php the_author(); ?></h4>

                        <div class="hero-post-excerpt">
                            <p><?php the_excerpt() ?></p>
                        </div>
                    </div>

                    <div class="hero-post-thumb">
                        <h3 class="hero-post-title-mob">
                            <?php the_title(); ?>
                        </h3>
                        <div class="hero-post-thumb-img">
                            <img src="<?php the_post_thumbnail_url('large') ?>" alt="" srcset="">
                        </div>
                    </div>

                </div>
            </a>
        <?php endwhile;
        else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</div>


<div class="posts">
    <?php

    $query = new WP_Query(array('post_status' => 'publish', 'offset' => $offset, 'posts_per_page' => 8, 'paged' => $paged));

    if ($query->have_posts()) : ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>

            <div class="post">


                <div class="post-thumb-img-wrapper">
                    <a href="<?php the_permalink() ?>">
                        <div class="post-thumb-img">
                            <img src="<?php the_post_thumbnail_url('large') ?>" alt="" srcset="">
                        </div>
                    </a>
                </div>

                <h3 class="post-title">
                    <a href="<?php the_permalink() ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>


            </div>

        <?php endwhile; ?>
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


</div>
<?php get_footer(); ?>