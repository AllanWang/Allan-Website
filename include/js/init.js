(function ($) {
    $(function () {
        $('.button-collapse').sideNav({
            // menuWidth: 300, // Default is 240
            closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true // Choose whether you can drag to open on touch screens
        });
        $('.parallax').parallax();

        $('#to-top').bind('click', function (event) {
            $('html, body').animate({
                scrollTop: 0
            }, 700, 'easeInOutExpo');
            event.preventDefault();
        });

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
    if (!document.getElementById(idTo)) return console.log(idTo, 'is not a real elementId');
    if (!delay) delay = 0;
    var itemTop = $('#' + idTo).offset().top;
    if (onlyFromAbove) {
        var top = window.pageYOffset || document.documentElement.scrollTop;
        if (top > itemTop) return;
    }
    setTimeout(function () { //animate scroll after page load
        $('html, body').animate({
            scrollTop: itemTop
        }, 700, 'easeInOutExpo');
    }, delay);
}

function jumpTo(idTo) {
    if (!document.getElementById(idTo)) return console.log(idTo, 'is not a real elementId');
    // document.getElementById(idTo).scrollIntoView();
    $('html, body').animate({
        scrollTop: $('#' + idTo).offset().top
    }, 1);
}

function animateSwitch(idFrom, idTo) {
    if (!document.getElementById(idFrom)) return console.log('animateSwitch invalid id', idFrom);
    $('#' + idFrom).bind('click', function (event) {
        if (document.getElementById(idTo)) animateTo(idTo);
        event.preventDefault();
        // $('.animated').sideNav('hide'); //close nav on click
    });
}

//called by below for respective nav id
function navAnimOverride(idFrom, idTo) {
    $(document).ready(function () {
        animateSwitch('nr_' + idFrom, idTo);
    });
}