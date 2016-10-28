<?php

if (isset($preload)) echo '<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
    </div>';

?>


<!--<div class="navbar-fixed">-->
<header>
    <div class="container">
        <a href="#" data-activates="nav-bar"
           class="button-collapse top-nav waves-effect waves-nav circle hide-on-large-only">
            <i class="material-icons theme-color">menu</i></a></div>

    <ul id="nav-bar" class="side-nav fixed">
        <li class="logo"><a id="logo-container" href="http://allanwang.ca/" class="brand-logo center">
                <svg id="front-page-logo" xmlns="http://www.w3.org/2000/svg" width="76.5" height="84"
                     viewBox="0 0 68.7 74.7">
                    <path fill="<?php echo $theme_color; ?>"
                          d="M31.5 0c.6 1 1 2.3 1.4 3.4l16 39-2.3 5.2L32.4 13l-1-2.3-.4.7-13.3 32-2.2 5.5L10 61.2 6 71l-1.5 3.7H0v-.2c.5-1 1-2 1.2-2.8l1.4-3.3 10.5-25c1-1.8 2-3.6 2.7-5.4L28 8.4c.5-1.6 1.2-3.2 2-4.7L31.4 0z"></path>
                    <!--                grey base W color-->
                    <path fill="#757575"
                          d="M64.2 6.8h4.5V7c-.8 1.6-1.4 3.3-2 5-5 11.5-10 23-14.8 34.7l-.8 1L49 53l-4.6 11.5s0 .3-.3.3l-4.5-11.3-5.4-13-1-2-1 2.4-6 14-4 10-6.6-16 2.2-5.6 3 7.3 1.5 3c3-6.6 5.8-13.3 8.6-20l2.8-6.4 11 26.4c1-2 1.8-4.3 2.7-6.4l2.4-5.3 9.3-22 5.6-13.4zM3.6 21c1.5-.2 3 0 4.5 0 1.5 2 2 4.4 3 6.7L15.7 38 13 43.4 5.8 25.8l-2-5z"></path>
                    <path fill="<?php echo $theme_color; ?>"
                          d="M49.3 53l2.2-5.2.5 1 6.3 15 2.3 5.5H56l-3-7.6-3.7-8.6z"></path>
                </svg>
            </a></li>
        <li class="search">
            <div class="search-wrapper card">
                <label for="search"><input id="search"><i class="material-icons">search</i></label>
                <div class="search-results"></div>
            </div>
        </li>
        <li><a class="animated waves-effect waves-nav" id="nr_proj"
               href="http://allanwang.ca/dev/?scroll_to=projects">Projects</a>
        </li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li>
                    <a class="collapsible-header waves-effect waves-nav">Notes<i class="material-icons right">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a class="waves-effect waves-nav" id="nr_n_calc"
                                   href="http://allanwang.ca/notes/calc/?scroll_to=commons">Calculus</a></li>
                            <li><a class="waves-effect waves-nav" id="nr_n_disc_m"
                                   href="http://allanwang.ca/notes/math240/MATH 240.pdf">Discrete
                                    Math</a></li>
                            <li><a class="waves-effect waves-nav" id="nr_n_linalg"
                                   href="http://allanwang.ca/notes/linear/">Linear Algebra</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
    </ul>

</header>