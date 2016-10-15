<ul id="dropdown_notes" class="dropdown-content">
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
</ul>

<?php
function navItems()
{
    // prefix all ids with nr_
    return '
    <li><a class="animated" id="nr_proj"
       href="http://allanwang.ca/dev/index.php?scroll_to=projects">Projects</a>
    </li>
    <li><a class="animated" id="nr_notes"
       href="http://allanwang.ca/notes/calc/index.php?scroll_to=commons">Notes</a>
    </li>
    <li><a class="dropdown-button" href="#!" data-activates="dropdown_notes">Dropdown<i
        class="material-icons right">arrow_drop_down</i></a>
    </li>
    ';
} ?>
<!--<div class="navbar-fixed">-->
<nav class="white" role="navigation">
    <div class="nav-wrapper container">

        <a id="logo-container" href="http://allanwang.ca/" class="brand-logo">
            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="61" viewBox="0 0 68.7 74.7">
                <path fill="<?php echo(isset($logo_color) ? $logo_color : '#333333'); ?>"
                      d="M31.5 0c.6 1 1 2.3 1.4 3.4l16 39-2.3 5.2L32.4 13l-1-2.3-.4.7-13.3 32-2.2 5.5L10 61.2 6 71l-1.5 3.7H0v-.2c.5-1 1-2 1.2-2.8l1.4-3.3 10.5-25c1-1.8 2-3.6 2.7-5.4L28 8.4c.5-1.6 1.2-3.2 2-4.7L31.4 0z"></path>
                <!--                grey base W color-->
                <path fill="#757575"
                      d="M64.2 6.8h4.5V7c-.8 1.6-1.4 3.3-2 5-5 11.5-10 23-14.8 34.7l-.8 1L49 53l-4.6 11.5s0 .3-.3.3l-4.5-11.3-5.4-13-1-2-1 2.4-6 14-4 10-6.6-16 2.2-5.6 3 7.3 1.5 3c3-6.6 5.8-13.3 8.6-20l2.8-6.4 11 26.4c1-2 1.8-4.3 2.7-6.4l2.4-5.3 9.3-22 5.6-13.4zM3.6 21c1.5-.2 3 0 4.5 0 1.5 2 2 4.4 3 6.7L15.7 38 13 43.4 5.8 25.8l-2-5z"></path>
                <path fill="<?php echo(isset($logo_color) ? $logo_color : '#333333'); ?>"
                      d="M49.3 53l2.2-5.2.5 1 6.3 15 2.3 5.5H56l-3-7.6-3.7-8.6z"></path>
            </svg>
        </a>
        <ul class="right hide-on-med-and-down">
            <?php echo navItems() ?>
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <?php echo str_replace('id="nr_"', 'id="nrm_"', navItems()) ?>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>
<!--</div>-->