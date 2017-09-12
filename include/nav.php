<?php
global $theme_color, $page_title, $hamburger_menu_color, $side_nav_contents, $navFrom;
include_once("analytics.html");

/**
 * Add this within the class of any collapsible header along with the desired navFrom prefix key
 * If prefix matches, the collapsible will be active on load
 * @param $prefix string prefix for navFrom
 */
function addActiveIf($prefix)
{
    global $navFrom;
    if (isset($navFrom) && substr($navFrom, 0, strlen($prefix)) === $prefix) {
        echo 'active';
    }
}

?>
<header>


    <a href="#" data-activates="nav-bar"
       class="button-collapse top-nav waves-effect waves-hamburger circle hide-on-large-only">
        <i class="material-icons" style="color: <?php echo $hamburger_menu_color; ?>">menu</i></a>

    <ul id="nav-bar" class="side-nav fixed">
        <li class="logo"><a id="logo-container" href="https://allanwang.ca/" class="center">
                <svg id="nav-logo" height="100" width="250">
                    <desc>Allan Wang</desc>
                </svg>
            </a></li>
        <li class="search">
            <div class="search-wrapper card">
                <form action="javascript:void(0);" autocomplete="off">
                    <input id="search" type="text"
                           placeholder="<?php if ($page_title === 'Uh oh') echo 'Press the Icon to ' ?>Search"><label
                            for="search"><i
                                class="material-icons">search</i></label>
                    <div class="search-results"></div>
                </form>
            </div>
        </li>
        <?php if (isset($side_nav_contents)) $side_nav_contents() ?>
        <li><a class="l" id="nr_proj"
               href="https://allanwang.ca/dev/?scroll_to=projects">Projects</a>
        </li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li>
                    <a class="collapsible-header l <?php addActiveIf('n_') ?>">Notes<i class="material-icons right">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a class="l" id="nr_n_calc" href="https://allanwang.ca/notes/calc/?scroll_to=commons">Calculus</a>
                            </li>
                            <li><a class="l" id="nr_n_linalg"
                                   href="https://allanwang.ca/notes/linear/?scroll_to=common">Linear
                                    Algebra</a></li>
                            <li><a class="l" id="nr_n_comp"
                                   href="https://allanwang.ca/notes/comp/?scroll_to=pseudocode">Computer
                                    Science</a>
                            </li>
                            <li>
                                <div class="divider"></div>
                            </li>
                            <li><a class="l" id="nr_n_comp_202" href="https://allanwang.ca/notes/mcgill/comp202">Comp
                                    202</a></li>
                            <li><a class="l" id="nr_n_comp_251" href="https://allanwang.ca/notes/mcgill/comp251/0.php">Comp
                                    251</a></li>
                            <li><a class="l" id="nr_n_comp_273" href="https://allanwang.ca/notes/mcgill/comp273/0.php">Comp
                                    273</a></li>
                            <li><a class="l" id="nr_n_comp_302" href="https://allanwang.ca/notes/mcgill/comp302/0.php">Comp
                                    302</a></li>
                            <li><a class="l" id="nr_n_comp_303" href="https://allanwang.ca/notes/mcgill/comp303/0.php">Comp
                                    303</a></li>
                            <li><a class="l" id="nr_n_comp_310" href="https://allanwang.ca/notes/mcgill/comp310/0.php">Comp
                                    310</a></li>
                            <li><a class="l" id="nr_n_comp_330" href="https://allanwang.ca/notes/mcgill/comp330/0.php">Comp
                                    330</a></li>
                            <li><a class="l" id="nr_n_math_240" href="https://allanwang.ca/notes/mcgill/math240">Math
                                    240</a>
                            </li>
                            <li><a class="l" id="nr_n_phgy_209" href="https://allanwang.ca/notes/mcgill/phgy209/">Phgy
                                    209</a></li>
                            <!--                            <li><a class="l" id="nr_n_phgy_210" href="https://allanwang.ca/notes/mcgill/phgy210/1.php">Phgy-->
                            <!--                                    210</a></li>-->

                        </ul>
                    </div>
                </li>
                <li>
                    <a class="collapsible-header l <?php addActiveIf('cn_') ?>">Coding Notes<i
                                class="material-icons right">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a class="l" id="nr_cn_git" href="https://allanwang.ca/coding/git/">Git Bash</a></li>
                            <li><a class="l" id="nr_cn_java" href="https://allanwang.ca/coding/java/">Java</a></li>
                            <li><a class="l" id="nr_cn_cpp" href="https://allanwang.ca/coding/cpp/">C++</a></li>
                            <li><a class="l" id="nr_cn_fsharp" href="https://allanwang.ca/coding/fsharp/">F#</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li><a class="l" id="nr_about"
               href="https://allanwang.ca/about/">About</a>
        </li>
    </ul>

</header>