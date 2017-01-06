<style>

    /*general*/
    .waves-effect.waves-nav .waves-ripple {
        background-color: <?php echo $ripple_rgba?>;
    }

    .theme-color {
        color: <?php echo $theme_color?>;
    !important;
    }

    .theme-color-background {
        background-color: <?php echo $theme_color?> !important;
    }

    .theme-color-background-secondary {
        background-color: <?php echo lighterColor($theme_color)?> !important;
    }

    /*override search bar accents*/
    input:not([type]):focus:not([readonly]),
    input[type=text]:focus:not([readonly]),
    input[type=password]:focus:not([readonly]),
    input[type=email]:focus:not([readonly]),
    input[type=url]:focus:not([readonly]),
    input[type=time]:focus:not([readonly]),
    input[type=date]:focus:not([readonly]),
    input[type=datetime]:focus:not([readonly]),
    input[type=datetime-local]:focus:not([readonly]),
    input[type=tel]:focus:not([readonly]),
    input[type=number]:focus:not([readonly]),
    input[type=search]:focus:not([readonly]),
    textarea.materialize-textarea:focus:not([readonly]) {
        border-bottom: 1px solid <?php echo $theme_color?>;
        box-shadow: 0 1px 0 0 <?php echo $theme_color?>;
    }

    input:not([type]):focus:not([readonly]) + label,
    input[type=text]:focus:not([readonly]) + label,
    input[type=password]:focus:not([readonly]) + label,
    input[type=email]:focus:not([readonly]) + label,
    input[type=url]:focus:not([readonly]) + label,
    input[type=time]:focus:not([readonly]) + label,
    input[type=date]:focus:not([readonly]) + label,
    input[type=datetime]:focus:not([readonly]) + label,
    input[type=datetime-local]:focus:not([readonly]) + label,
    input[type=tel]:focus:not([readonly]) + label,
    input[type=number]:focus:not([readonly]) + label,
    input[type=search]:focus:not([readonly]) + label,
    textarea.materialize-textarea:focus:not([readonly]) + label {
        color: <?php echo $theme_color?>;
    }

    input:not([type]):focus:not([readonly]) + label,
    input[type=text]:focus:not([readonly]) + label,
    input[type=password]:focus:not([readonly]) + label,
    input[type=email]:focus:not([readonly]) + label,
    input[type=url]:focus:not([readonly]) + label,
    input[type=time]:focus:not([readonly]) + label,
    input[type=date]:focus:not([readonly]) + label,
    input[type=datetime]:focus:not([readonly]) + label,
    input[type=datetime-local]:focus:not([readonly]) + label,
    input[type=tel]:focus:not([readonly]) + label,
    input[type=number]:focus:not([readonly]) + label,
    input[type=search]:focus:not([readonly]) + label,
    textarea.materialize-textarea:focus:not([readonly]) + label {
        color: <?php echo $theme_color?>;
    }

    /*table of contents left bar*/
    .table-of-contents a:hover {
        color: #a8a8a8;
        padding-left: 19px;
        border-left: 1px solid <?php echo $theme_color?>;
    }

    .table-of-contents a.active {
        font-weight: 500;
        padding-left: 18px;
        border-left: 2px solid <?php echo $theme_color?>;
    }

    /*table of contents switch color*/
    .switch label input[type=checkbox]:checked + .lever {
        background-color: <?php echo lighterColor($theme_color)?>;
    }

    .switch label input[type=checkbox]:checked + .lever:after {
        background-color: <?php echo $theme_color?>;
        left: 24px;
    }
</style>