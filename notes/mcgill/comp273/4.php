<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lectures 16 – 20';
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
                lectureSection(16, '2017/03/13',
                    linkNewTab('MARS download', 'http://courses.missouristate.edu/KenVollmar/MARS/download.htm'),
                    "Some instructions go directly through zero page or special pathways (eg to co-processor)",
                    "CPU has protection schemes",
                    "-Privileged – all registers protecting OS accessible",
                    "-Non-privilege – limited to lower & upper boundaries",
                    "--Cannot access other processes, OS, zero page, system resources",
                    "Compiling: source code &rarr; compiler &rarr; assembler &rarr; (with library & loader) &rarr; linker &rarr; executable",
                    "-Assembler verifies syntax & converts to machine code (eg .o file in c)",
                    "-Linker verifies library calls exist & merge library code into program; special OS functions added from loader",
                    "-Executable is a complete machine compatible file, assuming CPU & OS interface matches",
                    "Programs execute when",
                    "-Source code version == that of compiler",
                    "-Machine code output == CPU instruction format",
                    "-Programs’ loader version == OS API on computer",
                    "Assembler directives",
                    "-Comments: #",
                    "-Directives: .COMMAND",
                    "--.text – source code segment",
                    "--.data – data segment",
                    "-Labels: LABEL: or LAbEL",
                    "--LABEL: – define label’s location",
                    "--LABEL – references label location",
                    "Assembly",
                    "-Pass 1 – building symbol table",
                    "--Contains labels and where they are in the address",
                    "--Base address points to first instruction in program, undetermined",
                    "--True value is given by OS after program is launched",
                    "--Remaining address values are offsets after x",
                    "-Pass 2 – machine code generator",
                    "--Contains address and instruction at that address",
                    "--From pass 1, all addresses are offsets from ‘x’",
                    "Instructions have different classes (name, bit location in brackets)",
                    "-R-type – OP code 0 (31-26), rs (25-21), rt (20-16), rd (15-11), shamt (10-6), funct ALU op (5-0)",
                    '--Eg add $t1, $t2, $t3',
                    '--Bit order: OP code (0), $t2, $t3, $t1, shamt, add',
                    "--000000 00010 00011 00001 00000 100000",
                    "-Load/store – 35 for load, 43 for store (31-26), rs (25-21), rt 43 for source, 35 for dest (20-16), address (15 – 0)",
                    "-Branch – breq 4 (31-26), rs (25-21), rt (20-16), address (15-0)",
                    "-Jump instruction – 2, address"
                );

                lectureSection(17, '2017/03/20',
                    "Virtual memory usage",
                    "-MIPS uses byte addresses",
                    "-Words are 4 bytes",
                    "-Memory holds data structures, spilled (saved) registers, instructions, variables, & constants",
                    "-Bottom of stack is 7fffffff<sub>hex</sub>",
                    "-Programs start at 400000<sub>hex</sub>",
                    "-Ascending, contains text segment, data segment, stack segment",
                    "-Stack & data segments are shared space and can crash (overlap)",
                    "MIPS format is RISC – reduced instruction set computer",
                    "-Use series of simpler instructions rather than complex ones that take more ticks",
                    "Addressing modes",
                    "-Register addressing",
                    "--Operand is register",
                    '--Eg add $s1, $s2, $s3',
                    "-Base/displacement addressing",
                    "--Operant is memory location",
                    "--Register + offset &larr; constant",
                    '--Eg lw $s1, 100($s2)',
                    '---AR &larr; 100 + $s2',
                    "-Immediate addressing",
                    "--Operand is constant (16-bit)",
                    '--Eg addi $s1, $s2, 100',
                    "-PC-relative addressing",
                    "--Mem location = PC + offset &larr; constant",
                    "--Eg j 2500 or j label",
                    "-Pseudo-direct addressing",
                    "--Mem location = PC (top 6 bits) concat with 26-bit offset",
                    "--Assume 32-bit addressing",
                    "--Eg jal 2500 or jal label"
                );

                lectureSection(18, '2017/03/22',
                    "# Much of this lecture was talked about in the previous lecture",
                    "While(save[i] == k) i += j",
                    "-Need to compute index i each time; use temp reg and add; for integers, go 4 bytes forward, or add to itself and do it again.",
                    "Case/switch",
                    "-Lots of branches with breaks each time.",
                    "-Break not necessary for last case as it jumps to the same location",
                    "Set less than",
                    '-slt $t0, $s0, $s1 – $s0 < $s1 ? $t0 = 1 : $t0 = 0',
                    "-bne for conditions"
                );

                lectureSection(19, '2017/03/27',
                    "Register based",
                    "-Fast & easy, but limited # of registers & no local variable simulation",
                    "Run-time stack",
                    "-Very large & fits many parameters & can protect local variables, but it’s slower",
                    '-Create room for the stack	subi $sp, $sp, 16',
                    '-Save variables starting from the back and moving inwards	sw $t0, 12($sp), … sw $t4, 0($sp)',
                    "-Call subroutine & return values assumed in v0/v1",
                    '-Can protect registers by saving previous results in a stack (ie $t0) and then pop them afterwards',
                    '-After we are done, move stack position back (eg addi $sp, $sp, 28)',
                    "Global – no scope",
                    "-Registers are loaded at run-time",
                    "-Data is compiled &rarr; static",
                    "Parameters & local variables don’t exist physically and are simulated in a runtime stack",
                    "-Stack is global",
                    '$fp refers to where $sp was before',
                    '-Do not let variables refer past $f0'
                );

                lectureSection(20, '2017/03/29',
                    "Floating point instructions",
                    "-Add.s (single precision), add.d (double precision)",
                    "Buffers",
                    "-Eg Buffer: .space 2000",
                    '-La $s0, Buffer',
                    '-Proceed to use $s0 reference',
                    "Syscall values",
                    '-Load code instruction into $v0',
                    "-For arguments, preload them and the call will retrieve the values",
                    "-" . table_tags(table_contents(4,
                        'Service', 'System Call Code', 'Arguments', 'Result',
                        'print_int', 1, '$a0 = integer', '',
                        'print_float', 2, '$f12 = float', '',
                        'print_double', 3, '$f12 = double', '',
                        'print_string', 4, '$a0 = string', '',
                        'read_int', 5, '', 'integer(in $v0)',
                        'read_float', 6, '', 'float(in $f0)',
                        'read_double', 7, '', 'double(in $f0)',
                        'read_string', 8, '$a0 = buffer, $a1 = length', '',
                        'sbrk', 9, '$a0 = amount', 'address(in $v0)',
                        'exit', 10, '', '')),
                    "Elements",
                    "-MIPS CPU support consists of",
                    '--$gp, used like $fp to point to beginning of heap frame',
                    "--System call, sbrk (syscall code 9)",
                    "---Ask OS for n-bytes of data (like malloc)",
                    "---Return address of first byte",
                    "-Can simulate own heap with fixed memory block in data area",
                    "Polling code",
                    "-Continue checking for a condition and branching to recheck until that condition is met before continuing. Stalls the program"
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
