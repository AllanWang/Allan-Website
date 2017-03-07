<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$page_title = "Comp 202";
$page_description = "Comp 202 Practice";
$navFrom = 'n_comp202';
//$navTo = 'commons';
$theme_color = "#F44336"; //red
global $cssArr;
array_push($cssArr, '<link href="comp202.css" type="text/css" rel="stylesheet" media="screen"/>');
phpHeader(); ?>
<body>

<?php code_highlight();
phpNav(); ?>

<main>

    <div class="container">
        <div class="light row" id="commons">

            <h3 class="header center">Comp 202 Midterm Practice</h3>
            <h6 class="center">Melanie Lyman-Abramovitch &bull; Kaleem Siddiqi &bull; Dan Pomerantz &bull;</h6>
            <h6 class="center grey-text">Use &uarr; &darr; to navigate through questions; use &larr; &rarr; to
                show/hide answers<br>Click a question to select it; click again to show/hide the answer</h6>
        </div>
        <div id="shell">
            <div id="q-and-a" style="display:none;">
                <h5>True/False Section</h5>
                <div class="row">
                    <div class="question">
                        If you only expect numbers as command line arguments, you can change
                        <pre><code class="java">public static void main(String[] args)</code></pre>
                        to
                        <pre><code class="java">public static void main(double[] args) </code></pre>
                        and run the program.
                    </div>
                    <div class="answer">
                        <b>False</b><br> The main method always has parameter String[]. If you need a double from an
                        argument at index i, use Double.parseDouble(args[i])
                    </div>
                </div>
                <div class="row">
                    <div class="question">
                        The following is a valid header for a main method. (Valid &rarr; will compile and run).
                        <pre><code class="java">public static void main(String[] commandArguments)</code></pre>
                    </div>
                    <div class="answer">
                        <b>True</b><br> Variable names are completely up to you, so long as you use commandArguments[0]
                        instead
                        of args[0]
                    </div>
                </div>
                <div class="row">
                    <div class="question">
                        You can put an if-block inside of another if-block.
                    </div>
                    <div class="answer">
                        <b>True</b><br> Example
                        <?php echo code_specific('java', 'ifblock.txt') ?>
                    </div>
                </div>
                <div class="row">
                    <div class="question">
                        A method can contain more than one return statement.
                    </div>
                    <div class="answer">
                        <b>True</b><br> A very common way of coding is to return values immediately, given a specific
                        number.
                        This also removes the need for if statements, since the method will no longer continue once a
                        return
                        is issued
                        <?php echo code_specific('java', 'multireturn.txt') ?>
                    </div>
                </div>
                <div class="row">
                    <div class="question">
                        When iterating through the elements of array via its index, you must use a <i>for</i> loop as
                        opposed to a <i>while</i> loop.
                    </div>
                    <div class="answer">
                        <b>False</b><br> For, while, and do are different ways of doing the same thing. They have their
                        differences, but you can accomplish any loop with any implementation.
                    </div>
                </div>
                <h5>Short Answer Section</h5>
                <div class="row">
                    <div class="question">
                        What is the value of x?
                        <pre><code class="java">double x = (double) (1/2) + (1/2) + (double)(1/2);</code></pre>
                    </div>
                    <div class="answer">
                        <b>0 or 0.0</b><br> Order matters, so when you execute (double) (1/2), you calculate 1/2 first
                        (as
                        integers), then cast it into a double. All three values will result in 0, and the sum will also
                        be
                        0.
                    </div>
                </div>
                <div class="row">
                    <div class="question">
                        The following method contains five variables. Which variables (if any) exist on the line marked
                        ****HERE****?
                        <?php echo code_specific('java', 'varlife.txt') ?>
                    </div>
                    <div class="answer">
                        <b>input, x, y</b><br> Variables exist within their closest surrounding braces {}. Both s and t
                        exist
                        only within the if else statements.
                    </div>
                </div>
                <div class="row">
                    <div class="question">
                        What prints when the following code executes?
                        <?php echo code_specific('java', 'intswap.txt') ?>
                    </div>
                    <div class="answer">
                        <b>x is 4 y is 5</b><br> Note that the swapping only affects the values within the swap method,
                        and
                        do not affect the primitive values in the main method.
                        More on
                        references <?php echo linkNewTab('here.', 'https://www.allanwang.ca/coding/java/?scroll_to=object-references') ?>
                        Also keep in mind that y = swap(x, y) does change y, but since the value returned from the
                        method is 5, y's value does not change.
                    </div>
                </div>
                <div class="row">
                    <div class="question">
                        What prints when the following code executes?
                        <?php echo code_specific('java', 'ifelseprint.txt') ?>
                    </div>
                    <div class="answer">
                        <b>one two</b><br>n > 0 so "one" prints and n becomes 0.<br>The next if statement is not nested,
                        so it still executes; n &le; 0, so "two" prints, and the else is skipped.
                    </div>
                </div>
                <div id="test"></div>
            </div>
        </div>
    </div>
</main>
<?php phpFooter(); ?>
<script type="text/javascript" src="comp202.js"></script>
</body>

</html>
