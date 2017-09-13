<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$page_title = "Kotlin";
$page_description = "An Introduction to " . $page_title;
$navFrom = 'cn_kotlin';
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

                <h3 class="header center">Intro to Kotlin</h3>
                <h6 class="center">A <a href="https://en.wikipedia.org/wiki/Statically_typed" target="_blank">statically-typed</a>
                    <a href="https://en.wikipedia.org/wiki/Programming_language" target="_blank">programming
                        language</a>, that runs on the
                    <a href="https://en.wikipedia.org/wiki/Java_virtual_machine"
                       target="_blank">Java virtual machine</a><br/><br/>

                    <?php
                    inlineBullets(array(
                        "Official Reference" => "https://kotlinlang.org/docs/reference/",
                        "IntelliJ" => "https://www.jetbrains.com/idea/download/"
                    ));
                    ?>

                </h6>
                <br/>
                <br/>
                <h6 class="center">Note that this is a showcase of Kotlin's powerful features over Java that you might
                    not encounter on first use. For full
                    details, I strongly recommend devs read the entire reference linked above. It's worth it.</h6>

                <div <?php scrollSpyHeaderData('Extension Functions') ?>>
                    <h5>Extension Functions</h5>
                    <blockquote><a href="https://kotlinlang.org/docs/reference/extensions.html" target="_blank">Official
                            Reference</a><br><a
                                href="https://github.com/AllanWang/KAU/tree/master/core/src/main/kotlin/ca/allanwang/kau/utils"
                                target="_blank">My motherload of extension functions for Android</a></blockquote>
                    In Java, we often require new methods for existing classes. Rather than
                    extending the class, we may create static methods that take in the object reference and modify it
                    accordingly.

                    <pre><code class="java"><?php echo "Test test; //assume implementation\n\nstatic void update(Test test);" ?></code></pre>

                    The call involves placing the method before the reference, which may be harder to read when chained

                    <pre><code class="java"><?php echo "show(update(clear(init(test))));" ?></code> </pre>

                    Kotlin on the other hand, allows for extension functions. Given a type, it can add a method onto it,
                    as if it were in the original class. The implementation is done statically, but it produces a very
                    elegant outcome:

                    <pre><code class="kotlin"><?php echo "fun Test.init() //assume implementation\nfun Test.clear()\n...\nval test: Test //assume implementation\ntest.init().clear().update().show()" ?></code></pre>

                    Extensions are especially powerful as they can be used on null types; it allows for methods such as

                    <pre><code class="kotlin"><?php echo "list.getFirstOrNull()" ?></code></pre>
                </div>

                <div <?php scrollSpyHeaderData('Builder Pattern') ?>>
                    <h5>Builder Pattern</h5>
                    <blockquote><a href="https://github.com/zsmb13/MaterialDrawerKt/blob/master/README.md#basic-usage" target="_blank">Android library
                            example</a></blockquote>

                    Java builder patterns are very common, to allow for updating variables one at a time

                    <?php echo code_specific('java', 'builder.java'); ?>

                    Kotlin not only does not require a separate builder class, but allows you to use lambda functions to
                    directly modify the builder

                    <?php echo code_specific('kotlin', 'builder.kt'); ?>

                    This example showcases several things

                    <ul>
                        <li>Classes with a primary constructor can directly add it in the header. No need for a this.a =
                            a pattern
                        </li>
                        <li>Functions like build with a terminating lambda argument can directly use braces to add the
                            function. This allows for syntax similar to that of gradle
                        </li>
                        <li>All classes have a with function, which gives direct access to the object in question,
                            returning it in the end. There is also apply which returns the last value in the function
                        </li>
                        <li>Functions with one action can use '=' without the need for braces. The return type is also
                            inferred
                        </li>
                    </ul>
                </div>

                <div <?php scrollSpyHeaderData('Objects') ?>>
                    <h5>Objects</h5>
                    <blockquote><a
                                href="https://kotlinlang.org/docs/reference/object-declarations.html#object-declarations"
                                target="_blank">Official
                            Reference</a></blockquote>
                    Want a singleton? Use an object. It's that simple. Kotlin by default does not have static
                    implementations, though they may be added through the @JvmStatic annotation.
                    The benefits of singletons are clear, as they adhere to object oriented practices and are actually
                    extensible.
                </div>

                <div <?php scrollSpyHeaderData('Operator Overloading') ?>>
                    <h5>Operator Overloading</h5>
                    <blockquote><a href="https://kotlinlang.org/docs/reference/operator-overloading.html"
                                   target="_blank">Official
                            Reference</a><br/><a
                                href="https://github.com/AllanWang/sNNake-2.1/blob/master/src/main/kotlin/ca/allanwang/snnake/neuralnet/Matrix.kt#L69"
                                target="_blank">Matrix example in Kotlin</a></blockquote>

                    If we had a matrix class, wouldn't it be awesome if we could use operators to execute matrixA +
                    matrixB?

                    You can do that in Kotlin.

                    Simply do

                    <pre><code class="kotlin"><?php echo "operator fun plus(addend: Matrix) = add(addend)\n//add is our function inside Matrix" ?></code></pre>

                    We may also override get and invoke to add our own () and [] calls
                </div>

                <div <?php scrollSpyHeaderData('Default Values') ?>>
                    <h5>Default Values</h5>
                    Like python, Kotlin supports default values

                    <?php echo code_specific('kotlin', 'default_values.kt'); ?>

                    This also showcases data classes, which are made for POJOs. They auto implement hashCode(),
                    equals(), and toString() to reflect their internal variables and have a copy method

                </div>

                <div <?php scrollSpyHeaderData('Getter and Setters') ?>>
                    <h5>Getters and Setters</h5>
                    <blockquote><a href="https://kotlinlang.org/docs/reference/properties.html#getters-and-setters"
                                   target="_blank">Official Reference</a></blockquote>
                    Unlike Java, Kotlin upholds property style syntax. There is no need to create your own getters and
                    setters, as they are done for you.
                    By default, they do nothing more than retrieve the field, or save the new value into the field.

                    You may override it by doing the following:

                    <pre><code class="kotlin"><?php echo "val opposite: Boolean //returns the opposite of what is saved\n\t//field is the name of the stored value (backing field)\n\t//get is not overridden\n\tset(value) {\n\t\tfield = !value\n\t}" ?></code></pre>
                </div>

                <div <?php scrollSpyHeaderData('Delegates') ?>>
                    <h5>Delegates</h5>
                    <blockquote><a href="https://kotlinlang.org/docs/reference/delegation.html"
                                   target="_blank">Official Reference</a><br/><a
                                href="https://github.com/AllanWang/KAU/blob/dev/core/src/main/kotlin/ca/allanwang/kau/kotlin/LazyResettable.kt"
                                target="_blank">Lazy Resettable Delegate</a></blockquote>

                    Delegation is a very powerful structure that allows us to allow other classes to handle our methods
                    or variables.

                    This allows for lazy patterns (where an execution is only done upon first get), and allowing some
                    basic form of multiple extensions, by delegating interface methods to fully implemented classes.

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
