<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lecture 6 - 10';
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
                lectureSection(6, '2017/01/25',
                    "End goal is addres &harr; read/write &harr; sync",
                    "-" . bulletTablePair("Solution is gate/lock", "eg and gates around SR flip flop", 40),
                    "To retrieve/send to correct address, use and gates with negations to check for matches.",
                    "JK flip flop – two RS flip flops w/ clock and other gates",
                    "-Adds a delay to output (first flip flop changes when clock is 1, other one outputs when clock is 0 &rarr; half the outputs as input)",
                    "Half adder only contains A and B inputs",
                    "-When doing addition, only least significant digit is half adder, others are full adders as there are carries",
                    "Full adder = two half adders glued with or gates",
                    "Status register has a few bits for unusual situations &rarr; overflow, dividing by 0, sign change",
                    "To build an ALU, we need to know size of inputs and outputs, format, etc",
                    "How would ALU design change when upgrading?",
                    "- 4 &rarr; 8, adding 4 more full adders",
                    "Subtraction – need to decide how we are doing the operation",
                    "- 5 – 3, 5 + (-3), 5 + (3 * -1)",
                    "ALU has its V like shape because there are 2’s complement holders for L & R followed by operation section",
                    "Reminder: 2’s complement – invert all bits and add 1"
                );

                lectureSection(7, '2017/01/30',
                    "Making a calculator: get method to check which digit you need, then turn on appropriate sections accordingly.",
                    "Multiplexers 2<sup>a</sup>-to-1 mux has 2<sup>a</sup> inputs x<sub>0</sub>, … x<sub>n-1</sub> & single output z. ",
                    "-Selector address ‘a’ composed of input signals y<sub>0</sub>, …, y<sub>a-1</sub> selects which x<sub>i</sub> signal passes through z",
                    "-Like a router &rarr; multiple data, has to take turns",
                    "Decoder – a-to-2<sup>a</sup> decoder asserts one and only one of its 2<sup>a</sup> output lines",
                    "-CPU sequencer is decoder",
                    "-Input is an index; outputs signal on wire of that index",
                    "Encoder – outputs an a-bit binary number equal to index of single 1 signal among 2<sup>a</sup> inputs",
                    "-Input from one of the wires; outputs index of that wire",
                    "-Active output used to tell if x<sub>0</sub> is ON as compared to an encoder that is off (otherwise both would be 0000)",
                    "Programmable Combinatorial Parts",
                    "-Type 1 – VIA fuses can be “blown” given sufficient current",
                    "-Type 2 – VIA anti-fuse “sets” given sufficient current (chemical)",
                    "-Drawn as a square, becomes circle ",
                    "Blown fuses connects the wires?",
                    "-Fuses represented by square",
                    "!!!ROM & PROM shorthand",
                    "PROM – programmable read only memory",
                    "PAL – programmable array logic",
                    "-Pairs that go down",
                    "PLA – programmable logic array",
                    "-Individual lines and or gates forming a hash",
                    "-Both arrays programmable"
                );

                lectureSection(8, '2017/02/01',
                    "Encoder/Decoder (see previous lecture)",
                    "Von Neumann Machine – traditional computer model based on Turing’s theoretical ideas",
                    "-Model: RAM (input) &rarr; Processor (Get instruction) &rarr; Execution with control unit &rarr; RAM (output)",
                    "Index: MAR – memory address register, MBR – memory buffer register, D0-7 Registers, ALU – arithmetic logic unit, INC – incrementer, PC – program counter, IR – instruction register, CU – control unit, in ram {Mode, AR – address register, DR – data register}",
                    "-Start with IP/PC (same thing)",
                    "-Address in PC sent to address register (MAR &rarr; AR)",
                    "-Sends to DR then to buffer (D0 to D7) – buffer may can contain data or instructions",
                    "--Depends on MBR",
                    "Every instruction in binary has two parts; OP code and address (or something else)",
                    "-Only OP code goes down to control unit",
                    "IR is basically a “dead end”	address will move onto PC, which will increment itself then write into MAR &rarr; DR &rarr; MBR (overwrites previous content) &rarr; next set of instructions",
                    "CPU loop",
                    "-AR &larr; PC",
                    "-PC &larr; PC + 1",
                    "-DR &larr; RAM[AR]",
                    "-IR &larr; DR",
                    "-Each line involves one tick (some improvements, like incrementation on same tick)",
                    "Micro Instruction – way to express CPU operation step by step",
                    "[ ] for index like arrays, ( ) for arguments",
                    "-IR(OP, params)",
                    "-&larr; indicates move",
                    "BUS – Address, R/W, Data",
                    "-1 bit/wire, bottle neck, duality of operation (modes)"
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
