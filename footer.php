<div class="push-down"></div>


<div class="footer1-wrapper">


    <?php
    $defaults = array(
        ///ask if you want wp to create a container
        // '' = false
        // 'container' => '',
        'container'       => 'div',
        'container_class' => 'footer-nav-wrapper',
        // 'container_id'    => 'footer-nav',
        ///telling wp this is where the menu is
        'theme_location' => 'footer_nav',
        ///gives the menu a class for your css
        'menu_class' => 'footer-nav',
    );

    wp_nav_menu($defaults);
    ?>

</div>
</div>

<div class="footer2-wrapper">

    <div class="footer2">

        <div class="footer2--logo">
            <a href="<?php echo get_home_url(); ?>">


                <?php echo wp_get_attachment_image(13278, "full");  ?>


        </div>

        <div class="footer2--contact">
            <a href="">info@empaxis.com</a>
            <a href="">+1 310 356 5831</a>
        </div>

        <div class="footer2--social">
            <div class="footer2--social-image">
                <a href="https://www.linkedin.com/company/empaxis-data-management-inc/" target="_blank">

                    <?php echo wp_get_attachment_image(13277, "full");  ?>

                </a>
            </div>
        </div>

        <div class="footer2--form-wrapper">


            <?php echo do_shortcode("[hubspot type=form portal=4509615 id=f5fd0b38-d2f0-4f10-adb2-ca64d8743a25]"); ?>


        </div>

    </div>
</div>

<!-- Start of HubSpot Embed Code -->
<!-- <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/4509615.js"></script>  -->
<!-- End of HubSpot Embed Code -->

<?php wp_footer(); ?>



</body>

</html>