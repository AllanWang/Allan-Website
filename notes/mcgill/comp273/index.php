<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$page_title = "Comp 273";
$page_description = "Comp 273 - Winter 2017";
$navFrom = 'n_comp_273';
//$navTo = 'commons';
$theme_color = "#F44336"; //red
global $cssArr;
array_push($cssArr, 'comp273');
dynamicNotes('php');
phpHeader(); ?>
<body>

<?php
phpNav();

function circuitSVG($filename, $classes = '')
{
    $text = '<img';
    if ($classes != '') {
        $text = $text . ' class="' . $classes . '"';
    }
    $text = $text . ' src="circuits/' . $filename . '.svg">';
    return $text;
}

function circuitHeader($title, $filename)
{
    echo '<div class="divider"></div>';
    echo '<h6 id="' . getId($title) . '">' . $title . '</h6>';
    echo circuitSVG($filename);
}

?>

<main>

    <div class="container light">
        <div class="row" id="header">
            <h3 class="header center">Comp 273</h3>
            <h6 class="center">
                <?php
                inlineBullets(array("cs.mcgill.ca/~jvybihal/" => "http://cs.mcgill.ca/~jvybihal/",
                    "TA Information" => "https://docs.google.com/spreadsheets/d/1mKpXd_7QHxUuO6tqi3UbeZmuEPN3Lk-W68MPcIN-gkQ/edit?usp=sharing",
                    "Textbook (4<sup>th</sup> ed, Right click to save)" => "http://nsec.sjtu.edu.cn/data/MK.Computer.Organization.and.Design.4th.Edition.Oct.2011.pdf"
                ));
                ?>
            </h6>
        </div>
        <div class="row" id="header">
            <div class="col s12 m9 l10">

                <div id="circuits" class="section scrollspy">
                    <h5 id="circuitsh">Circuits</h5>
                    <p>The following diagrams were drawn
                        with <?php echo linkNewTab('Digital', 'https://github.com/hneemann/Digital') ?>. Feel free to
                        download it to test
                        the <?php echo linkNewTab('circuits', 'https://www.allanwang.ca/notes/mcgill/comp273/circuits/') ?>
                        directly.</p>
                    <div class="divider"></div>
                    <h6 id="gates">Gates</h6>
                    <table class="center-text h5 highlight">
                        <?php
                        table_header('', '', 'NOT', 'AND', 'OR', 'XOR', 'NAND', 'NOR');
                        table('A', 'B', circuitSVG('gates/invert'), circuitSVG('gates/and'), circuitSVG('gates/or'), circuitSVG('gates/xor'), circuitSVG('gates/nand'), circuitSVG('gates/nor'));
                        table(0, 0, 1, 0, 0, 0, 1, 1);
                        table(0, 1, 'X', 0, 1, 1, 1, 0);
                        table(1, 0, 0, 0, 1, 1, 1, 0);
                        table(1, 1, 'X', 1, 1, 0, 0, 0);
                        ?>
                    </table>

                    <?php circuitHeader('RS Flip Flops', 'sr-flipflop'); ?>
                    <p>Basic reset set flip flop to save bit data; a clock can be connected to the inputs of both nor
                        gates for synchronization</p>
                    <table class="h5 highlight">
                        <?php
                        table_header('R', 'S', 'Q', 'Q\'', 'Result');
                        table(0, 0, 'Q', 'Q\'', 'No Change');
                        table(0, 1, 1, 0, 'Set');
                        table(1, 0, 0, 1, 'Reset');
                        table(1, 1, 1, 1, 'Avoid');
                        ?>
                    </table>

                    <?php circuitHeader('D latch', 'd-latch') ?>
                    <p>An addition to the RS flip flop to accept a single input. Together with the clock (E), the input
                        (D)
                        directly changes the output of the latch. This also eliminates the Reset = 1 & Set = 1
                        issue.</p>
                    <table class="h5 highlight">
                        <?php
                        table_header('E', 'D', 'Q', 'Q\'', 'Result');
                        table(0, 0, 'Q', 'Q\'', 'Latch');
                        table(0, 1, 'Q', 'Q\'', 'Latch');
                        table(1, 0, 0, 1, 'Reset');
                        table(1, 1, 1, 1, 'Set');
                        ?>
                    </table>

                    <?php circuitHeader('JK Flip Flop', 'jk-flipflop') ?>
                    <p>JK flip flops cycle at half the speed of its input, as only one SR flip flop is enabled at a time
                        and it takes two clicks to pass data to the output.</p>
                    <table class="h5 highlight">
                        <?php
                        table_header('J', 'K', 'Q', 'Q\'', 'Result');
                        table(0, 0, 'Q', 'Q\'', 'Unchanged');
                        table(0, 1, 0, 1, 'Reset');
                        table(1, 0, 1, 0, 'Set');
                        table(1, 1, 'Q\'', 'Q', 'Toggle');
                        ?>
                    </table>

                    <?php circuitHeader('Half Adder', 'halfadder') ?>
                    <p>Adds two bits and returns the sum and carry; used for the least significant digit of numerical
                        additions</p>

                    <?php circuitHeader('Full Adder', 'fulladder') ?>
                    <p>Adds three bits (includes carry) together and produces a sum and carry; can be strung together to
                        add numbers with many digits.</p>
                </div>

                <?php
                global $tocData;
                $tocData['circuits'] = 'Circuits';

                lectureSection(1, '2017/01/06',
                    "System board parts",
                    "-Power Supply – Converts AC/DC from home into steady current needed in PC",
                    "-CPU – Central Processing Unit – Math, logic, data, movement, loops",
                    "-CMOS – complementary metal-oxide semiconductor – stores BIOS (basic input/output system) settings of computer",
                    "-ROM – Read Only Memory – Stores built-in instructions (eg CMOS) & additional instructionss for CPU",
                    "-Battery – Helps keep CMOS parameters, including time",
                    "-RAM – Random Access Memory – Volatile main memory bank, large & slow",
                    "-Cache – fast memory (pipeline) connected to RAM",
                    "-Bus – Common road for data that interconnects all devices on motherboard",
                    "-CLK – Clock – Beats the processing cycle (2 of them)",
                    "-Slot – Connects devices external to motherboard through cards"
                );

                lectureSection(2, '2017/01/09',
                    "Traditional system board schematic has one bus connecting cache, CLK, CPU, ROM to RAM",
                    "Having more buses allows for multithreading",
                    "Slots allow connections to external devices",
                    "-PCI, ISA",
                    "CLK – clock – one controls bus, one controls CPU (min 2 CLKs per device)",
                    "-CLK for bus is one or two orders of magnitude slower than CPU CLK",
                    "PCI can run at higher clock speeds",
                    "Data bus – connects CPU to Cache",
                    "Addressing – every component on system board has a unique integer number that identifies it",
                    "-Eg opening & closing of gates towards various components that control data passage.",
                    "Communication Pathways",
                    "-Composed of multiple wires, each wire for 1 bit",
                    "-In parallel, independent execution",
                    "-One byte per bus per tick",
                    "Bus",
                    "-8 wires",
                    "-Grounded on both sides",
                    "How would a 10 byte string travel from RAM to a slot, assuming traditional system board",
                    "-Assume CPU is not present",
                    "-Supervisor opens gates 0 & 1 and closes all other gates",
                    "-Wait for tick",
                    "-One char pass",
                    "-Go back to step 2",
                    "-Supervisor closes all gates",
                    "If single byte in RAM & single CPU instruction in RAM both need to exit RAM at same time (one to CPU, other to slot), what do we do? Assume traditional system board",
                    "-Not possible; one bus can only carry one process at a time",
                    "In traditional system board, what would happen if the CPU & slot need to save a single byte into RAM at the same time?",
                    "-Like before, we only have one bus. We’ll either lose data or one of the processes has to wait",
                    "CPU",
                    "-ALU – Arithmetic logic unit: + – > < == etc",
                    "--L, R, A-out & status are specific purpose registers",
                    "---L & R – inputs to ALU",
                    "---A-out – result of operation",
                    "---Status – input & output flag bits",
                    "----input to tell what operation to perform",
                    "----output to report errors (eg overflow, divide by zero)",
                    "-Registers – Fast live memory locations",
                    "--N general purpose registers 8, 64, or 128 bits long",
                    "--Temp variables for CPU",
                    "-IP – Instruction pointer, aka IC (Instruction counter) – points to next instruction",
                    "-IR – Instruction register – stores current instruction",
                    "Cannot distinguish variables, addresses, operations",
                    "-Instructions usually have different OP-codes depending on data types",
                    "CPU loop",
                    "-Get instruction: IR &larr; RAM (slow bus, no cache)",
                    "-Sequencer &larr; IR[OP-CODE]",
                    "-Selected gates open",
                    "-Clock ticks",
                    "-All gates close",
                    "-Increment to next instruction"
                );

                lectureSection(3, '2017/01/11',
                    bulletTablePair('Bit', 'machine 5V ≡ 1, 3V ≡ 0, 0V ≡ OFF', 20),
                    bulletTablePair('Pathway', 'voltages can be passed through wire; whole wire becomes given voltage', 20),
                    "Bus ≡ n-wires ≡ one “unit” of Data",
                    "-Also a pathway (of n going in the same direction)",
                    "Gate",
                    "-Has in and out direction",
                    "-Freezes if other direction used",
                    "-Computer freezes because of infinite loops or electricity going the opposite direction",
                    "CPU",
                    "-Fast bus, fast clock",
                    "-IP – instruction pointer – keeps track of where we are in a program",
                    "--Loaded into/used with address register",
                    "-IR – instruction register – sends instruction to sequencer",
                    "--Received from data register",
                    "--Eg application opened &rarr; instructions sent to RAM &rarr; instructions sent one at a time to CPU",
                    "-Seq – sequencer – opens all gates",
                    "-CPU Clock",
                    "--Beats to move data across CPU bus or move code from IP to sequencer",
                    "-Sequencer",
                    "--Table of codes with circuits",
                    "--Each circuit is system of gated triggers",
                    "--Triggers permit data to flow in predetermined order",
                    "CPU Loop",
                    "-IR &harr; RAM[IP]",
                    "-IR &rarr; Seq, IP+",
                    "Data – information",
                    "-Eg characters, symbols, numbers",
                    "Real data translated to code using properties of medium",
                    "-Which medium should we pick?",
                    bulletTablePair("Real Data &rarr; Numbers", "Encoded Data &rarr; everything else", 20),
                    "-INT ≡ Binary",
                    "ISO IEEE",
                    "RAM access register system",
                    "-Allows communication between CPU & RAM",
                    "-Address register – where to get/put data",
                    "-Data register – where to put the data, or the data to put elsewhere",
                    "-Mode register – flag for get or put",
                    "-Zero page – like a sourcebook table; data should not overwrite things here",
                    "--Bigger zero page &rarr; more stuff pluggable into machine",
                    "CPU Boundary Register – keeps track of addresses used; addresses requested must never be greater than boundary address"
                );

                lectureSection(4, '2017/01/16',
                    "RAM",
                    "-Usually, register size = address size",
                    "Two types of basic information",
                    "-Table encode – address/variable name on one side, data on the other (in bytes)",
                    "-Natural binary number",
                    "ROM – read only memory – often sits between RAM and another part of the machine",
                    "C – char a = ‘b’		compiler → w/ ASCII table → to byte",
                    "Binary – size – register, RAM",
                    "-Register – left most significant, right least significant",
                    "Data = choice = cost",
                    "-Having the leftmost bit hold the sign reduces the space for the actual numbers by two",
                    "-A way to “double” the max integer would be to keep it unsigned"
                );

                lectureSection(5, '2017/01/18',
                    "ASCII/UNICODE – unsigned bit (no sign bit), 8-bits long",
                    "Char x = ‘A’	00100001",
                    "Strings – contiguous sequence of characters terminated by NULL or contiguous sequence of chars proceeded (example had count in the front?) by a byte count",
                    "-Composed of char",
                    "-Char is built in property of CPU, not strings",
                    "-Strings supported through software",
                    "Integer",
                    "-Number is represented in raw signed binary or 2’s complement for the bit size",
                    '-' . bulletTablePair('-5', 'signed 00000101	2’s comp 00000101', 20),
                    '-' . bulletTablePair('-5', 'signed 10000101	2’s comp 10 – 5 ≡ 10 + (-5)', 20),
                    '-' . bulletTablePair('Start', '00000101', 20),
                    '-' . bulletTablePair('Flip', '11111010', 20),
                    '-' . bulletTablePair('Add 1', '11111011 &larr; -5', 20),
                    "Fixed Point – sign | exponent | mantissa (not two’s complement)",
                    "-Bias is the 0, offsets up for positive, down for negative",
                    "-∵ all fixed point numbers are written as 1.xxx, “1.” May be deleted &rarr; extra bit &rarr; double the range"
                );

                lectureSection(6, '2017/01/23',
                    "Logic circuits",
                    "-Circle &rarr; not",
                    "-Extra line &rarr; exclusive",
                    "nand &rarr; not and, nor &rarr; not or, xor &rarr; exlusive or",
                    "For two overlapping but disconnected wires, draw a small bump at the intersection",
                    "And gate is like a door with a lock – putting 0 on one end will stop the other end from passing through",
                    "Or gates can pass data as soon as one side has 1",
                    "Bit set reset, 1 &rarr; set &rarr; write 1, 0 &rarr; reset &rarr; write 0",
                    linkToId("RS Flip-Flop", 'rs-flip-flops'),
                    "-R &rarr; reset, S &rarr; set",
                    "-Constructed by feeding outputs of two NOR gates back to each other's input",
                    linkToId("D Latch", 'd-latch'),
                    "D &rarr; data",
                    "RS Flip-flop with preceeding and gates and one inverter",
                    "-Requires only one data input",
                    "-Input from D results in that value as output for Q",
                    "-Also includes clock input C",
                    "--When C is 0, and gates used to pass inputs are 0, so no change occurs and Q holds its values",
                    "--When C is 1, D value is passed through and set"
                );
                ?>

            </div>
            <?php
            tableOfContents();
            ?>
            <div id="keypanel" class="modal bottom-sheet">
                <div class="modal-content">
                    <?php
                    //keywordPanel('Body Composition', 'obl-fac|Obligatory/Facultative Loss', 'Water Balance', 'icfh|ICF', 'ecfh|ECF', 'Plasma', 'ISF', 'Lymph', 'water-numbers|Water Percentages', 'Hematocrit', 'Indicators', 'ionic-comp|Ionic Composition', 'Glycocalyx');
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php phpFooter(); ?>
</body>

</html>
