<?php
global $theme_color, $page_title, $hamburger_menu_color, $side_nav_contents;
include_once("analytics.html");
?>

<header>
    <a href="#" data-activates="nav-bar"
       class="button-collapse top-nav waves-effect waves-nav circle hide-on-large-only">
        <i class="material-icons" style="color: <?php echo $hamburger_menu_color; ?>">menu</i></a>

    <ul id="nav-bar" class="side-nav fixed">
        <li class="logo"><a id="logo-container" href="http://allanwang.ca/" class="center">

                <svg id="front-page-logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     viewBox="0 0 112.91718 114.07033">
                    <defs>
                        <linearGradient id="a">
                            <stop offset="0"></stop>
                            <stop offset="1" stop-opacity="0"></stop>
                        </linearGradient>
                        <linearGradient id="b" x1="39.49448" x2="128.20517" y1="56.78526" y2="129.69815"
                                        gradientTransform="translate(9.41 9.506) scale(.9375)"
                                        gradientUnits="userSpaceOnUse" xlink:href="#a"></linearGradient>
                        <filter id="c" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity=".49804" flood-color="#000" result="flood"></feFlood>
                            <feComposite in="flood" in2="SourceGraphic" operator="in" result="composite1"></feComposite>
                            <feGaussianBlur in="composite1" stdDeviation="3" result="blur"></feGaussianBlur>
                            <feOffset dx="5" dy="5" result="offset"></feOffset>
                            <feComposite in="SourceGraphic" in2="offset" result="composite2"></feComposite>
                        </filter>
                    </defs>
                    <path fill="url(#b)" d="M133.51503 46.224l.19225-.45044h-.19225v.45044z" opacity=".207"></path>
                    <g transform="translate(9.41 9.506)" filter="url(#c)">
                        <path fill="#222"
                              d="M3.0371 23.08008L17.67384 55.2832l2.7129-6.11523-11.8594-26.0879H3.03712zM88.66406 3.21094L60.08398 70.1953 45.0879 35.20704l-15.06642 35.1582-6.86914-15.11328-2.7246 6.08985 9.7285 21.4004L45.0879 47.89846 60.09374 82.9121l34.0039-79.70116h-5.43358z"></path>
                        <path fill="<?php echo $theme_color; ?>"
                              d="M69.19726 61.5957l-2.6914 6.31446L74.0332 85.1172h5.45508L69.19726 61.5957zM42.24806 0L0 95.0586h5.4414l36.7715-82.66602 21.52343 49.1914 2.709-6.27734L42.24803 0z"></path>
                    </g>
                </svg>

            </a></li>
        <li class="search">
            <div class="search-wrapper card">
                <input id="search" type="text"
                       placeholder="<?php if ($page_title === '404') echo 'Press the Icon to ' ?>Search"><label
                        for="search"><i
                            class="material-icons">search</i></label>
                <div class="search-results"></div>
            </div>
        </li>
        <?php if (isset($side_nav_contents)) $side_nav_contents() ?>
        <li><a class="l" id="nr_proj"
               href="http://allanwang.ca/dev/?scroll_to=projects">Projects</a>
        </li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li>
                    <a class="collapsible-header l">Notes<i class="material-icons right">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a class="l" id="nr_n_calc" href="http://allanwang.ca/notes/calc/?scroll_to=commons">Calculus</a>
                            </li>
                            <li><a class="l" id="nr_n_linalg" href="http://allanwang.ca/notes/linear/?scroll_to=common">Linear
                                    Algebra</a></li>
                            <li><a class="l" id="nr_n_comp" href="http://allanwang.ca/notes/comp/?scroll_to=pseudocode">Computer
                                    Science</a>
                            </li>
                            <li><a class="l" id="nr_n_phgy" href="http://allanwang.ca/notes/phgy/">Physiology</a></li>
                            <li>
                                <div class="divider"></div>
                            </li>
                            <li><a class="l" id="nr_n_git" href="http://allanwang.ca/notes/git/">Git Bash</a></li>
                            <li><a class="l" id="nr_n_java" href="http://allanwang.ca/notes/java/">Java</a></li>
                            <li>
                                <div class="divider"></div>
                            </li>
                            <li><a class="l" id="nr_n_comp_251" href="http://allanwang.ca/notes/mcgill/comp251/">Comp
                                    251</a></li>
                            <li><a class="l" id="nr_n_math_240" href="http://allanwang.ca/notes/mcgill/math240">Math 240</a>
                            </li>
                            <li><a class="l" id="nr_n_phgy_209" href="http://allanwang.ca/notes/mcgill/phgy209/">Phgy 209</a></li>

                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li><a class="l" id="nr_about"
               href="http://allanwang.ca/about/WIP">About</a>
        </li>
    </ul>

</header>
