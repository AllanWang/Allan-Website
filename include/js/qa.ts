/*
 * Script for qa page
 * Formatting:
 * #shell       to keep footer down on load
 * #q-and-a     to hold all the items
 * items with .qa-row {.question .answer}
 */

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
    allQuestions.each(function (i) {
        $(this).prepend((i + 1) + '. '); //add numbering
    });
    $('.qa-row').each(function (i) {
        $(this).attr('id', 'q-' + (i + 1)); //set id for marker
        $(this).addClass('clickable row');
        $(this).on('click', function () {
            const index = parseInt($(this).attr('id').substr(2)) - 1;
            let question = $(arrQuestions[index]);
            getCurrent(index, false);
            let e = jQuery.Event("keydown");
            e.which = question.hasClass('q-left') ? 39 : 37; //show or hide
            $(window).trigger(e);
        })
    });
    //done with main handler
    allQuestions = null;
    allAnswers = null;
    setTimeout(function () {
        $('#q-and-a').fadeIn('slow');
    }, 500);

    function getCurrent(count: number, scrollTo = true) {
        if (count < 0 || count >= totalCount) return;
        //if question is already selected, just scroll to it
        if (current != count) {
            if (currentQuestion) currentQuestion.parent().removeClass('selected');
            current = count;
            currentQuestion = $(arrQuestions[count]);
            currentAnswer = $(arrAnswers[count]);
            currentQuestion.parent().addClass('selected');
        }
        //scroll
        if (scrollTo) jAnimateTo(currentQuestion, 0, 100, 200);
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