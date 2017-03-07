<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$page_title = "Comp 202";
$page_description = "Comp 202 Practice";
$navFrom = 'n_comp_202';
//$navTo = 'commons';
$theme_color = "#F44336"; //red
phpQA();
phpHeader(); ?>
<body>

<?php code_highlight();
phpNav(); ?>

<main>

    <div class="container">
        <div class="light row" id="commons">

            <h3 class="header center">Comp 202 Midterm Practice</h3>
            <h6 class="center">Melanie Lyman-Abramovitch &bull; Kaleem Siddiqi &bull; Dan Pomerantz</h6>
            <div class="divider"></div>
            <h6 class="center grey-text"><?php echo instructionText() ?></h6>
            <h6 class="center grey-text">Questions marked with * are added by me, and were not a part of the original
                practice</h6>
        </div>
        <div id="shell">
            <div id="q-and-a">
                <h5>True/False Section</h5>
                <div class="divider"></div>
                <div class="qa-row">
                    <div class="question">
                        If you only expect numbers as command line arguments, you can change
                        <pre><code class="java">public static void main(String[] args)</code></pre>
                        to
                        <pre><code class="java">public static void main(double[] args)</code></pre>
                        and run the program.
                    </div>
                    <div class="answer">
                        <b>False</b><br> The main method always has parameter String[]. If you need a double from an
                        argument at index i, use Double.parseDouble(args[i])
                    </div>
                </div>
                <div class="qa-row">
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
                <div class="qa-row">
                    <div class="question">
                        You can put an if-block inside of another if-block.
                    </div>
                    <div class="answer">
                        <b>True</b><br> Example
                        <?php echo code_specific('java', 'IfBlock.java') ?>
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        A method can contain more than one return statement.
                    </div>
                    <div class="answer">
                        <b>True</b><br> A very common way of coding is to return values immediately, given a specific
                        number.
                        This also removes the need for if statements, since the method will no longer continue once a
                        return
                        is issued
                        <?php echo code_specific('java', 'MultiReturn.java') ?>
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        When iterating through the elements of array via its index, you must use a <i>for</i> loop as
                        opposed to a <i>while</i> loop.
                    </div>
                    <div class="answer">
                        <b>False</b><br> For, while, and do are different ways of doing the same thing. They have their
                        differences, but you can accomplish any loop with any implementation.
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        * The following loop is invalid
                        <pre><code class="java">int i = 0;<br>for (; i < 10; i++)<br>//do something in the loop</code></pre>
                    </div>
                    <div class="answer">
                        <b>False</b><br>
                        To compile a for loop, you must have three components in the statement, separated by semicolons.
                        However, those components may be blank. The code is equivalent to how you might write a while
                        loop
                        <pre><code class="java">int i = 0;<br>while (i < 15) ... i++;</code></pre>
                    </div>
                </div>
                <h5>Multiple Choice Section</h5>
                <h6 class="grey-text">More than one choice may be valid per question</h6>
                <div class="divider"></div>
                <div class="qa-row">
                    <div class="question">
                        Which of the following are examples of compile-time errors?
                        <ol type="a">
                            <li>Accessing an array at index -1</li>
                            <li>Dividing an integer by 0</li>
                            <li>Passing an int value as input to a method that expects a double input argument</li>
                            <li>Accessing a variable outside of its scope.</li>
                            <li>Omitting a semi-colon at the end of a statement.</li>
                        </ol>
                    </div>
                    <div class="answer">
                        <b>D, E</b><br>Compile-time errors are errors that can be found prior to evaluating a statement.
                        They mostly contain syntax errors, or passing incorrect types into methods.<br>
                        <ol type="a">
                            <li>is a runtime error, producing an ArrayIndexOutOfBoundsException</li>
                            <li>is a runtime error, producing an ArithmeticException</li>
                            <li>is not an error, as integers can be automatically casted into a double; the opposite is
                                not true
                            </li>
                        </ol>
                    </div>
                </div>
                <h5>Short Answer Section</h5>
                <div class="divider"></div>
                <div class="qa-row">
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
                <div class="qa-row">
                    <div class="question">
                        The following method contains five variables. Which variables (if any) exist on the line marked
                        ****HERE****?
                        <?php echo code_specific('java', 'VarLife.java') ?>
                    </div>
                    <div class="answer">
                        <b>input, x, y</b><br> Variables exist within their closest surrounding braces {}. Both s and t
                        exist
                        only within the if else statements.
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        What prints when the following code executes?
                        <?php echo code_specific('java', 'IntSwap.java') ?>
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
                <div class="qa-row">
                    <div class="question">
                        What prints when the following code executes?
                        <?php echo code_specific('java', 'IfElsePrint.java') ?>
                    </div>
                    <div class="answer">
                        <b>one two</b><br>n > 0 so "one" prints and n becomes 0.<br>The next if statement is not nested,
                        so it still executes; n &le; 0, so "two" prints, and the else is skipped.
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        For the code below,
                        <ol type="1">
                            <li>How many times is the condition in the <i>inner</i> loop evaluated?</li>
                            <li>How many times does the text "Hello" get printed?</li>
                        </ol>
                        <?php echo code_specific('java', 'NestedIf.java') ?>
                    </div>
                    <div class="answer">
                        <b>12 evaluations, 9 prints</b><br>
                        We may first look at the print statement. There are three values for i: 0, 2, 4, which are then
                        passed to the inner loop.
                        When i = 0, the print statement is called once. When i = 2, Hello prints 3 times, and when i =
                        4, Hello prints 5 times, totalling 9.<br>
                        In regards to evaluation, keep in mind that the loop needs to evaluate until the middle
                        condition is not met.
                        If we look at i = 0, the inner condition is still evaluated when j = 1, where it knows that j >
                        0 and stops. As a result, you will have 2, 4, and 6 evaluations when i is 0, 2, and 4
                        respectively, totalling 12 evaluations.
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        * What prints?
                        <?php echo code_specific('java', 'ArrayShift.java') ?>
                    </div>
                    <div class="answer">
                        <b>[2, 3, 4, 5, 6, 2]</b><br>
                        The numbers are shifted left, so every number at index i is the original value at index (i + 1).
                        However, notice that at the end, the last index takes the value at a[0], which is now 2, not 1.
                    </div>
                </div>
                <!--
                    <div class="qa-row">
                        <div class="question">

                        </div>
                        <div class="answer">

                        </div>
                    </div>
               -->
            </div>
        </div>
    </div>
</main>
<?php phpFooter(); ?>
</body>

</html>
