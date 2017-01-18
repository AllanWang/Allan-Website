<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$page_title = "Comp 273";
$page_description = "Comp 273 - Winter 2017";
$navFrom = 'n_comp_273';
//$navTo = 'commons';
$theme_color = "#F44336"; //red
dynamicNotes('php');
phpHeader(); ?>
<body>

<?php
phpNav(); ?>

<main>

    <div class="container light">
        <div class="row" id="header">
            <h3 class="header center">Comp 273</h3>
            <h6 class="center">
                <?php
                inlineBullets(array("cs.mcgill.ca/~jvybihal/" => "http://cs.mcgill.ca/~jvybihal/",
                    "TA Information" => "https://docs.google.com/spreadsheets/d/1mKpXd_7QHxUuO6tqi3UbeZmuEPN3Lk-W68MPcIN-gkQ/edit?usp=sharing"
                ));
                ?>
            </h6>
        </div>
        <div class="row" id="header">
            <div class="col s12 m9 l10">
                <?php
                lectureSection(1, '2017/01/06',
                    'idk'
                );

                lectureSection(2, '2017/01/09',
                    "Traditional system board schematic has one bus connecting cache, CPU, ROM to RAM",
                    "Having more buses allows for multithreading",
                    "Slots allow connections to external devices",
                    "-PCI, ISA",
                    "CLK – clock – one controls bus, one controls CPU (min 2 CLKs per device)",
                    "-CLK for bus is one or two orders of magnitude slower than CPU CLK",
                    "PCI can run at higher clock speeds?",
                    "Data bus – connects CPU to Cache",
                    "Addressing – every component on system board has a unique integer number that identifies it",
                    "-Eg opening & closing of gates towards various components that control data passage.",
                    "Communication Pathways",
                    "-Composed of multiple wires, each wire for 1 bit",
                    "-In parallel, independent execution",
                    "-One byte/bus/tick",
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
                    "Cannot distinguish variables, addresses, operations",
                    "-Instructions usually have different OP-codes depending on data types",
                    "CPU loop",
                    "-Get instruction: IR RAM (slow bus, no cache)",
                    "-Sequencer  IR[OP-CODE]",
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
                    "-IR – instruction register – sends instruction to sequencer",
                    "--Eg application opened &rarr; instructions sent to RAM &rarr; instructions sent one at a time to CPU",
                    "-Seq – sequencer – opens all gates",
                    "CPU Loop",
                    "-IR &harr; RAM[IP]",
                    "-IR &rarr; Seq, IP++		//couldn’t see this",
                    "Data – information",
                    "-Eg characters, symbols, numbers",
                    "Real data translated to code using properties of medium",
                    "-Which medium should we pick?",
                    "Real Data &rarr; Numbers		Encoded Data &rarr; everything else",
                    "-INT ≡ Binary",
                    "ISO IEEE",
                    "RAM = ADDR + DATA",
                    "-Zero page – like a sourcebook table, where data should not be written into?",
                    "--Bigger zero page &rarr; more stuff pluggable into machine",
                    "CPU Boundary Register – keeps track of addresses used; addresses requested must never be greater than boundary address"
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
