$(document).ready(function () {
    var main = $('main');
    setTimeout(function () {
        main.jGravity({
            target: '.gravity',
            drag: true
        });
        main.one('mousemove', function () { //seems to also work on touch event (tap)
            setTimeout(function () {
                $(".stationary").fadeIn(3000);
            }, 1500);
        });

    }, 1000);

});