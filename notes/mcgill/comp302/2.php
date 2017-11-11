<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lectures 11 – 15';
?>

<body>

<?php code_highlight('ocaml');
phpNav(); ?>

<main>
    <div class="container"><br/>
        <div class="row" id="header">
            <h3 class="header center">Comp 302</h3>
            <h6 class="center"><?php echo $subHeader ?></h6>
            <div class="divider"></div>
            <h6 class="center">
                <?php headerBullets(); ?>
            </h6>
        </div>
        <div class="row light">
            <div id="notes-container" class="col s12 m9 l10">
                <?php
                lectureSection(11, '2017/10/05',
                    "Lambda Calculus",
                    "-Simple language consisting of variables, functions (&lambda;x.t) & function application",
                    "-Can define all computable functions",
                    "-Boolean encoding",
                    "--T = &lambda;x.&lambda;y.x (keep first arg)",
                    "--F = &lambda;x.&lambda;y.y (keep second arg)",
                    "Recall currying: let curry f = (fun x y -> f (x,y))",
                    "let deriv (f, dx) = fun x -> f(x +. dx) -. f x) /. dx"
                );

                lectureSection(12, '2017/10/06', "Review for midterm");

                lectureSection(13, '2017/10/12', "Midterm review");

                lectureSection(14, '2017/10/13',
                    "Expressions in OCaml have types, and evaluates to a value or diverges",
                    "Today, we'll see that expressions may also have an <i>effect</i>",
                    "In class code" . code_specific('ocaml', 'lec14.ml')
                );

                lectureSection(15, '2017/10/17',
                    "Type, values, & effects" . code_specific('ocaml', 'lec15.ml')
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
