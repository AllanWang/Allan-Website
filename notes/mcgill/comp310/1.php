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
                    "-include \<pthread.h\>",
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
