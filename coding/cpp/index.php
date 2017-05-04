<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$page_title = "C++";
$page_description = "An Introduction to " . $page_title;
$navFrom = 'cn_cpp';
//$navTo = 'commons';
$theme_color = "#044F88"; //c++ blue

phpHeader(); ?>
<body>

<?php code_highlight();
phpNav(); ?>

<main>

    <div class="container">
        <div class="light row" id="commons">
            <div class="col s12 m9 l10">

                <h3 class="header center">Intro to C++</h3>
                <h6 class="center">An <a href="https://en.wikipedia.org/wiki/Imperative_programming" target="_blank">imperative</a>,
                    <a href="https://en.wikipedia.org/wiki/Object-oriented_programming" target="_blank">object-oriented</a>,
                    and <a href="https://en.wikipedia.org/wiki/Generic_programming" target="_blank">generic</a>
                    programming language<br/><br/>

                    <?php
                    inlineBullets(array(
                        "Cygwin" => "https://cygwin.com/install.html",
                        "Mingw" => "https://sourceforge.net/projects/mingw/files/",
                        "CLion" => "https://www.jetbrains.com/clion/download/"
                    ));
                    ?>

                </h6>
                <div <?php scrollSpyHeaderData("Data Types") ?>>
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
                <div <?php scrollSpyHeaderData("The Basics") ?>>
                    <h5>The Basics</h5>
                    Here is a sample that shows the structure of a class and how static methods work.
                    <?php
                    echo code_specific('java', 'basics.java');
                    ?>
                </div>

            </div>
            <?php
            tableOfContents();
            ?>

        </div>
    </div>
</main>
<?php phpFooter(); ?>

</body>

</html>
