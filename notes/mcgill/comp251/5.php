<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lectures 20 – 24';
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
                <?php
                lectureSection(20, '2017/03/30',
                    "Amortized analysis – analyzing run time through average cases",
                    "Show that although some operations may be expensive, the average cost is small",
                    "Methods",
                    "-Aggregate analysis – split into cases with run times and compute the average",
                    "-Accounting method – create a specific cost and use credits to fulfill all cases",
                    "-Potential method",
                    "We will start with using aggregate analysis",
                    "Runtime of multipop(s, k), where s is he stack, and k is the maximum number of pops occurring (up until stack is empty if size < k)",
                    "-Given a sequence of n push, pop, multipop operations:",
                    "-We know that the worst-case cost of multipop is O(n) and push/pop cost 1",
                    "-Therefore, worst-case of sequence is O(n<sup>2</sup>)",
                    "-However, knowing that objects can only be popped once per each push, we know that there are under n pops/multipops possible; therefore, the true cost is O(n), and the average is O(1) per operation",
                    "Number of flips needed for a binary counter",
                    "-The following is the pseudocode for creating a binary counter:" . code_specific('java', 'BinaryCounter.java'),
                    "-One might assume that incrementing takes O(nk) time, since there are n calls at up to k bits may be flipped, but that is an overshoot. All numbers ending with a 0, for example, only require one bit flip on the rightmost digit. We may find the following trend for the counters:"
                    . table_tags(table_contents(2,
                        'Bit', 'Flips how often',
                        0, 'Every Time',
                        1, '1/2 of the time',
                        2, '1/4 of the time',
                        '&hellip;', '&hellip;',
                        'i', '1/2<sup>i</sup> of te time',
                        '&hellip;', '&hellip;',
                        'i &ge; k', 'Never')),
                    "-As a result, the total cost is the summation 1 to 1/2<sup>k - 1</sup>, which is &le; 2, multiplied by n. This results in O(n) and a cost per operation of O(1)",
                    "Accounting method – now, we will give different charges to different operations. Our amortized cost will be the amount we charge; if it’s greater than the actual cost, we will store the difference as credit. Credit can be used to pay for later operations where the actual cost > amortized cost, but the credit may not be negative at any point.",
                    "-In other words, for every cost summation from i to n, the net amortized cost must be at least the sum of the actual costs.",
                    "-For the case of multipop, we may define an amortized cost of 2 for push; 1 is for pushing the object, and 1 is for eventually removing it. Given that we can only pop or multipop values we’ve previously pushed, this extra cost will always cover any future actions, resulting in a total amortized cost ofO(n)",
                    "-For the binary counter, we may charge 2 to set a bit to 1; 1 is for actually changing it, and 1 is for changing it back to a 0 in the future. We may see from our pseudocode that for every increment, at most one 0 bit is changed into 1, so this amortized cost covers all future actions, resulting in O(n). "
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
