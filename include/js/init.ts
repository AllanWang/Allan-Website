$(function () {
    $('.button-collapse').sideNav();
    $('.parallax').parallax();
    $('.collapsible').collapsible();

    $('#to-top').bind('click', function (event) {
        $('html, body').animate({
            scrollTop: 0
        }, 700, 'easeInOutExpo');
        event.preventDefault();
    });

    //add ripples to nav items
    $('.side-nav .l').addClass("animated waves-effect"); //scroll animations didn't work too well
    $('.scrollspy').scrollSpy();

    //workaround for big collapsible accordion
    $('.collapsible .collapsible-header.click-scroll').on('click', function (event) {
        let target = $(this);
        setTimeout(function () {
            if (target.length) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 500, 'easeInOutExpo');
            }
        }, 300); //wait for accordion to finish
    });

    $('.pinned.vertical-center').each(function () {
        $(this).css({
            marginTop: '-=' + $(this).height() / 2
        }).show();
    });
}); // end of document ready

/*
 * Animation functions
 */

function animateTo(idTo: string, delay = 0, onlyFromAbove = false) {
    if (typeof idTo === 'undefined') return console.log('Undefined id');
    if (idTo == 'top') return scrollEase(0);
    if (idTo == 'bottom') return scrollEase($(document).height());
    if (idTo.charAt(0) == '#') idTo = idTo.substring(1);
    if (!document.getElementById(idTo)) return console.log(idTo, 'is not a real elementId');
    let element = $('#' + idTo);
    setTimeout(function () { //animate scroll after page load
        let itemTop = element.offset().top;
        if (onlyFromAbove) {
            let top = window.pageYOffset || document.documentElement.scrollTop;
            if (top > itemTop) return;
        }
        if (element.hasClass('collapsible-header') && element.hasClass('click-scroll')) return element.click(); //clicking will scroll it

        $('html, body').animate({
            scrollTop: itemTop
        }, 700, 'easeInOutExpo');
    }, delay);
}

function jumpTo(idTo: string) {
    if (typeof idTo === 'undefined') return console.log('Undefined id');
    if (idTo.charAt(0) == '#') idTo = idTo.substring(1);
    if (!document.getElementById(idTo)) return console.log(idTo, 'is not a real elementId');
    // document.getElementById(idTo).scrollIntoView();
    $('html, body').animate({
        scrollTop: $('#' + idTo).offset().top
    }, 1);
}

function scrollEase(position = 0, duration = 700) {
    $('html, body').animate({
        scrollTop: position
    }, duration, 'easeInOutExpo');
}

function animateSwitch(idFrom: string, idTo: string) {
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
function navAnimOverride(idFrom: string, idTo: string) {
    $(document).ready(function () {
        animateSwitch('nr_' + idFrom, idTo);
    });
}

function toggleNoteView(element: any) {
    //due to how displaying works, top levels need to be shown prior to mid levels
    //this is unnecessary for hide, but will be done to stay uniform
    //we also check if the show/hide state will be changed or not
    //if it isn't, we will not continue and will not auto scroll
    const duration = 150;
    let currentlyActive = $('.table-of-contents a.active').attr('href');
    let top = $('.dynamic-notes .extra.top');
    const shouldShow = typeof element === 'boolean' || element.checked;
    if (top.is(':visible') == shouldShow) return; //state is already valid
    if (shouldShow) {
        top.show(duration, 'swing');
        $('.extra.inline').show(duration, 'swing');
        setTimeout(function () {
            $('.dynamic-notes .extra.mid').show(duration, 'swing');
            setTimeout(function () {
                $('.dynamic-notes .extra.low').show(duration, 'swing');
            }, duration);
        }, duration);

    } else {
        $('.dynamic-notes .extra.low').hide(duration, 'swing');
        $('.extra.inline').hide(duration, 'swing');
        setTimeout(function () {
            $('.dynamic-notes .extra.mid').hide(duration, 'swing');
            setTimeout(function () {
                top.hide(duration, 'swing');
            }, duration);
        }, duration);
    }
    animateWithOffset(currentlyActive, duration * 5, duration * 2, duration); //jumps to id

}

function animateWithOffset(idTo: string, delay = 0, offset = 0, duration = 700) {
    if (typeof idTo === 'undefined') return console.log('Undefined id');
    if (idTo.charAt(0) == '#') idTo = idTo.substring(1);
    if (!document.getElementById(idTo)) return console.log(idTo, 'is not a real elementId');
    setTimeout(function () { //animate scroll after page load
        let itemTop = $('#' + idTo).offset().top;
        $('html, body').animate({
            scrollTop: (itemTop - offset)
        }, duration, 'easeInOutExpo');
    }, delay);
}

//Function to initialize dynamic notes
function dynamicNotes() {
    $('.modal').modal({
        opacity: 0.05, // Opacity of modal background
        ready: function (modal: any, trigger: any) { // Callback for Modal open. Modal and trigger parameters available.
            toggleNoteView(true);
            $('body').css('overflow', '');
        },
        complete: function () {
            toggleNoteView($('#note-toggle').get(0));
        } // Callback for Modal close
    });
    let keywords = $('.modal-keys a');
    if (keywords.length > 0) {
        keywords.bind('click', function (event) {
            let href = $(this).attr('href');
            $('.keyword, h5').css('font-weight', ''); //reset all previous key weights
            let current = $(href);
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