<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Summary';
?>

<body>

<?php phpNav(); ?>

<main>
    <div class="container"><br/>
        <div class="row" id="header">
            <h3 class="header center">Comp 251</h3>
            <h6 class="center"><?php echo $subHeader ?></h6>
            <div class="divider"></div>
            <h6 class="center">
                <?php headerBullets(); ?>
            </h6>
        </div>
        <div class="row light">
            <div id="notes-container" class="col s12 m9 l10">
                <div id="big-o" class="section scrollspy">
                    <h5 id="big-oh">Big O</h5>
                    <table class="h5 highlight">
                        <?php
                        table('Sorting', 'Typical', '&Theta;(log n)', 'Heap sort, Merge sort, Bubble sort, etc');
                        table('Hashing', 'Insertion', 'O(1)', 'Add to beginning');
                        table('', 'Deletion', 'Search time + O(1)', 'Using doubly linked list');
                        table('', 'Search', 'Worst: O(n)<br>Expected: &Theta;(1 + &alpha;)', 'worst if all keys are in one slot<br>&alpha; = n/m = #keys/#slots');
                        table('Red Black Trees', 'Typical', 'O(log n)', 'Balanced height is at most log n');
                        table_body_full('Adjacency Representation', 4);
                        table('&emsp;List', 'Search', 'Worst: &Theta;(V)', '');
                        table('&emsp;Matrix', 'Storage Space', '&Theta;(V<sup>2</sup>)', '');
                        ?>
                    </table>
                </div>

                <?php
                global $tocData;
                $tocData['big-o'] = 'Big O';

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
