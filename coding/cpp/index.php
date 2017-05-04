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
                    <a href="https://en.wikipedia.org/wiki/Object-oriented_programming"
                       target="_blank">object-oriented</a>,
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
                        table_header('Group', 'Type names', 'Size/precision');
                        table('Character types', 'char', '1 byte, at least 8 bits');
                        table('', 'char16_t', 'at least 16 bits');
                        table('', 'char32_t', 'at least 32 bits');
                        table('', 'wchar_t', 'can represent largest supported character set');
                        table('Integer types (signed/unsigned)', 'char', 'at least 8 bits');
                        table('', 'short', 'at least 16 bits');
                        table('', 'int', 'at least 16 bits; no smaller than short');
                        table('', 'long', 'at least 32 bits');
                        table('', 'long long', 'at least 64 bits');
                        table('Floating-point types', 'float', '');
                        table('', 'double', 'precision not less than float');
                        table('', 'long double', 'precision not less than double');
                        table('Boolean type', 'bool', '');
                        table('Null pointer', 'decltype(nullptr)', '');
                        ?>
                    </table>

                    * In C++, type deduction also exists. The auto type will try to match the variable type with its
                    value
                    accordingly, and decltype(foo) bar will create 'bar' with the same type as 'foo'.
                </div>
                <div <?php scrollSpyHeaderData('Syntax') ?>>
                    <h5>Syntax</h5>
                    <table class="highlight top-align">
                        <?php
                        table_header('Keyword', 'Meaning');
                        table('std<b>::</b>cout', 'scope operator; shows that the method on the right side is under the namespace on the left.<br>Note that if we want to use a default namespace, we may define "using namespace std" to avoid it for all std methods.');
                        table('std::cout <b><<</b> "Hello World!"', 'insertion; sends string to cout');
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
