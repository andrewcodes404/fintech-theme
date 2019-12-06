<div class="case-banner ">


    <div class="case-banner--man">
         <?php echo wp_get_attachment_image(13284, "full");  ?>
    </div>


    <div class="case-banner--scales-wrapper">
        <div class="case-banner--scales">
             <?php echo wp_get_attachment_image(13285, "full");  ?>
        </div>
    </div>

    <div class="case-banner--content ">

        <div class="case-banner--content-bkg"></div>



        <?php
        $post_object = get_field('case_study_choice');
        if ($post_object) :

            // override $post
            $post = $post_object;
            setup_postdata($post);
            ?>
            <div class="case-banner--content-text">

                <h3> <?php the_title(); ?> </h3>
                <p> <?php the_excerpt() ?></p>

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

            
            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly 
                ?>
        <?php endif; ?>

        <div class="case-banner--content-img">
             <?php echo wp_get_attachment_image(13283, "full");  ?>
        </div>
    </div>


</div>