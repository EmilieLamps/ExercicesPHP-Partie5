<?php
$page = "Exercice 6"; // Définir la variable pour changer le titre !
$departments ['02'] = 'Aisne';
$departments ['59'] = 'Nord';
$departments ['60'] = 'Oise';
$departments ['62'] = 'Pas-de-Calais';
$departments ['80'] = 'Somme';
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 6</h2>
 <h3 class="text-center pb-5">Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.</h3>
<p><?= $departments['59'] ?></p>
<?php
include '../footer.php';
?>
