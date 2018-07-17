<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 *
 *
 * @package Cannonball Travel
 * @subpackage  cannonballtravel
 * @since 1.0
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html  <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body>
<div id="outer">
<div id="inner">
    <div id="header">
        <div id="header_round"></div>
        <div id="header_main">
            <div id="logo"></div>
            <?php
                wp_nav_menu(array(
                        'theme_location'=>'top',
                        'container'=>'div',
                        'container_id'=>'main_navi',
                        'menu_id'=>'navi',


            )); ?>

            <div class="clearer"></div>
        </div>
    </div>
    <div id="main_content">
        <div id="main_content_middle">


