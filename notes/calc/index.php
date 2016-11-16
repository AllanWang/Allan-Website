<!DOCTYPE html>
<html lang="en">

<?php
include("../../include/config.php");
$n_key = "Calculus";
$page_title = "$n_key Notes";
$page_description = "Common Derivatives & Integrals";
$navFrom = 'n_calc';
$navTo = 'commons';
$theme_color = "#F44336"; //red

phpHeader(); ?>
<body>

<?php mathJax();
phpNav(); ?>

<main>

    <div id="index-banner" class="anti-parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br>
                <br>
                <h1 class="header center white-text text-lighten-2 pad-top-20"><?php echo $n_key ?></h1>
                <div class="row center">
                    <h5 class="header col s12 light white-text">140 &bull; 141 &bull; 222</h5>
                </div>
                <!-- <div class="row center">
          <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light black lighten-1">Get Started</a>
        </div> -->
                <br>
                <br>

            </div>
        </div>
        <div class="anti-parallax blur5"><img src="images/calc_header.jpg" alt="<?php echo $n_key ?> Header"></div>
    </div>


    <div class="container">
        <div class="section">
            <div class="row" id="commons">
                <div class="col s12 m6">
                    <h5 class="header center">Common Derivatives</h5>
                    <table class="h5 highlight">
                        <?php
                        math_table('f', "f'");
                        math_table('f + g', "f' + g'");
                        math_table('f - g', "f' - g'");
                        math_table('f * g', "f'g + fg'");
                        math_table('\frac{f}{g}', "\\frac{f'g-fg'}{g^2}");
                        math_table('f \circ g', "f'(g) * g'");
                        math_table('x^n', 'nx^{n-1}');
                        math_table('e^x', 'e^x');
                        math_table('a^x', 'a^xln(a)');
                        math_table('ln(x)', '\frac{1}{x}');
                        math_table('sin(x)', 'cos(x)');
                        math_table('cos(x)', '-sin(x)');
                        math_table('tan(x)', 'sec^2x');
                        math_table('cot(x)', '-csc^2x');
                        math_table('sec(x)', 'sec(x)tan(x)');
                        math_table('csc(x)', '-csc(x)cot(x)');
                        math_table('sin^{-1}(x)', '\frac{1}{\sqrt{1-x^2}}');
                        math_table('cos^{-1}(x)', '\frac{-1}{\sqrt{1-x^2}}');
                        math_table('tan^{-1}(x)', '\frac{1}{1+x^2}');
                        math_table('cot^{-1}(x)', '\frac{-1}{1+x^2}');
                        math_table('sec^{-1}(x)', '\frac{1}{|x|\sqrt{x^2-1}}');
                        math_table('csc^{-1}(x)', '\frac{-1}{|x|\sqrt{x^2-1}}');
                        ?>
                    </table>
                </div>
                <div class="col s12 m6">
                    <h5 class="header center">Common Integrals</h5>
                    <table class="h5 highlight">
                        <?php
                        math_table('f(x)', '\int f(x)\,dx+C');
                        math_table('xe^x', 'xe^x-x');
                        math_table('ln(x)', 'xln(x)-x');
                        math_table('tan(x)', 'ln|sec(x)|');
                        math_table('cot(x)', 'ln|sin(x)|');
                        math_table('sec(x)', 'ln|sec(x)+tan(x)|');
                        math_table('csc(x)', '-ln|csc(x)+cot(x)|');
                        math_table('sin^2x = \frac{1-cos(2x)}{2}', '\frac{2x-sin(2x)}{4}');
                        math_table('cos^2x=\frac{1+cos(2x)}{2}', '\frac{2x+sin(2x)}{4}');
                        math_table('\frac{1}{x^2+a^2}', '\frac{1}{a\,tan^{-1}(x/a)}');
                        math_table('\frac{1}{\sqrt{a^2-x^2}}', 'sin^{-1}(\frac{x}{a})');
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <h1 class="header center white-text text-lighten-2 pad-top-20">Power Series</h1>
            </div>
        </div>
        <div class="parallax blur5"><img src="images/calc_header.jpg" alt="Calculus Power Series"></div>
    </div>

    <div class="container">
        <div class="section">
            <div class="row" id="series">
                <table class="h5 highlight">
                    <?php
                    math_table('\frac{1}{1-x}', '\sum_{n=0}^\infty x^n', '1 + x + x^2 + x^3 + x^4\,+\,...\,+\,x^n');
                    math_table('e^x', '\sum_{n=0}^\infty \frac{x^n}{n!}', '1 + x + \frac{x^2}{2!} + \frac{x^3}{3!} + \frac{x^4}{4!}\,+\,...\,+\,\frac{x^n}{n!}');
                    math_table('ln(1 + x)', '\sum_{n=1}^\infty (-1)^{n+1}\,\frac{x^n}{n}', 'x - \frac{x^2}{2} + \frac{x^3}{3} - \frac{x^4}{4} + \frac{x^5}{5}\,-\,...\,+\,\frac{x^n}{n}');
                    math_table('-ln(1 - x)', '\sum_{n=1}^\infty \frac{x^n}{n}', 'x + \frac{x^2}{2} + \frac{x^3}{3} + \frac{x^4}{4} + \frac{x^5}{5}\,+\,...\,+\,\frac{x^n}{n}');
                    math_table('sin(x)', '\sum_{n=0}^\infty (-1)^{n}\,\frac{x^{2n+1}}{(2n+1)!}', 'x - \frac{x^3}{3!} + \frac{x^5}{5!} - \frac{x^7}{7!} + \frac{x^9}{9!}\,-\,...\,+\,\frac{x^{2n+1}}{(2n+1)!}');
                    math_table('cos(x)', '\sum_{n=0}^\infty (-1)^n\,\frac{x^{2n}}{(2n)!}', '1 - \frac{x^2}{2!} + \frac{x^4}{4!} - \frac{x^6}{6!} + \frac{x^8}{8!}\,-\,...\,+\,\frac{x^{2n}}{(2n)!}');
                    math_table('arctan(x)', '\sum_{n=0}^\infty (-1)^n\,\frac{x^{2n+1}}{2n+1}', 'x - \frac{x^3}{3} + \frac{x^5}{5} - \frac{x^7}{7} + \frac{x^9}{9}\,-\,...\,+\,\frac{x^{2n+1}}{2n+1}');
                    ?>
                </table>
            </div>
        </div>
    </div>
</main>
<?php phpFooter();?>
</body>

</html>
