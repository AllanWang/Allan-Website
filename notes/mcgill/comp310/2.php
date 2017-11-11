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
                    "-Deadlocks (cycles, knots, Banker's algorithm)"
                );

                lectureSection(12, '2017/10/18',
                    "Midterm");

                lectureSection(13, '2017/10/23'

                );

                lectureSection(14, '2017/10/25',
                    "Review previous class",
                    "Scheduling Approaches",
                    "-Non-preemptive",
                    "--FCFS (First Come First Serve), SJF (Shortest Job First)",
                    "--Good for background jobs",
                    "FCFS",
                    "-Simplest scheduling policy",
                    "-Performs better for long jobs",
                    "-Importance measure purely by arrival time",
                    "SJF",
                    "-Need to know/estimate processing time of each job",
                    "-Long running jobs may starve if there is a steady supply of short jobs",
                    "-Preemptive SJF is also called SRTF (Shortest remaining time first)",
                    "--When a new job comes in, run the job with the least amount of remaining time (jobs can be swapped",
                    "Estimatinng length of next CPU burst",
                    "-t<sub>n</sub> – actual length of n<sup>th</sup> CPU burst",
                    "-&tau;<sub>n+1</sub> – predicted value for next CPU burst",
                    "-&alpha;, 0 &le; &alpha; &le; 1",
                    "-Define: &tau;<sub>n+1</sub> = &alpha;t<sub>n</sub> + (1 – &alpha;)&tau;<sub>n</sub>",
                    "-&alpha; commonly sets to 1/2",
                    "-More weight is given to new information",
                    "(RR) Round Robin",
                    "-CPU suspends current job when time-slice (quantum) expires",
                    "-Job is rescheduled after all othe ready jobs are executed at least once",
                    "-Small quantums &rarr; a lot of process switches",
                    "Other classification of schedulers",
                    "-Long-term – scheduling done when new process is created. Controls degree of multiprogramming",
                    "-Medium-term – involves suspend/resume processes by swapping them out of or in to memory",
                    "-Short-term – scheduling occurs most frequently & decides which process to execute now",
                    "Multi-level feedback queue scheduler",
                    "Design depends on system used",
                    "<b>TODO</b>",
                    "-How to set priority",
                    "--Depends on system & interactive workstations",
                    "--Interactive jobs tend to be IO bound"
                );

                lectureSection(15, '2017/10/30',
                    "Memory Management",
                    "Memory contains both program & data",
                    "Multiprogramming systems can store more than one program + data in memory at same time",
                    "Provides memory sharing & memory protection",
                    "Issues in sharing memory",
                    "-Transparency – processes may co-exist, unaware of each other",
                    "-Safety – processes must not corrupt each other nor the OS",
                    "-Efficiency – CPU utilization must be preserved & memory ust be fairly allocated",
                    "-Relocatino – abaility of program to run different memory locations",
                    "Main memory information classification",
                    "-Program (code) & data (variables, constants)",
                    "-Read-onlly (code, constants) & read-write (variables)",
                    "-Addresses (eg pointers) or data (other variables); binding (memory allocation) can be static or dynamic",
                    "-Managed by compiler, linker, loader, & run-time libraries",
                    "Creating an executable program",
                    "-Compiling (translating) – generates object code",
                    "-Linking – combines object code into single self-sufficient executable code",
                    "-Loading – copies executable code into memory",
                    "-Execution – dynamic memory allocation",
                    "Address binding (relocation)",
                    "-Static – new locations determined before execution",
                    "--Compile time – compiler/assembler translates symbolic address to absolute address",
                    "--Load time – compiler translates symbolic address to relative (relocatable) addresses; loader translates these to absolute addresses",
                    "-Dynamic – new locations determined during execution",
                    "Linker",
                    "-Collects all pieces together to form executable code",
                    "-Issues",
                    "--Relocation – where to put pieces",
                    "-Resolving references – where to find pieces",
                    "-Re-organization – new memory layout",
                    "Loader",
                    "-Places executable code in main memory starting at pre-determined location",
                    "-Absolute loading – always load programs into designated memory location",
                    "--Problematic if two programs have an overlap; fine for uniprogramming",
                    "-Relocatable loading – allows loading programs in different memory locations",
                    "-Dynamic loading – loads functions when first called (if ever)",
                    "Simple management schemes – for contiguous memory allocation",
                    "-Needs to make sure that there is enough space before allocation",
                    "-Direct placement, overlays, partitioning",
                    "-Direct placement",
                    "--No relocation",
                    "--Programs always sequentially loaded into same memory location (absolute loading)",
                    "--Linker produces same loading address for every user program",
                    "--Eg early batch monitors, MS-DOS",
                    "-Overlays",
                    "--Allows for large programs to executes in smaller memory",
                    "--Program organized into tree of objects called overlays",
                    "--Root overlay always laded; subtrees reloaded as needed",
                    "-Partitioning",
                    "--Allows several programs to be in memory at same time",
                    "--Programs are separated into several contiguous blocks",
                    "--Static",
                    "---Memory divided into fixed number of partitions",
                    "---Programs queued to run in smallest available partition",
                    "---Program prepared for one partition may not be able to run in another without being re-linked (absolute loading)",
                    "--Dynamic",
                    "---First fit – allocate first hole that's big enough",
                    "----Shorter elapsed time than BF/WF",
                    "----Better memory utilization than WF",
                    "----Comparable emory utilization to BF",
                    "---Next fit – first fit using circular free list",
                    "----Starts with memory after last one selected",
                    "---Best fit – allocate smallest hole that is big enough",
                    "----shorter elapsed time & better memory utilization than WF",
                    "---Worst fit – allocate to largest hole",
                    "Fragmentation",
                    "-Unused memory that cannot be allocated",
                    "-Internal fragmentation – waste of memory within partition – severe in static partitioning schemes",
                    "-External fragmentation – waste of memroy between partition – caused by scattered noncontiguous free space – present in dynamic partitioning"
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
