<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lectures 16 – 19';
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
