<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
include('shared.php');
hook($_SERVER['PHP_SELF']);
$subHeader = 'Lectures 0 – 5';
?>

<body>

<?php phpNav(); ?>

<main>
    <div class="container"><br/>
        <div class="row" id="header">
            <h3 class="header center">Comp 361</h3>
            <h6 class="center"><?php echo $subHeader ?></h6>
            <div class="divider"></div>
            <h6 class="center">
                <?php headerBullets(); ?>
            </h6>
        </div>
        <div class="row light">
            <div id="notes-container" class="col s12 m9 l10">
                <?php
                lectureSection(3, '2017/09/13',

                    table_tags(table_contents(-3,
                        "Waterfall Model",
                        "Requirements Elicitation", "Why?&ensp;&ensp;&ensp;", "functionality, user expectations, requirements, qualities",
                        "Specification & Analysis", "What?", "Produce complete, unambiguous description of problem domain & requirements",
                        "Architecture Design", "How?", "elaborate a system architecture that fulfills the requirements",
                        "Detailed Design", "How exactly?", "Allocate responsibilities",
                        "Implementation", "", ""
                    )),

                    "V Model – left side descending is the waterfall model; right side ascending contains the assembly phase:",
                    "-Unit Testing",
                    "-Component Testing",
                    "-Integration Testing",
                    "-System Testing",
                    "Iterative Software Development",
                    "-Sometimes, we need to go through multiple steps to test edge cases, rather than halting at steps until completion like the waterfall model",
                    "Spiral Model",
                    "-Go through waterfall model numerous times",

                    "Vertical Decomposition",
                    "-Decomposition according to layers of abstraction",
                    "-Can be done top-down (starting with requirements) or bottom-up (abstracting away from implementation details",

                    "Horizontal Decomposition",
                    "-Within a layer of abstraction, consider additional functionality and adapt existing artifacts",

                    "Modelling",
                    "-Abstraction of something else for some cognitive purpose",
                    "--Abstracting objects involve leaving out unnecessary details",
                    "-Allows us to use something simpler, safer, or cheaper than the reality",
                    "-Used to better understand a system",
                    "--For an observer A, M is a model of an object O, if M helps A to answer questions about O (Minsky)",
                    "-Can be used to represent something not yet existing",

                    "Model-Driven Engineering",
                    "-Models are at the center of the development",
                    "-Models are built representing different views using different formalisms (ie languages, levels of abstraction), for different purposes",
                    "-Models are connected by model transformations",
                    "--High-level specifications are refined, combined, and transformed to include more solution details until the produced models can be executed",
                    "-Tools are important in effectively creating, manipulating, and transforming models"
                );

                lectureSection(4, '2017/09/18',
                    "Black-box – matches user view of system: input & output with an abstract implementation",
                    "Use cases force one to look at normal & exceptional behaviours & can help formulate system tests",
                    "Actors",
                    "-Represent a role that an <b>external</b> entity (user, hardware, etc) plays in interacting with the system",
                    "-Categories",
                    "--Primary – has a goal; obtains value from system",
                    "--Secondary – actor with which the system has a goal; supports 'creating value' for other actors",
                    "--Facilitator – used by primary/secondary actor to communicate with system",
                    "-Role – set of characteristic needs, interests, expectations, behaviours, responsibilities "
                );

                lectureSection(5, '2017/09/20',
                    "Use Case Guidelines",
                    "-Use the word system in base cases!",
                    "-Limit each point to one interaction; more interactions can be added as subroutines",
                    "-Leave out unnecessary details (eg elevator goes to floor 9)"
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
