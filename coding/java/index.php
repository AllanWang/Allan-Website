<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$page_title = "Java";
$page_description = "An Introduction to " . $page_title;
$navFrom = 'cn_java';
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

                <h3 class="header center">Intro to Java</h3>
                <h6 class="center">A <a href="https://en.wikipedia.org/wiki/Concurrent_computing" target="_blank">concurrent</a>,
                    <a href="https://en.wikipedia.org/wiki/Class-based_programming" target="_blank">class-based</a>, and
                    <a href="https://en.wikipedia.org/wiki/Object-oriented_programming"
                       target="_blank">object-oriented</a> programming
                    language<br/><br/>

                    <?php
                    inlineBullets(array(
                        "Java SE" => "http://www.oracle.com/technetwork/java/javase/downloads/index.html",
                        "Eclipse" => "https://www.eclipse.org/downloads/",
                        "IntelliJ" => "https://www.jetbrains.com/idea/download/"
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
                    code_specific('java', 'basics.java');
                    ?>
                </div>
                <div <?php scrollSpyHeaderData("Common Mistakes") ?>>
                    <h5>Common Mistakes</h5>
                    //TODO
                    <!--                    --><?php
                    //                    code_specific('java', 'basics.java');
                    //                    ?>
                </div>
                <div <?php scrollSpyHeaderData("Object References") ?>>
                    <h5>Object References</h5>
                    <p>It is very important to distinguish the difference between a reference variable and something
                        like a
                        primitive variable. Objects are accessed through reference variables, which are like a pointers
                        pointing to the actual objects. A pointer itself can be changed to point to a different object
                        (unless it is declared final), and can also point to the same object as another reference
                        variable.</p>
                    <p>When you pass an object into a method, a new reference variable is created, pointing to
                        your
                        original object. Since both variable point to the same object, modifying x in your method will
                        modify x in your main method. However, once you reassign your method's reference variable, you
                        no
                        longer access the same object as your main, and whatever you change to that variable will not be
                        reflected outside of that method.</p>
                    <p>Reference variable behaviour is different from primitive variable behaviour; you've probably
                        already
                        seen swap methods for integers, swap(int x, int y);, where changing the two in the method has no
                        effect in the main. Primitive variables are passed as a separate variable altogether, so there
                        is no
                        longer any association between the two.
                    </p>
                    <p>It may also be worth noting the behaviours of Strings when passed through methods. Though
                        they are
                        objects, Strings are immutable, so whenever they are modified, a new object is generated and
                        pointed
                        to be the reference variable. Therefore, the original String passed will never be modified by
                        other
                        methods. The same behaviour can be seen in class such as BigInteger.
                    </p>
                    <p>Below is a sample class that shows how objects are affected when
                        passed through other methods and modified. Feel free to copy it and run it to see the
                        results.</p>
                    <?php
                    code_specific('java', 'ObjectReferences.java');
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
