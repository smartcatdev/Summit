<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Zenith
 */

?>

    </div><!-- #content -->

    <?php if ( get_theme_mod( ZENITH_OPTIONS::NAVBAR_STYLE, ZENITH_DEFAULTS::NAVBAR_STYLE ) != 'vertical' ) : ?>
        <?php get_template_part( 'template-parts/footer', 'slim' ); ?>
    <?php endif; ?>

    <?php if ( get_theme_mod( ZENITH_OPTIONS::NAVBAR_STYLE, ZENITH_DEFAULTS::NAVBAR_STYLE ) == 'vertical' ) : ?>
        </div>
    <?php endif; ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
