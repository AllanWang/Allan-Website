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
