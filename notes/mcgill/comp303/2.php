<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lectures 11 – 15';
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
                lectureSection(11, '2017/10/10',
                    "Implement interfaces (like Comparable) in the same class it pertains to to help with information hiding and access to the private variables."
                );

                lectureSection(15, '2017/10/24',
                    "Learn observable pattern",
                    "Instead of every model keeping track of shared states, allow them to pass through observers to be called by the actual mutation",
                    "Avoid adding a lot of conditionals based on an observer. Rather let the observers themselves handle such conditions    "
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
