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
<script type="text/x-mathjax-config">
MathJax.Hub.Config({
  displayAlign: "left"
});

</script>

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
        <ul class="collapsible" id="commons" data-collapsible="expandable">
            <li>
                <div class="collapsible-header click-scroll">Common Derivatives</div>
                <div class="collapsible-body">
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
            </li>
            <li>
                <div class="collapsible-header">Common Integrals</div>
                <div class="collapsible-body click-scroll">
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
            </li>
            <li>
                <div class="collapsible-header">Power Series</div>
                <div class="collapsible-body click-scroll">
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
            </li>
        </ul>
    </div>

    <div class="container">
        <div class="section">
            <div class="row" id="convergence-tests">
                <h5 class="header center">Convergence</h5>
                <table class="h5 highlight">
                    <?php
                    table('Integral Test', "If f is a continuous function, it converges if and only if it's integral also converges");
                    table('P-series Test', '\(\sum_{n=1}^\infty n^{-p}\) converges for all p > 1');
                    table('Comparison Test', 'If a(n) is convergent and is always bigger than b(n) in an appropriate range, b(n) is also convergent.<br>If a(n) is divergent and is always smaller than b(n) in an appropriate range, b(n) is also divergent');
                    table('Limit Comparison Test', 'For a(n) and b(n), where i and j are their respective limits towards infinity, if i/j = c > 0 and is finite, then both functions converge or diverge (same behaviour).');
                    table('Alternating Series Test', 'An alternating series is one where the terms switch signs for every adjacent term. The series converges if its sequence in absolute values is decreasing and if it approaches 0 as \(n \rightarrow \infty\)');
                    table('Ratio Test', 'For \(\sum a_n\), define \(L = \lim \limits_{n \to \infty} \lvert \frac{a_{n+1}}{a_n} \rvert \)<br>If L < 1: series is absolutely convergent<br>If L > 1: series is divergent<br>If L = 1: need further testing<br>Used to find interval of convergence');
                    table('Root Test', 'For \(\sum a_n\), define \(L = \lim \limits_{n \to \infty} \sqrt{n}{\lvert a_n \rvert} \)<br>If L < 1: series is absolutely convergent<br>If L > 1: series is divergent<br>If L = 1: need further testing');
                    ?>
                </table>
            </div>
            <div class="row">
                Finding Power Series <br>
                <?php
                bullets('See Power Series List above',
                    'Use integrals and derivatives to convert from known series',
                    'Replace x with desired variable'
                )
                ?>
            </div>
            <div class="row">
                <table class="h5 highlight">
                    <?php
                    table("MacLaurin's Formula", 'Let \(f^{(m)}\) be the m<sup>th</sup> derivative of f(x)<br> \(f(x) = \sum_{n=0}^\infty \frac{f^{(n)}(0)}{n!} * x^n \)<br>If you stop at m &mdash; 1, \( R_m(x) = \frac{f^{[m]}(c) * x^n}{m!}, 0 \le c \le x\)');
                    table('Taylor Series', '$$ f(x) = \sum_{n=0}^\infty \frac{f^{(n)}(a)}{n!}(x-a)^n $$');
                    table('Arc Length', '$$ \int \sqrt{1 + f\'(x)^2} dx \\\\ \int \sqrt{{x\'}^2 + {y\'}^2 + {z\'}^2} dt = \int ||r\'(t)||dt$$');
                    ?>
                </table>
            </div>
        </div>
    </div>
</main>
<?php phpFooter(); ?>
</body>

</html>
