<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lectures 20 – 23 (final)';
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

                lectureSection(21, '2017/04/04',
                    "Global min cut – given connected undirected graph, find cut with minimum cardinality",
                    "-Applications – partitioning items, identify clusters of related content, network reliability, TSP solver",
                    "-Network solution – replace every edge (u, v) with 2 (directed) antiparallel edges (u, v) & (v, u)",
                    "--Pick some vertex s, & compute min s-v cut for every other vertex v",
                    "Contraction algorithm [Karger 1995]",
                    "-Pick edge e = (u, v) randomly",
                    "-Contract edge e",
                    "--Replace u & v by single super-node w",
                    "--Preserve edges, updating endpoints u & v to w",
                    "--Delete self-loops",
                    "-Repeat until graph has two nodes u<sub>1</sub> & v<sub>`</sub>",
                    "-Return cut (all nodes that were contracted to form v<sub>1</sub>",
                    "-Notice that the cardinality of the cut is the number of edges connecting u<sub>1</sub> & v<sub>`</sub> at the last step",
                    "-Claim – contraction algorithm returns min cut with a probability &ge; 2/n<sup>2</sup> (n = |V|)",
                    "--At every step, |E’| &ge; 1/2 kn’, otherwise our min cut is not truly a min cut",
                    "--Algorithm contracts edge in our min cut with probability &le; 2/n’",
                    "--Combined, the probability that no edge in min cut is contracted is (1 – 2/n)(1 – 2/(n – 1)) * &hellip; * (1 – 2/4)(1 – 2/3) &ge; 2/n<sup>2</sup>",
                    "-Amplification – increase odds of success by running contraction many times",
                    "-Claim – if we repeat n<sup>2</sup>ln n times, probability of failing to find global min-cut &le; 1/n<sup>2</sup>",
                    "-Slow running time, but we may notice that the odds of contracting a min edge is greater in the last iterations than the early ones; we can run the contraction algorithm twice when n/&radic;2 nodes remain and pick the best of the two cuts",
                    "-Best known running time is O(mlog<sup>3</sup>n) [Karger 2000]",
                    "Maximum 3-satisfiability",
                    "-Given k 3-SAT formulas (eac formula has 3 distinct literals joined by or operators), find truth assignment that satisfies as many clauses as possible",
                    "-NP-complete; simple idea is to flip a coin and set each variable to true with 1/2 probability",
                    "-Claim – with k clauses, expected number of clauses satisfied by random assignment is 7k/8 (as long as one variable is actually true, clause is true &rarr; 1 – 1/8)",
                    "-Lemma – probability that random assignment satisfies &ge; 7k/8 clauses is at least 1/(8k)",
                    "Monte Carlo – guaranteed to run in poly-time, likely to find correct answer",
                    "-Ex contraction algorithm for global min cut",
                    "Las Vegas – guaranteed to find correct answer, likely to run in poly-time",
                    "-Ex randomized quicksort, Max-3-sat algorithm",
                    "Can always convert Las Vegas algorithm into Monte Carlo (stop algorithm after certain point), but no known method in general to convert the other way"
                );

                lectureSection(22, '2017/04/06',
                    "Problem with quicksort is that if each split results in arrays of size 0 and n – 1, the worst case runtime is &Theta;(n<sup>2</sup>)",
                    "Quicksort is inefficient for small lists, so we may use insertion sort on small problems or nearing the end of a quicksort",
                    "Notice that even if partitions are not even, eg 9n/10 & n/10, the runtime is still &Theta;(n logn)",
                    "If bad splits are alternated with good splits, the extra cost is negligible, since it is essentially one extra step each time resulting in the same splits.",
                    "To prevent bad splits, we want to choose a good pivot point",
                    "-We can randomly select a pivot point",
                    "-We can use the median of the first, middle & last pivot",
                    "Quicksort pseudocode and randomized variant" . code_specific('java', 'QuickSort.java'),
                    "Expectation",
                    "-Mean expected value is the sum of every possible value multiplied by their respective odds of happening",
                    "-Linearity of expectation",
                    "--E[X + Y] = E[X] + E[Y] &forall; X, Y",
                    "--E[&alpha;X + Y] = &alpha;E[X] + E[Y], for constant &alpha; &forall; X, Y",
                    "Indicator random variables",
                    "-Convenient method for converting between probabilities & expectations",
                    "-Only two options, 1 (if X occurs) or 0 if it doesn’t",
                    "-E[X] = sum of E[X<sub>i</sub>] for all valid i",
                    "-Ex how many heads to we expect when flipping n coins",
                    "--Rather than computing the odds of every possible head count from 1 to n, note that for every index, the odds of a head is 1/2. Therefore, the total expectation is the sum of all halves, resulting in n/2",
                    "Average case analysis of randomized quicksort",
                    "-Let random variable X = # of comparison over all calls to partition",
                    "-X<sub>ij</sub> = 1 if z<sub>i</sub> is compared to z<sub>j</sub> and 0 otherwise",
                    "-X therefore equals the sum of all X<sub>ij</sub> for i in [1, n – 1] and j in [i + 1, n]",
                    "-Since we are using indicator random variables (two options), expectations = probability, so we find probability that a given element is compared to another element",
                    "--Two elements are compared iff one of those elements is chosen as first pivot",
                    "--P[z<sub>i</sub> is first pivot from Z<sub>ij</sub>] + P[z<sub>j</sub> is first pivot from Z<sub>ij</sub>] = 1/(j – i + 1) + 1/(j – i +1) = 2/(j – i + 1)",
                    "--Given that k = j – i, we may substitute to find that E[X] = O(n logn)",
                    "Deterministic algorithm – identical behaviour for different runs for given input – need to analyze average case and worst-case",
                    "Randomized algorithm – behaviour is generally different for different runs for given input – focus on average running time"
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
