<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 *
 *
 * @package CannonballtravelResponsive
 * @subpackage  cannonballtravel_responsive
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="main-cnt container">
    <!---Header LOGO START -->
    <div class="header container">
        <div class="row">
            <div class="col-md-12">
               <?php
                $logoId=get_theme_mod('custom_logo');
                $imageUrl=wp_get_attachment_image_src($logoId,'full');
                echo '<img src="'.$imageUrl[0].'" class="img-responsive center-block header-logo">';
               ?>
            </div>
        </div>
    </div>
    <!---HEADER LOGOEnd-->
    <div class="container navigation-cnt">
        <div class="navigation row">
            <div class="col-lg-12">
                <ul class="headerNavi nav nav-pills nav-justified">
                    <li><a>1</a></li>
                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            Dropdown <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a>2.1</a></li>
                            <li><a>2.2</a></li>
                        </ul></li>
                    <li><a>1</a></li>
                    <li><a>1</a></li>
                    <li><a>1</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div id="content container">