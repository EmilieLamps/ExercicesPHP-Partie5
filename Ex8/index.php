<?php
$page = "Exercice 8"; // Définir la variable pour changer le titre !
$months = array('janvier' , 'février' , 'mars' , 'avril' , 'mai' , 'juin' , 'juillet' , 'aout' , 'septembre' , 'octobre' , 'novembre' , 'décembre');
foreach ($months as $month) {
}
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 8</h2>
 <h3 class="text-center pb-5">Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.</h3>
<p><?= $month ?></p>
<?php
include '../footer.php';
?>
