<?php
$page = "Exercice 9"; // Définir la variable pour changer le titre !
$counties ['02'] = 'Aisne';
$counties ['59'] = 'Nord';
$counties ['60'] = 'Oise';
$counties ['62'] = 'Pas-de-Calais';
$counties ['80'] = 'Somme';
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 9</h2>
 <h3 class="text-center pb-5">Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau</h3>
<?php foreach ($counties as $county) {} ?>
<p><?= $county ?></p>
<?php
include '../footer.php';
?>
