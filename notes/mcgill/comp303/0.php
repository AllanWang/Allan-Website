<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lecture 0 – 5';
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
                lectureSection(0, '2017/09/05',
                "No assignments; 4 lab tests. Sign up for a room, TA gives question, code in editor",
                "2 midterms, 1 final",
                "Keywords – Non fault tolerant, safety/security defect, bad user interface, bad feature interactions, compatibility issues, competing constraints, assumptions (eg expecting nonnull), bad usability",
                "At its core, software design is the ability to organize code so that it is clear and sustainable",
                "Centralized vs Distributed VCS",
                "-Centralized – only one database exists, and is located on the VCS server",
                "-Distributed – every computer has its own database, which can be modified independently of the server's database"
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
