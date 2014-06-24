var cms = cms || {};

cms.menu = function(selector, title, identifier) {
    $(selector).prepend('<div class="indicatorContainer"><div class="pIndicator"><div class="cIndicator"></div></div></div>');
    var activeElement = $(selector+'>ul>li:first');

    $(selector+'>ul>li').each(function() {
        if ($(this).hasClass('active')) {
            activeElement = $(this);
        }
    });


    var posLeft = activeElement.position().left;
    var elementWidth = activeElement.width();
    posLeft = posLeft + elementWidth / 2 - 6;
    if (activeElement.hasClass('has-sub')) {
        posLeft -= 6;
    }

    $(selector+' .pIndicator').css('left', posLeft);
    var element, leftPos, indicator = $(selector+' pIndicator');

    $(selector+">ul>li").hover(function() {
        element = $(this);
        var w = element.width();
        if ($(this).hasClass('has-sub'))
        {
            leftPos = element.position().left + w / 2 - 12;
        }
        else {
            leftPos = element.position().left + w / 2 - 6;
        }

        $(selector+' .pIndicator').css('left', leftPos);
    }
    , function() {
        $(selector+' .pIndicator').css('left', posLeft);
    });


    $(selector+'>ul>.has-sub>ul').append('<div class="submenuArrow"></div>');
    $(selector+'>ul').children('.has-sub').each(function() {
        var posLeftArrow = $(this).width();
        posLeftArrow /= 2;
        posLeftArrow -= 12;
        $(this).find('.submenuArrow').css('left', posLeftArrow);

    });

    $(selector+'>ul').prepend('<li id="'+identifier+'-button" class="menu-button"><a>'+title+'</a></li>');
    $("#"+identifier+"-button").click(function() {
        if ($(this).parent().hasClass('open')) {
            $(this).parent().removeClass('open');
        }
        else {
            $(this).parent().addClass('open');
        }
    });
};


cms.headerSlider = function(){
    
     $('.bxslider').bxSlider({
         mode: "fade",
         pager: false,
         auto:true,
         captions:true
     });
};


