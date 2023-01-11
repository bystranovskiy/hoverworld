<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hoverworld
 */

?>

<footer id="colophon" class="site-footer pt-3">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 text-center col-lg-auto">
                <div class="site-branding">
                    <?php the_custom_logo(); ?>
                </div>
            </div>
            <div class="col-12 text-center col-lg">
                <nav id="site-footer-navigation"
                     class="row justify-content-center justify-content-lg-between align-items-center main-navigation">
                    <div class="col-12 col-lg-auto d-flex justify-content-center my-3 my-lg-0">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'container' => false,
                        )); ?>
                    </div>
                    <div class="col-12 col-lg-auto d-flex justify-content-center mx-n2 social-links">
                        <?php get_template_part('/template-parts/general/social-links'); ?>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row justify-content-between align-items-center footer-bottom pb-4 px-md-3">
            <div class="col-12 mb-2 footer-top-line-wrapper">
                <div class="footer-top-line mx-md-n3">
                    <svg preserveAspectRatio="none" width="1393" height="15" viewBox="0 0 1393 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.2" d="M1 1L14.0422 14H1379.46L1392 1.5" stroke="white"/>
                    </svg>
                </div>
            </div>
            <div class="col-12 col-md-auto py-2 order-2 order-md-0 text-center footer-copyright">
                <?php echo __("All Rights Reserved", "hoverworld"); ?>
            </div>
            <div class="col-12 col-md-auto">
                <?php wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'container' => false,
                )); ?>
            </div>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
