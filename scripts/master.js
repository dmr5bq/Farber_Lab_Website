/*jslint browser: true*/
/*global $, jQuery, alert*/

/*TO DO:

Dynamic resizing: especially for publications
*/

$(document).ready(function () {
    // Universal script
    // Load page based on current width
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
        $('#pub-nav').removeClass('hidden');
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
        $('#pub-nav-arrow').addClass('hidden');
    }
    if ($(window).width() >= 1100) {
        $('#pub-nav-arrow').removeClass('hidden');
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
    
  
    // Publications script
    $('#2014-collapse').click(function () {
        $('#2014-list').addClass('hidden');
        $('#2014-collapse').addClass('hidden');
        $('#2014-expand').removeClass('hidden');
    });
    $('#2014-expand').click(function () {
        $('#2014-list').removeClass('hidden');
        $('#2014-collapse').removeClass('hidden');
        $('#2014-expand').addClass('hidden');
    });
    $('#2013-collapse').click(function () {
        $('#2013-list').addClass('hidden');
        $('#2013-collapse').addClass('hidden');
        $('#2013-expand').removeClass('hidden');
    });
    $('#2013-expand').click(function () {
        $('#2013-list').removeClass('hidden');
        $('#2013-collapse').removeClass('hidden');
        $('#2013-expand').addClass('hidden');
    });
    $('#2012-collapse').click(function () {
        $('#2012-list').addClass('hidden');
        $('#2012-collapse').addClass('hidden');
        $('#2012-expand').removeClass('hidden');
    });
    $('#2012-expand').click(function () {
        $('#2012-list').removeClass('hidden');
        $('#2012-collapse').removeClass('hidden');
        $('#2012-expand').addClass('hidden');
    });
    $('#2011-collapse').click(function () {
        $('#2011-list').addClass('hidden');
        $('#2011-collapse').addClass('hidden');
        $('#2011-expand').removeClass('hidden');
    });
    $('#2011-expand').click(function () {
        $('#2011-list').removeClass('hidden');
        $('#2011-collapse').removeClass('hidden');
        $('#2011-expand').addClass('hidden');
    });
    $('#2010-collapse').click(function () {
        $('#2010-list').addClass('hidden');
        $('#2010-collapse').addClass('hidden');
        $('#2010-expand').removeClass('hidden');
    });
    $('#2010-expand').click(function () {
        $('#2010-list').removeClass('hidden');
        $('#2010-collapse').removeClass('hidden');
        $('#2010-expand').addClass('hidden');
    });
    $('#2009-collapse').click(function () {
        $('#2009-list').addClass('hidden');
        $('#2009-collapse').addClass('hidden');
        $('#2009-expand').removeClass('hidden');
    });
    $('#2009-expand').click(function () {
        $('#2009-list').removeClass('hidden');
        $('#2009-collapse').removeClass('hidden');
        $('#2009-expand').addClass('hidden');
    });
    $('#2008-collapse').click(function () {
        $('#2008-list').addClass('hidden');
        $('#2008-collapse').addClass('hidden');
        $('#2008-expand').removeClass('hidden');
    });
    $('#2008-expand').click(function () {
        $('#2008-list').removeClass('hidden');
        $('#2008-collapse').removeClass('hidden');
        $('#2008-expand').addClass('hidden');
    });
    $('#2007-collapse').click(function () {
        $('#2007-list').addClass('hidden');
        $('#2007-collapse').addClass('hidden');
        $('#2007-expand').removeClass('hidden');
    });
    $('#2007-expand').click(function () {
        $('#2007-list').removeClass('hidden');
        $('#2007-collapse').removeClass('hidden');
        $('#2007-expand').addClass('hidden');
    });
    $('#2006-collapse').click(function () {
        $('#2006-list').addClass('hidden');
        $('#2006-collapse').addClass('hidden');
        $('#2006-expand').removeClass('hidden');
    });
    $('#2006-expand').click(function () {
        $('#2006-list').removeClass('hidden');
        $('#2006-collapse').removeClass('hidden');
        $('#2006-expand').addClass('hidden');
    });
    $('#2004-collapse').click(function () {
        $('#2004-list').addClass('hidden');
        $('#2004-collapse').addClass('hidden');
        $('#2004-expand').removeClass('hidden');
    });
    $('#2004-expand').click(function () {
        $('#2004-list').removeClass('hidden');
        $('#2004-collapse').removeClass('hidden');
        $('#2004-expand').addClass('hidden');
    });
    $('#2003-collapse').click(function () {
        $('#2003-list').addClass('hidden');
        $('#2003-collapse').addClass('hidden');
        $('#2003-expand').removeClass('hidden');
    });
    $('#2003-expand').click(function () {
        $('#2003-list').removeClass('hidden');
        $('#2003-collapse').removeClass('hidden');
        $('#2003-expand').addClass('hidden');
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
            $('#pub-nav').removeClass('hidden');
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
                $('#pub-nav').addClass('hidden');
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
            $('#pub-nav-arrow').addClass('hidden');
        }
        if ($(window).width() >= 1100) {
            $('#pub-nav-arrow').removeClass('hidden');
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
    var height = $(window).scrollTop();

    if (height  > 450) {
        $('#pub-nav').removeClass('hidden');
        $('#header').css('border-bottom', '1px dotted white');
        $('#header').addClass('header-pub');
    } else if ($(window).width() > 1250) {
        $('#pub-nav').addClass('hidden');
        $('#header').css('border-bottom', 'none');
        $('#header').removeClass('header-pub');
    }
});

