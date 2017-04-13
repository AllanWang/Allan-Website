<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lectures 20 – 23 (End)';
?>

<body>

<?php phpNav(); ?>

<main>
    <div class="container"><br/>
        <div class="row" id="header">
            <h3 class="header center">Comp 273</h3>
            <h6 class="center"><?php echo $subHeader ?></h6>
            <div class="divider"></div>
            <h6 class="center">
                <?php
                inlineBullets(array("cs.mcgill.ca/~jvybihal/" => "http://cs.mcgill.ca/~jvybihal/",
                    "TA Information" => "https://docs.google.com/spreadsheets/d/1mKpXd_7QHxUuO6tqi3UbeZmuEPN3Lk-W68MPcIN-gkQ/edit?usp=sharing",
                    "Textbook (4<sup>th</sup> ed, Right click to save)" => "http://nsec.sjtu.edu.cn/data/MK.Computer.Organization.and.Design.4th.Edition.Oct.2011.pdf"
                ));
                ?>
            </h6>
        </div>
        <div class="row light">
            <div id="notes-container" class="col s12 m9 l10">
                <?php
                lectureSection(21, '2017/04/03',
                    "Devices generally have a cmd, data, & status register",
                    "Devices that are always connected, eg a keyboard/display, have their own constant connections",
                    "Machines with a different clock speed will interact with RAM in parallel, how do we synchronize the ticks?",
                    "Polling – CPU waits for device (see lecture above)",
                    "-Requires zero page",
                    "-Checks the status – ready (sync), busy (ignore), error (stop)",
                    "-Simple to write, but very CPU intensive",
                    "-Useful when we need to wait for a user anyways",
                    "Interrupt – hardware specific",
                    "-In MIPS",
                    "--Requires data, status, cmd, addr registers, and interrupt wiring",
                    "--Give machine task, let it do its thing and send a callback when done",
                    "--Address will point to a function in project",
                    "--If !error && !body, data = …, addr = …, cmd = …",
                    "-In OS",
                    "--PC goes to MAR & INC",
                    "--Another register contains constant, and that register & INC goes to PC",
                    "--Another wire with an interrupt signal goes to PC",
                    "--Other machines can send signal to switch the PC to the address that is being worked on",
                    "-DMI/DMA – direct memory interface/addressing",
                    "--Still connects CPU, device, & RAM to bus",
                    "--Also wires device into RAM so it can download directly",
                    "---Requires ROM, CLK, private bus, DATA, CMD, STATUS, COUNT, ADDR",
                    "-If we need to wait for a user input, we can put the program to sleep until the input is received",
                    "-Allows for multiprocessing",
                    "-Since interrupts require time to send the correct data and address, if the interrupt cycles is very small, it may be more efficient to use polling"
                );

                lectureSection(22, '2017/04/05',
                    "RAM is too big to be inside CPU, so we have it separate. The RAM clock is slow, so we have a cache in the CPU",
                    "Cache size is less than RAM. To map it we can use modulo",
                    "Locality",
                    "-Temporal – item will be referenced again soon, eg libraries & functions",
                    "-Spatial – adjacent items probably executed next, eg loops & functions",
                    "Memory hierarchy (fastest to slowest) ",
                    "-" . table_tags(table_contents(3,
                        "CPU registers", "flip-flops", "1-5ns",
                        "Cache", "SRAM-transition + power", "5-25ns",
                        "RAM", "DRAM capacitors + refresh", "30-120 ns",
                        "Disk", "Magnetic charge-mechanical", "10-20 million ns")),
                    "How to optimally use cache?",
                    "-Hit to miss ratio (cache miss rate) – hit implies we find instruction in cache; miss implies we need to go to RAM",
                    "-If missed, we must access RAM, wait for RAM to complete, put data into cache  update table, then restart instruction from cache",
                    "-Miss penalty = cycles to upload data to cache",
                    "-Cost of miss = miss frequency * miss penalty",
                    "-Program speed = n + m * penalty; n & m are # of instructions ",
                    "Basic access architecture",
                    "-PC divided into 3 parts",
                    "-Recall in MIPS that each instruction is 4 bytes",
                    "-No need to store the last two bits for each byte as we can assume it",
                    "-Remainder of instruction is divided into unique | mod | 1/0 (which we ignore)",
                    "-We store the full instruction as a word, and the unique portion as a tag",
                    "-To retrieve data, we find the modulo, then use the tag to match with the proper instruction",
                    "-There is also a bit defining whether a space is in use or not; keep in mind that when we “remove” an instruction, we don’t necessarily clear the bits, but can just say that it’s disabled",
                    "-All matches result in a hit",
                    "Performance calculation",
                    "-Amdahl’s law – speedup in performance is proportional to new component & actual fraction of work it carries out",
                    "-s = 1/[(1 – f) + f/k]&emsp;&emsp;Where s is speedup, f is fraction of work by component, k is advertised speedup",
                    "-Eg – if processes spend 70% of time in CPU, and there is a computer that functions 50% faster, what is the speedup?",
                    "--s = 1/[(1 – 0.7) + 0.7/1.5] = 30%",
                    "Transfer rate calculations",
                    "-Eg assuming polling overhead takes 400cs on CPU that runs 500MHz, where cs = 1 tick",
                    "-How much CPU time is used for a hard disk transfer at 4-word chunks at 4MB/s",
                    "-Polling = 4MB/16bytes = 250K times &rarr; 250K * 400 = 100 000 000",
                    "-Processor = 100 000 000/500 000 000 = 20%"
                );

                lectureSection(23, '2017/04/10',
                    "Independent device with clock & rom – waits for signal and executes instruction depending on input",
                    "Connected to a register/buffer (with cmd, status, data, port)",
                    "Connected to RAM which is connected to CPU",
                    "To run: cmd passed to device, device runs &delta;t, status & data/buffer updated",
                    "After polling is finished, data still has to be transferred from buffer to RAM",
                    "Polling example: load 100 bytes, pass to device, wait",
                    "Interrupt example: load 100 bytes, device handles the rest (no time taken in CPU), status received, bring data in",
                    "Two ways of doing polling",
                    "-Busy loop – while loop with condition",
                    "-Intermittent loop – have checker in a function and check it with a timer (eg every 0.5s)",
                    "--Can be useful for getting constant slow data, like keyboard input. Check at a time faster than the fastest typist",
                    "Use interrupts for data that cannot be missed and data that comes at random times (eg internet data) – network card as a clock and does not need to use the CPU",
                    "MIPS convention – a (params) & v (return) registers used for passing information; no stack",
                    "ANSI C standard – stack based – push saved & local variables and pop later when needed",
                    '-Note that popping doesn’t clear the stack; we just move $sp so that we may reuse the “cleared” addresses',
                    "-Return values are still added to the v registers",
                    "Final exam format",
                    "-Closed book, <b>scientific calculator allowed</b>, part marks given, teacher supplied help sheets (op codes, syscalls)",
                    "-Questions",
                    "--Definitions (~4)",
                    "--MIPS programming (2)",
                    "--Circuit drawing (~2)",
                    "--Calculations (~4)",
                    "--Bonus (2)",
                    "-Topics",
                    "--MIPS assembly",
                    "--Circuit interpretation & building",
                    "--MIPS features – caches, virtual & dynamic memory, recursion/stacks, interrupts & exceptions, memory mapped I/O, buses, synchronous vs asynchronous",
                    "--Conventions for passing args & using peripherals",
                    "-Things to know but aren’t tested – digital math & data formats",
                    "-Things to know – Amdahl’s law, polling & interrupt overhead, cache performance"
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
