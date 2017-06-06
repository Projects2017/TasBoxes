<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->
<footer class="tasboxes-footer">
    <div class="container">
        <div class="tas-wrapper-logo">
            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                <nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'primary-menu',
                    ) );
                    ?>
                </nav><!-- .main-navigation -->
            <?php endif; ?>

            <?php if ( has_nav_menu( 'social' ) ) : ?>
                <nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'social',
                        'menu_class'     => 'social-links-menu',
                        'depth'          => 1,
                        'link_before'    => '<span class="screen-reader-text">',
                        'link_after'     => '</span>',
                    ) );
                    ?>
                </nav><!-- .social-navigation -->
            <?php endif; ?>
        </div>
        <div class="sub-footer text-center">
            <?php
            /**
             * Fires before the twentysixteen footer text for footer customization.
             *
             * @since TaxBoxes Start
             */
            do_action( 'twentysixteen_credits' );
            ?>
            <h3 class="content-footer"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h3>
        </div><!-- .site-info -->
        </div>
    </div>
</footer>


<?php wp_footer(); ?>
</body>
</html>
