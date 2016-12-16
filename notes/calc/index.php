<!DOCTYPE html>
<html lang="en">

<?php
include("../../include/config.php");
$n_key = "Calculus";
$page_title = "$n_key Notes";
$page_description = "Calculus Formulas";
$navFrom = 'n_calc';
$navTo = 'commons';
$theme_color = "#F44336"; //red

phpHeader(); ?>
<body>

<?php mathJax();
phpNav(); ?>
<!--<script type="text/x-mathjax-config">-->
<!--MathJax.Hub.Config({-->
<!--  "HTML-CSS": {-->
<!--    linebreaks: { automatic: true, width: "75% container" }-->
<!--  }-->
<!--});-->
<!---->
<!--</script>-->

<main>

    <div id="index-banner" class="parallax-container">
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
        <div class="parallax blur5"><img src="images/calc_header.jpg" alt="<?php echo $n_key ?> Header"></div>
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
                        math_table('\dfrac{f}{g}', "\dfrac{f'g-fg'}{g^2}");
                        math_table('f \circ g', "f'(g) * g'");
                        math_table('x^n', 'nx^{n-1}');
                        math_table('e^x', 'e^x');
                        math_table('a^x', 'a^xln(a)');
                        math_table('ln(x)', '\dfrac{1}{x}');
                        math_table('sin(x)', 'cos(x)');
                        math_table('cos(x)', '-sin(x)');
                        math_table('tan(x)', 'sec^2x');
                        math_table('cot(x)', '-csc^2x');
                        math_table('sec(x)', 'sec(x)tan(x)');
                        math_table('csc(x)', '-csc(x)cot(x)');
                        math_table('sin^{-1}(x)', '\dfrac{1}{\sqrt{1-x^2}}');
                        math_table('cos^{-1}(x)', '\dfrac{-1}{\sqrt{1-x^2}}');
                        math_table('tan^{-1}(x)', '\dfrac{1}{1+x^2}');
                        math_table('cot^{-1}(x)', '\dfrac{-1}{1+x^2}');
                        math_table('sec^{-1}(x)', '\dfrac{1}{|x|\sqrt{x^2-1}}');
                        math_table('csc^{-1}(x)', '\dfrac{-1}{|x|\sqrt{x^2-1}}');
                        ?>
                    </table>
                </div>
            </li>
            <li>
                <div class="collapsible-header click-scroll">Common Integrals</div>
                <div class="collapsible-body">
                    <table class="h5 highlight">
                        <?php
                        math_table('f(x)', '\int f(x)\,dx+C');
                        math_table('xe^x', 'xe^x-e^x');
                        math_table('ln(x)', 'xln(x)-x');
                        math_table('tan(x)', 'ln|sec(x)|');
                        math_table('cot(x)', 'ln|sin(x)|');
                        math_table('sec(x)', 'ln|sec(x)+tan(x)|');
                        math_table('csc(x)', '-ln|csc(x)+cot(x)|');
                        math_table('sin^2x = \dfrac{1-cos(2x)}{2}', '\dfrac{2x-sin(2x)}{4}');
                        math_table('cos^2x=\dfrac{1+cos(2x)}{2}', '\dfrac{2x+sin(2x)}{4}');
                        math_table('\dfrac{1}{x^2+a^2}', '\dfrac{1}{a\,tan^{-1}(x/a)}');
                        math_table('\dfrac{1}{\sqrt{a^2-x^2}}', 'sin^{-1}(\dfrac{x}{a})');
                        ?>
                    </table>
                </div>
            </li>
            <li>
                <div class="collapsible-header click-scroll">Power Series</div>
                <div class="collapsible-body">
                    <table class="h5 highlight">
                        <?php
                        math_table('\dfrac{1}{1-x}', '\sum_{n=0}^\infty x^n', '1 + x + x^2 + x^3 + x^4\,+\,...\,+\,x^n');
                        math_table('e^x', '\sum_{n=0}^\infty \dfrac{x^n}{n!}', '1 + x + \dfrac{x^2}{2!} + \dfrac{x^3}{3!} + \dfrac{x^4}{4!}\,+\,...\,+\,\dfrac{x^n}{n!}');
                        math_table('ln(1 + x)', '\sum_{n=1}^\infty (-1)^{n+1}\,\dfrac{x^n}{n}', 'x - \dfrac{x^2}{2} + \dfrac{x^3}{3} - \dfrac{x^4}{4} + \dfrac{x^5}{5}\,-\,...\,+\,\dfrac{x^n}{n}');
                        math_table('-ln(1 - x)', '\sum_{n=1}^\infty \dfrac{x^n}{n}', 'x + \dfrac{x^2}{2} + \dfrac{x^3}{3} + \dfrac{x^4}{4} + \dfrac{x^5}{5}\,+\,...\,+\,\dfrac{x^n}{n}');
                        math_table('sin(x)', '\sum_{n=0}^\infty (-1)^{n}\,\dfrac{x^{2n+1}}{(2n+1)!}', 'x - \dfrac{x^3}{3!} + \dfrac{x^5}{5!} - \dfrac{x^7}{7!} + \dfrac{x^9}{9!}\,-\,...\,+\,\dfrac{x^{2n+1}}{(2n+1)!}');
                        math_table('cos(x)', '\sum_{n=0}^\infty (-1)^n\,\dfrac{x^{2n}}{(2n)!}', '1 - \dfrac{x^2}{2!} + \dfrac{x^4}{4!} - \dfrac{x^6}{6!} + \dfrac{x^8}{8!}\,-\,...\,+\,\dfrac{x^{2n}}{(2n)!}');
                        math_table('arctan(x)', '\sum_{n=0}^\infty (-1)^n\,\dfrac{x^{2n+1}}{2n+1}', 'x - \dfrac{x^3}{3} + \dfrac{x^5}{5} - \dfrac{x^7}{7} + \dfrac{x^9}{9}\,-\,...\,+\,\dfrac{x^{2n+1}}{2n+1}');
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
                    table('Integral Test', "If f is a continuous function, it converges if and only if its integral also converges");
                    table('P-series Test', '\(\sum_{n=1}^\infty n^{-p}\) converges for all p > 1');
                    table('Comparison Test', 'If a(n) is convergent and is always bigger than b(n) in an appropriate range, b(n) is also convergent.<br>If a(n) is divergent and is always smaller than b(n) in an appropriate range, b(n) is also divergent');
                    table('Limit Comparison Test', 'For a(n) and b(n), where i and j are their respective limits towards infinity, if i/j = c > 0 and is finite, then both functions converge or diverge (same behaviour).');
                    table('Alternating Series Test', 'An alternating series is one where the terms switch signs for every adjacent term. The series converges if its sequence in absolute values is decreasing and if it approaches 0 as \(n \rightarrow \infty\)');
                    table('Ratio Test', 'For \(\sum a_n\), define \(L = \lim \limits_{n \to \infty} \lvert \frac{a_{n+1}}{a_n} \rvert \)<br>If L < 1: series is absolutely convergent<br>If L > 1: series is divergent<br>If L = 1: need further testing<br>Used to find interval of convergence');
                    table('Root Test', 'For \(\sum a_n\), define \(L = \lim \limits_{n \to \infty} \sqrt[n]{\lvert a_n \rvert} \)<br>If L < 1: series is absolutely convergent<br>If L > 1: series is divergent<br>If L = 1: need further testing');
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
                    table('Taylor Series', '\( f(x) = \sum_{n=0}^\infty \frac{f^{(n)}(a)}{n!}(x-a)^n \)');
                    table('Arc Length', '\( \int \sqrt{1 + f\'(x)^2} dx \\\\ \int \sqrt{{x\'}^2 + {y\'}^2 + {z\'}^2} dt = \int ||r\'(t)||dt \)');
                    table_header_full('Vectors', 2);
                    math_table_left('a \cdot b', 'a_1b_1 + a_2b_2 + a_3b_3 + ... + a_nb_n \\\\ a \cdot b = |a||b|cos\theta');
                    math_table_left('a \times b \\\\ a = \langle a_1, a_2, a_3\rangle\,and\,b = \langle b_1, b_2, b_3\rangle \\\\ \text{* Only for 3D vectors}', ' \langle a_2b_3 - a_3b_2, a_3b_1 - a_1b_3, a_1b_2, a_2b_1\rangle \\\\ = |a||b|sin\theta');
                    math_table_left('|\overrightarrow{a}|', '\sqrt{{a_1}^2 + {a_2}^2 + {a_3}^2 + ...}');
                    math_table_left('proj_ab ', '\dfrac{a \cdot b}{|a|^2} a');
                    math_table_left('\text{Area of Parallelpiped}', 'V = |a \cdot (b \times c)| \\\\ \text{If V = 0, a, b, and c are coplanar}');
                    math_table_left('\text{T (unit tangent vector)}', '\dfrac{r\'(t)}{|r\'(t)|}');
                    math_table_left('\kappa \text{ (Curvature)}', '\left|\dfrac{dT}{ds}\right| \\\\ \kappa(t) = \dfrac{|T\'(t)|}{|r\'(t)|} = \dfrac{|r\'(t) \times r\'\'(t)|}{{|r\'(t)|}^3} \\\\ \text{When y = f(x)} \quad \kappa(x) = \dfrac{|f\'\'(x)|}{[1 + (f\'(x))^2]^{3/2}}');
                    math_table_left('N(t) \text{ (Normal Vector)}', '\dfrac{T\'(t)}{|T\'(t)|} = B(t) \times T(t)');
                    math_table_left('B(t) \text{ (Binormal Vector)}', 'T(t) \times N(t) = \dfrac{r\'(t) \times r\'\'(t)}{|r\'(t) \times r\'\'(t)|}');
                    math_table_left('v(t)', 'r\'(t)');
                    math_table_left('a', 'v\'T + \kappa{v}^2N \\\\ a_TT + a_NN \text{ (see below)}');
                    math_table_left('a_T \text{ (Tangential acceleration)}', '\dfrac{r\'(t) \cdot r\'\'(t)}{|r\'(t)|}');
                    math_table_left('a_N \text{ (Normal acceleration)}', '\dfrac{r\'(t) \times r\'\'(t)}{|r\'(t)|}');
                    math_table_left('(f_x)_y \\\\ \text{Higher Derivatives}', 'f_{xy} = \dfrac{\partial}{\partial{y}}\left(\dfrac{\partial}{\partial{x}}\right) = \dfrac{\partial^2f}{\partial{y}\partial{x}} = \dfrac{\partial^2z}{\partial{y}\partial{x}}');
                    math_table_left('\text{Tangent plane to surface of z}', 'z - z_0 = f_x(x_0, y_0)(x - x_0) + f_y(x_0, y_0)(y - y_0)');
                    math_table_left('\text{Total Differential}', 'd_z = f_x(x, y)dx + f_y(x, y)dy = \dfrac{\partial{z}}{\partial{x}}dx + \dfrac{\partial{z}}{\partial{y}}dy');
                    math_table_left('\dfrac{\partial{u}}{\partial{t_i}} \\\\ \text{u is a differential function of n variables}', '\dfrac{\partial{u}}{\partial{t_i}} = \dfrac{\partial{u}}{\partial{x_1}}\dfrac{\partial{x_1}}{\partial{t_i}} + \dfrac{\partial{u}}{\partial{x_2}}\dfrac{\partial{x_2}}{\partial{t_i}} + ... + \dfrac{\partial{u}}{\partial{x_n}}\dfrac{\partial{x_n}}{\partial{t_i}}');
                    math_table_left('\nabla f(x, y) \text{ (gradient of f)}', '\langle f_x(x, y), f_y(x, y) \rangle = \dfrac{\partial f}{\partial x}i + \dfrac{\partial f}{\partial y}j');
                    math_table_left('D_uf(x, y, z) \text{ (directional derivative)}', '\nabla f \cdot u \\\\ \text{Maximum value of directional derivative is } |\nabla f|');
                    math_table_left('\text{Second Derivative Test}', 'D = D(a, b) = f_{xx}(a, b)f_{yy}(a, b) - [f_{xy}(a, b)]^2 \\\\ \text{If D > 0 and $f_{xx}(a, b)$ > 0, then $f(a, b)$ is a local minimum} \\\\ \text{If D > 0 and $f_{xx}(a, b)$ < 0, then $f(a, b)$ is a local maximum} \\\\ \text{If D < 0, then $f(a, b)$ is not a local maximum or minimum (saddle point)}');
                    math_table_left('\text{Lagrange Multipliers}', '\text{Find all values of x, y, z, and $\lambda$ such that $\nabla f(x, y, z) = \lambda \nabla g(x, y, z)$ and } g(x, y, z) = k \\\\ \text{Evaluate $f$ at all points (x, y, z) from the values above; the largest is the maximum and the smallest is the minimum}');
                    math_table_left('\text{V of solid above rectangle R and below }');
                    math_table_left('\int \int_D f(x, y)dA \\\\ f \text{ is continuous on } \\\\ D = \{(x, y) \,|\, a \le x \le b,\, g_1(x) \le y \le g_2(x)\}', '\int^b_a \int^{g_2(x)}_{g_1(x)} f(x, y)dydx = \int^{g_2(x)}_{g_1(x)} \int^b_a f(x, y)dxdy \\\\ \text{When D is a rectangle, $g_1(x)$ and $g_2(x)$ are constants}');
                    ?>
                </table>
            </div>
        </div>
    </div>
</main>
<?php phpFooter(); ?>
</body>

</html>
