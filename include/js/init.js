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
    if (typeof idTo === 'undefined') return console.log('Undefined id');
    if (idTo == 'top') return scrollEase(0);
    if (idTo == 'bottom') return scrollEase($(document).height());
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
    if (typeof idTo === 'undefined') return console.log('Undefined id');
    if (idTo.charAt(0) == '#') idTo = idTo.substring(1);
    if (!document.getElementById(idTo)) return console.log(idTo, 'is not a real elementId');
    // document.getElementById(idTo).scrollIntoView();
    $('html, body').animate({
        scrollTop: $('#' + idTo).offset().top
    }, 1);
}

function scrollEase(position, duration) {
    if (!position) position = 0;
    if (!duration) duration = 700;
    $('html, body').animate({
        scrollTop: position
    }, duration, 'easeInOutExpo');
}

function animateSwitch(idFrom, idTo) {
    if (typeof idTo === 'undefined') return console.log('Undefined id');
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

function toggleNoteView(element) {
    //due to how displaying works, top levels need to be shown prior to mid levels
    //this is unnecessary for hide, but will be done to stay uniform
    //we also check if the show/hide state will be changed or not
    //if it isn't, we will not continue and will not auto scroll
    var duration = 100;
    var changed = false;
    if (typeof element === 'boolean' || element.checked) {
        var top = $('.dynamic-notes .extra.top');
        if (!top.is(':visible')) {
            changed = true;
            top.show(duration, 'swing');
            setTimeout(function () {
                $('.dynamic-notes .extra.mid').show(duration, 'swing');
                setTimeout(function () {
                    $('.dynamic-notes .extra.low').show(duration, 'swing');
                }, duration);
            }, duration);
        }
    }
    else {
        var low = $('.dynamic-notes .extra.low');
        if (low.is(':visible')) {
            changed = true;
            low.hide(duration, 'swing');
            setTimeout(function () {
                $('.dynamic-notes .extra.mid').hide(duration, 'swing');
                setTimeout(function () {
                    $('.dynamic-notes .extra.top').hide(duration, 'swing');
                }, duration);
            }, duration);
        }
    }
    if (changed) {
        var currentlyActive = $('.table-of-contents a.active').attr('href');
        animateWithOffset(currentlyActive, duration * 3, 100);
    }
}

function animateWithOffset(idTo, delay, offset, duration) {
    if (typeof idTo === 'undefined') return console.log('Undefined id');
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

//Function to initialize dynamic notes
function dynamicNotes() {
    $('.scrollspy').scrollSpy();
    $('.modal').modal({
        opacity: 0.05, // Opacity of modal background
        ready: function (modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
            toggleNoteView(true);
            $('body').css('overflow', '');
        },
        complete: function () {
            toggleNoteView($('#note-toggle').get(0));
        } // Callback for Modal close
    });
    var keywords = $('.modal-keys a');
    if (keywords.length > 0) {
        keywords.bind('click', function (event) {
            var href = $(this).attr('href');
            $('.keyword, h5').css('font-weight', ''); //reset all previous key weights
            var current = $(href);
            //make current key stand out
            if (current.hasClass('keyword')) {
                current.css('font-weight', 'normal');
            } else if (current.is('h5')) {
                current.css('font-weight', 'bold');
            }
            animateWithOffset(href, 0, 100);
            event.preventDefault();
        });
    }
}