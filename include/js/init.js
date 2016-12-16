(function ($) {
    $(function () {
        $('.button-collapse').sideNav();
        $('.parallax').parallax();

        $('#to-top').bind('click', function (event) {
            $('html, body').animate({
                scrollTop: 0
            }, 700, 'easeInOutExpo');
            event.preventDefault();
        });

        //add ripples to nav items
        $('.side-nav .l').addClass("animated waves-effect waves-nav"); //scroll animations didn't work too well

        //workaround for big collapsible accordion
        $('.collapsible .collapsible-header.click-scroll').on('click', function (event) {
            var target = $(this);
            setTimeout(function () {
                if (target.length) {
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 500, 'easeInOutExpo');
                }
            }, 300); //wait for accordion to finish
        });
    }); // end of document ready

})(jQuery); // end of jQuery name space

/*
 * Animation functions
 */

function animateTo(idTo, delay, onlyFromAbove) {
    if (idTo.charAt(0) == '#') idTo = idTo.substring(1);
    if (!document.getElementById(idTo)) return console.log(idTo, 'is not a real elementId');
    if (!delay) delay = 0;
    setTimeout(function () { //animate scroll after page load
        var itemTop = $('#' + idTo).offset().top;
        if (onlyFromAbove) {
            var top = window.pageYOffset || document.documentElement.scrollTop;
            if (top > itemTop) return;
        }
        $('html, body').animate({
            scrollTop: itemTop
        }, 700, 'easeInOutExpo');
    }, delay);
}

function jumpTo(idTo) {
    if (idTo.charAt(0) == '#') idTo = idTo.substring(1);
    if (!document.getElementById(idTo)) return console.log(idTo, 'is not a real elementId');
    // document.getElementById(idTo).scrollIntoView();
    $('html, body').animate({
        scrollTop: $('#' + idTo).offset().top
    }, 1);
}

function animateSwitch(idFrom, idTo) {
    if (idFrom.charAt(0) == '#') idFrom = idFrom.substring(1);
    if (!document.getElementById(idFrom)) return console.log('animateSwitch invalid id', idFrom);
    $('#' + idFrom).bind('click', function (event) {
        if (document.getElementById(idTo)) animateTo(idTo);
        event.preventDefault();
        $('.animated').sideNav('hide'); //close nav on click
    });
}

//called by below for respective nav id
function navAnimOverride(idFrom, idTo) {
    $(document).ready(function () {
        animateSwitch('nr_' + idFrom, idTo);
    });
}

function scrollSpy() {
    $('.scrollspy').scrollSpy();
}

function dynamicNotes() {
    $('#bh').on('click', function (event) {
        $('.dynamic-notes .extra').hide(300);
        // $('.dynamic-notes .normal').hide(300);
    });
    $('#bs').on('click', function (event) {
        $('.dynamic-notes .extra').show(300);
        // $('.dynamic-notes .normal').show(300);
    });
}

function toggleNoteView(element) {
    //due to how displaying works, top levels need to be shown prior to mid levels
    //this is unnecessary for hide, but will be done to stay uniform
    var duration = 100;
    var currentlyActive = $('.table-of-contents a.active').attr('href');
    if (element.checked) {
        $('.dynamic-notes .extra.top').show(duration, 'swing');
        setTimeout(function () {
            $('.dynamic-notes .extra.mid').show(duration, 'swing');
            setTimeout(function () {
                $('.dynamic-notes .extra.low').show(duration, 'swing');
            }, duration);
        }, duration);
    }
    else {
        $('.dynamic-notes .extra.low').hide(duration, 'swing');
        setTimeout(function () {
            $('.dynamic-notes .extra.mid').hide(duration, 'swing');
            setTimeout(function () {
                $('.dynamic-notes .extra.top').hide(duration, 'swing');
            }, duration);
        }, duration);
    }
    animateWithOffset(currentlyActive, duration * 3, 100);
}

function animateWithOffset(idTo, delay, offset, duration) {
    if (idTo.charAt(0) == '#') idTo = idTo.substring(1);
    if (!document.getElementById(idTo)) return console.log(idTo, 'is not a real elementId');
    if (!delay) delay = 0;
    if (!offset) offset = 0;
    if (!duration) duration = 700;
    setTimeout(function () { //animate scroll after page load
        var itemTop = $('#' + idTo).offset().top;
        $('html, body').animate({
            scrollTop: (itemTop - offset)
        }, duration, 'easeInOutExpo');
    }, delay);
}