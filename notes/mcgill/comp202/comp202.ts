$(function () {
    let allQuestions = $('.question');
    let allAnswers = $('.answer');
    let arrQuestions = allQuestions.toArray();
    let arrAnswers = allAnswers.toArray();
    const qCount = arrQuestions.length;
    const aCount = arrAnswers.length;
    const totalCount: number = qCount > aCount ? aCount : qCount; //getmin
    let current: number;
    let currentQuestion: JQuery;
    let currentAnswer: JQuery;

    //add proper classes
    allQuestions.addClass('col s6');
    allAnswers.addClass('col s6');
    //done with main handler
    allQuestions = null;
    allAnswers = null;
    setTimeout(function () {
        $('#q-and-a').fadeIn('slow');
    }, 500);

    let debounce = function (fn: Function) {
        let timeout: number;
        return function () {
            let args = Array.prototype.slice.call(arguments),
                ctx = this;

            clearTimeout(timeout);
            timeout = setTimeout(function () {
                fn.apply(ctx, args);
            }, 100);
        };
    };

    function getCurrent(count: number) {
        if (count < 0 || count >= totalCount) return;
        if (currentQuestion) currentQuestion.parent().removeClass('selected');
        current = count;
        currentQuestion = $(arrQuestions[count]);
        currentAnswer = $(arrAnswers[count]);
        currentQuestion.parent().addClass('selected');
        jAnimateTo(currentQuestion.parent(), 0, 200); //offset 200
    }

    getCurrent(0);

    $(window).bind('keydown', function (e: any) {

        // Arrow keys.
        switch (e.which) {
            case 37: //left
                //show
                if (currentAnswer.hasClass('a-show')) break;
                currentAnswer.addClass('a-show').removeClass('a-hide');
                currentQuestion.removeClass('q-center').addClass('q-left');
                break;
            case 38: // up
                getCurrent(current - 1);
                break;
            case 39: //right
                //hide
                if (!currentAnswer.hasClass('a-show')) break;
                currentAnswer.removeClass('a-show').addClass('a-hide');
                currentQuestion.addClass('q-center').removeClass('q-left');
                break;
            case 40: // down
                getCurrent(current + 1);
                break;
            default:
                return; // exit this handler for other keys
        }
        e.preventDefault();
    });
}); // end of document ready

//from http://stackoverflow.com/a/11560428
function nextInDOM(_selector: string, _subject: JQuery): JQuery {
    let next = getNext(_subject);
    while (next.length != 0) {
        let found = searchFor(_selector, next);
        if (found != null) return found;
        next = getNext(next);
    }
    return null;
}
function getNext(_subject: JQuery): JQuery {
    if (_subject.next().length > 0) return _subject.next();
    return getNext(_subject.parent());
}
function searchFor(_selector: string, _subject: JQuery): JQuery {
    if (_subject.is(_selector)) return _subject;
    else {
        let found: JQuery = null;
        _subject.children().each(function () {
            found = searchFor(_selector, $(this));
            if (found != null) return false;
        });
        return found;
    }
}

function prevInDOM(_selector: string, _subject: JQuery): JQuery {
    let prev = getPrev(_subject);
    while (prev.length != 0) {
        let found = searchFor(_selector, prev);
        if (found != null) return found;
        prev = getPrev(prev);
    }
    return null;
}
function getPrev(_subject: JQuery): JQuery {
    if (_subject.prev().length > 0) return _subject.prev();
    return getPrev(_subject.parent());
}