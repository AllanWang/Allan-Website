$(function () {
    var about = $('#h-about');
    var allan = $('#h-allan');
    var wang = $('#h-wang');
    about.typed({
        strings: ["About"],
        contentType: 'text',
        callback: function () {
            setTimeout(function () {
                $('.typed-cursor').remove();
                $('#about-logo-container').css('visibility', 'visible');
                $('#w-1').addClass('animate');

                allan.typed({
                    strings: ["Allan"],
                    contentType: 'text',
                    callback: function () {
                        setTimeout(function () {
                            $('.typed-cursor').remove();
                            wang.typed({
                                strings: ["Wang"],
                                contentType: 'text',
                                callback: function () {
                                    setTimeout(function () {
                                        $('.typed-cursor').css('visibility', 'hidden');
                                    }, 2000);
                                }
                            });
                        }, 2000);
                    }
                });
            }, 2000);
        }
    });
});
//# sourceMappingURL=about.js.map