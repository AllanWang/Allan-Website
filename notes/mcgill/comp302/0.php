<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lectures 0 – 5';
?>

<body>

<?php phpNav(); ?>

<main>
    <div class="container"><br/>
        <div class="row" id="header">
            <h3 class="header center">Comp 302</h3>
            <h6 class="center"><?php echo $subHeader ?></h6>
            <div class="divider"></div>
            <h6 class="center">
                <?php headerBullets(); ?>
            </h6>
        </div>
        <div class="row light">
            <div id="notes-container" class="col s12 m9 l10">
                <?php
                lectureSection(1, '2017/09/12',
                    "5 hw (25%), midterm (10%), final (65%)",
                    "Office hours – McConnell Eng. 107N – Tue, Thu 11:30am – 12:30pm; Thu 4:00pm – 5:30pm",
                    "Goals",
                    "-Introduce fundamental concepts – higher-order functions, state-full vs state-free, modelling objects & closures, exceptions to defer control, continuations to defer control, polymorphism, partial evaluation, lazy programming, etc",
                    "-Show ways to reason about programs – type checking, induction, operational semantics, QuickCheck, etc",
                    "-Introduce fundamental principles in programming language design",
                    "-Grammar & parsing, operation semantics & interpreters, type checking, polymorphism, subtyping",
                    "-Expose students to different way of thinking about problems",
                    "Thorough notes for this class will be up on MyCourses each week"
                );

                lectureSection(2, '2017/09/14',
                    "Statically typed programs approximate runtime behaviour & analyze programs before executing them; help find & fix bugs before testing",
                    "Functional languages are primarily expressed via functions They are first-class (you may pass & return functions)",
                    "-Pure functional languages (eg Haskell) don't allow any modifications for variables, and do not provide exceptions",
                    "-Not pure functions (eg OCaml) allows for other paradigms as well",
                    "Call-By-Value – execute when instruction is reached",
                    "Lazy – execute once it is needed to compute other instructions",
                    "Keywords & Operators",
                    "-+, –, *, / are for (int, int) -> int functions",
                    "-+., –., *., /. are for (float, float) -> float functions",
                    "in – keyword for using a variable locally",
                    "-When  the same variable is recreated, it overshadows the previous one. It does not update the previous binding"
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
