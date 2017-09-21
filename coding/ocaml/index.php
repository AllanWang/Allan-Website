<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$page_title = "OCaml";
$page_description = "An Introduction to " . $page_title;
$navFrom = 'cn_ocaml';
//$navTo = 'commons';
$theme_color = "#EE730B"; //ocaml orange

phpHeader(); ?>
<body>

<?php code_highlight('ocaml');
phpNav(); ?>

<main>

    <div class="container">
        <div class="light row" id="commons">
            <div class="col s12 m9 l10">

                <h3 class="header center">Intro to OCaml</h3>
                <h6 class="center">A <a href="https://en.wikipedia.org/wiki/Programming_paradigm#Multi-paradigm"
                                        target="_blank">multi-paradigm</a>
                    <a href="https://en.wikipedia.org/wiki/General-purpose_programming_language" target="_blank">general-purpose
                        programming
                        language</a><br/><br/>

                    <?php
                    inlineBullets(array(
                        "Official Documentation" => "http://ocaml.org/learn/",
                        "OCaml for Windows" => "https://fdopen.github.io/opam-repository-mingw/",
                        "Pervasives" => "https://caml.inria.fr/pub/docs/manual-ocaml/libref/Pervasives.html",
                        "Atom" => "https://atom.io/",
                        "Nucleotide" => "https://nuclide.io/"
                    ));
                    ?>

                </h6>
                <div <?php scrollSpyHeaderData("Basics") ?>>
                    <table class="highlight">
                        <?php
                        table_header('Symbol/Keyword/Term', 'Usage');
                        table("Calling functions", "Calling OCaml functions can be done through [fun name] [args...]. Parentheses are only necessary to wrap a single argument/tuple together, and should <i>not</i> by used to wrap all the arguments (this implies that everything is a tuple, rather than independent args). If you are getting <b>unbounded name errors</b>, you may be running in the " . linkNewTab("toploop", "https://ocaml.org/learn/taste.html") . ". In this case, you may need to add semicolons (;;) after function declarations to execute it");
                        table("let ... in", "Nested functions must end with the 'in' keyword to show that its declaration is finished");
                        table("match l with ...", "OCaml's pattern matching. Given input 'l', match it with the inputs below. This is similar but more powerful that Java's switch system. 'Cases' are defined as '| c -> ...', where 'c' is the case. All cases start with '|', and each case is self containing (no break keyword). '_' may be used as a wildcard to accept all matches. Pattern matching is done in the order it is defined");
                        table("[1;2;3]", "Lists are wrapped with square brackets, and its items are separated with semicolons");
                        table("<>", "!= is used as the opposite of ==, which tests by physical equality, not by value! Odds are you shouldn't be using this. The opposite of '=', which tests for structural equality, is '<>'");
                        table("Tuples", "Tuples are ways of combining multiple types into one type. For ints a b c, we may combine them by using (a, b, c), which results in a tuple of type int * int * int.<br/>Note that construction involves commas, whereas the type is represented with asterisks<br/>Also note that if you take in a tuple, you may directly deconnstruct it and name the elements within it (t: (int * int * int)) vs (a, b, c : (int * int * int))");
                        table("rec", "Recursive functions that call upon itself must have this keyword; otherwise, the compiler will look for a previous definition of the given function name");
                        table("'a", "Like generic types in Java; we may use the notation (x: 'a) to denote that x can be of any type. 'a' in this case is arbitrary, but the apostrophe prefix specifies the 'any' type. We may specify that two arguments must have the same type by using (x: 'a) (y: 'a).<br/>Note that adding apostrophes after a variable name (eg x') is perfectly fine and doesn't mean anything special.");
                        table("head :: tail", "Splits a list into its first element, head, and the rest of the list, tail");
                        table("a @ [b]", "'@' is used to append to lists. Note that both arguments must be of type list. In this example, a is a list and b is an item, which is wrapped in a list before concatenation");
                        table("option", "Special type that wraps a variable with 'Some' and adds a valid return 'None'. A returned option may or may not return the inner type we wish to receive. This also exists in " . linkNewTab("other languages", "https://en.wikipedia.org/wiki/Option_type") . ", including Java");
                        ?>
                    </table>
                </div>
                <div <?php scrollSpyHeaderData("Example") ?>>
                    <h5>Basic Example</h5>
                    Here is a sample that shows the structure of an ml file and how functions work
                    <?php
                    echo code_specific('ocaml', 'basics.ml');
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
