<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lectures 6 – 10';
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
                lectureSection(6, '2017/09/20',
                    "Review from last class",
                    "Dup – duplicates existing file descriptor",
                    "-Descriptor returned is the lowest numbered descriptor currently not inn use by process",
                    "Rewiring File Descriptors – Create a pipe &rarr; fork process (cloning the pipe) &rarr; close writing side of pipe &rarr; wire writing side of pipe to new location",
                    "Pthreads",
                    "-User-level or kernel-level",
                    "-POSIX standard API for thread creation & synchronization",
                    "-Specification, not implementation; varies on devices",
                    "-include &lt;pthread.h&gt;",
                    "-Useful methods",
                    "--pthread_create – returns id of new thread",
                    "--pthead_self – returns id of caller",
                    "--pthread_equal – checks if two threads are equal",
                    "--pthread_exit – closes given thread if caller is authorized",
                    "--pthread_join – wait for termination of target thread before completion; returns 0 for success, > 0 otherwise",
                    "---joinable threads must be joined to, otherwise 'zombie' threads will be created",
                    "---threads for which we are interested in their returns are joinable. If we don't care about the thread, we may detach it with `pthread_detach` to inform the system to do the proper garbage collection",
                    "--pthread_mutex_lock/pthread_mutex_unlock – prevent multiple threads from modifying the same variable during concurrent executions",
                    "In concurrent programming, we want to avoid a sequence of interruptible and mutable operations. For instance, i++ involves 3 operations (load, add, save), which may be interrupted from another thread. We may address this by saving i locally first, incrementing the new value, then saving it. That way, other threads that read i in the process will still get the old value. One example of this implementation is Atomic integers"
                );

                lectureSection(7, '2017/09/25',
                    "Critical Section",
                    "-For multiple programs to cooperate correctly & efficiently",
                    "--No two processes may be simultaneously in their critical sections",
                    "--No assumptions may be made about speeds or number of CPUs",
                    "--No processes outside its critical section may block other processes",
                    "--No process should have to wait forever to enter critical section",
                    "-Solution",
                    "--Disable all interrupts &rarr; not practical as OS operation will be hindered as well",
                    "Strict Alternation",
                    "-Two processes take turns in entering critical section using a global variable swap",
                    "Dekker's Algorithm",
                    "Peterson's Algorithm"
                );

                lectureSection(8, '2017/09/27',
                    "<b>TODO</b>"
                );

                lectureSection(9, '2017/10/02',
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

                lectureSection(10, '2017/10/04',
                    "<b>TODO</b>"
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
