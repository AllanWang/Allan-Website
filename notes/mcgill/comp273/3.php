<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lectures 11 - 15';
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
