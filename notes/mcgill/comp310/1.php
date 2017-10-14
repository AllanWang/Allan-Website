<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lectures 6 – 10';
?>

<body>

<?php code_highlight();
phpNav(); ?>

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

                lectureSection(6, '2017/09/25',
                    "Competing processes",
                    "-Do not affect execution of each other, but compete for devices & resources",
                    "-Deterministic & reproducible – can stop & restart without side effects",
                    "Cooperating processes",
                    "-Aware of each other, and directly (exchange message) or indirectly (share common object) work together",
                    "-Non-deterministic – may be irreproducible",
                    "-Subject to race conditions (eg A = B + 1; B = B * 2)",
                    "Race Conditions",
                    "-When multiple processes are reading/writing from shared data & result depends on who runs when",
                    "-Avoid by prohibiting simultaneous reading to & writing from shared data",
                    "-Mutual exclusion – when one processes is reading/writing shared data, other processes should be prevented from doing the same",
                    "Critical Section",
                    "-Part of program that accesses shared data",
                    "-For multiple programs to cooperate correctly & efficiently",
                    "--No two processes may be simultaneously in their critical sections",
                    "--No assumptions may be made about speeds or number of CPUs",
                    "--No processes outside its critical section may block other processes",
                    "--No process should have to wait forever to enter critical section",
                    "-Solution",
                    "--Disable all interrupts &rarr; not practical as OS operation will be hindered as well",
                    "Strict Alternation",
                    "-Two processes take turns in entering critical section using a global variable swap",
                    "Algorithms" . code_specific('c', 'critical_section_algorithms.c')
                );

                lectureSection(7, '2017/09/27',
                    "Algorithms above are software solutions for alternations",
                    "Microprocesses have hardware instructions supporting mutual exclusion",
                    "Test & Lock – TSL RX, LOCK",
                    "-Read LOCK into RX; store non-zero value at LOCK",
                    "-Operations of reading & writing are indivisible (atomic)",
                    "Advantages",
                    "-Applicable to any # of processes",
                    "-Simple & easy to verify",
                    "-Can support multiple critical sections",
                    "Disadvantages",
                    "-Busy waiting is employed – process waiting to get into critical section consumes CPU time",
                    "-Starvation is possible – selection of entering process is arbitrary when multiple processes wish to enter",
                    "Priority Inversion Problem – high priority process pauses, allowing a low priority process to run. High priority process then resumes and needs a resource taken up by the priority process and wait, effectively treating itself as a lower priority process.",
                    "Semaphores"
                );

                lectureSection(8, '2017/10/02',
                    "Deadlock avoidance <b>TODO</b>",
                    "Simplest model – require each process to declare maximum number of resources of each type it may need",
                    "-Dynamically examine resource-allocation to ensure that wee can never have circular-wait condition",
                    "Safe State",
                    "-Safe when a process P<sub>i</sub> can be satisfied by the available resources and the resources of the processes before it (< i)",
                    "--P<sub>1</sub> finishes with available resources, P<sub>2</sub> finishes with available resources & resources freed by P<sub>1</sub>, etc",
                    "Avoidance Algorithms",
                    "-Single instance of resource type – use resource-allocation graph",
                    "--Requests can only be granted if conversion of dashed line to solid line does not result in a cycle",
                    "-Multiple instances of resource type – use banker's algorithm",
                    "--Processes requesting a resource may have to wait",
                    "--Process granted resources must return them in a finite amount of time",
                    "--Banker's algorithm",
                    "---Given N processes {P<sub>i</sub>} & M resources {R<sub>j</sub>}:",
                    "----Let [Max<sub>ij</sub>] be N x M matrix, with Max<sub>ij</sub> representing max requests of R<sub>j</sub> for process P<sub>i</sub>",
                    "----Let [Hold<sub>ij</sub>] represent units of R<sub>j</sub> currently held by P<sub>i</sub>",
                    "----Let [Need<sub>ij</sub>] represent remaining R<sub>j</sub> needed by P<sub>i</sub>",
                    "---Need<sub>ij</sub> = Max<sub>ij</sub> – Hold<sub>ij</sub> for all i & j"
                );

                lectureSection(9, '2017/10/04',
                    "<b>TODO</b>"
                );

                lectureSection(10, '2017/10/11',
                    "(Oct 9 was Thanksgiving; no class)",
                    "File Access Methods",
                    "-Sequential – in order (eg magnetic tape)",
                    "-Direct (random) – any order, skipping previous records",
                    "-Indexed – any order, but accessed using particular keys (eg hash tables, dictionary, database access)",
                    "File Allocation Problem",
                    "-Allocating disk space for files",
                    "-Allocation impacts space & time (fragmentation, latency",
                    "--Techniques – contiguous, chained (linked), indexed",
                    "--Bigger block allocations allow for faster speeds as you reduce overhead, but results in more empty space if files are smaller than their allotted blocks",
                    "-Contiguous Allocation",
                    "--Easy access, can access block without following sequential chain (few seeks), simple",
                    "--External fragmentation (eg after deleting some files), may not know file size in advance",
                    "-Chained (linked) allocation",
                    "--No external fragmentation, files can grow easily",
                    "--Lots of seeking, difficult random access",
                    "--Can be enhanced through File Access Tables (FAT) – next address stored in table rather than in block",
                    "-Indexed allocation",
                    "--Allocate array of pointers during file creation which holds indices of disk blocks",
                    "--Small internal fragmentation, easy sequential & random access",
                    "--Lots of seeks if file is big, maximum file size limited by size of block",
                    "--Used in UNIX file system",
                    "Free Space Management",
                    "-Disk space is fixed; need to reuse space freed by deleted files",
                    "-Techniques",
                    "--Bit vectors, linked lists/chains, indexing",
                    "--Bit Vectors – 1 bit per fixed size of free area; 1 indicates free, 0 indicates allocated block",
                    "--Chains – pointers are stored in each disk block, indicating the next free block",
                    "---No longer requires additional map space, but is hard to gauge size of free space",
                    "--Indexed – index pointing to all free blocks",
                    "---Only store indices pointing to beginning of series of free blocks",
                    "---Indices may be stored by free block sizes",
                    "Other System Issues",
                    "-Disk blocking – multiple sectors per block for efficiency (faster data rate, increase addressable space)",
                    "-Disk quotas",
                    "-Reliability – backup/restore (disaster scenarios), file system (consistency) check",
                    "-Performance – block/buffer caches",
                    "Disk Performance – blocks may be read out of order to shorten total time required to read disk",
                    "Disk Scheduling Strategies",
                    "-Random – worst performer, useful as a benchmark",
                    "-First Come First Serve (FCFS, FIFO)",
                    "--Fairest; no starvation; requests are honoured",
                    "--Works well for few processes",
                    "--Approaches random as  of processes competing for given disk increases",
                    "-Priority",
                    "--Based on processes' execution priority",
                    "--Desiged to meet job throughput criteria; not to optimize disk usage",
                    "-Last In First Out (LIFO)",
                    "-Strategies for Disk Performance",
                    "--Shortest Service Time First (SSTF)",
                    "---Select item requiring shortest seek time from given point",
                    "---Random tie breaker used if needed",
                    "---No guarantee for improved seek time, but generally better than FIFO"
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
