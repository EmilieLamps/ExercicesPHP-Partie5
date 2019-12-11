<?php
$page = "Exercice 3"; // Définir la variable pour changer le titre !
$months = array('janvier' , 'février' , 'mars' , 'avril' , 'mai' , 'juin' , 'juillet' , 'aout' , 'septembre' , 'octobre' , 'novembre' , 'décembre');
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 3</h2>
 <h3 class="text-center pb-5">Avec le tableau de l'exercice , afficher la valeur de l'index 5.</h3>
<p><?= $months[5] ?></p>
<?php
include '../footer.php';
?>
