<?php
/**
 * Created by PhpStorm.
 * User: jan
 * Date: 19.05.17
 * Time: 23:24
 */
?>
<div id="top-content" max-height="max-height: 510px; overflow: hidden; padding: 0px; width: 920px; outline: medium none;" class="scroll-pane jspScrollable">
    <div class="jspContainer" style="width: 920px; height: 510px;">
        <div class="jspPane"  style="padding: 0px 0px 0px 20px; width: 886px; top: -31px;">
        <div id="text">
			<?php the_content() ?>
        </div>
        <div id="bild">
            <div class="rslides has-dots">
                <ul>
					<?php for ( $i = 1; $i <= 8; $i ++ ) {
						$url = get_field( 'gallery_img_' . $i );
						if ( ! empty( $url ) ) {
							echo '<li>';

							echo '<img src=' . $url . ' />';
							echo '</li>';
						}
					} ?>
                </ul>
            </div>
            <div id="layor">
                <img src="<?php echo get_theme_file_uri( 'assets/img/kreis.png' ) ?>"/>
            </div>
        </div>
        <div class="clearer"></div>
        </div>
        <div class="jspVerticalBar"></div>
    </div>
</div>
<div id="bottom_content">
	<?php $post_custom_fields = get_post_custom(); ?>
    <div id="schmuckschrift"><?php echo $post_custom_fields['Schmuckschrift'][0] ?> </div>
</div>