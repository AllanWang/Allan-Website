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
        animateSwitch('nrm_' + idFrom, idTo);
    });
}