<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
if (!is_page(25)) {
?>

    <div class="footer-pink-line"></div>

    <footer class="footer-cv">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 spacing-widgets"
                     style="border-right-style: solid; border-right-width: 1px; border-right-color: #ec96c0;">
                    <?php dynamic_sidebar('Footer 1') ?>
                </div>
                <div class="col-md-2 spacing-widgets"
                     style="border-right-style: solid; border-right-width: 1px; border-right-color: #ec96c0;">
                    <?php dynamic_sidebar('Footer 2') ?>
                </div>
                <div class="col-md-3 spacing-widgets">
                    <?php dynamic_sidebar('Footer 3') ?>
                </div>
            </div>
        </div>
    </footer><!-- #colophon -->

    <?php
}
wp_footer(); ?>

</body>
</html>
