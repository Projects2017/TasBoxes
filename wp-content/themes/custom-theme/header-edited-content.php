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
    <meta name="description"content="<?php bloginfo('description'); ?>">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="shortcut-icon" href="<?php echo $favicon; ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $touchicon; ?>" sizes="152x152">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php
    $favicon = IMAGES .'/icons/favicon.ico';
    $touchicon = IMAGES . '/icons/apple-touch-icon-precomposed.png';
    ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <div class="site-inner">
        <header class="navbar navbar-full navbar-inverse custom_head" role="banner">
            <div class="container main-header-custom">
                <div class="navbar-header"></div>
                <!--        <div class="brand-centered">-->
                <!--            <a class="navbar-brand div-position-mobile" href="index.php"><img src="lib/assets/slider/logo.png" alt="Logo Brand"></a>-->
                <!--        </div>-->
                <div class="container center">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only"><?php _e('Toggle navigation', 'TASBOXES'); ?></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"></a>
                        <?php bloginfo('name'); ?>
                    </div>

                </div>
            </div>
        </header>

        <div id="content" class="site-content">
