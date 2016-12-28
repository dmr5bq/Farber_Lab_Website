/*jslint browser: true*/
/*global $, jQuery, alert*/

/*TO DO:

Dynamic resizing: especially for publications
*/

$(document).ready(function () {
    // Universal script

    "use strict";

    if ($(window).width() < 1400) {
        $('.header-logo').addClass('hidden');
        $('#collapse-all, #expand-all').addClass('hidden');
    }
    if ($(window).width() < 1250) {
        $('#nav p').addClass('hidden');
        $('#menu').removeClass('hidden');
        $('.drop-down').addClass('hidden');
        $('#pub-link-box').addClass('hidden');

        $('#header').css('border-bottom', '1px dotted white');
        $('#header').addClass('header-pub');
        $('#lower-pub-nav').addClass('hidden');
        $('#v2-first-date-box').css('border-top', '3px solid var(--highlight-text-color)');
    }
    if ($(window).width() >= 1250) {
        $('#nav p').removeClass('hidden');
        $('#lower-pub-nav').removeClass('hidden');
        $('#v2-first-date-box').css('border-top', '3px solid var(--quaternary-color)');
    }
    if ($(window).width() < 1100) {

    }
    if ($(window).width() >= 1100) {

    }
    if ($(window).width() < 1050) {
        $('#second-ul').addClass('hidden');
    }
    if ($(window).width() >= 1050) {
        $('#second-ul').removeClass('hidden');
    }
    
    //People script
    $('.people-with-photos .person-box').mouseenter(function () {
        $(this).children('.person-text').show();
        $(this).children('img').hide();
    });
    $('.people-with-photos .person-box').mouseleave(function () {
        $(this).children('.person-text').hide();
        $(this).children('img').fadeIn('fast');
    });
    // team section
    $('#faculty').click(function () {
        $('.people-with-photos .person-box').hide();
        $('.faculty').fadeIn(200);
    });
    $('#students').click(function () {
        $('.people-with-photos .person-box').hide();
        $('.students').fadeIn(200);
    });
    $('#staff').click(function () {
        $('.people-with-photos .person-box').hide();
        $('.staff').fadeIn(200);
    });
    // alumni section
    $('#ug').click(function () {
        $('.people-without-photos .person-box').hide();
        $('.ug').fadeIn('fast');
    });
    $('#gr').click(function () {
        $('.people-without-photos .person-box').hide();
        $('.gr').fadeIn('fast');
    });
    
    
    // Menu dropdown controls
    $('#menu-top').click(function () {
        $('.drop-down').toggleClass('hidden');
        $('#menu-top').toggleClass('menu-bg');
        $('#menu-logo').toggleClass('opaque');
        $('#menu-logo div').toggleClass('menu-bub-highlight');
    });
    $('#logo').mouseenter(function () {
        $('#logo p:nth-child(2)').css('color', 'var(--tertiary-color)');
    });
    $('#logo').mouseleave(function () {
        $('#logo p:nth-child(2)').css('color', 'var(--highlight-text-color)');
    });
    

    $('.collapse').mouseenter(function () {
        $(this).addClass('collapse-hover');
        $(this).parent('.date-box').css('bottom-border', '5px solid var(--secondary-color)');
    });
    
    $('.collapse').mouseleave(function () {
        $(this).removeClass('collapse-hover');
    });
    $('.expand').mouseenter(function () {
        $(this).addClass('expand-hover');
    });
    
    $('.expand').mouseleave(function () {
        $(this).removeClass('expand-hover');
    });
    $('#expand-all, #collapse-all, #pub-link-box li p').mouseenter(function () {
        $(this).css('box-shadow', '-4px 4px 6px rgba(0,0,0,0.4)');
    });
    $('#expand-all, #collapse-all, #pub-link-box li p').mouseleave(function () {
        $(this).css('box-shadow', '-3px 3px 4px rgba(0,0,0,0.4)');
    });
    $('#expand-all, #expand-top').click(function () {
        $('#date-box-wrapper ul').removeClass('hidden');
        $('.expand').addClass('hidden');
        $('.collapse').removeClass('hidden');
        $('.person-box').fadeIn('fast');
    });
    $('#collapse-all, #collapse-top').click(function () {
        $('#date-box-wrapper ul').addClass('hidden');
        $('.expand').removeClass('hidden');
        $('.collapse').addClass('hidden');
        $('.person-box').fadeOut('fast');
    });
    
    // END Publications script
    
    //Contact script
    $('#img-box a img').mouseenter(function () {
        $(this).css('opacity', '1.0');
    });
    
    $('#img-box a img').mouseleave(function () {
        $(this).css('opacity', '0.7');
    });
    //END contact
    $('td').mouseenter(function () {
        $(this + '.photo-content').addClass('hidden');
        $(this + '.hover-content').removeClass('hidden');
    });
});

$(window).on({ // CPHG, SOM logo handlers on width change
    "resize": function () {
        "use strict";
        if ($(window).width() < 1400) {
            $('.header-logo').addClass('hidden');
            $('#collapse-all, #expand-all').addClass('hidden');
        }
        if ($(window).width() >= 1400) {
            $('.header-logo').removeClass('hidden');
            $('#collapse-all, #expand-all').removeClass('hidden');
        }
    }
});
$(window).on({ // Handles nav on width change
    "resize": function () {
        "use strict";
        if ($(window).width() < 1250) {
            $('#nav p').addClass('hidden');
            $('#menu').removeClass('hidden');
            $('.drop-down').addClass('hidden');
            $('#pub-link-box').addClass('hidden');

            $('#header').css('border-bottom', '1px dotted white');
            $('#header').addClass('header-pub');
            $('#lower-pub-nav').addClass('hidden');
            $('#v2-first-date-box').css('border-top', '3px solid var(--highlight-text-color)');
        }
        if ($(window).width() >= 1250) {
            $('#nav p').removeClass('hidden');
            $('#header > img').css('left', '-70px');
            $('#menu').addClass('hidden');
            $('#pub-link-box').removeClass('hidden');
            $('#first-date-box').css('margin-top', '100px');
            if ($(window).scrollTop() < 450) {

                $('#header').css('border-bottom', 'none');
                $('#header').removeClass('header-pub');
            }
            $('#lower-pub-nav').removeClass('hidden');
            $('#v2-first-date-box').css('border-top', '3px solid var(--quaternary-color)');
            
        }
    }
});
$(window).on({ // Handles nav on width change
    "resize": function () {
        "use strict";
        if ($(window).width() < 1100) {

        }
        if ($(window).width() >= 1100) {

        }
    }
});
$(window).on({ // Handles nav on width change
    "resize": function () {
        "use strict";
        if ($(window).width() < 1050) {
            $('#second-ul').addClass('hidden');
        }
        if ($(window).width() >= 1050) {
            $('#second-ul').removeClass('hidden');
        }
    }
});

$(window).scroll(function () {
    "use strict";
    var height = $(window).scrollTop;

    if (height  > 450) {

        $('#header').css('border-bottom', '1px dotted white');
        $('#header').addClass('header-pub');
    } else if ($(window).width() > 1250) {

        $('#header').css('border-bottom', 'none');
        $('#header').removeClass('header-pub');
    }
});


function load_background(section) {
    if (section != undefined && section != null) {
        if (section == 'home') {
            $('body').css('background-image', 'url(\'assets/web_bg3.jpg\')');
        } else {
            $('body').css('background-image', 'url(\'../assets/web_bg3.jpg\')');
        }
    }
}


function collapse_year( year ) {
    $("#" + year + "-list").hide();
    $("#" + year + "-expand").show();
    $("#" + year + "-collapse").hide();
}

function expand_year( year ) {
    $("#" + year + "-list").show();
    $("#" + year + "-expand").hide();
    $("#" + year + "-collapse").show();
}

function show_all_publications() {
    $('.year-list').show();
}

function hide_all_publications() {
    $('.year-list').hide();
}