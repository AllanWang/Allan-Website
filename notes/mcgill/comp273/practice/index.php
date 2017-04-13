<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$page_title = "Comp 273";
$page_description = $page_title . " Practice";
$navFrom = 'n_comp_273';
//$navTo = 'commons';
$theme_color = "#F44336"; //red
phpQA();
phpHeader(); ?>
<body>

<?php code_highlight();
phpNav(); ?>

<main>

    <div class="container">
        <div class="light row" id="commons">

            <h3 class="header center">Comp 273 Terms & Concepts</h3>
            <h6 class="center">Prof. Joseph Vybihal</h6>
            <div class="divider"></div>
            <h6 class="center grey-text"><?php echo instructionText() ?></h6>
        </div>
        <div id="shell">
            <div id="q-and-a">
                <div class="qa-row">
                    <div class="question">
                        System Board Components
                    </div>
                    <div class="answer">
                        <?php
                        echo table_tags(table_contents(2,
                            "Bus", "links everything together",
                            "RAM", "storage for address and data",
                            "Clock", "(bus & CPU) – regulates data movement",
                            "PCI & ISA", "peripherals (PCI faster)",
                            "CPU", "controls math, logic, data, movements & loops",
                            "ALU", "LR inputs, A-Out output, status register – math ops",
                            "IP, IC, IR", "keeps track of instruction"));
                        ?>
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Data Types & Sizes
                    </div>
                    <div class="answer">
                        <?php
                        echo table_tags(table_contents(2,
                            'Nibble', '4 bits',
                            'Byte', '8 bits',
                            'Word', '16 bits',
                            'Long Word', '32 bits',
                            'Quad Word', '64 bits'));
                        ?>
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Number Representations
                    </div>
                    <div class="answer">
                        Binary (0b), Hexadecimal (0x), Octal (0), Decimal
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Two's Complement
                    </div>
                    <div class="answer">
                        Take all bits, flip them, add 1<br>
                        00111 &rarr; 11001 <br>
                        Unique 0 value, auto subtracts
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        IEEE Format
                    </div>
                    <div class="answer">
                        <?php
                        echo table_tags(table_contents(6,
                            'Name', 'Sign', 'Exponent', 'Mantissa', 'Total', 'Bias',
                            'Single', 1, 8, 23, 32, '2<sup>8</sup>-1',
                            'Double', 1, 11, 52, 64, '2<sup>10</sup>-1',
                            'Quad', 1, 15, 111, 128, '2<sup>14</sup>-1'
                        ));
                        ?>
                        * Note that mantissa excludes the starting 1, and bias is used to define exponent for 0
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Decimal Float to Binary Float
                    </div>
                    <div class="answer">
                        Eg 2.625
                        <?php bullets(
                            "Convert integer (2 &rarr; 10)",
                            "Repeatedly multiply decimal portion, take unit digit, and repeat (0.625 &rarr; <b>1</b>.25,
                                0.25 &rarr; <b>0</b>.5, 0.5 &rarr; <b>1</b>.0)
                            ",
                            "Combine (2.625 &rarr; 10.101",
                            "Realign exponent and remove 1 when writing mantissa"); ?>
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Flip Flop
                    </div>
                    <div class="answer">
                        <?php bullets(
                            "D flip flops – direct",
                            "RS flip flops – reset/set",
                            "JK flip flops – set/toggle/reset");
                        echo linkNewTab('More Info', 'https://www.allanwang.ca/notes/mcgill/comp273/0.php?scroll_to=circuits');
                        ?>
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Plexers
                    </div>
                    <div class="answer">
                        <?php bullets(
                            "Encoder – single bit vals 0 to n to a index value",
                            "Decoder – index val to n branches of single bits",
                            "Multiplexer – many inputs & index, outputs input at index",
                            "Demultiplexer – one input & index with many outputs; only outputs input at index; rest 0
                                or x
                            "); ?>
                    </div>
                </div>

                <div class="qa-row">
                    <div class="question">
                        CPU Loop Execution (Classical)
                    </div>
                    <div class="answer">
                        <ol>
                            <li>MAR &larr; PC</li>
                            <li>PC &larr; PC + 1</li>
                            <li>AR &larr; MAR</li>
                            <li>DR &larr; RAM[AR]</li>
                            <li>MBR &larr; DR</li>
                            <li>IR &larr; MBR</li>
                            <li>CU &larr; IR(OP-Code)</li>
                        </ol>
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Pipeline CPU Structure
                    </div>
                    <div class="answer">
                        <?php
                        bullets("Fetch &rarr; Load &rarr; ALU & rarr; Store",
                            "Each can execute at own time, allowing for multiple instructions at a time"); ?>
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Micro-Programming Types
                    </div>
                    <div class="answer">
                        <?php
                        bullets(

                            "Flat – one instruction at a time ",
                            " Pipeline – assembly execution of multiple instructions ",
                            " Cores – parallel executions ");
                        ?>
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Hazards & Faults
                    </div>
                    <div class="answer">
                        <?php bullets(
                            "Hazards – dangers to watch for (eg can't control dividing by 0)",
                            "Fault – error occurred (user divided by 0)",
                            "Stall – CPU cycle lengthens (eg CPU running faster than code)"); ?>
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Co-Processor
                    </div>
                    <div class="answer">
                        Like CPU, but only has things needed to do its specific function (like floating point
                        arithmetic)
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Improved Integer Multiplier Circuit
                    </div>
                    <div class="answer">
                        <?php bullets(
                            "Multiplicand data (32 bits)",
                            "Product data (64 bits) with multiplier value in leftmost 32 bits",
                            "Calculate multiplicand & leftmost 32 bits of product, then shift product right",
                            "Repeat until everything is shifted; note that those after the first 32 bits no longer
                                need to be touched (eg only one multiplication is done for the unit digit)
                            "); ?>
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Multiprocessing – Types of Computers
                    </div>
                    <div class="answer">
                        <?php bullets(
                            "Single CPU – one CPU, any type (flat, pipeline, hyper threaded)",
                            "Multi-CPU – more than one CPU chip, any type; each chip with its data cache, plus shared L2 cache",
                            "Single Core – optimized single CPU chip; has bridge to connect with system board",
                            "Multi-Core – single CPU chip with multiple processors; shared bus interface"); ?>
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Private vs Shared Cache
                    </div>
                    <div class="answer">
                        <?php bullets(
                            "Private is closer to core; faster access, but needs to make sure data is consistent with other caches (invalidation & snooping)",
                            "Shared has more space for content; needs to watch out for multiple cores accessing the same cache"
                        ); ?>
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Two-Pass Assembly
                    </div>
                    <div class="answer">
                        <?php bullets(
                            "Pass 1 – build table linking label with offsets from x, where main label is at x",
                            "Pass 2 – build table linking addresses (relative to x) with instructions"
                        ); ?>
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        MIPS Virtual Memory
                    </div>
                    <div class="answer">
                        <?php bullets(
                            "Bottom 0x7fffffff, stack, heap, data, 0x10000000, text, 0x400000, reserved",
                            '$sp points to the top of the stack; decrease to store more data, increase to "clear" data',
                            '$fp points to the start of the stack for a given subroutine',
                            '$gp points to first byte in .data'
                        ); ?>
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        Subroutine Conventions
                    </div>
                    <div class="answer">
                        <?php bullets(
                            'Register convention – pass params with $a0-$a3, return with $v0, $v1; fast but limited registers',
                            'ANSI C standard – use stacks ($sp); simulates local vars; slows down program'
                        ); ?>
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        MIPS – Push & Pop
                    </div>
                    <div class="answer">
                        # Push
                        subi $sp, $sp, 8<br>
                        sw $s0, ($sp)<br>
                        sw $s1, 4($sp)<br>
                        # Pop<br>
                        lw $s0, ($sp)<br>
                        lw $s1, 4($sp)<br>
                        addi $sp, $sp, 8
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        MIPS Function Calls
                    </div>
                    <div class="answer">
                        jal func # jump to label and track address<br><br>
                        func:<br>
                        &emsp;&hellip;<br>
                        &emsp;j $ra # pointer to function caller
                    </div>
                </div>
                <div class="qa-row">
                    <div class="question">
                        I/O (Polling, Interrupt, DMA, Synchronous, Asychronous)
                    </div>
                    <div class="answer">
                        <?php bullets(
                            "Polling – keep checking status until ready; blocks CPU, small overhead",
                            "Interrupt – wait for peripheral callback before resuming that activity; requires special hardware; sleeps current program; CPU is free to do other stuff; bigger overhead",
                            "DMI/DMA – direct memory interfacing/addressing – private bus; direct interface to RAM",
                            "Synchronous – send/read byte by byte (polling)",
                            "Asynchronous – load register with start address, another with limit, does other stuff until interrupt is received"
                        ); ?>
                    </div>
                </div>

                <!--
                    <div class="qa-row">
                        <div class="question">

                        </div>
                        <div class="answer">

                        </div>
                    </div>
               -->
            </div>
        </div>
    </div>
</main>
<?php phpFooter(); ?>
</body>

</html>
