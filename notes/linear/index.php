<!DOCTYPE html>
<html lang="en">

<?php
include("../../include/config.php");
$n_key = "Linear Algebra";
$page_title = "$n_key Notes";
$page_description = "$n_key Notes";
$navFrom = 'n_linalg';
$navTo = 'common';
$theme_color = "#F44336"; //red
$hamburger_menu_color="#ffffff";
phpHeader(); ?>

<body>
<?php
mathJax();
?>
<script type="text/x-mathjax-config">
MathJax.Hub.Config({
  displayAlign: "left",
  displayIndent: "2em"
});


</script>
<?php phpNav(); ?>

<main>

    <?php
    banner('calc_header.jpg', 133);

    function bullet()
    {
        echo '\\\\\quad\bullet\quad';
    }

    ?>

    <div class="container">
        <div class="section">
            <div class="row" id="common">
                <h5 class="header center">Common</h5>
                <p>$$
                    a \cdot b = a_1b_1 + a_2b_2 + a_3b_3 + ... + a_nb_n
                    <?php bullet() ?> a \cdot b = |a||b|cos\theta
                    $$</p>
                <p>$$
                    For\,a = \langle a_1, a_2, a_3\rangle\,and\,b = \langle b_1, b_2, b_3\rangle
                    \rightarrow a \times b = \langle a_2b_3 - a_3b_2, a_3b_1 - a_1b_3, a_1b_2, a_2b_1\rangle
                    <?php bullet() ?> \text{Only for 3D vectors}
                    $$</p>
            </div>
            <table class="h5 highlight">
                <?php
                table_header_full('Distances', 3);
                math_table_left('\text{Point-Point}', '|\overrightarrow{PQ}|', '\text{* In these cases, }|\overrightarrow{v}| \text{ implies } ||\overrightarrow{v}||');
                math_table_left('\text{Point-Plane}', '\dfrac{|\overrightarrow{PQ}\,\cdot\,n|}{|n|}', '\text{P is the point, Q is some point on the plane, and n is the normal vector of that plane}');
                math_table_left('\text{Point-Line}', '\dfrac{|(\overrightarrow{PQ}) \times u|}{|u|}', '\text{P is the point and the line } \overrightarrow{r}(t) = Q + t\overrightarrow{u}');
                math_table_left('\text{Line-Line}', '\dfrac{|(\overrightarrow{PQ}) \cdot (u \times v)|}{|u \times v|}', '\overrightarrow{r}(t) = Q + t\overrightarrow{u} \quad\&\quad \overrightarrow{s}(t) = P + t\overrightarrow{v}');
                math_table_left('\text{Plane-Plane}', '\dfrac{|e - d|}{|n|}', '\text{If} \quad n \cdot x = d \quad\&\quad n \cdot x = e \quad \text{are parallel; otherwise it would be 0}')
                ?>
            </table>
        </div>
    </div>
</main>
<?php phpFooter(); ?>
</body>

</html>
