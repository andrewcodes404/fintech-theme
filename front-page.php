<?php get_header(); ?>
<?php include "inc/nav.php"; ?>

<div class="fp-hero">

    <div class="fp-hero-text">
        <div class="fp-hero-titles">
            <h1 class="white fp-title_line_1"><?php the_field('title_line_1') ?></h1>
            <h1 class="turquoise fp-title_line_2"><?php the_field('title_line_2') ?></h1>
        </div>

        <div class="fp-hero-subtitles">
            <h4 class="fp-subtitle_1"><?php the_field('subtitle_1') ?></h4>
            <h3 class="fp-subtitle_2"><?php the_field('subtitle_2') ?></h3>
        </div>
    </div>


    <div class="fp-hero--scroll-btn" id="scroll-btn">
        <?php echo wp_get_attachment_image(13273, "full");  ?>
    </div>

    <div class="fp-hero--bkg-color"></div>

    <div class="fp-hero--bkg-img">
        <?php echo wp_get_attachment_image(13275, "full");  ?>
    </div>

</div>

<div class="fp-scroll-dest" id="scroll-dest"></div>
<div class="fp-section1and2-wrapper">

    <div class="fp-section1 global-content-width ">

        <h2 class="fp-section1--title">Three Valuable Products to Transform Operations<h2>


                <div class="fp-products--wrapper">

                    <div class="fp-product">
                        <a href="<?php echo get_home_url(); ?>/solutions/middle-and-back-office-outsourcing/">
                            <div class="fp-product--img">
                                <?php
                                $image = get_field('product_oaas_image');
                                $size = 'full';
                                if ($image) {
                                    echo wp_get_attachment_image($image, $size);
                                } ?>
                            </div>
                        </a>
                        <div class="fp-product--text">
                            <a href="<?php echo get_home_url(); ?>/solutions/middle-and-back-office-outsourcing/">
                                <p class="bold"><?php the_field('product_oaas_title') ?></p>
                                <p><?php the_field('product_oaas_text') ?></p>
                            </a>
                        </div>
                    </div>

                    <div class="fp-product">
                        <a href="<?php echo get_home_url(); ?>/solutions/tamp1-platform-investment-managers/">
                            <div class="fp-product--img">
                                <?php
                                $image = get_field('product_tamp_image');
                                $size = 'full';
                                if ($image) {
                                    echo wp_get_attachment_image($image, $size);
                                } ?>
                            </div>
                        </a>
                        <div class="fp-product--text">
                            <a href="<?php echo get_home_url(); ?>/solutions/tamp1-platform-investment-managers/">
                                <p class="bold"><?php the_field('product_tamp_title') ?></p>
                                <p><?php the_field('product_tamp_text') ?></p>
                            </a>
                        </div>
                    </div>

                    <div class="fp-product">
                        <a href="<?php echo get_home_url(); ?>/solutions/robotic-process-automation/">
                            <div class="fp-product--img">
                                <?php
                                $image = get_field('product_rpa_image');
                                $size = 'full';
                                if ($image) {
                                    echo wp_get_attachment_image($image, $size);
                                } ?>
                            </div>
                        </a>
                        <div class="fp-product--text">
                            <a href="<?php echo get_home_url(); ?>/solutions/robotic-process-automation/">
                                <p class="bold"><?php the_field('product_rpa_title') ?></p>
                                <p><?php the_field('product_rpa_text') ?></p>
                            </a>
                        </div>
                    </div>
                </div>

    </div>

    <!-- SECTION 2 --- SECTION 2 --- SECTION 2 ---  -->
    <!-- SECTION 2 --- SECTION 2 --- SECTION 2 ---  -->
    <!-- SECTION 2 --- SECTION 2 --- SECTION 2 ---  -->

    <div class="fp-section2" id="hero-arrow-dest">
        <div class="fp-section2--content global-content-width">

            <div class="fp-section2--col-left">

                <div class="fp-section2--phone-image">

                    <?php
                    $image = get_field('products_image_1');
                    $size = 'full';
                    if ($image) {
                        echo wp_get_attachment_image($image, $size);
                    } ?>
                </div>

            </div>

            <div class="fp-section2--col-right">
                <div class="fp-section2--text">
                    <a href="<?php echo get_home_url(); ?>/solutions/tamp1-platform-investment-managers/">
                        <h2><?php the_field('product_image_section_headline') ?></h2>

                        <h3>...read more</h3>
                    </a>
                </div>
                <div class="fp-section2--illus-desktop">

                    <?php
                    $image = get_field('products_image_2');
                    $size = 'full';
                    if ($image) {
                        echo wp_get_attachment_image($image, $size);
                    } ?>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- SECTION 3 --- SECTION 3 --- SECTION 3 ---  -->
<!-- SECTION 3 --- SECTION 3 --- SECTION 3 ---  -->
<!-- SECTION 3 --- SECTION 3 --- SECTION 3 ---  -->

<div class="fp-section3">
    <div class="global-section-padding global-content-width">

        <h2 class="white"><?php the_field('investment_section_title') ?></h2>

        <div class="fp-section3--content">

            

            <div class="fp-section3--content--image">
                <?php echo wp_get_attachment_image(13286, "full");  ?>
            </div>

            <div class="fp-section3--content--texts">

                <div class="fp-section3--content--text">
                    <h3 class="bold"><?php the_field('wealth_managers_title') ?></h3>
                    <p><?php the_field('wealth_managers_text') ?></p>
                    <div class="fp-section3--content--text-link">
                        <a href="<?php echo get_home_url(); ?>/our-clients/wealth-management-outsourcing/">
                            <p class="">...read more</p>
                        </a>
                    </div>
                </div>

                <div class="fp-section3--content--text">
                    <h3 class="bold"><?php the_field('asset_managers_title') ?></h3>
                    <p><?php the_field('asset_managers_text') ?></p>
                    <div class="fp-section3--content--text-link">
                        <a href="<?php echo get_home_url(); ?>/our-clients/asset-management-outsourcing/">
                            <p class="">...read more</p>
                        </a>
                    </div>
                </div>

                <div class="fp-section3--content--text">
                    <h3 class="bold"><?php the_field('hedge_funds_title') ?></h3>
                    <p><?php the_field('hedge_funds_text') ?></p>
                    <div class="fp-section3--content--text-link">
                        <a href="<?php echo get_home_url(); ?>/our-clients/hedge-fund-outsourcing/">
                            <p class="">...read more</p>
                        </a>
                    </div>
                </div>

                <div class="fp-section3--content--text">
                    <h3 class="bold"><?php the_field('family_offices_title') ?></h3>
                    <p><?php the_field('family_offices_text') ?></p>
                    <div class="fp-section3--content--text-link">
                        <a href="<?php echo get_home_url(); ?>/our-clients/family-offices/">
                            <p class="">...read more</p>
                        </a>
                    </div>
                </div>


            </div>


        </div>
    </div>
</div>

<!-- SECTION 4 -- SECTION 4 -- SECTION 4 -- -->
<!-- SECTION 4 -- SECTION 4 -- SECTION 4 -- -->
<!-- SECTION 4 -- SECTION 4 -- SECTION 4 -- -->

<div class="fp-section4">

    <div class="fp-section4--content global-section-padding global-content-width">

        <div class="fp-section4--item1">
            <h2><?php the_field('strategy_title') ?></h2>

            <div class="fp-section4--text">
                <h3 class="bold"><?php the_field('strategy_method_title') ?></h3>
                <p><?php the_field('strategy_method_text') ?></p>

                <div class="fp-section4--text-link">
                    <a href="<?php echo get_home_url(); ?>/method/">
                        <p class="">...read more</p>
                    </a>
                </div>
            </div>



        </div>


        <div class="fp-section4--item2">
            <div class="fp-section4--image">
                <?php
                $image = get_field('strategy_image');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if ($image) {
                    echo wp_get_attachment_image($image, $size);
                } ?>
            </div>
        </div>

    </div>
</div>

<!-- SECTION 5 --- SECTION 5 --- SECTION 5 ---  -->
<!-- SECTION 5 --- SECTION 5 --- SECTION 5 ---  -->
<!-- SECTION 5 --- SECTION 5 --- SECTION 5 ---  -->


<div class="locations">

    <div class="locations--content">

        <div class="locations--content-left">
            <span>Silicon Beach</span>
            <span>Soho</span>
            <span>Noida</span>
        </div>

        <div class="locations--content-right">
            <span>Los Angeles</span>
            <span>London</span>
            <span>Delhi</span>

        </div>

    </div>

    <div class="locations-image--wrapper">
        <div class="locations-image">
            <?php echo wp_get_attachment_image(13272, "full");  ?>
        </div>
    </div>

</div>

<div class="fp-blog global-content-width">

    <h1>Financial Operations Blog</h1>



    <?php
    $query = new WP_Query(array('posts_per_page' => 1,));
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
            <a href="<?php the_permalink() ?>">

                <div class="fp-blog-single">

                    <div class="fp-blog-single-text">
                        <h2 class="fp-blog-single-title-desk">
                            <?php the_title(); ?>
                        </h2>
                        <h4 class="fp-blog-single-date"><?php the_date(); ?> - </h4>
                        <h4 class="fp-blog-single-author"><?php the_author(); ?></h4>

                        <div class="fp-blog-single-excerpt">
                            <p><?php the_excerpt() ?></p>
                        </div>
                    </div>

                    <div class="fp-blog-single-thumb">
                        <h3 class="fp-blog-single-title-mob">
                            <?php the_title(); ?>
                        </h3>
                        <div class="fp-blog-single-thumb-img">
                            <img src="<?php the_post_thumbnail_url('large') ?>" alt="" srcset="">
                        </div>
                    </div>
                </div>

            </a>
        <?php endwhile;
        else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>


    <div class="fp-blog-manys">

        <?php
        $query = new WP_Query(array('offset' => 1, 'posts_per_page' => 4));

        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>


                <div class="fp-blog-many">

                    <h3 class="fp-blog-many-title">
                        <a href="<?php the_permalink() ?>">
                            <?php the_title(); ?>
                        </a>
                    </h3>

                    <div class="fp-blog-many-thumb-img-wrapper">
                        <a href="<?php the_permalink() ?>">
                            <div class="fp-blog-many-thumb-img">
                                <img src="<?php the_post_thumbnail_url('large') ?>" alt="" srcset="">
                            </div>
                        </a>
                    </div>
                </div>
            <?php endwhile;
            else : ?>
            <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>

    </div>
</div>



<?php include "inc/banner-principle.php"; ?>

<?php get_footer(); ?>