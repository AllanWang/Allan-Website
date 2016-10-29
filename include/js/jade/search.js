(function ($) {

    var inputSearch = $('input#search');
    var focusedSearchResults = $('.search-results .focused');

    $(document).ready(function () {
        window.index = lunr(function () {
            this.field('title', {boost: 100});
            this.field('tags', {boost: 10});
            this.field('body');
            this.ref('href');
        });
        window.index.pipeline.reset();

        $.each(database, function (key, fields) {
            var item = jQuery.extend({}, fields); //shallow copy object so that database is not modified
            item.href = "http://allanwang.ca/" + key;
            window.index.add(item);
        });

        // icon click
        $('ul#nav-bar li.search .search-wrapper i.material-icons').click(function () {
            if (focusedSearchResults.length) {
                focusedSearchResults.first()[0].click();
            } else if ($('.search-results').children().length) {
                $('.search-results').children().first()[0].click();
            }
        });

        var renderResults = function (results) {
            var resultsContainer = $('.search-results');
            resultsContainer.empty();
            if (!results) return; //empty input
            if (results.length == 0) { //input with no match
                var noResultDiv = $('<a>No results found</a>');
                resultsContainer.append(noResultDiv);
                return;
            }
            Array.prototype.forEach.call(results, function (result) {
                var resultDiv = $('<a href=' + result[1] + '>' + result[0] + '</a>');
                resultsContainer.append(resultDiv);
            });
        };

        var debounce = function (fn) {
            var timeout;
            return function () {
                var args = Array.prototype.slice.call(arguments),
                    ctx = this;

                clearTimeout(timeout);
                timeout = setTimeout(function () {
                    fn.apply(ctx, args);
                }, 100);
            };
        };

        inputSearch.focus(function () {
            $(this).parent().addClass('focused');
            $('.search-results').show(250); //same as ease in css for search-wrapper
        });


        inputSearch.blur(function () {
            $(this).parent().removeClass('focused');
            setTimeout(function () { //add delay so clicks are still registered (looks nice too)
                $('.search-results').hide(250);
            }, 100);
        });


        inputSearch.bind('keyup', debounce(function (e) {
            if ($(this).val() < 2) {
                renderResults(null);
                return;
            }

            if (e.which === 38 || e.which === 40 || e.keyCode === 13) return;

            var query = $(this).val();
            if (!query) return renderResults(null);

            var results = window.index.search(query).slice(0, 6).map(function (result) {
                var href = result.ref.split('http://allanwang.ca/')[1];
                return [database[href].title, result.ref];
            });
            renderResults(results);
        }));


        inputSearch.bind('keydown', debounce(function (e) {
            // Escape.
            if (e.keyCode === 27) {
                $(this).val('');
                $(this).blur();
                renderResults(null);
                return;
            } else if (e.keyCode === 13) {
                // enter
                if (focusedSearchResults.length) {
                    focusedSearchResults.first()[0].click();
                } else if ($('.search-results').children().length) {
                    $('.search-results').children().first()[0].click();
                }
                return;
            }

            // Arrow keys.
            var focused;
            switch (e.which) {
                case 38: // up
                    if (focusedSearchResults.length) {
                        focused = focusedSearchResults;
                        focused.removeClass('focused');
                        focused.prev().addClass('focused');
                    }
                    break;

                case 40: // down
                    if (!focusedSearchResults.length) {
                        focused = $('.search-results').children().first();
                        focused.addClass('focused');
                    } else {
                        focused = focusedSearchResults;
                        if (focused.next().length) {
                            focused.removeClass('focused');
                            focused.next().addClass('focused');
                        }
                    }
                    break;

                default:
                    return; // exit this handler for other keys
            }
            e.preventDefault();
        }));
    });
}(jQuery));