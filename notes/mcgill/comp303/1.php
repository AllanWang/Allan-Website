<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lectures 6 – 10';
?>

<body>

<?php phpNav(); ?>

<main>
    <div class="container"><br/>
        <div class="row" id="header">
            <h3 class="header center">Comp 303</h3>
            <h6 class="center"><?php echo $subHeader ?></h6>
            <div class="divider"></div>
            <h6 class="center">
                <?php headerBullets(); ?>
            </h6>
        </div>
        <div class="row light">
            <div id="notes-container" class="col s12 m9 l10">
                <?php
                lectureSection(6, '2017/09/21',
                    "Taught by TA",
                    "Iterators and more factory methods");


                lectureSection(7, '2017/09/26',
                    "UML is all about models; queries like isEmpty, or methods that don't change states aren't as necessary",
                    "Boxes are states (not necessarily a procedure) – usually adjectives",
                    "Arrows are actions – verbs",
                    "Guard state – actions with a condition can be denoted as `action [condition]`",
                    "Overriding equality",
                    "-Check nonnull, check self reference, check same class (exact, not instanceOf), check equality",
                    "Flyweight pattern",
                    "-Ensures objects that are equal are never created twice",
                    "-Hold a reference to each object, and return a new one or the saved one when applicable"
                );

                lectureSection(8, '2017/09/28',
                    "Reviewed flyweight pattern (open parliament)",
                    "Continue UML diagram for solitaire",
                    "Classes – Deck, Suit Stack, Discard Pile, Card, Working Stack, Game Engine, Iterable (interface), Playing Strategy (interface), Random Strategy, Smart Strategy",
                    "States – fresh, in progress"
                );

                lectureSection(9, '2017/10/03',
                    "In UML diagrams, the 'yellow cards' are notes",
                    "Three components of a test",
                    "-Program unit (eg canMoveTo)",
                    "-Input data",
                    "-Oracle",
                    "Learned a bit about reflection and JUnit"
                );

                lectureSection(10, '2017/10/05',
                    "<b>TODO</b>"
                );

                pagination();
                ?>
            </div>
            <?php
            tableOfContents();
            ?>
        </div>
    </div>

</main>
<script>

</script>

<?php phpFooter(); ?>
</body>

</html>
