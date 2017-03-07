$(function () {
    var allQuestions = $('.question');
    var allAnswers = $('.answer');
    var arrQuestions = allQuestions.toArray();
    var arrAnswers = allAnswers.toArray();
    var qCount = arrQuestions.length;
    var aCount = arrAnswers.length;
    var totalCount = qCount > aCount ? aCount : qCount; //getmin
    var current;
    var currentQuestion;
    var currentAnswer;
    //add proper classes
    allQuestions.addClass('col s6');
    allAnswers.addClass('col s6');
    allQuestions.each(function (i) {
        $(this).prepend((i + 1) + '.'); //add numbering
    });
    $('.row').each(function (i) {
        $(this).attr('id', 'q-' + i); //set id for marker
        $(this).addClass('clickable');
        $(this).on('click', function () {
            var index = parseInt($(this).attr('id').substr(2)) - 1;
            var question = $(arrQuestions[index]);
            getCurrent(index, false);
            var e = jQuery.Event("keydown");
            e.which = question.hasClass('q-left') ? 39 : 37; //show or hide
            $(window).trigger(e);
        });
    });
    //done with main handler
    allQuestions = null;
    allAnswers = null;
    setTimeout(function () {
        $('#q-and-a').fadeIn('slow');
    }, 500);
    var debounce = function (fn) {
        var timeout;
        return function () {
            var args = Array.prototype.slice.call(arguments), ctx = this;
            clearTimeout(timeout);
            timeout = setTimeout(function () {
                fn.apply(ctx, args);
            }, 100);
        };
    };
    function getCurrent(count, scrollTo) {
        if (scrollTo === void 0) { scrollTo = true; }
        if (count < 0 || count >= totalCount)
            return;
        //if question is already selected, just scroll to it
        if (current != count) {
            if (currentQuestion)
                currentQuestion.parent().removeClass('selected');
            current = count;
            currentQuestion = $(arrQuestions[count]);
            currentAnswer = $(arrAnswers[count]);
            currentQuestion.parent().addClass('selected');
        }
        //scroll
        if (scrollTo)
            jAnimateTo(currentQuestion, 0, 100, 200);
    }
    getCurrent(0);
    animateTo('test');
    $(window).bind('keydown', function (e) {
        // Arrow keys.
        switch (e.which) {
            case 37:
                //show
                if (currentAnswer.hasClass('a-show'))
                    break;
                currentAnswer.addClass('a-show').removeClass('a-hide');
                currentQuestion.removeClass('q-center').addClass('q-left');
                break;
            case 38:
                getCurrent(current - 1);
                break;
            case 39:
                //hide
                if (!currentAnswer.hasClass('a-show'))
                    break;
                currentAnswer.removeClass('a-show').addClass('a-hide');
                currentQuestion.addClass('q-center').removeClass('q-left');
                break;
            case 40:
                getCurrent(current + 1);
                break;
            default:
                return; // exit this handler for other keys
        }
        e.preventDefault();
    });
}); // end of document ready
//from http://stackoverflow.com/a/11560428
function nextInDOM(_selector, _subject) {
    var next = getNext(_subject);
    while (next.length != 0) {
        var found = searchFor(_selector, next);
        if (found != null)
            return found;
        next = getNext(next);
    }
    return null;
}
function getNext(_subject) {
    if (_subject.next().length > 0)
        return _subject.next();
    return getNext(_subject.parent());
}
function searchFor(_selector, _subject) {
    if (_subject.is(_selector))
        return _subject;
    else {
        var found_1 = null;
        _subject.children().each(function () {
            found_1 = searchFor(_selector, $(this));
            if (found_1 != null)
                return false;
        });
        return found_1;
    }
}
function prevInDOM(_selector, _subject) {
    var prev = getPrev(_subject);
    while (prev.length != 0) {
        var found = searchFor(_selector, prev);
        if (found != null)
            return found;
        prev = getPrev(prev);
    }
    return null;
}
function getPrev(_subject) {
    if (_subject.prev().length > 0)
        return _subject.prev();
    return getPrev(_subject.parent());
}
//# sourceMappingURL=comp202.js.map