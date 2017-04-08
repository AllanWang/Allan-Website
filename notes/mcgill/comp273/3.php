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
                lectureSection(11, '2017/02/15',
                    "No restrictions in classical CPU relative to pipeline CPU",
                    "Since bus goes in one direction, we must impose restrictions on the language",
                    "-All instructions are 32 bits, all instructions pass all of pipeline, even if not needed",
                    "Buses can be made wider to accommodate more instructions per second, but get more expensive while doing so",
                    "OP-code register much smaller than other registers, since only part of the instructions are OP-codes (let's say an OP-code is 5 bits)",
                    "-All valid values are mapped; using and gates, it is very much like doing an address",
                    "-OP-code for ADD R1, R2, R3, and ADD R1, R2, c (where c is the value, not an address) are different, and will be interpreted differently",
                    "-Using mux, we can choose the inputs we want to compute the result",
                    "-CU is wired to all the components, controlling which data passes through",
                    "Can't add 2 constants, but we can load one and store it, then load the other",
                    "Every address has its own pathway",
                    "When making CPU, we want to pretend that there's only one instruction, execute it, then merge everything in the end",
                    "Multi-Purpose ALU",
                    "-Load/store – compute memory address",
                    "-R-type – AND, OR, Sub, Add, set-on-less-than",
                    "-BEQ – uses subtraction",
                    "-Managed by 3-bit ALU operation lines",
                    "In code, conditions are associated with jumps",
                    "-Save, load, add &rarr; complex conditions & jumps &rarr; cont."
                );

                lectureSection(12, '2017/02/20',
                    "We have to pretend that there are multiple IRs, even though there is only one",
                    "Imagine a bunch of commands, each with its own shape (if you look at table, families of commands have similar shapes)",
                    "Example",
                    "-OP dest source const fn (haven’t talked about this yet)",
                    "-ADD R1, R2, const",
                    "-00001 00001 00010 0011 ?",
                    "All registers 32 bits",
                    "Pipeline addresses by 32",
                    "CPU & registers support 32 bit buses",
                    "Instructions are 32 bits, but we cannot store 32 in IR since there are other components",
                    "-Solution is sign extension",
                    "To keep multiple instructions simultaneously, think of the 32-bit IR as 32 flip flop segments",
                    "-Pretend that they have wires coming out and splitting into many more registers",
                    "-However, we only want one instruction turned on at a time &rarr; AND gates",
                    "-CU picks which one to turn on – decoder",
                    "CU components",
                    "-Each bit in OP in IR is connected to an OP register in the CU",
                    "-Also has a counter and an incrementer to loop through all the needed data<br><img style='margin-top: 2em;margin-bottom: 2em' src='circuits/CU.svg'>",
                    "-Simple pipeline: PC &rarr; A &rarr; C<sub>I</sub> &rarr; B &rarr; Reg &rarr; C &rarr; ALU &rarr; D &rarr; C<sub>D</sub>",
                    "-Instructions often need many ticks to execute (ie ADD needs 4 ticks in classical CPUs)",
                    "--Ie ADD needs 4 ticks in classical CPU",
                    table_tags(table_contents(2,
                        "L&ensp; &larr; R3", "00",
                        "R&ensp; &larr; R2", "01",
                        "A&ensp; &larr; L+R", "10",
                        "R3 &larr; A", "11"),
                        "table-f-10c"),
                    "--Works really well if all instructions have 4 ticks",
                    "-Wires from OP and count come down",
                    "Datapaths – wires of CPU needed to be engaged during an instruction",
                    "-Includes path connecting registers, gates, ALU, etc",
                    "Control – portion of CPU – aka CU/sequencer – responsible for timing & triggering of datapath",
                    "Instruction Format – organization of bits in IR",
                    "Micro-programming – datapaths that implement the instruction",
                    "-Flat – one instruction executes at a time",
                    "-Pipeline – 1+ instruction at a time",
                    "-Cores – parallel execution"
                );

                lectureSection(13, '2017/02/22',
                    "Hazard – danger to keep watch for",
                    "-Structural – CPU cannot support combination of instructions in pipeline (eg single instruction store/load crash)",
                    "--Illegal instruction or illegal result (like divide by zero)",
                    "-Control – branch request causing semi execute pipeline instructions to be unnecessary",
                    "-Data – instruction depends on results of previous instruction in pipeline",
                    "--NOP/wiring for forwarding/backup buffer",
                    "Fault – error that has occurred",
                    "-Can lead to stall – lengthened CPU cycle",
                    "--Can lead to dump – all instructions dumped from pipeline & re-loaded after fault is handled (major slow down)",
                    "--Or no-op – additional instructions without actions inserted between fault & next instruction to allow CPU to execute problematic instruction without side-effects (minor slow down)",
                    "-Or crash – program is killed and stops",
                    "Eg dividing by 0",
                    "-MUX with inputs from INC & OS REG",
                    "-Stops incrementer if dividing by 0, looks at error register to find out why",
                    "If else",
                    "-Requires a jump, but other instructions are already queued up",
                    "-Delete, dump &rarr; pipeline loses those nanoseconds",
                    "While loop requires a jump every time",
                    "Pipeline structure",
                    "-" . bulletTable("PC<div class='center'>Jump</div>", "C<sub>I</sub><div class='center'>Compare</div>", "R<div class='center'>Move</div>", "ALU<div class='center'>Add</div>", "C<sub>D</sub>"),
                    "Calculating loss",
                    "-Expected(Loss) = P(Loss) * Cost",
                    "-Average stall is 17%; depends on the program",
                    "-Solution – predictions",
                    "--Assume branch will always fail (not used)",
                    "Happens too often",
                    "--Assume branch success based of type",
                    "Function calls (yes)",
                    "Backward jumps (probably loops, yes)",
                    "If statements (no, fail)",
                    "--Reorder instructions (compiler solution)",
                    "Need delay to figure out if branch will happen",
                    "Instead of NOP, reorder branch & preceding instruction",
                    "Eg",
                    "-Original",
                    "--Add \$4, \$5, \$6",
                    "--Beq \$1, \$2, 40",
                    "--Lw \$3, 300(\$0)",
                    "-Reorder",
                    "--Beq \$1, \$2, 40",
                    "--Add cache, \$5, \$6",
                    "--Lw \$3, 300(\$0)",
                    "Clock ticks – count of number of actual clock ticks required to perform activity in CPU",
                    "Cycles – count of number of micro instruction required to perform activity in CPU",
                    "-Important for pipeline, based on instructions; ticks are universal",
                    "CPU Execution Time is product of…",
                    "-Instruction count (total # of instructions in program)",
                    "-Clock cycles per instruction",
                    "-Clock cycle time",
                    "-In other words, # instr/program * # ticks/instr * # s/tick"
                );

                lectureSection(14, '2017/03/06',
                    "Sending address",
                    "-Tick from PC to MAR",
                    "-Tick from MAR to AR",
                    "Retrieving data",
                    "-Tick from RAM to DR",
                    "-Tick from DR to MBR",
                    "-Tick from MBR to IR",
                    "During 5 ticks, PC is incremented; it’s always ahead",
                    "CU has copy of OP code & count",
                    "-Count increments & clears itself",
                    "Chip Set",
                    "-“on die” – on CPU die",
                    "-“on board” – on system board, commonly near CPU",
                    "CPU System supports OS Registers, System-board registers, and Chip-sets",
                    "-Co-processors – eg math, matrix, graphics GPUs",
                    "-ROMS – built-in support for video & basic graphics, ASCII support, communication ports, basic peripheral support",
                    "Chip sets have private buses connecting to CPU",
                    "-Multiple co-processors may exist to deal with crashes",
                    "-May have special assembler instructions",
                    "CPU constraints",
                    "-Operating system – secure environment; programs should not interfere",
                    "--Have an upper and lower bound for valid pointers",
                    "OS Boundary Register – prevents process’s PC from addressing into OS space",
                    "Internal CPU exception handling",
                    "-Reasons",
                    "--Incorrect machine language binary",
                    "--Arithmetic – overflow, divide by zero",
                    "--Incorrect address reference",
                    "-Supporting registers",
                    "--EPC – exception program counter register – address of bad instruction",
                    "--Cause – error code",
                    "--Jump to reserved internal cache memory address for exception assembler code",
                    "Interrupt – signal sent to overwrite/swap PC with trap’s pointer",
                    "Multiplication",
                    "-CPU’s ALU – integer operations: + – * /",
                    "-Co-processor’s ALU – floating point operations: + – * /",
                    "Grade school multiplication – multiply first number by each digit in the second number, and shifting them and adding them (just like how you normally multiply)"
                );

                lectureSection(15, '2017/03/08',
                    "When typing on a keyboard, each key is mapped with a wire to a certain value. To make the values universal regardless of the wiring, a ROM can be used to convert it into ASCII. It is then passed to a register, then to the RAM/CPU. The ROM would be part of the chip set",
                    "Notes about grade school multiplication (with binary values)",
                    "-We do not need to wait to do the sum; product result shifts left naturally",
                    "-If multiplier is 1, copy the multiplicand",
                    "-If multiplier is 0, result is 0",
                    "-Integer multiplier hardware",
                    "--If multiplier bit is 1, sum multiplicand with product & shift left",
                    "--If multiplier bit is 0, shift left multiplicand",
                    "--Eg 0b1101 * 0b1100 = <s>0b1101</s> + <s>0b11010</s> + 0b110100 + 0b1101000 = 0b10011100",
                    "-Multiplication procedure for a * b; let p = product",
                    "--If (smallest bit in a == 1) p += b",
                    "--b << 1, a >> 1",
                    "--repeat for each new smallest bit ‘a’",
                    "-Hardware improvement",
                    "--Multiplicand & multiplier are 32 bit registers, and product is 64 bit register",
                    "--Product register is right shifted rather than shifting multiplicand (b) left",
                    "--Answer is right most 32 bits",
                    "--Bits passed the mid line in the product do not need to be added again",
                    "--No multiplier register; multiplier is placed in answer part of the product",
                    "Types of Computers",
                    "-Single CPU – single CPU chip of any type (flat, pipeline, hyper threaded)",
                    "--No cache",
                    "-Multi-CPU – more than one CPU chip of any type",
                    "-Single Core – optimized single CPU chip",
                    "--Bridge connects core with rest of system board",
                    "-Multi-Core – single CPU chip with multiple processors",
                    "--Bus interface is shared; permits same data for all cores",
                    "Program – compiled algorithm stored on disk",
                    "-Has OS loader & static components",
                    "Process – executing version of program in RAM",
                    "-Has static & dynamic components",
                    "Thread – instructions currently executed by CPU",
                    "-One process may have many threads",
                    "-Each thread is instance of process",
                    "-Multithreading for multiple CPU",
                    "Cores allow for many functions to be executed simultaneously, but require more effort to communicate with each other. The more cores we have, the more the advantages disappear.",
                    "Core is treated as unique processor, managed by the OS",
                    "To run one process with 2 threads on a quad-core, the OS can",
                    "-Use 2 cores to run threads simultaneously",
                    "-Use 1 core & task switch between threads",
                    "-Queue process & threads for later as high priority code is executing on all cores",
                    "OS – operating system",
                    "-Core management",
                    "--Special purpose core assignment – reserve cores for specific uses (eg OS code on core 1)",
                    "--Dedicated application assignment – application attached to core (eg browser on core 2); core is shareable with other processes",
                    "--Core pooled assignment – cores not dedicated to anyone; managed by queue",
                    "-Management types",
                    "--Simple – queue processes, assign to cores, after n ms release cores and repeat",
                    "--Complex – one process has multiple threads; may need to share data so is placed on a core that can do so",
                    "Multi-core helps keep work flowing; we are limited to how much we can increase speeds for individual cores",
                    "How unique is each thread?",
                    "-1 thread/program – we behave this way; everything executes at same time",
                    "-N threads/program – eg browser with multiple windows",
                    "--Needs to coordinate/synchronize, which causes overhead",
                    "--When N > 6 effects overcome speed improvement",
                    "TLP – thread-level parallelism – multi-core strategy – each core given portion of program to execute",
                    "-Games – core 1 AI, core 2 graphics, core 3 physics, core 4 UI",
                    "-Business – core 1 web server, core 2 database server, core 3-4 system processing",
                    "-Personal computer – core 1 OS, core 2-4 user programs",
                    "-Science – core 1 OS, core 2 data acquisition device, core 3 data analysis device, core 4 other",
                    "SIMD – single instruction multiple data",
                    "-Eg modern GPU",
                    "-Have matrix of data; single instruction executed on all cells in matrix of data at same time",
                    "-Each matrix cell is actually a core",
                    "MIMD – multiple instruction multiple data",
                    "-Eg multi-pipeline CPU",
                    "-Pipeline architecture per core, sharing same RAM",
                    "-Each core has own instruction & data cache",
                    "-Core alone is single instruction/data; chip as a whole is multiple instructions/data",
                    "SMT – simultaneous multi-threading",
                    "-Eg integer ALU is busy, fixed-point ALU is empty; process wanting integer waits & process wanting fixed-point runs",
                    "-Multiple independent threads execute simultaneously on same core",
                    "-Threads can run concurrently but cannot simultaneously use same functional unit",
                    "-Not true parallel processor",
                    "-- > 30% threading",
                    "--OS sees virtual processor",
                    "--Does not have resources for each core like multi-core",
                    "Hyperthreading – combining SMT with multi-core (single-core non-SMT, single-core SMT, multi-core non-SMT, multi-core SMT)",
                    "Memory types",
                    "-Shared – large common memory shared with all processors",
                    "--L2 cache (sometimes private), L3 cache, RAM, in simultaneous multi-threading",
                    "-Not shared – pipeline, L1 cache private",
                    "-Distributed – each processor has own small local memory; not replicated elsewhere",
                    "Cache types",
                    "-Private – closer to core &rarr; faster access; less contention",
                    "-Shared – more space available for big instructions/data programs",
                    "Contention – more than one core needs access to same cache",
                    "-One core waits; needs circuity to handle competition (small CPU slowdown)",
                    "Cache coherence problem",
                    "-How do we keep private cache data consistent across caches?",
                    "-Invalidation + snooping – record addresses being used, record MAR used, issue fault when necessary to retrieve correct data",
                    "--Invalidation – core writes to cache &rarr; other copies flagged invalid",
                    "--Snooping – cores monitor write operations"
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
