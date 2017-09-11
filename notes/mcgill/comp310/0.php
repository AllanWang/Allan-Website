<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lectures 0 – 5';
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
                lectureSection(0, '2017/09/06',
                    "<b>Midterm – Wed Oct 18 1:05PM – 2:25PM</b>",
                    "Office hours: Mondays 3:30 – 4:30, Wednesdays 2:35 – 3:35",
                    "Topics – processes, inter-process communication, scheduling, memory managemet, virtual memory, storage management, network management, security",
                    "Operating System – Trusted software interposed between the hardware and the application/utilities",
                    "Computers were very expensive, so utilization needed to be maximized; it was okay for humans to be idle, but was very expensive for computers",
                    "-Batch processing devised; programming was done with punch cards, which were loaded and returned with the output. However, the computer was still idle during loading",
                    "Goal of a computer is to read input, output, then schedule jobs",
                    table_tags(table_contents(-2,
                        "Design Concerns",
                        "Personal/Embedded Systems (eg PDAs)",
                        "Energy efficiency &bull; compatibility with hardware &bull; ease of use",
                        "Time Sharing Systems",
                        "CPU schedules &bull; security/access restriction",
                        "Batch System",
                        "Maximize cpu usage"
                    )),
                    "Access Problem – user wants to access the OS",
                    "-We must ask ourselves",
                    "--Why? (Perhaps to access connected devices)",
                    "--Is the user privileged enough?",
                    "-Handling I/O",
                    "--<b>Programmed I/O</b> – CPU transfers data (starts I/O operation) &rarr; I/O in progress; CPU is idle and is doing nothing but checking whether the device is free &rarr; I/O finishes; CPU resumes work",
                    "--<b>Interrupt-drive I/O</b> – As I/O is in progress, CPU can do other work until an interrupt is issued",
                    "---Slow speed, character device – interrupts result in overhead",
                    "OS service interrupts – interrupt occurs, 'branch' to OS &rarr; locate interrupt service routine (ISR) via interrupt vector &rarr; execute ISR &rarr; return to interrupted program",
                    "Control Access to OS is provided through two levels of architecture: <b>trusted mode</b> and <b>untrusted mode</b>",
                    "-OS (at least the core part (Kernel)) runs in trusted mode",
                    "-Applications/utilities run in untrusted mode",
                    "<b>System call process</b> – system service requested (call) &rarr; switch mode; verify args & service &rarr; branch to service function via call table &rarr; return from service function; switch mode &rarr; return from system call"
                );

                lectureSection(2, '2017/09/11',
                    "Tutorials are requested for Thursday 5:30 – 6:30",
                    "Processor time – primary resource managed by OS",
                    "-Depends on batch vs time-sharing; uniprogramming vs multiprogramming",
                    "--Batch – devised sequence used to run each program one at a time",
                    "--Time-sharing – set time allotted for each process, delegated by the OS",
                    "--Uniprogramming – one program running at a time; rest may be in memory",
                    "---During wait times (eg IO processing), CPU is idling",
                    "--Multiprogramming – programs seem to be running simultaneously",
                    "---Given that CPU is very fast, processor may swap between programs.",
                    "---CPUs idle time in uniprogramming can be used to execute other programs",
                    "<b>Process Scheduling</b>",
                    "-Each process want to finish as soon as possible, and requires the CPU to finish the task;\nThe CPU will decided which process to run:",
                    "--The process in consideration must be ready to run (known through the ready queue)",
                    "--The dispatcher will look through the ready queue and assign priorities to each process. One of them will be sent to the CPU",
                    "-<b>Process Scheduling Objectives</b>",
                    "--Fairness – give equal & fair access to resources (despite priorities)",
                    "--Differential responsiveness – discriminate among different classes of jobs (eg prioritize services serving immediate user requests)",
                    "--Efficiency – maximize throughput, minimize response time, accommodate as many users as possible",
                    "---Also notes that switching processes takes time",
                    "<b>Memory Management</b>",
                    "-Multiple programs should co-exist in memory so that we don't need to fetch data from disk when swapping",
                    "-Provides <b>protection & relocation</b>",
                    "--Necessary to protect co-residing programs from each other; don't want one program to write over another program's data",
                    "--Program can be placed anywhere in the memory, depending on where it's available",
                    "-<b>How does OS manage memory?</b>",
                    "-Divide memory into partitions & allocate them to different processes",
                    "-Partitions may be <b>fixed</b> or <b>variable</b> size",
                    "-A process",
                    "--Cannot access memory not allocated to it",
                    "--Can request more memory from OS",
                    "--Can release already held memory to OS",
                    "--May only use small portion of allocated memory",
                    "<b>Virtual Memory</b>",
                    "-Allows us to load more processes than that fitting the memory",
                    "-Memory is split into chunks called <b>pages</b>",
                    "-A program does not need all of its pages to be used; some can reside on disk (virtual)",
                    "-OS responsible for retrieving pages from & flushing pages to disk",
                    "<b>Storage Management</b>",
                    "-Needs to be persistent (not affected by process creation/termination), easily accessed, & protected",
                    "Challenges – performance (secondary storage is slow), heterogeneity (different file types and formats), protection",
                    "Data View – user (files & directories) > file system (blocks of data) > disk system (stream of bits)",
                    "-Layers of abstraction offer simpler ways of accessing storage",
                    "Component View – users (logical view) &rarr; access control (directory management) &rarr; file structure &rarr; access methods (file manipulation) &rarr; records (end of logical view) &rarr; buffering &harr; block caches (buffer data blocks to/from disk) &larr; file allocation &harr; free space management &rarr; controller caches &harr; disk scheduling (translates into physical space)",
                    "Abstractions provided by OS",
                    "-Processes or threads",
                    "-Handles lifecycle management, resource management, inter-process communication",
                    "--Processes compete with one another for resources",
                    "--Inter-process communication is the key for cooperating processes that depend on each other; can be done through shared memory approach or message passing approach",
                    "<b>UNIX System Structure</b>",
                    "-Users",
                    "-Shells & commands, compilers & interpreters, system libraries",
                    "-Kernel",
                    "--System-call interface to kernel",
                    "--Terminal handling, I/O, file system I/O, disk & tape drivers, CPU scheduling",
                    "--Kernel interface to hardware",
                    "-Terminal controllers, terminals; device controllers, disks & tapes; memory controllers, physical memory",
                    "<b>Kernel Structures</b>",
                    "-Layered – layers of hierarchy; lower it is, closer to hardware (lower the level of abstraction)",
                    "--Layered structure allows for lower levels to address bugs from higher levels",
                    "-Microkernel – one microkernel; all other processes can be interfaced with the user and the kernel",
                    "Virtual machines emulate another machine on top of a physical machine",
                    "-Multiple kernels on one machine"
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
