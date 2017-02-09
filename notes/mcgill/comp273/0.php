<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Summary';
?>

<body>

<?php phpNav();


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
