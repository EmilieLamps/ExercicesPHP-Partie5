<?php
$page = 'Exercice 10' ; // Définir la variable pour changer le titre !
$message = '';
$counties ['02'] = 'Aisne';
$counties ['59'] = 'Nord';
$counties ['60'] = 'Oise';
$counties ['62'] = 'Pas-de-Calais';
$counties ['80'] = 'Somme';
foreach ($counties as $countyNum => $county) {
  $message = 'Le département ' .$county. ' a le numéro ' .$countyNum.;
}
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 10</h2>
 <h3 class="text-center pb-5">Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.
Cela pourra être, par exemple, de la forme : "Le département" + nom du département + "a le numéro" + numéro du département</h3>
<p><?= $message ?></p>
<?php
include '../footer.php';
?>
