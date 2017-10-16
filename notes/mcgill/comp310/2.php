<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lectures ';
?>

<body>

<?php phpNav(); ?>

<main>
    <div class="container"><br/>
        <div class="row" id="header">
            <h3 class="header center">Comp 310</h3>
            <h6 class="center"><?php echo $subHeader ?></h6>
            <div class="divider"></div>
            <h6 class="center">
                <?php headerBullets(); ?>
            </h6>
        </div>
        <div class="row light">
            <div id="notes-container" class="col s12 m9 l10">
                <?php
                lectureSection(11, '2017/10/16',
                    "13 short answers (definitions & problem solving",
                    "2 long answers (algorithms, pseudocode)",
                    "Know steps to algorithms & be able to modify them",
                    "Banker's algorithm – understand & know major steps",
                    "Sample Midterm",
                    "-Thread vs Process",
                    "-Steps for system call",
                    "-Command piping (goal, problem, idea)",
                    "-Implement piping between two processes",
                    "--Pipe exists in global memory & shared between processes",
                    "-Single & Multithreaded Processes",
                    "--Share code & data; but each thread has its own registers & stack",
                    "-What is a race condition",
                    "-What are conditions of critical section",
                    "-Strict Alternation",
                    "-Starvation, live lock, etc",
                    "-Deadlocks (cycles, knots)"
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
