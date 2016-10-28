(function ($) {
    $(function () {

        $('.button-collapse').sideNav();
        $('.parallax').parallax();

    }); // end of document ready
})(jQuery); // end of jQuery name space

/*
 * Animation functions
 */

function animateToIfAbove(idTo, delay) {
    if (!document.getElementById(idTo)) return console.log(idTo, 'is not a real elementId');
    var top = window.pageYOffset || document.documentElement.scrollTop;
    if (top > $('#' + idTo).offset().top) return;
    animateTo(idTo, delay);
}

function animateTo(idTo, delay) {
    if (!document.getElementById(idTo)) return console.log(idTo, 'is not a real elementId');
    if (!delay) delay = 0;
    setTimeout(function () { //animate scroll after page load
        $('html, body').animate({
            scrollTop: $('#' + idTo).offset().top
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
        $('.animated').sideNav('hide'); //close nav on click
    });
}

//called by below for respective nav id
function navAnimOverride(idFrom, idTo) {
    $(document).ready(function () {
        animateSwitch('nr_' + idFrom, idTo);
    });
}