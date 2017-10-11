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
                lectureSection(11, '2017/10/11',
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
                    "-First Com First Serve (FCFS, FIFO)",
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
