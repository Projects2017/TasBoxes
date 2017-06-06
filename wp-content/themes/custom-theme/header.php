<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
        <div class="col-lg-32 col-md-32 top-number">
            <div class="container number-wrapper">
                <p class="number"><strong class="number-info">Have A Question?</strong>  <a href="tel:888-537-0070 710" class="phone-number"><span class="fa fa-phone" aria-hidden="true"></span> 888-537-0070 X 710</a></p>
            </div>
        </div>
        <header class="navbar navbar-full navbar-inverse custom_head" role="banner">
            <div class="container main-header-custom">
                <div class="navbar-header"></div>
                <!--        <div class="brand-centered">-->
                <!--            <a class="navbar-brand div-position-mobile" href="index.php"><img src="lib/assets/slider/logo.png" alt="Logo Brand"></a>-->
                <!--        </div>-->
                <div class="container center">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand div-position" href="<?php echo esc_url( home_url( '/')); ?>">
                            <?php bloginfo( 'name');?>
                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <?php
                            wp_nav_menu( array(
                                    'menu_class' => 'nav navbar-nav navbar-right custom-nav',
                                    'theme_location' => 'main-menu',
                                    'container' => false
                            ));
                        ?>
                    </div>
                </div>
            </div>
        </header>
