<!DOCTYPE html>
<html lang="en">

<?php
include("../../include/config.php");
$page_title = "Java";
$page_description = "An introduction to java";
$navFrom = 'n_java';
//$navTo = 'commons';
$theme_color = "#E76F00"; //java orange

phpHeader(); ?>
<body>

<?php code_highlight();
phpNav(); ?>

<main>

    <div class="container">
        <div class="section">
            <div class="row" id="commons">
                <h3 class="header center">Intro to Java</h3>
                <h6 class="light center">A <a href="https://en.wikipedia.org/wiki/Concurrent_computing" target="_blank">concurrent</a>,
                    <a href="https://en.wikipedia.org/wiki/Class-based_programming" target="_blank">class-based</a>, and
                    <a href="https://en.wikipedia.org/wiki/Object-oriented_programming"
                       target="_blank">object-oriented</a> programming
                    language<br><br><a href="http://www.oracle.com/technetwork/java/javase/downloads/index.html"
                                       target="_blank">Java
                        SE</a>&emsp;&bull;&emsp;<a
                        href="https://www.eclipse.org/downloads/" target="_blank">Eclipse</a>&emsp;&bull;&emsp;<a
                        href="https://www.jetbrains.com/idea/download/" target="_blank">IntelliJ</a></h6>
                <div class="light h5">
                    <table class="highlight">
                        <?php
                        table_header('Primitive Data Type', 'Bit Size', 'Range', 'Default Value');
                        table('byte', '8', '-128 to 127', '0');
                        table('short', '16', '-32,768 to 32,767', '0');
                        table('int', '32', '-2<sup>31</sup> to 2<sup>31</sup> - 1', '0');
                        table('long', '64', '-2<sup>63</sup> to 2<sup>63</sup> - 1', '0L');
                        table('float', '32', '???', '0.0f');
                        table('double', '64', '???', '0.0d');
                        table('boolean', 'varies', 'true/false', 'false');
                        table('char', '16', '0 to 65,535', '\u0000 (0)');
                        ?>
                    </table>
                </div>
                <?php
                code_collapsible('The Basics|basics.java', 'Common Mistakes|common_mistakes.java');
                ?>

            </div>
        </div>
    </div>
</main>
<?php phpFooter(); ?>
</body>

</html>
