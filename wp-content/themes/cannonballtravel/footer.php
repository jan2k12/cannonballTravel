<?php
/**
 * Created by PhpStorm.
 * User: jan
 * Date: 09.05.17
 * Time: 21:08
 */ ?>
</div>
</div>
<div id="footer">
    <div id="kreise">
        <div class="kreisel_ausrichten">
            <div class="kreis_bild">
                <a href="<?php the_field( 'kreisbild_unten_links_link' ) ?>" target="_blank">
                    <img class="kreis_links_inactive" src="<?php the_field( 'kreisbild_unten_links' ) ?>"/>
                    <img class="kreis_links_active" style="display:none;" src="<?php the_field( 'kreisbild_unten_links_hover' ) ?>" />
                </a>
            </div>
            <div class="kreis_text">
            <span>
                <?php the_field( 'kreisbild_unten_links_text' ) ?>
            </span>
            </div>
        </div>
        <div class="kreisel_ausrichten">
            <div class="kreis_bild">
                <a href="<?php the_field( 'kreisbild_unten_mitte_link' ) ?>" target="_blank">
                    <img class="kreis_mitte_inactive" src="<?php the_field( 'kreisbild_unten_mitte' ) ?>"/>
                    <img class="kreis_mitte_active" style="display:none;" src="<?php the_field( 'kreisbild_unten_mitte_hover' ) ?>" />
                </a>
            </div>
            <div class="kreis_text">
            <span>
                <?php the_field( 'kreisbild_unten_mitte_text' ) ?>
            </span>
            </div>
        </div>
        <div class="kreisel_ausrichten">
            <div class="kreis_bild">
                <a href="<?php the_field( 'kreisbild_unten_rechts_link' ) ?>" target="_blank">
                    <img class="kreis_rechts_inactive" src="<?php the_field( 'kreisbild_unten_rechts' ) ?>"/>
                    <img class="kreis_rechts_active" style="display:none;" src="<?php the_field( 'kreisbild_unten_rechts_hover' ) ?>" />
                </a>
            </div>
            <div class="kreis_text">
            <span>
                <?php the_field( 'kreisbild_unten_rechts_text' ) ?>
            </span>
            </div>
        </div>
        <div class="clearer"></div>
    </div>
    <div id="fotter_text">
        <span id="copy_right">&copy; Cannonball Travel <?php echo date( 'Y' ) ?></span>
        <a id="agb" href='/agb'>AGB</a>
        <a href="/kontakt" id="kontakt">Kontakt</a>
        <a href="/impressum" id="impressum">Impressum</a>
        <a href="/datenschutz" id="datenschutz">Datenschutz</a>
        <div class="clearer"></div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('.kreis_links_inactive').mouseenter(function(){
            $('.kreis_links_active').show();
            $('.kreis_links_inactive').hide();
        });

        $('.kreis_links_active').mouseleave(function(){
            $('.kreis_links_active').hide();
            $('.kreis_links_inactive').show();
        });

        $('.kreis_mitte_inactive').mouseenter(function(){
            $('.kreis_mitte_active').show();
            $('.kreis_mitte_inactive').hide();
        });

        $('.kreis_mitte_active').mouseleave(function(){
            $('.kreis_mitte_active').hide();
            $('.kreis_mitte_inactive').show();
        });

        $('.kreis_rechts_inactive').mouseenter(function(){
            $('.kreis_rechts_active').show();
            $('.kreis_rechts_inactive').hide();
        });

        $('.kreis_rechts_active').mouseleave(function(){
            $('.kreis_rechts_active').hide();
            $('.kreis_rechts_inactive').show();
        });
    })
</script>
<?php wp_footer() ?>
</div>
</div>
</body>
</html>