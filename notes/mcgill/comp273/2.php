<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lecture 6 – 10';
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

                lectureSection(9, '2017/02/06',
                    "An instruction can be any size (ie 8, 16, 32 bits) depending on the CPU",
                    "Bite – flip flop",
                    "Byte – 8 flip flops – standard size for RAM",
                    "Word – standard size for CPU",
                    "Address – standard size for bus",
                    "Registers – either Byte, Word, or specialty sizes",
                    "Ports, slots, other important registers – Often \"accessible\" but not \"addressable\"",
                    "At least now, sizes should agree with each other",
                    "BUS – conduit for bytes to travel from one location to another (pathway)",
                    "-In buses, address and R/W signals are only 1 way; data however is 2 ways, and is sometimes designed as 2 buses",
                    "- 1 bit per wire",
                    "-Bottle neck; 1 byte of data per movement",
                    "-Duality of operation: byte & word modes",
                    "Program (assume 8 bit instruction set)",
                    '-' . bulletTablePair('MOV D0, D1', 'D0 &larr; D1', 20),
                    '-' . bulletTablePair('Add D1, D0, 5', 'D1 = D0 + 5', 20),
                    '-' . bulletTablePair('MOV D0, X', 'D0 gets x from RAM', 20),
                    "Run Program",
                    "-OS – double click, load to RAM at free space, PC &larr; 50",
                    "Program Runs (OS is sleeping; number on top right denotes address)",
                    "-MAR<sup>50</sup> &larr; PC<sup>50</sup> <br> PC<sup>51</sup> &larr; PC + 1<sup>51</sup>",
                    "-AR<sup>50</sup> &larr; MAR<sup>56</sup> <br> DR &larr; RAM[AR]",
                    "-MBR &larr; DR <br> IR &larr; MBR <br> CU &larr; IR (op code)",
                    "OP code &rArr; code # represents instruction",
                    "Bottom left wires go down to CU",
                    "Args is complicated; sometimes have one, two, three, etc",
                    "-For our example, there are always 3 arguments",
                    "Comment: no real difference b/t integers and addresses; just how we use it",
                    "Need code for all instructions?",
                    "Each instruction from set is mode of micro-instructions",
                    "-ADD, D1, D0, 5 &rArr; D1 = D0 + 5",
                    "-Micro",
                    "--L &larr; D0",
                    "--R &larr; 5",
                    "--A &larr; ALU(L,R)",
                    "--D1 &larr; A"
                );

                lectureSection(10, '2017/02/08',
                    "Midterm – definitions, circuit drawing/interpreting, data conversions & representation, RAM, adder, addressing, bus, IR, IP, classical & pipeline CPU, off the shelf circuits, mathematical problems as seen in assignment",
                    "Pipeline as optimized architecture – clock tick sharing",
                    "-CU needs to make sure it goes through all the right loops",
                    "In pipeline, cache<sub>input</sub> &rarr; … &rarr; cache<sub>data</sub> at 2GHz. It is connected to RAM via a slow bus, but to make use of the speed, there are private fast buses going from the RAM to the cache input and data. They operate at 2Ghz + dump, meaning they collect data and send a bunch at once.",
                    "-Code/load prediction – dumb vs smart (looking one instruction ahead to see when to dump)",
                    "Fetch portion of CPU",
                    "-PC goes to read address &rarr; instruction comes out",
                    "-Instruction R-format",
                    "--OP – op-code (two; one for each CU)",
                    "--RS – register source",
                    "--RT – second register source (optional)",
                    "--RD – register destination",
                    "--SHAMT – shift amount (jump)",
                    "--FUNCT – function-code (ie sub-op-code)",
                    "-Add portion is always connected to 4, as instruction is 32-bit",
                    "Load portion of CPU",
                    "-OP code goes to CU, other parts of instruction go to registers, some portions skip register altogether",
                    "-Multiple address registers exist so you can fetch and load from multiple addresses at the same time (unlike in RAM where it’s synchronous)"
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
