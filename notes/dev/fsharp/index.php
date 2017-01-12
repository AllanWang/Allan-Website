<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$page_title = "F#";
$page_description = "An Introduction to " . $page_title;
$navFrom = 'n_fsharp';
//$navTo = 'commons';
$theme_color = "#387FB5"; //java blue

phpHeader(); ?>
<body>

<?php code_highlight();
phpNav(); ?>

<main>

    <div class="container">
        <div class="light row" id="commons">
            <div class="col s12 m9 l10">

                <h3 class="header center">Intro to F#</h3>
                <h6 class="center">A <a href="https://en.wikipedia.org/wiki/Strongly_typed_programming_language"
                                        target="_blank">strongly typed</a>,
                    <a href="https://en.wikipedia.org/wiki/Multi-paradigm_programming_language" target="_blank">multi-paradigm</a>
                    programming language that encompasses
                    <a href="https://en.wikipedia.org/wiki/Functional_programming" target="_blank">functional</a>,
                    <a href="https://en.wikipedia.org/wiki/Imperative_programming" target="_blank">imperative</a>, and
                    <a href="https://en.wikipedia.org/wiki/Object-oriented_programming"
                       target="_blank">object-oriented</a>
                    programming techniques<br/><br/>

                    <?php
                    inlineBullets(array("fsharp.org" => "http://fsharp.org/",
                        "Visual Studio" => "https://www.visualstudio.com/vs/",
                        "Big Cheatsheet" => "http://dungpa.github.io/fsharp-cheatsheet/"
                    ));
                    ?>
                </h6>
                <div <?php scrollSpyHeaderData("Key Differences") ?>>
                    <h5>Key Differences</h5>
                    <table class="highlight">
                        <?php
                        table("Functional", "Thinking " . linkNewTab("functionally", "http://fsharpforfunandprofit.com/series/thinking-functionally.html") . " offers new insight on top of object oriented or imperative programming.");
                        table("Default Immutability", "Immutable values prevent a large class or errors and may simplify many use cases.");
                        table("Concurrency", "Numerous built-in libraries plus immutable values allow for easy asynchronous programming.")
                        ?>
                    </table>
                </div>

            </div>
            <div class="col hide-on-small-only m3 l2">
                <div class="pinned vertical-center">
                    <ul class="section table-of-contents">
                        <?php
                        tableOfContentsData();
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
<?php phpFooter(); ?>

</body>

</html>
