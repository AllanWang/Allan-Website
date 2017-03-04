"use strict";
/// <reference path="search_data.ts" />
var search_data_1 = require("./search_data");
//note require is not supported in browsers
(function ($) {
    var inputSearch = $('input#search');
    var focusedSearchResults = $('.search-results .focused');
    var urlPrefix = "https://allanwang.ca/";
    $(document).ready(function () {
        window.index = lunr(function () {
            this.field('title', { boost: 100 });
            this.field('tags', { boost: 10 });
            this.field('body');
            this.ref('href');
        });
        window.index.pipeline.reset();
        $.each(search_data_1.database, function (key, fields) {
            var item = jQuery.extend({}, fields); //shallow copy object so that database is not modified
            item.href = urlPrefix + key;
            window.index.add(item);
        });
        // icon click
        $('ul#nav-bar li.search .search-wrapper i.material-icons').click(function () {
            if (focusedSearchResults.length) {
                focusedSearchResults.first()[0].click();
            }
            else if ($('.search-results').children().length) {
                $('.search-results').children().first()[0].click();
            }
        });
        var renderResults = function (results, query) {
            var resultsContainer = $('.search-results');
            resultsContainer.empty();
            if (!results)
                return; //empty input
            if (results.length == 0) {
                bindCSE(query, resultsContainer);
                return;
            }
            Array.prototype.forEach.call(results, function (result) {
                var resultDiv = $('<a href=' + result[1] + '>' + result[0] + '</a>');
                resultsContainer.append(resultDiv);
            });
            bindCSE(query, resultsContainer);
        };
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
        inputSearch.focus(function () {
            $(this).parent().addClass('focused');
            $('.search-results').show(250); //same as ease in css for search-wrapper
        });
        inputSearch.blur(function () {
            $(this).parent().removeClass('focused');
            setTimeout(function () {
                $('.search-results').hide(250);
            }, 100);
        });
        inputSearch.bind('keyup', debounce(function (e) {
            var query = $(this).val();
            if (query < 2) {
                renderResults(null, query);
                return;
            }
            if (e.which === 38 || e.which === 40 || e.keyCode === 13)
                return;
            if (!query)
                return renderResults(null, query);
            var results = window.index.search(query).slice(0, 6).map(function (result) {
                var href = result.ref.slice(urlPrefix.length);
                return [search_data_1.database[href].title, result.ref];
            });
            renderResults(results, query);
        }));
        inputSearch.bind('keydown', debounce(function (e) {
            // Escape.
            var query = $(this).val();
            if (e.keyCode === 27) {
                $(this).val('');
                $(this).blur();
                renderResults(null, query);
                return;
            }
            else if (e.keyCode === 13) {
                // enter
                if (focusedSearchResults.length) {
                    focusedSearchResults.first()[0].click();
                }
                else if ($('.search-results').children().length) {
                    $('.search-results').children().first()[0].click();
                }
                return;
            }
            // Arrow keys.
            var focused;
            switch (e.which) {
                case 38:
                    if (focusedSearchResults.length) {
                        focused = focusedSearchResults;
                        focused.removeClass('focused');
                        focused.prev().addClass('focused');
                    }
                    break;
                case 40:
                    if (!focusedSearchResults.length) {
                        focused = $('.search-results').children().first();
                        focused.addClass('focused');
                    }
                    else {
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
function hasCSE() {
    return typeof google !== 'undefined';
}
function bindCSE(query, container) {
    if (!hasCSE())
        return;
    var text = container.length <= 0 ? 'No results; Full Search' : 'Full Google Search';
    var cse = $('<a class="clickable">' + text + '</a>').on('click', function () {
        googleSearch(query);
    });
    container.append(cse);
}
function googleSearch(query) {
    if (!hasCSE())
        return;
    google.search.cse.element.getElement('g-results').execute(query);
}
//# sourceMappingURL=search.js.map