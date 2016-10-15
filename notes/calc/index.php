<!DOCTYPE html>
<html lang="en">

<?php
$page_title = "Calc Notes";
$page_description = "Common Derivatives & Integrals";
$navFrom = 'notes';
$navTo = 'commons';
$theme_color = "#F44336"; //red
include("../../include/header.php"); ?>
<body>
<script type="text/javascript" async
        src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-MML-AM_CHTML">
</script>

<?php include("../../include/nav.php"); ?>

<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container">
            <br>
            <br>
            <h1 class="header center white-text text-lighten-2 pad-top-20">Calculus</h1>
            <div class="row center">
                <h5 class="header col s12 light">140 &bull; 141 &bull; 222</h5>
            </div>
            <!-- <div class="row center">
      <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light black lighten-1">Get Started</a>
    </div> -->
            <br>
            <br>

        </div>
    </div>
    <div class="parallax blur5"><img src="images/calc_header.jpg" alt="Calculus Header"></div>
</div>


<div class="container">
    <div class="section">
        <div class="row" id="commons">
            <div class="col s12 m6">
                <h5 class="header center">Common Derivatives</h5>
                <table class="light h5">
                    <tr>
                        <th>$$f$$</th>
                        <th>$$f'$$</th>
                    </tr>
                    <tr>
                        <td>$$f + g$$</td>
                        <td>$$f' + g'$$</td>
                    </tr>
                    <tr>
                        <td>$$f - g$$</td>
                        <td>$$f' - g'$$</td>
                    </tr>
                    <tr>
                        <td>$$f * g$$</td>
                        <td>$$f'g + fg'$$</td>
                    </tr>
                    <tr>
                        <td>$$\frac{f}{g}$$</td>
                        <td>$$\frac{f'g-fg'}{g^2}$$</td>
                    </tr>
                    <tr>
                        <td>$$f \circ g$$</td>
                        <td>$$f' - g'$$</td>
                    </tr>

                    <tr>
                        <td>$$ x^n $$</td>
                        <td>$$ nx^{n-1} $$</td>
                    </tr>
                    <tr>
                        <td>$$ e^x $$</td>
                        <td>$$ e^x $$</td>
                    </tr>
                    <tr>
                        <td>$$ a^x $$</td>
                        <td>$$ a^xln(a) $$</td>
                    </tr>
                    <tr>
                        <td>$$ ln(x) $$</td>
                        <td>$$ \frac{1}{x} $$</td>
                    </tr>
                    <tr>
                        <td>$$ sin(x) $$</td>
                        <td>$$ cos(x) $$</td>
                    </tr>
                    <tr>
                        <td>$$ cos(x) $$</td>
                        <td>$$ -sin(x) $$</td>
                    </tr>
                    <tr>
                        <td>$$ tan(x) $$</td>
                        <td>$$ sec^2x $$</td>
                    </tr>
                    <tr>
                        <td>$$ cot(x) $$</td>
                        <td>$$ -csc^2x $$</td>
                    </tr>
                    <tr>
                        <td>$$ sec(x) $$</td>
                        <td>$$ sec(x)tan(x) $$</td>
                    </tr>
                    <tr>
                        <td>$$ csc(x) $$</td>
                        <td>$$ -csc(x)cot(x) $$</td>
                    </tr>
                    <tr>
                        <td>$$ sin^{-1}(x) $$</td>
                        <td>$$ \frac{1}{\sqrt{1-x^2}} $$</td>
                    </tr>
                    <tr>
                        <td>$$ cos^{-1}(x) $$</td>
                        <td>$$ \frac{-1}{\sqrt{1-x^2}} $$</td>
                    </tr>
                    <tr>
                        <td>$$ tan^{-1}(x) $$</td>
                        <td>$$ \frac{1}{\sqrt{1+x^2}} $$</td>
                    </tr>
                    <tr>
                        <td>$$ cot^{-1}(x) $$</td>
                        <td>$$ \frac{-1}{\sqrt{1+x^2}} $$</td>
                    </tr>
                    <tr>
                        <td>$$ sec^{-1}(x) $$</td>
                        <td>$$ \frac{1}{|x|\sqrt{x^2-1}}$$</td>
                    </tr>
                    <tr>
                        <td>$$ csc^{-1}(x) $$</td>
                        <td>$$ \frac{-1}{|x|\sqrt{x^2-1}}$$</td>
                    </tr>
                </table>
            </div>
            <div class="col s12 m6">
                <h5 class="header center">Common Integrals</h5>
                <table class="light h5">
                    <tr>
                        <th>$$f(x)$$</th>
                        <th>$$\int f(x)\,dx+C$$</th>
                    </tr>
                    <tr>
                        <th>$$ xe^x $$</th>
                        <th>$$ xe^x-x $$</th>
                    </tr>
                    <tr>
                        <th>$$ ln(x) $$</th>
                        <th>$$ xln(x)-x $$</th>
                    </tr>
                    <tr>
                        <th>$$ tan(x) $$</th>
                        <th>$$ ln|sec(x)| $$</th>
                    </tr>
                    <tr>
                        <th>$$ cot(x) $$</th>
                        <th>$$ ln|sin(x)| $$</th>
                    </tr>
                    <tr>
                        <th>$$ sec(x) $$</th>
                        <th>$$ ln|sec(x)+tan(x)| $$</th>
                    </tr>
                    <tr>
                        <th>$$ csc(x) $$</th>
                        <th>$$ -ln|csc(x)+cot(x)| $$</th>
                    </tr>
                    <tr>
                        <th>$$ sin^2x = \frac{1-cos(2x)}{2} $$</th>
                        <th>$$ \frac{2x-sin(2x)}{4} $$</th>
                    </tr>
                    <tr>
                        <th>$$ cos^2x=\frac{1+cos(2x)}{2} $$</th>
                        <th>$$ \frac{2x+sin(2x)}{4} $$</th>
                    </tr>
                    <tr>
                        <th>$$ \frac{1}{x^2+a^2} $$</th>
                        <th>$$ \frac{1}{a\,tan^{-1}(x/a)} $$</th>
                    </tr>
                    <tr>
                        <th>$$ \frac{1}{\sqrt{a^2-x^2}}$$</th>
                        <th>$$ sin^{-1}(\frac{x}{a}) $$</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h5 class="header col s12 light">Middle TODO</h5>
            </div>
        </div>
    </div>
    <div class="parallax blur5"><img src="images/calc_header.jpg" alt="Calculus Header"></div>
</div>

<div class="container">
    <div class="section">
        <div class="row" id="series">
            <h5 class="header center">Power Series</h5>
            <table class="light h5">
                <tr>
                    <th>$$ \frac{1}{1-x} $$</th>
                    <th>$$ \sum_{n=0}^\infty x^n $$</th>
                    <th>$$ 1 + x + x^2 + x^3 + x^4\,+\,...\,+\,x^n $$</th>
                </tr>
                <tr>
                    <th>$$ e^x $$</th>
                    <th>$$ \sum_{n=0}^\infty \frac{x^n}{n!} $$</th>
                    <th>$$ 1 + x + \frac{x^2}{2!} + \frac{x^3}{3!} + \frac{x^4}{4!}\,+\,...\,+\,\frac{x^n}{n!} $$</th>
                </tr>
                <tr>
                    <th>$$ ln(1 + x) $$</th>
                    <th>$$ \sum_{n=1}^\infty (-1)^{n+1}\,\frac{x^n}{n} $$</th>
                    <th>$$ x - \frac{x^2}{2} + \frac{x^3}{3} - \frac{x^4}{4} +
                        \frac{x^5}{5}\,-\,...\,+\,\frac{x^n}{n}$$
                    </th>
                </tr>
                <tr>
                    <th>$$ -ln(1 - x) $$</th>
                    <th>$$ \sum_{n=1}^\infty \frac{x^n}{n} $$</th>
                    <th>$$ x + \frac{x^2}{2} + \frac{x^3}{3} + \frac{x^4}{4} +
                        \frac{x^5}{5}\,+\,...\,+\,\frac{x^n}{n}$$
                    </th>
                </tr>
                <tr>
                    <th>$$ sin(x) $$</th>
                    <th>$$ \sum_{n=0}^\infty (-1)^{n}\,\frac{x^{2n+1}}{(2n+1)!} $$</th>
                    <th>$$ x - \frac{x^3}{3!} + \frac{x^5}{5!} - \frac{x^7}{7!} +
                        \frac{x^9}{9!}\,-\,...\,+\,\frac{x^{2n+1}}{(2n+1)!}$$
                    </th>
                </tr>
                <tr>
                    <th>$$ cos(x) $$</th>
                    <th>$$ \sum_{n=0}^\infty (-1)^n\,\frac{x^{2n}}{(2n)!} $$</th>
                    <th>$$ 1 - \frac{x^2}{2!} + \frac{x^4}{4!} - \frac{x^6}{6!} +
                        \frac{x^8}{8!}\,-\,...\,+\,\frac{x^{2n}}{(2n)!}$$
                    </th>
                </tr>
                <tr>
                    <th>$$ arctan(x) $$</th>
                    <th>$$ \sum_{n=0}^\infty (-1)^n\,\frac{x^{2n+1}}{2n+1} $$</th>
                    <th>$$ x - \frac{x^3}{3} + \frac{x^5}{5} - \frac{x^7}{7} +
                        \frac{x^9}{9}\,-\,...\,+\,\frac{x^{2n+1}}{2n+1}$$
                    </th>
                </tr>
            </table>
        </div>
    </div>
</div>

<?php include("../../include/footer.php"); ?>
</body>

</html>
