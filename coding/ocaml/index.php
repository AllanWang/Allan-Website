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
                                        target="_blank">multi-paradigm</a>,
                    <a href="https://en.wikipedia.org/wiki/General-purpose_programming_language" target="_blank">general-purpose
                        programming
                        language</a><br/><br/>

                    <?php
                    inlineBullets(array(
                        "Official Documentation" => "http://ocaml.org/learn/",
                        "OCaml for Windows" => "https://fdopen.github.io/opam-repository-mingw/",
                        "Pervasives" => "https://caml.inria.fr/pub/docs/manual-ocaml/libref/Pervasives.html",
                        "Atom" => "https://atom.io/",
                        "Nuclide" => "https://nuclide.io/"
                    ));
                    ?>

                </h6>
                <div <?php scrollSpyHeaderData("Basics") ?>>
                    <table class="highlight">
                        <?php
                        table_header('Symbol/Keyword/Term', 'Usage');
                        table("Calling functions",
                            "Calling OCaml functions can be done through [fun name] [args...]. Parentheses are only necessary to wrap a single argument/tuple together, and should <i>not</i> be used to wrap all the arguments. If you are getting <b>unbounded name errors</b>, you may be running in the " . linkNewTab("toploop", "https://ocaml.org/learn/taste.html") . ". In this case, you may need to add semicolons (;;) after function declarations to execute it.");
                        table("let ... in",
                            "A nested function must end with the 'in' keyword to show that its declaration is finished.");
                        table("match e with ...",
                            "OCaml's pattern matching: Given input 'e', match it with the expressions below. This is similar but more powerful than Java's switch system. 'Cases' are defined as '| c -> ...', where 'c' is the case. All cases start with '|', and each case is self containing (no break keyword). '_' may be used as a wildcard to accept all matches. Pattern matching is done in the order it is defined.");
                        table("[1;2;3]",
                            "Lists are wrapped with square brackets, and their items are separated with semicolons.");
                        table("<>",
                            "!= is used as the negation of ==, which tests by physical equality, not by value! Odds are you shouldn't be using this. The negation of '=', which tests for structural equality, is '<>'.");
                        table("Tuples",
                            "Tuples are ways of combining multiple types into one type. For ints a b c, we may combine them by using (a, b, c), which results in a tuple of type int * int * int.<br/>Note that construction involves commas, whereas type representation involves asterisks.<br/>Also note that if you take in a tuple, you may directly deconnstruct it and name the elements within it (t: (int * int * int)) vs (a, b, c : (int * int * int)).");
                        table("rec",
                            "A recursive function that calls upon itself must have this keyword; otherwise, the compiler will look for a previous definition of the given function name.");
                        table("'a",
                            "Like generic types in Java; we may use the notation (x: 'a) to denote that x can be of any type. 'a' in this case is arbitrary, but the apostrophe prefix specifies the 'any' type. We may specify that two arguments must have the same type by using (x: 'a) (y: 'a).<br/>Note that adding apostrophes after a variable name (eg x') is perfectly fine and doesn't mean anything special.");
                        table("head :: tail",
                            "Splits a list into its first element, head, and the rest of the list, tail");
                        table("a @ [b]",
                            "'@' is used to append to lists. Note that both arguments must be of type list. In this example, a is a list and b is an item, which is wrapped in a list before concatenation.");
                        table("option",
                            "Special type that wraps a variable with 'Some' and adds a valid return 'None'. A returned option may or may not return the inner type we wish to receive. This also exists in " . linkNewTab("other languages", "https://en.wikipedia.org/wiki/Option_type") . ", including Java.");
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
                    (
                    from <?php echo linkNewTab("TopCoder", "https://community.topcoder.com/stat?c=problem_statement&pm=1259&rd=4493") ?>
                    ):
                    <blockquote>
                        A sequence of numbers is called a zig-zag sequence if the differences between successive numbers
                        strictly alternate between positive and negative. The first difference (if one exists) may be
                        either positive or negative. A sequence with fewer than two elements is trivially a zig-zag
                        sequence.
                        <br/><br/>
                        For example, 1,7,4,9,2,5 is a zig-zag sequence because the differences (6,-3,5,-7,3) are
                        alternately positive and negative. In contrast, 1,4,7,2,5 and 1,7,4,5,5 are not zig-zag
                        sequences, the first because its first two differences are positive and the second because its
                        last difference is zero.
                        <br/><br/>
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
                    <br/><br/>
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

                    With this in mind, we simply change the method signature, and implement the same method body.
                    Note that we will keep the "base cases" out of the recursive function, as it is only checked once
                    and isn't part of the loop.
                    <br/><br/>
                    Result:

                    <?php echo code_specific('ocaml', 'zigzag.ml'); ?>

                </div>
                <div <?php scrollSpyHeaderData('Higher-Order Functions') ?>>
                    <h5>Higher-Order Functions</h5>

                    In functional paradigms, functions are first class. They can be passed into other functions and used
                    as return types.
                    This is very similar to callback methods, or interfaces that have only one method in OOP.

                    <?php echo code_specific('ocaml', 'hof.ml'); ?>

                </div>
                <div <?php scrollSpyHeaderData('States') ?>>
                    <h5>States</h5>

                    OCaml can emulate states through the ref tag. Values created as references can be accessed and
                    modified by other functions.

                    <?php echo table_tags(table_contents(2,
                        'Creation', 'let x = ref 0',
                        'Modification', 'x := 3',
                        'Access', 'if !x = 3 then ...'
                    )); ?>
                </div>
                <div <?php scrollSpyHeaderData('Backtracking') ?>>
                    <h5>Backtracking</h5>

                    Backtracking involves finding solutions incrementally by abandoning any candidate solution
                    as soon as it is determined to be unsuccessful. One implementation is to throw exceptions
                    when a candidate has failed, so the parent may try other solutions.

                    <?php echo code_specific('ocaml', 'change.ml'); ?>
                </div>
                <div <?php scrollSpyHeaderData('Modules') ?>>
                    <h5>Modules</h5>

                    OCaml allows support for interface structures through modules.
                    It helps control complexity by breaking down large programs into separate pieces.

                    Module signatures help guarantee function headers, without giving away implementation.

                    <?php echo code_specific('ocaml', 'modules.ml'); ?>

                    Module structs can also take in one or more struct parameters and use them within their own
                    definitions.
                </div>
                <div <?php scrollSpyHeaderData('Continuation') ?>>
                    <h5>Continuation</h5>

                    Continuation represents the execution state of a program (eg a call stack) at a certain point in
                    time.
                    The state can be saved and restored at a later point

                    To allow for tail-recursive functions, the header will contain an additional argument, a
                    continuation, holding the entire state of the function. This will be passed to initialize or build
                    upon the function.
                    <br/><br/>
                    Recursive map function example:

                    <?php echo code_specific('ocaml', 'map_tail_rec.ml'); ?>

                </div>
                <div <?php scrollSpyHeaderData('Lazy') ?>>
                    <h5>Lazy Evaluation</h5>

                    The concept of laziness stems from evaluation upon necessity, rather than evaluation upon creation.
                    Languagues such as OCaml & Java typically evaluate any expression that is assigned to a value
                    (variable).
                    This is helpful in that the order is guaranteed, but unused variables may be unnecessarily
                    evaluated.
                    The goal of laziness is to avoid such situations, and to only return a value when it is required to
                    compute something else.
                    Laziness can be created by wrapping evaluations in functions of the form unit -> 'a, since we know
                    that functions are not evaluated until execution.
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
