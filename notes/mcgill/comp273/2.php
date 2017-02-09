<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lecture 6 - 10';
?>

<body>

<?php phpNav(); ?>

<main>
    <div class="container"><br/>
        <div class="row" id="header">
            <h3 class="header center">Comp 273</h3>
            <h6 class="center"><?php echo $subHeader ?></h6>
            <div class="divider"></div>
            <h6 class="center">
                <?php
                inlineBullets(array("cs.mcgill.ca/~jvybihal/" => "http://cs.mcgill.ca/~jvybihal/",
                    "TA Information" => "https://docs.google.com/spreadsheets/d/1mKpXd_7QHxUuO6tqi3UbeZmuEPN3Lk-W68MPcIN-gkQ/edit?usp=sharing",
                    "Textbook (4<sup>th</sup> ed, Right click to save)" => "http://nsec.sjtu.edu.cn/data/MK.Computer.Organization.and.Design.4th.Edition.Oct.2011.pdf"
                ));
                ?>
            </h6>
        </div>
        <div class="row light">
            <div id="notes-container" class="col s12 m9 l10">
                <?php
                lectureSection(6, '2017/01/25',
                    "End goal is addres &harr; read/write &harr; sync",
                    "-" . bulletTablePair("Solution is gate/lock", "eg and gates around SR flip flop", 40),
                    "To retrieve/send to correct address, use and gates with negations to check for matches.",
                    "JK flip flop – two RS flip flops w/ clock and other gates",
                    "-Adds a delay to output (first flip flop changes when clock is 1, other one outputs when clock is 0 &rarr; half the outputs as input)",
                    linkToId("Half adder", 'half-adder') . " only contains A and B inputs",
                    "-When doing addition, only least significant digit is half adder, others are full adders as there are carries",
                    linkToId("Full adder", 'full-adder') . " = two half adders glued with or gates",
                    "Status register has a few bits for unusual situations &rarr; overflow, dividing by 0, sign change",
                    "To build an ALU, we need to know size of inputs and outputs, format, etc",
                    "How would ALU design change when upgrading?",
                    "- 4 &rarr; 8, adding 4 more full adders",
                    "Subtraction – need to decide how we are doing the operation",
                    "- 5 – 3, 5 + (-3), 5 + (3 * -1)",
                    "ALU has its V like shape because there are 2’s complement holders for L & R followed by operation section",
                    "Reminder: 2’s complement – invert all bits and add 1"
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
