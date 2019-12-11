<?php
$page = "Exercice 2"; // Définir la variable pour changer le titre !
$months = array('janvier' , 'février' , 'mars' , 'avril' , 'mai' , 'juin' , 'juillet' , 'aout' , 'septembre' , 'octobre' , 'novembre' , 'décembre');
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 2</h2>
 <h3 class="text-center pb-5">Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.</h3>
<p><?= $months[2] ?></p>
<?php
include '../footer.php';
?>
