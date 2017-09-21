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
                <div <?php scrollSpyHeaderData('Recursion') ?>>
                    <h5>Recursion</h5>
                    A big part of functional programming rests on the ability to leverage recursive functions. It may be
                    a bit odd to think recursively (stacked calls), as we are used to thinking with loops (flat calls).
                    Fortunately, most looping functions can be converted to recursive functions by passing all mutable
                    states into the method.<br/>
                    Consider the following question
                    (from <?php echo linkNewTab("TopCoder", "https://community.topcoder.com/stat?c=problem_statement&pm=1259&rd=4493") ?>
                    ):
                    <blockquote>
                        A sequence of numbers is called a zig-zag sequence if the differences between successive numbers
                        strictly alternate between positive and negative. The first difference (if one exists) may be
                        either positive or negative. A sequence with fewer than two elements is trivially a zig-zag
                        sequence.

                        For example, 1,7,4,9,2,5 is a zig-zag sequence because the differences (6,-3,5,-7,3) are
                        alternately positive and negative. In contrast, 1,4,7,2,5 and 1,7,4,5,5 are not zig-zag
                        sequences, the first because its first two differences are positive and the second because its
                        last difference is zero.

                        Given a sequence of integers, sequence, return the length of the longest subsequence of sequence
                        that is a zig-zag sequence. A subsequence is obtained by deleting some number of elements
                        (possibly zero) from the original sequence, leaving the remaining elements in their original
                        order.
                    </blockquote>

                    A possible Java implementation is like so:

                    <?php echo code_specific('java', 'zigzag.java'); ?>

                    The logic is to increment the count if the next input changes directions, and to accept the next
                    input if it increases the absolute value of the marker (as this will allow for more values to change
                    the
                    direction).

                    Notice the following:
                    <ul class="browser-default">
                        <li>The method takes in of an array of inputs</li>
                        <li>There are stateful variables (marker, isPeak, count)</li>
                        <li>There is an int return type</li>
                    </ul>

                    In recursive functions, you want to avoid stateful variables, as each call executes a new function
                    in the stack. The basic solution is to pass everything the next function must know inside the
                    function itself.
                    <br/><br/>
                    In other words:
                    <ul class="browser-default">
                        <li>The function takes in a list of inputs (ints),
                            <br/>an int for a marker,
                            <br/>an int for a count,
                            <br/>and a bool for whether the zigzag is at its peak
                        </li>
                        <li>The return value is still an int</li>
                    </ul>
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
