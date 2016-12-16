<!DOCTYPE html>
<html lang="en">

<?php
include("../../include/config.php");
$n_key = "Physiology";
$page_title = "$n_key Notes";
$page_description = "$n_key Notes";
$navFrom = 'n_phgy';
$navTo = 'common';
$theme_color = "#F44336"; //red
phpHeader(); ?>

<body>

<?php phpNav(); ?>

<main>
    <div class="container"><br>
        <h2>Physiology 209</h2>
        <div class="row">
            <div class="col s12 m9 l10">
                <div id="water" class="section scrollspy">
                    <h5>H<sub>2</sub>O</h5>
                    <div class="dynamic-notes">
                        <ul class="browser-default">
                            <li class="top normal">45% - 75%</li>
                            <li class="top normal">Key solvent; where metabolic reactions take place</li>
                            <li class="top normal">Variation by body composition
                                <ul class="browser-default">
                                    <li class="mid extra"><strong>Skin</strong>70%</li>
                                    <li class="mid extra"><strong>Muscle</strong>75%</li>
                                    <li class="mid extra"><strong>Organs - Heart, liver, brain, kidney</strong>70-80%
                                    </li>
                                    <li class="mid extra"><strong>Fat (adipose tissue)</strong>10%</li>
                                </ul>
                            </li>
                            <li class="top normal">Water & solid content are about the same in everyone, but the water
                                percentage varies due to the varying fat mass
                            </li>
                            <li class="top extra">Variation with age and gender
                                <ul class="browser-default">
                                    <li class="mid extra"><strong>Baby</strong>75%</li>
                                    <li class="mid extra"><strong>Female : Male (body fat variation)</strong>50% : 60%
                                    </li>
                                    <li class="mid extra"><strong>Seniors Female : Male</strong>45% : 50%</li>
                                    <li class="mid extra">Body water content is greater in infants and males</li>
                                </ul>
                            </li>
                            <li class="top normal">Significant for water-soluble medications (final concentration in
                                body)
                            </li>
                            <li class="top normal">In <b>dynamic steady state</b> – individual & environment, and
                                amongst internal components
                            </li>
                            <li class="top normal">Water balance
                                <ul class="browser-default">
                                    <li class="mid normal">Intake – fluids, foods, oxidative water from metabolism
                                        <ul class="browser-default">
                                            <li class="low extra">(C<sub>6</sub>H<sub>12</sub>O<sub>6</sub> +
                                                6O<sub>2</sub> &rarr; 6CO<sub>2</sub> + 6H<sub>2</sub>O + energy)
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mid normal">Output – insensible (lungs, skin), kidneys (balancer), stool
                                        <ul class="browser-default">
                                            <li class="low extra">Insensible – not noticeable, unavoidable</li>
                                        </ul>
                                    </li>
                                    <li class="mid normal">Obligatory vs facultative losses
                                        <ul class="browser-default">
                                            <li class="low normal">Obligatory – 1.5L/day
                                                <ul class="browser-default">
                                                    <li class="low extra">Insensible: 1.0L</li>
                                                    <li class="low extra">Urine + stool: 0.5L</li>
                                                </ul>
                                            </li>
                                            <li class="low normal">Facultative – vary with intake
                                                <ul class="browser-default">
                                                    <li class="low extra">Urine – kidney is major homeostatic organ</li>
                                                </ul>
                                            </li>
                                            <li class="mid normal">Insensible perspiration
                                                <ul class="browser-default">
                                                    <li class="low extra">Pure water</li>
                                                    <li class="low extra">Passive evaporation (affected by
                                                        environment)
                                                    </li>
                                                    <li class="low extra">Entire skin surface</li>
                                                    <li class="low extra">Continuous</li>
                                                </ul>
                                            </li>
                                            <li class="mid normal">Sweating
                                                <ul class="browser-default">
                                                    <li class="low extra">Electrolyte solution</li>
                                                    <li class="low extra">Active secretion</li>
                                                    <li class="low extra">Sweat glands</li>
                                                    <li class="low extra">Activated by heavy work/high temp</li>
                                                </ul>
                                            </li>
                                            <li class="top normal">Volume relatively constant – helps maintain solute
                                                concentration & blood volume/pressure
                                            </li>
                                            <li class="top normal">Negative water balance
                                                <ul class="browser-default">
                                                    <li class="mid extra">Reduced intake</li>
                                                    <li class="mid extra">Excessive loss from gut</li>
                                                    <li class="mid extra">Excessive sweating</li>
                                                    <li class="mid extra">Excessive loss of expired air (dry air)</li>
                                                    <li class="mid extra">Excessive loss of urine</li>
                                                </ul>
                                            </li>
                                            <li class="top normal">Water 'intoxication' (positive water balance)
                                                <ul class="browser-default">
                                                    <li class="mid extra">Excessive intake</li>
                                                    <li class="mid extra">Renal system failure</li>
                                                </ul>
                                            </li>
                                            <li class="top extra">Average male is regarded as 70kg</li>
                                            <li class="top normal">Body water compartments – 60% of body mass</li>
                                            <li class="top normal">Water is freely moving; compartments are not rigidly
                                                isolated chambers
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="icf" class="section scrollspy">
                    <h5>Intracellular Fluid (ICF)</h5>
                    <div class="dynamic-notes">
                        <ul class="browser-default">
                            <li class="top normal">Body water compartments – 60% of body mass</li>
                            <li class="top normal">Aggregate of fluid bound by internal surface of cell membranes</li>
                        </ul>
                    </div>
                </div>
                <div id="ecf" class="section scrollspy">
                    <h5>Extracellular Fluid (ECF)</h5>
                    <div class="dynamic-notes">
                        <ul class="browser-default">
                            <li class="top normal">1/3 of body water compartments</li>
                            <li class="top normal">Major subcompartments
                                <ul class="browser-default">
                                    <li class="mid normal">Plasma – fluid medium in which blood cells are suspended
                                        <ul class="browser-default">
                                            <li class="low normal">25% of ECF, 5% of total body water compartments</li>
                                        </ul>
                                    </li>
                                    <li class="mid normal">Interstitial Fluid(ISF)
                                        <ul class="browser-default">
                                            <li class="low normal">75% of ECF, 15% of total body water compartments</li>
                                            <li class="low extra">True 'Milieu Intérieur'</li>
                                            <li class="low extra">Percolates between individual cells</li>
                                        </ul>
                                    </li>
                                    <li class="top normal">Minor subcompartments
                                        <ul class="browser-default">
                                            <li class="mid normal">Lymph
                                                <ul class="browser-default">
                                                    <li class="low extra">Lymphatic system – network of blind - ended
                                                        terminal tubules
                                                        <ul class="browser-default">
                                                            <li class="low extra">Coalesce to form larger lymphatic
                                                                vessels -> converge to large lymphatic ducts which drain
                                                                into large veins in chest
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="low extra">1 – 2% of ECF</li>
                                                </ul>
                                            </li>
                                            <li class="mid normal">Transcellular fluid
                                                <ul class="browser-default">
                                                    <li class="low extra">Aggregate of small fluid volumes secreted by
                                                        specific cells into a number of body cavities(lined by
                                                        epithelial cells) & having specialized functions
                                                    </li>
                                                    <li class="low extra"><1 – 2% of ECF</li>
                                                    <li class="low extra">Intraocular, cochlear, cerebrospinal, pleural
                                                        & pericardial, peritoneal, synovial, fluid in ducts of glands,
                                                        bladder, etc
                                                    </li>
                                                    <li class="low extra">Does not affect body fluid balance; very
                                                        local; however, has important functions
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col hide-on-small-only m3 l2">
                <div class="pinned">
                    <div class="switch">
                        <label>
                            Collapse
                            <input type="checkbox" onchange="toggleNoteView(this)" checked>
                            <span class="lever red-tint"></span>
                            Expand
                        </label>
                    </div>
                    <ul class="section table-of-contents">
                        <li><a href="#water">H<sub>2</sub>O</a></li>
                        <li><a href="#icf">Intracellular Fluid</a></li>
                        <li><a href="#ecf">Extracellular Fluid</a></li>
                    </ul>
                </div>
            </div>
        </div>

</main>
<script>

</script>

<?php phpFooter(); ?>
</body>

</html>
