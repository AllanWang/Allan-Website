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
                    "<b>System call process</b> -= system service requested (call) &rarr; switch mode; verify args & service &rarr; branch to service function via call table &rarr; return from service function; switch mode &rarr; return from system call"


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
