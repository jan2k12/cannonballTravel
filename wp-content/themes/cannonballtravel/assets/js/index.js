/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function resize_scrollcontent() {

    var header = $('#header').height();
    var main = $('#main_content').height();
    var footer = $('#footer').height();
    var hoehe_browser = $(window).height();
    var hoehe_gesamt = header + main + footer;
    var dif = hoehe_browser - hoehe_gesamt;
    var top_content_height = $('#top_content').height();

    if (hoehe_browser > hoehe_gesamt) {
        var max_height = top_content_height + dif - 30;
        $('#top_content').css('max-height', max_height + 'px');
       // $('.scroll-pane').jScrollPane({hideFocus:true});
    } else {
        $('#top_content').css('max-height', 510 + 'px');
    }

}


$(document).ready(function() {

    /* if ($.browser.msie && $.browser.version >= 10) {
     $("#navi li ul li").css('padding-top','5px');
     }*/
    resize_scrollcontent();

    window.onresize = function() {
        resize_scrollcontent();
    };

    var cnt = 0;
    cnt = $('.rslides ul li').length;
    var parama_dots = false;
    if (cnt > 1) {
        parama_dots = true;
    }

    /* Hier kann man die slide Geschwindigkeit und die anzeige Geschwindigkeit einstellen
     * speed: Ãœbergangsgeschwindigkeit
     * delay: Anzeigedauer der Bilder
     */

    $('.rslides').unslider({
        fluid: true,
        dots: parama_dots,
        speed: 1000,
        delay: 5000
    });

    $('.scroll-pane').jScrollPane({hideFocus:true});


    /* Dies wird benÃ¶tigt, falls ein neuer Kreis hinzugefÃ¼gt wird, sprich im Footer Bereich.
     * Einfach ein Block kopieren und die ids (#) auf den neuen namen Ã¤ndern
     * Bsp.: $("#globefox") > $("#test") den namen genauso wÃ¤hlen wie man es im HTML defeniert hat, dann nur
     * noch die Bildernamen anpassen. Das erste fÃ¼r den Hover effekt und das 2 fÃ¼r die normale Ansicht
     *
     */
    $('#globefox').find('a').hover(function() {
        $('img', this).attr('src', 'img/icons/globefox_weiÃŸ.png');
    }, function() {
        $('img', this).attr('src', 'img/icons/globefox_blau.png');
    });

    $('#sunnycar').find('a').hover(function() {
        $('img', this).attr('src', 'img/icons/sunnycars_weiÃŸ.png');
    }, function() {
        $('img', this).attr('src', 'img/icons/sunnycars_blau.png');
    });

    $('#reisever').find('a').hover(function() {
        $('img', this).attr('src', 'img/icons/ERV_weiÃŸ.png');
    }, function() {
        $('img', this).attr('src', 'img/icons/ERV_blau.png');
    });

    $('#reisever2').find('a').hover(function() {
        $('img', this).attr('src', 'img/icons/ERV_weiÃŸ.png');
    }, function() {
        $('img', this).attr('src', 'img/icons/ERV_blau.png');
    });

    $('#mail').find('a').hover(function() {
        $('img', this).attr('src', 'img/icons/Mail_weiÃŸ.png');
    }, function() {
        $('img', this).attr('src', 'img/icons/Mail_blau.png');
    });

    $('#hotel').find('a').hover(function() {
        $('img', this).attr('src', 'img/icons/hotel_weiÃŸ.png');
    }, function() {
        $('img', this).attr('src', 'img/icons/hotel_blau.png');
    });
    $('#amt').find('a').hover(function() {
        $('img', this).attr('src', 'img/icons/Auswaertiges_Amt_weiÃŸ.png');
    }, function() {
        $('img', this).attr('src', 'img/icons/Auswaertiges_Amt_blau.png');
    });
    $('#esta').find('a').hover(function() {
        $('img', this).attr('src', 'img/icons/ESTA_weiÃŸ.png');
    }, function() {
        $('img', this).attr('src', 'img/icons/ESTA_blau.png');
    });


    var tel = 'tel:+49722139633270';



});